 <?php
 
include("data_class.php");

$addnames=$_POST['addname'];
$addpass=$_POST['addpass'];
$addemail=$_POST['addemail'];
$type=$_POST['type'];


$obj = new data();
$obj->setconnection();
$obj->addnewcoach($addnames,$addpass,$addemail,$type); 