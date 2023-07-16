<?php

include("data_class.php");
// session_start();

// $playerloginid=$_SESSION["id"] = $_GET['playerlogid'];
// // // echo $_SESSION["userid"];


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <link rel="stylesheet" href="">
        <title>Player Dashboard</title>
    </head>
    <style>
        .imglogo {
            margin: auto;
        }

        .innerdiv {
            text-align: center;
        }
        .leftinnerdiv {

            float: left;
            width: 10%;

        }

        .rightinnerdiv {
            float: right;
            width: 90%;
        }

        .redbttn {
            background-color: rgb(161, 0, 0);
            color: white;
            width: 100%;
            height: 40px;
            margin-top: 0;
        }
    </style>


    <body>


           <div class="container">
            <div class="row"><img class="imagelogo" src="image/E_sports_system.jpg"></div>
            <div class="innerdiv">
            <div class="leftinnerdiv">
                <Button class="redbttn" >Welcome</Button>
                <Button class="redbttn" onclick="openpart('myaccount')"> My Account</Button>
                
                <a href="index.php"><button class="redbttn">LOGOUT</button></a>
            </div>


            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="redbttn">My Account</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->playerdetail();
            $recordset=$u->playerdetail();
            foreach($recordset as $row){

            $id= $row[0];
            $name= $row[1];
            $email= $row[2];
            $pass= $row[3];
            $type= $row[4];
            }               
                ?>

            <p style="color:black"><u>Person Name:</u> &nbsp&nbsp<?php echo $name ?></p>
            <p style="color:black"><u>Person Email:</u> &nbsp&nbsp<?php echo $email ?></p>
            <p style="color:black"><u>Account Type:</u> &nbsp&nbsp<?php echo $type ?></p>
        
            </div>
            </div>


        </div>
        </div>


        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
       </script>


    </body>
</html>