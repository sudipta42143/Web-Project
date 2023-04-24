<?php
include('../control/adminloginprocess.php');

//echo $_SESSION["username"];
if(!empty($_SESSION["username"]) )
{
    header("Location: ../view/admin.php");
}


?>
<!DOCTYPE html>
<html>
    <center>
<img src = "https://orig00.deviantart.net/7c02/f/2015/048/b/b/hn_logo_by_designedbyslim-d8ieiej.png">
</center>
    <head>
        <title><h1>HOTEL NIRVANA INN</h1></title>

    </head>

    <body>
        <center>
        <h1>HOTEL NIRVANA INN</h1>

        <form action="../control/adminloginprocess.php" method="POST">

            <table>
                <tr>    
                    <td>UserName:</td>
                    <td>
                    <input type="text" name="username" placeholder = "Enter Username Here">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                       <input type="password" name="password" placeholder = "Enter Password Here" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type ="submit" name = "login" value ="Login">
                    </td>
                
                    <td>
                        <br>
                        
                        Not have a account?<a href="adminregistrationform.php">Register here</a>
                    
                    </br>
                    </td>
                
                </tr>
    
            </table>
        </form>
</center>
</body>
</html>