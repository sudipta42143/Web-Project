<?php
session_start();
require_once ('../Model/model.php');

if(isset($_POST['updateValidity']) && isset($_SESSION['email'])){
    $flag = 1;
    function fetchMember($email){
	return showMember($email);
    }
    $data = fetchMember($_SESSION['email']);

    foreach($data as $i => $member){
        $validity = $member['Validity'];
        $last_Date = $member['Validity'];
        
    }
    
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
    if(empty($_POST['validity'])){
         $validityErr= "Need to select a date";
         $flag = 0;
    }
    else{
        

        $validity = test_input($_POST['validity']);
        $today_dt = new DateTime($last_Date);
        $expire_dt = new DateTime($validity);
        if($expire_dt < $today_dt){
            $validityErr= "Need to select any day after '.$last_Date.' ";
            $flag = 0;
        }
    }
    if($flag == 1){
        $data['Validity'] = $validity;
        if (updateDate($_SESSION['email'],$data)) {
            //session_destroy();
            header("location:../View/DashboardMemberView.php");
        }
    }
    else{
          $args = array(
   'validityErr' => $validityErr,
   
);
      header("location:../View/ValidityMemberView.php?" . http_build_query($args));
    }
    

    
//     $data['name'] = $name;
//     $data['email'] = $email;
//     $data['NID'] = $NID;
    

//     if (updateMember($_SESSION['email'],$data)) {
//         session_destroy();
//     header("location:../View/DashboardMemberView.php");
//   }
    
}

?>