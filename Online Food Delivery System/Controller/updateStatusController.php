<?php
session_start();
require_once ('../Model/model.php');
if(isset($_SESSION['email']))
{
  function fetchMember($email){
	return showMember($email);
    }
     $data = fetchMember($_SESSION['email']);
        foreach($data as $i => $member){
        $Status = $member['Status'];
        }
        if($Status == 1){
            $data['Status'] = 0;
        }
        else{
            $data['Status'] = 1;
        }

        if(updateStatus($_SESSION['email'],$data)){
            header("location:../View/DashboardMemberView.php");
        }
}
else
{
  echo "You can not access this page.";
}
?>