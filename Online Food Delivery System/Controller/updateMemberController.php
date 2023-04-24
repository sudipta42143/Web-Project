<?php
session_start();
require_once ('../Model/model.php');

if(isset($_POST['updateMember']) && isset($_SESSION['email'])){
    
    $flag=1;
    if(empty($_POST['email'])&&empty($_POST['name'])&&empty($_POST['nid'])&&empty($_POST['password'])){
        $emptyError = "Select a Field";
        $flag=0;
    }
    else{
        $firstName = $_POST['firstName'];
    }
    
    function fetchMember($email){
	return showMember($email);
    }
    $data = fetchMember($_SESSION['email']);

    foreach($data as $i => $member){
        $name = $member['Name'];
        $email = $member['Email'];
        $NID = $member['NID'];
        $password = $member['Password'];
        
    }


    // $email=$name=$nid=$validity="";
   
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
    if(!empty($_POST['email'])){
        $email = test_input($_POST['email']);
    }
    if(!empty($_POST['name'])){
        $name = test_input($_POST['name']);
    }
    if(!empty($_POST['nid'])){
        $NID = test_input($_POST['nid']);
    }
    if(!empty($_POST['password'])){
        $password = test_input($_POST['password']);
    }
    
if( $flag==1){
    $data['name'] = $name;
    $data['email'] = $email;
    $data['NID'] = $NID;
    $data['password'] = $password;
     if (updateMember($_SESSION['email'],$data)) {
        //session_destroy();
    header("location:../View/DashboardMemberView.php");
  }
}
else{
    $args = array(
        'emptyError' => $emptyError,
    );
    header("location:../View/UpdateMemberView.php?" . http_build_query($args));
}
}


?>