<html>
<head>
        <title>Employee Registration Form</title>
    </head>
    <body>
    
<img src = "https://th.bing.com/th/id/OIP.b5VbtWAw5mhGnWLbVbqbhwHaHa?pid=ImgDet&rs=1S" style = "float : center">
        <br>
        <h1>Employee Registration Form</h1>
        <form action="../control/employeeregistrationprocess.php"method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name ="FirstName" ></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name= "LastName"></td>
                    <tr>

                </tr>
                    <td>Age:</td>
                    <td><input type="text" name= "Age"></td>
                </tr>
                <tr>
                <td>Present address</td>
                    <td><input type="Present address" name="Present address"></td>
                </tr>
                <tr>
                <td>Permanent address</td>
                    <td><input type="Permanent address" name="Permanent address"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="E-mail" name= "Email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>NID</td>
                    <td><input type="NID" name="NID"></td>

                </tr>
                <tr>
                    <td>Attach photo</td>
                    <td><input type="file" name = "attach" placeholder="choose a file" ></td>
                </tr>
                <tr>
                <td>Phone number</td>
                    <td><input type="Phone number" name="Phone number"></td>
                </tr>
                <tr>
                    <td>
                        <input type="Submit" name = "submit">
                        <input type="Reset" name = "reset">
                    </td>
                </tr>
            </table>
        </form>
</br>

    </body>
</html>