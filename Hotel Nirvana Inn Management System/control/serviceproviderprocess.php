<?php
if(isset($_REQUEST["submit"]))
{


$FirstName="";
$LastName="";
$Age="";
$blood="";
$email="";
$password="";


if(strlen($_POST["FirstName"])>5)
{
    $_SESSION["FirstName"]=$FirstName;
    echo'<br> ';
    echo "Your first name is :".$FirstName=$_POST["FirstName"];
    echo'<br> ';
}
else{
    echo'<br> ';
    echo "First name must be more than 5 character<br>";
    
}

  
if(strlen($_POST["LastName"])>5){
   

    echo "Your Last name is :".$LastName=$_POST["LastName"];
    echo'<br> ';
}
else{
    
    echo  "Last name must be more than 5 character <br>";
    
    
}

	   $formdata = array(
	      'FirstName'=> $_POST["FirstName"],
	      'LastName'=> $_POST["LastName"],
          'Age'=> $_POST["Age"],
          'email'=>$_POST["email"],
          'password'=>$_POST["password"],
          'attach' => $_POST["attach"]
	   );
       
       $existingdata = file_get_contents('sevicedata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("servicedata.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $servicedata = file_get_contents("servicedata.json");
	 $mydata = json_decode($servicedata);

    
	 //echo "my value: ".$mydata[1]->LastName;
	}
?>