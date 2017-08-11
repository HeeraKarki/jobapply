<?php
session_start();
$base_url="http://" . $_SERVER['SERVER_NAME']."/".get_string_between($_SERVER['REQUEST_URI'],"/",'/')."/";
function __autoload($class){
    require_once "source/$class.php";
}

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

