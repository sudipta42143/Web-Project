<?php
session_start();
if(empty($_SESSION["username"]) )
{
    header("location: ../view/adminlogin.php");
}
//echo $_SESSION["username"];
?>

<?php
$cookie_name="Admin"; $cookie_value="Visited"; setcookie($cookie_name, $cookie_value,time() + 86400, "/"); 
if(isset($_COOKIE[$cookie_name])) { echo "Welcome again ".$cookie_name; } else { echo "Welcome ".$cookie_name; }
?>


<html>
    <center>
        <img src = "https://orig00.deviantart.net/7c02/f/2015/048/b/b/hn_logo_by_designedbyslim-d8ieiej.png">
    </center>
<head>
<title>ADMIN MANAGEMENT</title>
</head>
<body>
<center>
        <h1>HOTEL NIRVANA INN</h1>

        <h2>ADMIN PANEL</h2>
<br>
</br>
<h2><u>CHECK DETAILS</u></h2>

<h3><a href="admindetails.php">Check Admin Login Details</a></h3>

<h3><a href="">Check Employee Login Details</a></h3>

<h3><a href="">Check Member Login Details</a></h3>

<h3><a href="">Check Service Provider Login Details</a></h3>

                        <center>
                            <a href = "homepage.php">Logout</a>
</center>
                        
 
</center>
</body>
</html>

