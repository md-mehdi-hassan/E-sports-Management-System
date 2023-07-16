<?php
include("data_class.php");

$deltemanager=$_GET['manageriddelete'];


$obj=new data();
$obj->setconnection();
$obj->deletemanagerdata($deletemanager);