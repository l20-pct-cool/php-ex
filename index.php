<?php
switch (true) {
    case !isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']):
    case $_SERVER['PHP_AUTH_USER'] !== 'test':
    case $_SERVER['PHP_AUTH_PW']   !== 'test':
        header('WWW-Authenticate: Basic realm="Enter username and password."');
        header('Content-Type: text/plain; charset=utf-8');
        die('このページを見るにはログインが必要です');
}
header('Content-Type: text/html; charset=utf-8');
?>
test
