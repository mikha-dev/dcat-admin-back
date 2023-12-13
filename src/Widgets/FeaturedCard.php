<?php

namespace Dcat\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;

class FeaturedCard extends Widget
{
    protected $view = 'admin::widgets.card-featured';

    protected ?string $title = null;
    protected ?string $icon = null;
    protected array $footerItems = [];
    protected array $features = [];
    protected bool $fullHeight = false;

    public function __construct(?string $title = null)
    {
        $this->title($title);
    }

    public function icon(string|Renderable|\Closure  $icon) : FeaturedCard
    {
        $this->icon = $this->toString($icon);

        return $this;
    }

    public function fullHeight(bool $value = true) : FeaturedCard
    {
        $this->fullHeight = $value;

        return $this;
    }

    public function addFeature(string|Renderable|\Closure  $content) : FeaturedCard
    {
        $this->features[] = $this->toString($content);

        return $this;
    }

    public function footerAddElement(string|Renderable|\Closure  $content) : FeaturedCard
    {
        $this->footerItems[] = $this->toString($content);;

        return $this;
    }

    public function title(string $title) : FeaturedCard
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultVariables()
    {
        return [
            'title'      => $this->title,
            'icon'      => $this->icon,
            'features'     => $this->features,
            'footerItems'     => $this->footerItems,
            'class' => $this->getHtmlAttribute('class'),
            'style' => $this->getHtmlAttribute('style'),
            'fullHeight' => $this->fullHeight,
        ];
    }
}
