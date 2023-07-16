<?php

include("data_class.php");
$login_email = $_GET['login_email'];
$login_pasword=$_GET['login_pasword'];

if($login_email == null || $login_pasword == null) {

    $emailmsg="";
    $pasdmsg="";

    if($login_email== null){
        $emailmsg ="Email Empty";
    }

    if($login_pasword==null){
        $pasdmsg ="Password Empty";
    }

    header("Location:index.php?Manemailmsg=$eamilmsg&Manpasdmsg=$pasdmsg");   /* back to the page */
}

elseif($login_email!=null&&$login_pasword!=null){

    $obj = new data();
    $obj->setconnection();
    $obj->ownerLogin($login_email,$login_pasword);
}