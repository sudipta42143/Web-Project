<?php
	   $formvalue = array(
	      'email'=> $_POST["email"],
	      'password'=> $_POST["password"]
         
	   );
       $existingdata = file_get_contents('servicedata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formvalue;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("servicedata.json", $jsondata)) {
	        echo "Operation successful <br>";
	    }
	   else 
	        echo "no data saved";

     $servicedata = file_get_contents("servicedata.json");
	 $mydata = json_decode($servicedata);

    
	 //echo "Employee Information: ".$mydata[1]->LastName;

?>