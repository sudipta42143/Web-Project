<?php
	   $formvalue = array(
	      'Username'=> $_POST["user"],
	      'Password'=> $_POST["user_pass"]
         
	   );
       $existingdata = file_get_contents('employeedata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formvalue;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("employeedata.json", $jsondata)) {
	        echo "Operation successful <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("employeedata.json");
	 $mydata = json_decode($data);

    
	 //echo "Employee Information: ".$mydata[1]->LastName;

?>