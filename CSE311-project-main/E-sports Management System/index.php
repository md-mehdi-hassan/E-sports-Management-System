<?php

 $Plemailmsg="";
 $Plpasdmsg="";
 $msg="";

 $Coachemailmsg="";
 $Coachpasdmsg="";

 $Ownemailmsg="";
 $Ownpasdmsg="";

 $Manemailmsg="";
 $Manpasdmsg="";


 if(!empty($_REQUEST['Manemailmsg'])){
    $Manemailmsg=$_REQUEST['Manemailmsg'];
 }

 if(!empty($_REQUEST['Manpasdmsg'])){
    $Manpasdmsg=$_REQUEST['Manpasdmsg'];
 }

 if(!empty($_REQUEST['Coachemailmsg'])){
    $Coachemailmsg=$_REQUEST['Coachemailmsg'];
 }

 if(!empty($_REQUEST['Coachpasdmsg'])){
    $Coachpasdmsg=$_REQUEST['Coachpasdmsg'];
 }

 if(!empty($_REQUEST['Ownemailmsg'])){
    $Ownemailmsg=$_REQUEST['Ownemailmsg'];
 }

 if(!empty($_REQUEST['Ownpasdmsg'])){
    $Ownpasdmsg=$_REQUEST['Ownpasdmsg'];
 }

 if(!empty($_REQUEST['Plemailmsg'])){
    $Plemailmsg=$_REQUEST['Plemailmsg'];
 }

 if(!empty($_REQUEST['Plpasdmsg'])){
  $Plpasdmsg=$_REQUEST['Plpasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-sports Mangement System</title>
    <meta name="discription" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style1.css">


</head>
<body>
<h1 style="color:#000000; font-size:50px;">E-Sports</h1>
<h>Management System</h>

<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
                <div class="col-sm-3 login-form-1">
                    <h3>Player Login</h3>
                    <form action="loginplayer_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $Plemailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $Plpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 login-form-2">
                    <h3>Manager Login</h3>
                    <form action="loginmanager_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:white">*<?php echo $Manemailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:white">*<?php echo $Manpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 login-form-1">
                    <h3>Owner Login</h3>
                    <form action="loginowner_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $Ownemailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $Ownpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 login-form-2">
                    <h3>Coach Login</h3>
                    <form action="logincoach_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:white">*<?php echo $Coachemailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:white">*<?php echo $Coachpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    <script src="" async defer></script>
</body>
</html>