<?php

require_once __DIR__ . '/functions/read-from-json-path.php';
require_once __DIR__ . '/functions/get-template.php';
require_once __DIR__ . '/functions/get-rate.php';
require_once __DIR__ . '/functions/get-date.php';

date_default_timezone_set('UTC');

define('POLITICS_PATH', 'https://www.reddit.com/r/politics.json');

if (array_key_exists('after', $_GET)) {
    $response = readFromJsonPath(POLITICS_PATH . '?after=' . $_GET['after']);
} else {
    $response = readFromJsonPath(POLITICS_PATH);
}

foreach ($response->data->children as $child) {
    getTemplate('item', ['item' => $child->data]);
}
if ($response->data->after) {
    getTemplate('pagination', ['nextPage' => $response->data->after]);
}

