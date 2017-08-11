<?php
require_once 'autoload.php';
$db=new DB();
$insertlocation=[
    'name'=>$_POST['Location']
];
if($db->insert('location',$insertlocation)){
    header('Location:../admin/location.php');
}