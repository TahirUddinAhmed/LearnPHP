<?php

/**
 * Redirect function
 *
 * @param [string] $url
 * @return void
 */
function redirect($url) {
    header("Location: {$url}");
    exit();
}