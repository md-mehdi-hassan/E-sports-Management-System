<?php

include("data_class.php");

$addgame=$_POST['addgamename'];
$adddetail=$_POST['addgamedetail'];
$addgamedeveloper=$_POST['addgamedeveloper'];
$is_uploaded= move_uploaded_file($_FILES["addgamephoto"]["tmp_name"],"upimage/" . $_FILES["addgamephoto"]["name"]);

if ($is_uploaded) {

  echo "updated";
  $gamepic=$_FILES["addgamephoto"]["name"];

  $obj=new data();
  $obj->setconnection();
  $obj->addgame($gamepic,$addgame,$adddetail,$addgamedeveloper);
} else {
  echo "File not uploaded";
}