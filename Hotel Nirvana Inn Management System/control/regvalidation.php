<?php
//bd mobile reg pattern
$mob_regex ="^([01]|\+88)?\d{11}^";//+88 or 01 before 11 digits of phone.
//email regex
$email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
//password regex
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

$validfname="";
$invalidfname="";
$validmname="";
$invalidmname="";
$validlname="";
$invalidlname="";
$validgender="";
$invalidgender="";
$validbloodgroup="";
$invalidbloodgroup="";
$validaddress="";
$invalidaddress="";
$validpass="";
$invalidpass="";
$validusername="";
$invalidusername="";
$validage="";
$invalidage="";
$validmob="";
$invalidmob="";
$validemail="";
$invalidemail="";
$validcpass="";
$invalidcpass="";
$validfilename="";
$invalidfilename="";





if(isset($_REQUEST["submission"])){
$fname=$_REQUEST["fname"];
$mname=$_REQUEST["mname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$bgroup=$_REQUEST["bgroup"];
$aname=$_REQUEST["aname"];
$mob=$_REQUEST["mobilenumber"];
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];



if(empty($fname)||is_numeric($fname)||strlen($fname)<5)
{
    $invalidfname="please enter your first name";  
}
else{
    echo "valid first name <br>";

    $validfname=$fname;
    echo"first name ".$validfname;
    
}
if(empty($mname)||is_numeric($mname)||strlen($mname)<5)
{
    $invalidmname="please enter your middle name";  
}
else{
    echo "valid middle name <br>";

    $validmname=$mname;
    echo"middle name".$validmname;
    
}

if(empty($lname)||is_numeric($lname)||strlen($lname)<5)
{
    $invalidlname="please enter your last name";  
}
else{
    echo "valid last name <br>";

    $validlname=$lname;
    echo"last name".$validlname;
    
}
if(empty($age)){
    $invalidage="Please Enter your age";
    echo "<br>";
 
}
else{
    echo "Valid Age<br>";
    $validage=$age;
}
if(isset($_REQUEST["mygender"]))
{
    $validgender=$_REQUEST["mygender"];  
    echo "<br>";
    
}
else{
    $invalidgender="please select a gender";
   }
if(empty($bgroup)||is_numeric($bgroup)){
    $invalidbloodgroup="Please enter your bloodgroup";
    
}
else{
    $validbloodgroup=$bgroup;
    echo "bloodgroup ".$validbloodgroup;
    
  

}
if(empty($aname)){
    $invalidaddress="enter your address";

}
else{
    $validaddress=$aname;
    echo "myaddress ".$validaddress;

}




if(strlen($mob)>=11 && preg_match($mob_regex,$mob)){
    echo "Valid Mobile Number";
    echo "<br>";
    $validmob=$mob;
    echo "Mobile Number : " .$validmob;

}
else{
    $invalidmob="Please Enter a Valid Mobile Number";

}

if(empty($email)){
    $invalidemail="Please Enter a Valid Email";
    echo "<br>";
 
}
else{
    if(preg_match($email_regex,$email)){
        echo "Valid Email<br>";
        $validateemail=$email;
    }
    else{
        $invalidemail="Email is not valid";
        echo "<br>";
        echo  $invalidemail;
        
    }
}
if(empty($username)||strlen($username)<5){
    $invalidusername="you must enter your username which is more than five characters";

}
else{
    $validusername=$username;
    echo "username ".$validusername;
}
if(empty($pass)){
    $invalidpass="Please Enter a Valid Password";
    echo "<br>";
 
}
else{
   
    if(strlen($pass)>=5 && preg_match($pass_regex,$pass)){
        echo "Passwored Entered<br>";
        $validpass=$pass;
    }
    else{
        $invalidpass="Password is not valid";
        echo "<br>";
      
        
    }

   
}
if(empty($_REQUEST["c_pass"])){
    $invalidcpass="Please Enter a Confirm Password";
    echo "<br>";
 
}
else{
    if($_REQUEST["c_pass"]==$pass){

        $validcpass=$_REQUEST["c_pass"];
        echo "Confirm Password Entered<br>";
        
    }
    else{
        $invalidcpass="Password not matched try again!";
        echo "<br>";
        echo $invalidcpass;
        
    }

   
}
if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"../uploads/".$_FILES["myFile"]["name"])){
  $validfilename="file have been uploaded";
  echo $validfilename;
  
}
else
{
$invalidfilename="file uploading error";
//echo $_FILES["myFile"]["error"];
}
if(empty($fname) || is_numeric($fname)|| strlen($fname)<5|| empty($mname) || is_numeric($mname)|| strlen($mname)<5  || empty($lname)|| is_numeric($lname)|| strlen($lname)<5 || empty($email) || !preg_match($email_regex,$email) || empty($pass) || !preg_match($pass_regex,$pass) || empty($age)||empty($_REQUEST["c_pass"])){
    echo "Please fill up all the fields<br>";
}
else{
    echo "Registration Successful<br>";
}

}





?>
