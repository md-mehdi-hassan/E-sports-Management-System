<?php

include("data_class.php");
// session_start();

// $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
// // echo $_SESSION["userid"];


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
        <title>Owner Dashboard</title>
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
                <button class="redbttn" onclick="openpart('addmanager')">ADD MANAGER</button>
                <button class="redbttn" onclick="openpart('viewmanager')">VIEW MANAGER</button>
                
                <a href="index.php"><button class="redbttn">LOGOUT</button></a>
            </div>

                   <!-- my account -->
            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="redbttn">My Account</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->ownerdetail();
            $recordset=$u->ownerdetail();
            foreach($recordset as $row){

                $id= $row[0];
            $name= $row[1];
            $email= $row[2];
            $pass= $row[3];
            
            }               
                ?>



              <p style="color:black"><u>id:</u> &nbsp&nbsp<?php echo $id ?></p>
            <p style="color:black"><u>Person Name:</u> &nbsp&nbsp<?php echo $name ?></p>
            <p style="color:black"><u>Person Email:</u> &nbsp&nbsp<?php echo $email ?></p>
            <p style="color:black"><u>Person password:</u> &nbsp&nbsp<?php echo $pass ?></p>
        
            </div>
            </div>

             <!-- add manager section -->
                

             <div class="rightinnerdiv">
                    <div id="addmanager" class="innerright portion" style="display:none">
                        <button class="redbttn">ADD PLAYER</button>
                        <form action="addmanagerserver.php" method="post">
                            <label>Name:</label><input type="text" name="addname"/></br></br>
                       
                        <label>Password:</label><input type="password" name="addpass"/>
                    </br>
                    </br>
                   
                    <label>Email:</label><input type="email" name="addemail"/>
                </br>
                </br>
                
                <label for="typw">Choose type:</label>
                <select name="type">
                    <option value="manager">Manager</option>
                    
                    </select>
                    </br>
                    </br>
                    <input type="submit" value="SUBMIT"/>
                </form>
                </div>
                </div>


               <!-- view manager  -->

               <div class="rightinnerdiv">
                    <div id="viewmanager" class="innerright portion" style="display:none">
                        <button class="redbttn">VIEW MANAGER</button>
        

            <?php
            $u = new data();
            $u->setconnection();
            $u->manager();
            $recordset=$u->manager();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'> Name</th><th>Email</th><th>Type</th><th>Delete</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deletemanager.php?playeriddelete=$row[0]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
               
                $table.="</tr>";
                
            }
            $table.="</table>";

            echo $table;
            ?>

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