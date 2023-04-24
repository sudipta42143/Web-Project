<html>
<head>
        <title>Admin Registration Form</title>
    </head>
    <body>
    <?php 
include '../control/process.php'
?>
    <center>
<img src = "https://orig00.deviantart.net/7c02/f/2015/048/b/b/hn_logo_by_designedbyslim-d8ieiej.png" style = "float : center">
        <br>
        <form action="" method="post" enctype="multipart/form-data">
        <h1>Admin Registration Form</h1>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name ="fname" ></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name= "lname"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text"name="uname"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name= "age"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="E-mail" name= "email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Attach CV</td>
                    <td><input type="file" name="File" > </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submit" value="Submit">
                    </td>
                    <td>
                    Already Have An Account?<a href = "adminlogin.php">Login</a>
</td>
                </tr>
            </table>
        </form>
</br>
</center>
    </body>
</html>