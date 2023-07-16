<?php 
// session_start();
include("database.php");

class data extends database{

    private $gamepic;
    private $gamename;
    private $gamedetail;
    private $gamedeveloper;
    private $type;
    private $salary;
    private $tournamentdate;
    private $playerpic;
    private $coachpic;
    

    function __construct(){
   
        // echo "Working";
        echo "</br></br>";

    }

    function managerLogin($a1,$a2){

        $q ="select * FROM manager WHERE email='$a1' and pass='$a2' ";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();


        if($result > 0){
           foreach($recordSet->fetchAll() as $row){
               $logid=$row['id'];

               $SESSION["managerid"] = $logid;
            header("Location: manager_dashboard.php");
            }
        }
        elseif($result <= 0){

            header("Location: index.php?msg=Invalid login");
        }

    }

    function playerLogin($a1,$a2){

        $q ="select * FROM playerdata WHERE email='$a1' and pass='$a2' ";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();


        if($result > 0){
           foreach($recordSet->fetchAll() as $row){
               $logid=$row['id'];

            header("Location: player_dashboard.php");
            }
        }
        elseif($result <= 0){

            header("Location: index.php?msg=Invalid login");
        }

    }

    function playerdetail(){
        $q ="SELECT * FROM playerdata where";
        $data= $this->connection->query($q);
        return $data;
   }

   function coachLogin($a1,$a2){

    $q ="select * FROM coachdata WHERE email='$a1' and pass='$a2' ";
    $recordSet=$this->connection->query($q);
    $result=$recordSet->rowCount();


    if($result > 0){
       foreach($recordSet->fetchAll() as $row){
           $logid=$row['id'];

        header("Location: coach_dashboard.php");
        }
    }
    elseif($result <= 0){

        header("Location: index.php?msg=Invalid login");
    }

}

   function coachdetail(){
    $q ="SELECT * FROM coachdata";
    $data= $this->connection->query($q);
    return $data;
}

function ownerLogin($a1,$a2){

    $q ="select * FROM ownerdata WHERE email='$a1' and pass='$a2' ";
    $recordSet=$this->connection->query($q);
    $result=$recordSet->rowCount();


    if($result > 0){
       foreach($recordSet->fetchAll() as $row){
           $logid=$row['id'];

        header("Location: owner_dashboard.php");
        }
    }
    elseif($result <= 0){

        header("Location: index.php?msg=Invalid login");
    }

}

   function ownerdetail(){
    $q ="SELECT * FROM ownerdata";
    $data= $this->connection->query($q);
    return $data;
}

function addnewmanager($name,$pasword,$email,$type){
    $this->name=$name;
    $this->pasword=$pasword;
    $this->email=$email;
    $this->type=$type;

    $q="INSERT INTO manager(id, name, email, pass, type)VALUES('','$name','$email','$pasword','$type')";

    if($this->connection->exec($q)) {
        header("Location:owner_dashboard.php?msg=New Addition done");
    }

    else {
        header("Location:onwer_dashboard.php?msg=Register Fail");
    }
    
}

function deletemanagerdata($id){
    $q="DELETE from manager where id='$id'";
    if($this->connection->exec($q)){

       header("Location:manager_dashboard.php?msg=done");
    }
    else{
       header("Location:manager_dashboard.php?msg=fail");
    }
}

    function addnewplayer($name,$pasword,$email,$type){
        $this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        $this->type=$type;

        $q="INSERT INTO playerdata(id, name, email, pass, type)VALUES('','$name','$email','$pasword','$type')";

        if($this->connection->exec($q)) {
            header("Location:manager_dashboard.php?msg=New Addition done");
        }

        else {
            header("Location:manager_dashboard.php?msg=Register Fail");
        }
        
    }

    function playerdata(){
         $q ="SELECT * FROM playerdata";
         $data= $this->connection->query($q);
         return $data;


    }

    

    function deleteplayerdata($id){
        $q="DELETE from playerdata where id='$id'";
        if($this->connection->exec($q)){
    
           header("Location:manager_dashboard.php?msg=done");
        }
        else{
           header("Location:manager_dashboard.php?msg=fail");
        }
    }

   

    function addnewcoach($name,$password,$email,$type){
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
        $this->type=$type;

        $q="INSERT INTO coachdata(id, name, email, pass,type)VALUES('','$name','$email','$password','$type')";

        if($this->connection->exec($q)) {
            header("Location:manager_dashboard.php?msg=New Addition done");
        }

        else {
            header("Location:manager_dashboard.php?msg=Register Fail");
        }
        
    }

    function coachdata(){
        $q ="SELECT * FROM coachdata";
        $data= $this->connection->query($q);
        return $data;


   }

   function deletecoachdata($id){
       $q="DELETE from coachdata where id='$id'";
       if($this->connection->exec($q)){
   
          header("Location:manager_dashboard.php?msg=done");
       }
       else{
          header("Location:manager_dashboard.php?msg=fail");
       }
   }

    function addgame($gamepic,$gamename,$gamedetail,$gamedeveloper){

        $this->gamepic=$gamepic;
        $this->gamename=$gamename;
        $this->gamedetail=$gamedetail;
        $this->gamedeveloper=$gamedeveloper;

        $q="INSERT INTO gamedata(id, gamepic, gamename, gamedetail, gamedeveloper)VALUES('','$gamepic','$gamename','$gamedetail','$gamedeveloper')";

        if($this->connection->exec($q)) {
            header("Location:manager_dashboard.php?msg=New Addition done");
        }

        else {
            header("Location:manager_dashboard.php?msg=Register Fail");
        }

    }

    function gamedata(){
        $q ="SELECT * FROM gamedata";
        $data= $this->connection->query($q);
        return $data;


   }

   function gamedetail(){

    $q ="SELECT * FROM gamedata where id = '$id' ";
        $data= $this->connection->query($q);
        return $data;

   }

   
   function gettournamnet(){
    $q ="SELECT * FROM gamedata where id = '$id' ";
        $data= $this->connection->query($q);
        return $data;

   }

   function tournament($games,$playerselect,$date,$salary) {
        
    $this->$games =$games;
    $this->$playerselect =$playerselect;
    $this->$date =$date;
    $this->$salary =$salary;

    $q ="SELECT * FROM gamedata where  gamename = '$games' ";
        $recordSet= $this->connection->query($q);

        $q ="SELECT * FROM playerdata where name = '$playerselect' ";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();

    if($result > 0){

        foreach($recordSet->fetchAll() as $row){
           $playertype = $row['type'];


        }
        
        $q="INSERT INTO tournament (id,playername,gamename,playertype,tournament_date,salary)VALUES('','$playerselect','$games','$playertype','$date','$salary')";

        if($this->connection->exec($q)) {
            header("Location:manager_dashboard.php?msg=done");
        }

        else {
            header("Location:manager_dashboard.php?msg=fail");
        }

    }

   }

   function tournamentschedule(){
    $q="SELECT * FROM tournament";
    $data=$this->connection->query($q);
    return $data;
    
}



   
}