<?php
require_once 'autoload.php';
$db=new DB();
$insertdata=[
    'name'=>$_POST['addjf']
];

if($db->insert('jobfunction',$insertdata)){
    header('Location:../admin/Job_function_view.php');
}
?>
