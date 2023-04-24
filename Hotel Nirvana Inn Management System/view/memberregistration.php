<?php
include("../control/regvalidation.php");
?>
<html>

    
        <title>Member Registration Form</title>

    <body>
        <h1> Member Registration Form</h1>
        <form action="../control/memberloginprocess.php"method="POST">
            <table>
            <tr> 
                <td>First Name: </td>
                <td><input type= "text" name="fname" placeholder="Enter your First Name">
                <?php echo $invalidfname; ?>
                </td>
                </tr>

                <tr>
                    <td>Middle Name:</td>
                    <td><input type="text" name="mname"placeholder="Enter your Middle Name" >
                    <?php echo $invalidmname; ?>
                </td>
                    
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname"placeholder="Enter your Last Name" >
                    <?php echo $invalidlname; ?>
                </td>
                    <tr>

                </tr>
                    <td>Age:</td>
                    <td><input type="text" name="age" placeholder="Enter your age">
                    <?php echo $invalidage; ?>
                </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="mygender" value="Male">Male
                        <input type="radio" name="mygender" value="Female">Female
                        <input type="radio" name="mygender" value="others">Others
                        <?php echo $invalidgender; ?>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td>
                    <input type="text" name="bgroup">
                    <?php echo $invalidbloodgroup; ?>
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="" name="aname">
                    <?php echo $invalidaddress ; ?>
                </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td><input type="tel" name="mobilenumber">
                    <?php echo $invalidmob ; ?>
                </td>
                </tr>

                <tr>
                    <td>EMail:</td>
                    <td><input type="text" name="email">
                    <?php echo $invalidemail ; ?>
                </td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username">
                    <?php echo $invalidusername ; ?>
                </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password">
                    <?php echo $invalidpass ; ?>
                </td>
                </tr>
                <tr>
                    <td>confirm password</td>
                    <td>
                    <input type="password" name="c_pass" placeholder="Please Confirm Password"> 
                        <?php echo $invalidcpass ; ?>
                    </td>
                </tr>
                <tr>
                    <td>NID:</td>
                    <td><input type="file" name="myFile">
                    <?php echo $invalidfilename ; ?>
                </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submission" >
                        <input type="Reset" name = "reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>