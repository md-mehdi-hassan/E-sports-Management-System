<?php
include("data_class.php");

$delteplayer=$_GET['playeriddelete'];


$obj=new data();
$obj->setconnection();
$obj->deleteplayerdata($deleteplayer);