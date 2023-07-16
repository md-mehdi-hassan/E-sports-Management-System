<?php
include("data_class.php");

$deletecoach=$_GET['coachriddelete'];


$obj=new data();
$obj->setconnection();
$obj->deletecoachdata($deletecoach);