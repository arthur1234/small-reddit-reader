<?php

function getFormattedDate(int $timestamp): string
{
    $date = new DateTime();
    $date->setTimestamp($timestamp);
    $date->setTimezone(new DateTimeZone('Asia/Jerusalem'));

    return $date->format('d.m.Y G:i');
}
