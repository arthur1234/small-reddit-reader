<?php

function getTemplate(string $name, array $vars = [])
{
    extract($vars);

    return include $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $name . '.php';
}
