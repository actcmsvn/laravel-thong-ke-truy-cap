<?php

namespace ACTCMS\Analytics\Service;

use ACTCMS\Analytics\Traits\Google\DateRangeTrait;
use ACTCMS\Analytics\Traits\Google\DimensionTrait;
use ACTCMS\Analytics\Traits\Google\FilterByTrait;
use ACTCMS\Analytics\Traits\Google\MetricAggregationTrait;
use ACTCMS\Analytics\Traits\Google\MetricTrait;
use ACTCMS\Analytics\Traits\Google\MinuteRangeTrait;
use ACTCMS\Analytics\Traits\Google\OrderByTrait;
use ACTCMS\Analytics\Traits\Google\RowConfigTrait;
use ACTCMS\Analytics\Traits\ResponseFormatterTrait;

class GoogleAnalyticsService
{
    use DateRangeTrait,
        DimensionTrait,
        FilterByTrait,
        MetricAggregationTrait,
        MetricTrait,
        MinuteRangeTrait,
        OrderByTrait,
        ResponseFormatterTrait,
        RowConfigTrait;
}
