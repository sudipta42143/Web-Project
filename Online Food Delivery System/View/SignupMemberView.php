<?php require_once "../Javascript/signupHomepage.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 5 CDN link to add icones -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Sign Up</title>
    <!-- Linking .css file with HTML page -->
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div>
        <!-- Left section of signup form -->
        <dive>
            <h1>Sign Up</h1>
            <h5>WELCOME</h5>
            <form class="loginbox" onclick="return validation()" method="post" action="../Controller/signUpMemberController.php">
             <div>
                <p><label for="userNmae">User Name</label></p>
                <input type="text" id="username" onkeypress="checkUsername()" onblur="checkUsername()" name="username" placeholder="Enter Name">
               <span class="error" id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
               </div>
             <div>
                <p><label for="email">Email Address</label></p>
               <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
                <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span> 
            </div>
             <div>
                <p><label for="password">Password</label></p>
                <input type="password"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" required >
               <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
               </div>
             <button type="submit" name="submit">Sign Up Now</button>
             
            </form>
            <p>Already a member? <a href="LoginMemberView.php">Log in</a></p>
            <div></div>  
            
    </div>
</body>
</html>