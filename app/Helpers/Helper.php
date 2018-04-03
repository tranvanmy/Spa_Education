<?php

if (!function_exists('fieldLanguage')) {
    function fieldLanguage($filed) {
        return $filed . '_' . config('app.locale');
    }
}

function timeEvent($start, $end)
{
    $startDate =  date_create($start);
    $endDate =  date_create($end);
    return date_format($startDate,"j/n/Y G:i") . '-' . date_format($endDate,"H:i");
}
