<?php

if(isset($_REQUEST["submission"]))
{

	   $formdata = array(
	      'fname'=> $_POST["fname"],
		  'mname'=> $_POST["mname"],
	      'lname'=> $_POST["lname"],
          'age'=> $_POST["age"],
          'email'=>$_POST["email"],
	      'password'=> $_POST["password"],
          'myFile' => $_POST["myFile"]
	   );
       $existingdata = file_get_contents('memberdata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("memberdata.json", $jsondata)) {
	        echo "Member data successfully saved <br>";
	    }
	   else {
	        echo "no data saved";
	   }
     $memberdata = file_get_contents("memberdata.json");
	 $mydata = json_decode($memberdata);

    
	 //echo "my value: ".$mydata[1]->LastName;
    }
?>