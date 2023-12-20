<?php

namespace Dcat\Admin\Widgets;

use D4T\Core\Enums\GrowingPerdiodType;
use Dcat\Admin\Widgets\Metrics\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

abstract class GrowingBase extends Line
{

    abstract public function loadRecords(GrowingPerdiodType $period): Collection;

    protected function init()
    {
        parent::init();

        $this->dropdown(GrowingPerdiodType::map());
    }

    public function handle(Request $request)
    {
        $period = GrowingPerdiodType::from($request->get('option') ?? GrowingPerdiodType::ALL->value);

        $records = $this->loadRecords($period);

        $percent = 0;
        if ($records->last() != 0)
            $percent = number_format(100 * ($records->last() - $records->first()) / $records->last(), 2);

        $isGrowing = $records->last() >= $records->first();

        $last = is_null($records->last()) ? 0 : $records->last();

        $this->withContent($last, $percent, $isGrowing);

        $this->withChart($records->values()->toArray());
    }

    public function withChart(array $data)
    {
        return $this->chart([
            'series' => [
                [
                    'name' => __('admin.count'),
                    'data' => $data,
                ],
            ],
        ]);
    }

    public function withContent(int $last, float $percent, bool $isGrowing)
    {
        $color = $isGrowing ? 'success' : 'danger';
        $iconDirection = $isGrowing ? '<i class="feather icon-trending-up"></i>' : '<i class="feather icon-trending-down"></i>';

        //         $this->content(
        //             <<<HTML

        // HTML
        //         );

        return $this->header(
            <<<HTML
        <h2 class="ml-1 font-lg-1">{$last}</h2>
        <span class="text-{$color}">
            $iconDirection&nbsp;{$percent}%
        </span>
HTML
        );
    }
}
