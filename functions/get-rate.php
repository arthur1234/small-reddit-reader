<?php

function getRate(int $rate)
{
    if ($rate > 10000000) {
        $rate = substr($rate, 0, 2) . 'm';
    } elseif ($rate > 1000000) {
        $rate = substr($rate, 0, 1) . 'm';
    } elseif ($rate > 100000) {
        $rate = substr($rate, 0, 3) . 'k';
    } elseif ($rate > 10000) {
        $rate = substr($rate, 0, 2) . 'k';
    } elseif ($rate > 1000) {
        $rate = substr($rate, 0, 1) . 'k';
    }

    return $rate;
}
