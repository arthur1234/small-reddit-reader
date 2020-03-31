<?php

function readFromJsonPath($url)
{
    return json_decode(file_get_contents($url));
}
