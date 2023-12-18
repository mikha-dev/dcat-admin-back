<?php

namespace Dcat\Admin\Extend;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

/**
 * @property \Symfony\Component\Console\Output\OutputInterface $output
 */
trait CanImportMenu
{
    protected $menu = [];
    protected array $permissions = [];

    protected $menuValidationRules = [
        'permission_slug'  => 'required',
        'parent' => 'nullable',
        'title'  => 'required',
        'uri'    => 'nullable',
        'icon'   => 'nullable'
    ];

    protected $permissionValidationRules = [
        'slug'  => 'required',
        'name' => 'required',
        'path'  => 'required'
    ];

    protected function menu(): array
    {
        return $this->menu;
    }

    protected function permissions(): array
    {
        return $this->permissions;
    }

    /**
     * 添加菜单.
     *
     * @param  array  $menu
     *
     * @throws \Exception
     */
    protected function addMenu(array &$menu = [])
    {
        if (!Arr::isAssoc($menu)) {
            foreach ($menu as &$v) {
                $this->addMenu($v);
            }

            return;
        }

        if (!$this->validateMenu($menu)) {
            return;
        }

        if ($menuModel = $this->getMenuModel()) {
            $lastOrder = $menuModel::max('order');

            $item = $menuModel::create([
                'parent_id' => $this->getParentMenuId($menu['parent'] ?? 0),
                'order'     => $lastOrder + 1,
                'title'     => $menu['title'],
                'icon'      => (string) ($menu['icon'] ?? ''),
                'uri'       => (string) ($menu['uri'] ?? ''),
                'extension' => $this->getName(),
            ]);

            $menu['id'] = $item->id;
        }
    }

    protected function addPermission(array &$permission = [])
    {

        if (!Arr::isAssoc($permission)) {
            foreach ($permission as &$v) {
                $this->addPermission($v);
            }

            return;
        }

        if (!$this->validatePermission($permission)) {
            return;
        }

        if ($model = $this->getPermissionsModel()) {
            $lastOrder = $model::max('order');

            $item = $model::updateOrCreate(
                ['slug'     => $permission['slug']],
                [
                    'parent_id' => $this->getParentPermissionId($permission['parent'] ?? 0),
                    'order'     => $lastOrder + 1,
                    'slug'     => $permission['slug'],
                    'name'     => $permission['name'],
                    'http_path' => $permission['path'],
                ]
            );

            $permission['id'] = $item->id;
        }
    }

    protected function addMenuPermission()
    {
        foreach ($this->menu() as $menu) {
            $menuModel = $this->getMenuModel();
            $permission = collect($this->permissions())->first(function ($permission) use ($menu) {
                return $permission['slug'] == $menu['permission_slug'];
            });

            $menuItem = $menuModel::find($menu['id']);
            $menuItem->permissions()->syncWithoutDetaching($permission['id']);
        }
    }

    /**
     * 刷新菜单.
     *
     * @throws \Exception
     */
    protected function refreshMenu()
    {
        $this->flushMenu();

        $this->addPermission($this->permissions);

        $this->addMenu($this->menu);

        $this->addMenuPermission();
    }

    /**
     * 根据名称获取菜单ID.
     *
     * @param  int|string  $parent
     * @return int
     */
    protected function getParentMenuId($parent)
    {
        if (is_numeric($parent)) {
            return $parent;
        }

        $menuModel = $this->getMenuModel();

        return $menuModel::query()
            ->where('title', $parent)
            ->where('extension', $this->getName())
            ->value('id') ?: 0;
    }

    protected function getParentPermissionId($parent)
    {
        if (is_numeric($parent)) {
            return $parent;
        }

        $model = $this->getPermissionsModel();

        return $model::query()
            ->where('slug', $parent)
            ->value('id') ?: 0;
    }

    protected function flushMenu(): void
    {
        $menuModel = $this->getMenuModel();

        if (!$menuModel) {
            return;
        }

        $menuModel::query()
            ->where('extension', $this->getName())
            ->delete();
    }

    protected function flushPermissions(): void
    {
        $model = $this->getPermissionsModel();

        if (!$model) {
            return;
        }

        $slugs = collect($this->permissions())->pluck('slug');
        $model::query()->whereIn('slug', $slugs)->delete();
    }

    /**
     * 验证菜单字段格式是否正确.
     *
     * @param  array  $menu
     * @return bool
     *
     * @throws \Exception
     */
    public function validateMenu(array $menu)
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($menu, $this->menuValidationRules);

        if ($validator->passes()) {
            return true;
        }

        return false;
    }

    public function validatePermission(array $permission)
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($permission, $this->permissionValidationRules);

        if ($validator->passes()) {
            return true;
        }

        return false;
    }

    protected function getMenuModel()
    {
        return config('admin.database.menu_model');
    }

    protected function getPermissionsModel()
    {
        return config('admin.database.permissions_model');
    }
}
