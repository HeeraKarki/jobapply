<?php
session_start();
$base_url="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
function __autoload($class){
    require_once "source/$class.php";
}

