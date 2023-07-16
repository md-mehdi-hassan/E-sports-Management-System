<?php

include("data_class.php");

$games = $_POST['games'];
$playerselect = $_POST['playerselect'];
$date =$_POST['date'];
$salary =$_POST['salary'];

$obj = new data();
$obj->setconnection();
$obj->tournament($games,$playerselect,$date,$salary);

