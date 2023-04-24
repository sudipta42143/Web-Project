<?php
require_once '../Controller/memberInfoController.php';
include("./Navbar.php");
if(isset($_SESSION['email'])){
    $data = fetchMember($_SESSION['email']);
    $stat_flag=0;
    if($data!=Null){
        foreach ($data as $i => $member):

         $email=$member['Email'];
         if(empty($member['Name'])){
            $name ="No Name";
         }
            else{
                $name = $member['Name'];
            }
        
         if(empty($member['NID'])){
            $nid="No NID";
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
        if($member['Status']==1){
                $stat_flag = 1;
            }
                else{
                    $stat_flag = 0;
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
    <link rel="stylesheet" href="../CSS/profile.css">
    <title>Document</title>
</head>
<body>
    
    
    <div id="card">
    <?php 
        	echo "<h1>$name</h1>";

    ?>
    <div class="image-crop">
		<img id="avatar" src="https://drive.google.com/uc?id=1EVA3KUBLxCXF2EGmTf4LUB8F4yAvBrjl"></img>
	</div>
	<div id="bio">
		<?php echo "<p> Email : $email</p>";
                echo "<p> NID : $nid</p>";
        ?>
	</div>
	<div id="stats">
		<div class="col">
			<p class="stat"></p>
			<p class="label"></p>
		</div>
			<div class="col">
               <?php echo "<p class='stat'> $validity </p>"; ?>
 			<p class="label">Validity Date</p>
		</div>
				<div class="col">
			<p class="stat"></p>
			<p class="label"></p>
		</div>
	</div>
	<div id="buttons">
		<button><a href='UpdateMemberView.php'>Update</a></button>
        <?php 
            if($stat_flag==1){
                echo "<button id='msg' style='background-color: red; color:white;'><a href='../Controller/updateStatusController.php'>Cancel Membership</a></button>";
            }
            else{
                echo "<button id='msg' style='background-color: green; color:Black;'><a href='../Controller/updateStatusController.php'>Active Membership</a></button>";
            }
            

        ?>
		
	</div>
</div>
</body>
</html>