<?php 
require_once '../Model/model.php';
session_start();
if(isset($_POST['submit'])){
    // $data['username'] = $userName;
    // $data['password'] = $password;
    $flag = 1;
   if(empty($_POST['email'])){
       $emailError = "Email is required";
        $flag=0;
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError = "Invalid email format";
            $flag=0;
        }
    }
    if(empty($_POST['password'])){
        $passwordError = "Password is required";
        $flag=0;
    }
    if($flag==1){
        $email = $_POST['email'];
    $password = $_POST['password'];
    if(login($email,$password)!= NULL)
    {
        echo "Login Successful";
        $_SESSION['email'] = $email;
        header("Location: ../View/DashboardMemberView.php");

    }
    else
    {
    $args = array(
    $loginFailed = "Login Failed",
    
   'loginFailed' => $loginFailed,
    
    );
    header("location:../View/loginMemberView.php?" . http_build_query($args));
  
    }
    }
    else{
        $args = array(
   'emailError' => $emailError,
   'passwordError' => $passwordError,   
    );
    header("location:../View/loginMemberView.php?" . http_build_query($args));
  
    }
    
}

?>