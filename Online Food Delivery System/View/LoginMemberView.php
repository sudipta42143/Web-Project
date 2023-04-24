<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/login.css">
<title> Member Login </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <span class="error" style="color:red" id="loginFailed"> <?php if(!empty($_GET['loginFailed'])){echo $_GET['loginFailed'];} ?></span> 
         
            <h3>MEMBER LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        
        <form class="login-form" method="post" action="../Controller/loginMemberController.php">
          <input type="text" placeholder="email" name="email" id="email"/>
          <span class="error" id="emailErr"> <?php if(!empty($_GET['emailError'])){echo $_GET['emailError'];} ?></span> 
          <input type="password" placeholder="password" name="password" id = "password"/>
          <span class="error" id="passwordError"> <?php if(!empty($_GET['passwordError'])){echo $_GET['passwordError'];} ?></span> 
          <button type="submit" name="submit">Log in</button>
          <p class="message">Not registered? <a href="SignupMemberView.php">Create an account</a></p>
        </form>
         
      </div>
    </div>
</body>
</body>
</html>