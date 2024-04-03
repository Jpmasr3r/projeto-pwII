<?php

function url(string $path = null): string
{
    if ($path) {
        return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }
    // if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
    // }

    return CONF_URL_TEST;

}