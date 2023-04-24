<?php
require_once '../Controller/memberInfoController.php';
include("./Navbar.php");
if(isset($_SESSION['email'])){
    $data = fetchMember($_SESSION['email']);
    if($data!=Null){
        foreach ($data as $i => $member):

         $email=$member['Email'];
         if(empty($member['Name'])){
            $name ="No-Name";
         }
            else{
                $name = $member['Name'];
            }
        
         if(empty($member['NID'])){
            $nid="No-NID";
         }
            else{
                $nid=$member['NID'];
            }
         if(empty($member['Validity'])){
            $validity = "Not Validated";
         }
            else{
                $validity = $member['Validity'];
            }
        if(empty($member['Password'])){
            $password = "No-Password";
        }
            else{
                $password = $member['Password'];
            }
            
         
    endforeach;
    }
    
    
}
else{
    echo "Hello Guest";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/update.css">
    <title>Update</title>
</head>
<body>
    <!-- multistep form -->
<form action="../Controller/updateMemberController.php" method="POST" id="msform">
  <!-- fieldsets -->
  <fieldset>
    <span class="error" id="emptyError" style = "color:red"> <?php if(!empty($_GET['emptyError'])){echo $_GET['emptyError'];} ?></span> 
    
    <h2 class="fs-title">Update Your Details</h2>
    <h3 class="fs-subtitle"></h3>
    <?php 
        echo " <input type='text' name='email' placeholder=$email />";
        echo " <input type='text' name='name' placeholder=$name />";
        echo " <input type='text' name='nid' placeholder=$nid />";    
        echo " <input type='text' name='password' placeholder=$password />";    ?>
    <input type="submit" class="next action-button" name = "updateMember" value="Update">
  </fieldset>
</form>
</body>
</html>