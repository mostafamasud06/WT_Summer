<?php
    include("../control/registrationProcess.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <script src="../javaScript/registration.js"></script>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return checkValidation()">
        <h1>Registration Form</h1>
        <hr>
        <table>
            <tr>
                <td>
                    <h3>First Name:</h3>
                </td>
                <td><input type="text" name="firstName" id="firstName"></td>
                <td><p id="firstnamedata"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Last Name:</h3>
                </td>
                <td><input type="text" name="lastName" id="lastName"></td>
                <td><p id="lastnamedata"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Age:</h3>
                </td>
                <td><input type="text" name="age" id="age"></td>
                <td><p id="agedata"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Designation:</h3>
                </td>
                <td>
                    <input type="radio" name="designation" id="JP" value="Jounior Programmer">
                    <label for="designation">Jounior Programmer</label>
                    <input type="radio" name="designation" id="SP" value="Senior Programmer">
                    <label for="designation">Senior Programmer</label>
                    <input type="radio" name="designation" id="PL" value="Project Lead">
                    <label for="designation">Project Lead</label>
                </td>
                <td><p id="designationData"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Preferred Language:</h3>
                </td>
                <td>
                    <input type="checkbox" name="java" id="planguage" value="Java">
                    <label for="Java">Java</label>
                    <input type="checkbox" name="php" id="planguage" value="PHP">
                    <label for="php">PHP</label>
                    <input type="checkbox" name="cpp" id="planguage" value="C++">
                    <label for="cpp">C++</label>
                </td>
                <td><p id="languageData"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>E-mail:</h3>
                </td>
                <td><input type="text" name="email" id="email"></td>
                <td><p id="emailData"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Password:</h3>
                </td>
                <td><input type="password" name="password" id="password"></td>
                <td><p id="passwordData"></p></td>
            </tr>
            <tr>
                <td>
                    <h3>Please choose a file</h3>
                </td>
                <td><input type="file" value="Choose file" name="myfile" id="myfile"></td>
                <td><p id="fileData"></p></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit" name="registration">
                    <input type="reset" value="Reset">
                </td>
                <td>
                    <?php
                        echo $registrationError;
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <center>
        <table border='1' width="70%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Designation</th>
                    <th>Prefered Language</th>
                    <th>Email</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 while($myrow = $datas->fetch_assoc()){

                    echo "
                       <tr>
                       <td>{$myrow['fname']}</td>
                       <td>{$myrow['lname']}</td>
                       <td>{$myrow['age']}</td>
                       <td>{$myrow['designation']}</td>
                       <td>{$myrow['planguage']}</td>
                       <td>{$myrow['email']}</td>
                       <td>{$myrow['picture']}</td>
                       </tr>
                       "; 
                } 
               ?>
            </tbody>
        </table>
    </center>
</body>

</html>