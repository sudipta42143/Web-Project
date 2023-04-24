<?php
session_start();
if(isset($_SESSION['email']))
{
  session_destroy();
  header('Location:../View/LoginMemberView.php');
}
{
  echo "You can not access this page.";
}
 ?>