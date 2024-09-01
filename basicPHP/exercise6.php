<?php
// 6. Write a simple PHP browser detection script.

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    echo $userAgent;
}
