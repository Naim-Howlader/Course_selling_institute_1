<?php

require('db/user.php');
$obj = new User();
if($_GET['id']){
    $deletedata = $obj->deleteData('demo_class',$_GET['id']);
}
if($_GET['pid']){
    $deletedata = $obj->deletePurchaseData('purchase_course',$_GET['pid']);
}


?>