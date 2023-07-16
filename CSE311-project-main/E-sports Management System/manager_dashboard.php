<?php

include("data_class.php");
session_start();

//  $_SESSION['email'];



// print_r($managerid);
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
        <title>Manager Dashboard</title>
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

                    <button class="redbttn">MANAGER</button>
                    <button class="redbttn" onclick="openpart('addgame')">ADD GAME</button>
                    <button class="redbttn" onclick="openpart('games')">
                        GAMES</button>
                    <button class="redbttn" onclick="openpart('addplayer')">
                        ADD PLAYER</button>
                    <button class="redbttn" onclick="openpart('viewplayer')">
                        VIEW PLAYER</button>
                    <button class="redbttn" onclick="openpart('addcoach')">
                        ADD COACH</button>
                    <button class="redbttn" onclick="openpart('viewcoach')">
                        VIEW COACH</button>
                    <button class="redbttn" onclick="openpart('tournament_schedule')">
                    TOURNAMENT SCHEDULE</button> 
                    <button class="redbttn" onclick="openpart('tournamentdate')">
                        TOURNAMENT</button>

                        <a href="index.php"><button class="redbttn">LOGOUT</button></a>

                </div>


                 <!-- add palyer section -->
                

                <div class="rightinnerdiv">
                    <div id="addplayer" class="innerright portion" style="display:none">
                        <button class="redbttn">ADD PLAYER</button>
                        <form action="addplayerserver.php" method="post">
                            <label>Name:</label><input type="text" name="addname"/></br></br>
                       
                        <label>Password:</label><input type="password" name="addpass"/>
                    </br>
                    </br>
                   
                    <label>Email:</label><input type="email" name="addemail"/>
                </br>
                </br>
                
                <label for="typw">Choose type:</label>
                <select name="type">
                    <option value="International_player">International player</option>
                    <option value="Local_player">Local player</option>
                    </select>
                    </br>
                    </br>
                    <input type="submit" value="SUBMIT"/>
                </form>
                </div>
                </div>


               <!-- view player  -->

               <div class="rightinnerdiv">
                    <div id="viewplayer" class="innerright portion" style="display:none">
                        <button class="redbttn">VIEW PLAYER</button>

            <?php
            $u = new data();
            $u->setconnection();
            $u->playerdata();
            $recordset=$u->playerdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'> Name</th><th>Email</th><th>Type</th><th>Delete</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deleteplayer.php?playeriddelete=$row[0]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
               
                $table.="</tr>";
                
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>
               
                <!-- add coach section -->

                <div class="rightinnerdiv">
                    <div id="addcoach" class="innerright portion" style="display:none">
                        <button class="redbttn">ADD COACH</button>
                        <form action="addcoachserver.php" method="post" enctype="multipart/form-data">
                            <label>Name:</label><input type="text" name="addname"/>
                        </br>
                        </br>
                        <label>Password:</label><input type="password" name="addpass"/>
                    </br>
                    </br>
                    <label>Email:</label><input type="email" name="addemail"/>
                </br>
                </br>
                <label for="typw">Choose type:</label>
                <select name="type">
                    <option value="International_coach">International coach</option>
                    <option value="Local_coach">Local coach</select>
                    </br>
                    </br>

                    <input type="submit" value="SUBMIT"/>
                </form>
                </div>
                </div>

                  <!-- view coach  -->

               <div class="rightinnerdiv">
                    <div id="viewcoach" class="innerright portion" style="display:none">
                        <button class="redbttn">VIEW COACH</button>

            <?php
            $u = new data();
            $u->setconnection();
            $u->coachdata();
            $recordset=$u->coachdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'> Name</th><th>Email</th><th>Type</th><th>Delete</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='deletecoach.php?coachriddelete=$row[0]'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
               
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

             
                <!-- add game section -->

                <div class="rightinnerdiv">   
            <div id="addgame" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="redbttn" >ADD NEW GAME</Button>
            <form action="addgameserver.php" method="post" enctype="multipart/form-data">
            <label>Game Name:</label><input type="text" name="addgamename"/></br></br>
            <label>Detail:</label><input  type="text" name="addgamedetail"/></br></br>
            <label>Developer:</label><input type="text" name="addgamedeveloper"/></br></br>
            <label>Game Photo</label><input  type="file" name="addgamephoto"/></br>
            </br>
   
            <input type="submit" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>
         <!-- game section -->

         <div class="rightinnerdiv">   
            <div id="games" class="innerright portion" style="display:none">
            <Button class="redbttn">GAMES</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->gamedata();
            $recordset=$u->gamedata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'>Game Name</th><th>Detail</th><th>Developer</th><th>View</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td><a href='manager_dashboard.php?viewid=$row[0]'><button type='button' class='btn btn-danger'>View Game</button></a></td>";
                // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

       <!-- view game  -->

       <div class="rightinnerdiv">   
            <div id="games" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <Button class="redbttn" >GAME DETAIL</Button>
</br>
<?php
            $u=new data;
            $u->setconnection();
            $u->gamedetail($viewid);
            $recordset=$u->gamedetail($viewid);
            foreach($recordset as $row){

                
               $gameimg= $row[1];
               $gamename= $row[2];
               $gamedetail= $row[3];
               $gamedeveloper= $row[4];
              

            }            
?>

            <img width='200px' height='200px' style='border:1px solid #333333; float:left;margin-left:20px' src="upimage/<?php echo $gameimg?> "/>
            </br>
            <p style="color:black"><u>Book Name:</u> &nbsp&nbsp<?php echo $gamename?></p>
            <p style="color:black"><u>Book Detail:</u> &nbsp&nbsp<?php echo $gamedetail ?></p>
            <p style="color:black"><u>Book Developer:</u> &nbsp&nbsp<?php echo $gamedeveloper ?></p>
            

            </div>
            </div>

            <!-- tournament date  -->

            <div class="rightinnerdiv">   
            <div id="tournament_schedule" class="innerright portion" style="display:none">
            <Button class="redbttn" >Tournament Record</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->tournamentschedule();
            $recordset=$u->tournamentschedule();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid #ddd;
            padding: 8px;'>Player name</th><th>Game Name</th><th>Player type</th><th>Date</th></th><th>Salary</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

         
            <!-- tournament date  -->

            <div class="rightinnerdiv">   
            <div id="tournamentdate" class="innerright portion" style="display:none">
            <Button class="redbttn" >Tournamnet</Button>
            <form action="tournamnet_server.php" method="post" enctype="multipart/form-data">
            <label for="games">Choose Game:</label>
            <select name="games" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->gettournamnet();
            $recordset=$u->gettournamnet();
            foreach($recordset as $row){

                echo "<option value='". $row[2] ."'>" .$row[2] ."</option>";
        
            }            
            ?>
            </select>

            <label for="Select Player">:</label>
            <select name="playerselect" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->playerdata();
            $recordset=$u->playerdata();
            foreach($recordset as $row){
               $id= $row[0];
                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
            }            
            ?>
            </select>
<br>
            Date<input type="date" name="date"/>

            salary<input type="number" name="salary"/>



            <input type="submit" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="gamedetail" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <Button class="redbttn" >GAME DETAIL</Button>
</br>
            


    </div>
    <script>
        function openpart(portion) {
            var i;
            var x = document.getElementsByClassName("portion");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document
                .getElementById(portion)
                .style
                .display = "block";
        }
    </script>

</body>
</html>

