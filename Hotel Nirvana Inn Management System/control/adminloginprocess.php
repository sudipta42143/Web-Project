<?php
session_start();

$haserror=0;

if(isset($_REQUEST["login"])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if(empty($_POST["username"])&&empty($_POST["password"]) ){
         
        echo "User Name and password cannot be empty ";
        echo '<br>';
        
    }
    else{

     $login_data=file_get_contents("../data/data.json");
     $login=json_decode($login_data);
      $tempUserName = $login->UserName;
      $tempPass = $login->Password;

      if ($username != $tempUserName || $password !=$tempPass) {
        echo "invalid username or password";
        
      }
      else if ($username == $tempUserName && $password == $tempPass )
     {
      $_SESSION["username"]=$username;
        header("Location:../view/admin.php" );
        

     }

       }
       
    }
    
    
    ?>