<?php

require_once '../Model/model.php';

if (isset($_POST['submit'])) {

   $nameErr = $emailErr =$error= "";

  $usernameErr=$passwordErr="";

 

  $name = $email ="";
  $password="";
 
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }



  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr= "Invalid email format";
      $flag=0;
    }
  }

  if (empty($_POST["username"])) {
      $usernameErr= "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
          $usernameErr= "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            $usernameErr= "Name must contains at least two character ";
            $flag=0;
         }
         else {
           if(searchUsername($username)!= NULL)
           {
             $usernameErr= "Username already exist.";
             $flag=0;
           }
         }

       }
    }
  


    if(empty($_POST["password"]))
    {
      $passwordErr= "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $passwordErr= "Password must not be less than eight (8) characters";
        $flag=0;
      }
    //   else {
    //     if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
    //     {
    //       $passwordErr= "Password must contain these special characters (@, #, $,%)";
    //       $flag=0;
    //     }
    //   }
    }


if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['password']=$password;
  $data['status']=1;


  if (addSignupInfo($data)) {
    header("Location: ../View/LoginMemberView.php");
  }

  else {
    echo 'Could not add!!';
  }

}
else {
  $args = array(
   'emailErr' => $emailErr,
   
   'passwordErr' => $passwordErr,
   
);
      header("location:../View/signupMemberView.php?" . http_build_query($args));
  }




}
else {
  echo "You can not access this page!!";
}






?>
