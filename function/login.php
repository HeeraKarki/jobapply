<?php
require_once 'autoload.php';
$db= new DB();
var_dump($db->getRows('job_function'));