<?php
	if(isset($_REQUEST["login"])){

		if(empty($_POST["email"])&&empty($_POST["password"]) ){
         
			echo "User Name and password cannot be empty ";
			echo '<br>';
			
		}
		else{
	   $formvalue = array(
	      'email'=> $_POST["email"],
	      'password'=> $_POST["password"]
         
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formvalue;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	   if(file_put_contents("memberloginhistory.json", $jsondata)) {
	        echo "Operation successful <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("memberloginhistory.json");
	 $mydata = json_decode($data);
	}
}
    
	 //echo "Employee Information: ".$mydata[1]->LastName;

?>