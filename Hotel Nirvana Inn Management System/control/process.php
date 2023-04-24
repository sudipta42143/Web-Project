<?php

if(isset($_REQUEST["submit"]))
{

$fname="";
$lname="";
$uname="";
$age="";
$user=" ";
$email="";
$password="";
$File="";


if(strlen($_POST["fname"])>4)
{
    $_SESSION["fname"]=$fname;
    echo'<br> ';
    echo "Your first name is :".$fname=$_POST["fname"];
    echo'<br> ';
}
else{
    echo'<br> ';
    echo "First name must be more than 4 character<br>";
    
}

  
if(strlen($_POST["lname"])>3){
   

    echo "Your Last name is :".$lname=$_POST["lname"];
    echo'<br> ';
}
else{
    
    echo  "Last name must be more than 3 character <br>";
    
    
}

if(strlen($_POST["uname"])>5){
   

    echo "Your user name is :".$uname=$_POST["uname"];
    echo'<br> ';
}
else{
    
    echo  "User name must be more than 3 character <br>";
    
    
}

if( $age =$_POST["age"]) 
{
    echo 'Your Age is ' . $age =$_POST["age"];
    echo '<br>';
    
}
else
{
    
    echo 'Age must be selected';
    echo '<br>';

} 


if (empty($_POST["email"]) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$_POST["email"])) 
{
    echo 'Invalid E-mail';
    echo '<br>';
   
} else 
{
    echo '<br>';

    echo 'Your email is ' . $email=$_POST["email"] ;
    echo '<br>';
   
}

if(  empty($_POST["password"]) || preg_match("/^[a-zA-Z-]*$/",$_POST["password"]))
{
 
    echo "Password should at least contain one numeric value ";
    echo "<br>";
    
}
    else{
        $password=$_POST["password"];
        echo "Password is valid<br>";
       
    }


echo "<br>";
echo $_FILES["File"]["name"];
if(move_uploaded_file($_FILES["File"] ["tmp_name"],"../uploads/".$_FILES["File"]["name"]))
{
    echo " file uploaded";
}
else
echo "please attach your cv";

$mydata=array(
    'Firstname'=>$fname,
    'Lastname'=>$lname,
    'UserName'=>$uname,
    'Age'=>$age,
    'Email'=>$email,
    'Password'=> $password,
	'File'=>$_FILES["File"]["name"],
);

$jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    
    if(empty($FirstName)||empty($LastName)||empty($Email)||empty($pass)||empty($_FILES["File"]["name"])){
        echo "<br>Registration isn't complete yet ";
    }
    else{
        echo"<br>Complete Registration";
    }
    
}


}

?>