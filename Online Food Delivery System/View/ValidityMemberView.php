<?php
require_once '../Controller/memberInfoController.php';
include("./Navbar.php");
if(isset($_SESSION['email'])){
    $data = fetchMember($_SESSION['email']);
    if($data!=Null){
        foreach ($data as $i => $member):

         if(empty($member['Validity'])){
            $validity = "Not Validated";
         }
            else{
                $validity = $member['Validity'];
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
    <title>Increase Validity</title>
</head>
<body>
    <!-- multistep form -->
<form action="../Controller/increaseVariableController.php" method="POST" id="msform">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Increase Validity</h2>
    <h3 class="fs-subtitle"></h3>
    <?php 
        echo "<input type='date' name='validity' placeholder=$validity />";
    ?>
     <span class="error" id="validityErr"> <?php if(!empty($_GET['validityErr'])){echo $_GET['validityErr'];} ?></span> 
    <input type="submit" class="next action-button" name = "updateValidity" value="Update">
  </fieldset>
</form>
</body>
</html>