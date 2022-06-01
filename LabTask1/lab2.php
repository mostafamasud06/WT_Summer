<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Regestration Form </h1><hr>
  <form action="../Practice/verification.php" method="POST">

    <table>
    <tr>
      <td><h3>First name : </h3></td>
      <td><input type=" text" name="firstName" id=" "></td>
    </tr>
    <tr>
       <td><h3>Last name : </h3></td>
       <td><input type="text" name="lastName" id=""></td>
    </tr>
    <tr>
      <td><h3>AGE : </h3></td>
      <td><input type="text" name="age" id=""></td>
    </tr>
    
    <tr>  
    <td><h3>Designation</h3></td>
        <td><input type="radio" name ="gender" value= "">junior Programmer
        <label for="gender"> Male </label>
        <input type="radio" name ="gender" value= "">Senior Programmer
        <label for="gender"> Female </label>
        <input type="radio" name ="gender" value= "">Project Leader   
    </td>
</tr>
<tr>
        <td><h3>Preferred Language</h3> </td>
        <td><input type="checkbox" name ="java" value= "java">JAVA
        <input type="radio" name ="php" value= "php">PHP
        <input type="radio" name ="c++" value= "c++">C++
</td>
    </tr>
    <tr>
        <td><h3>E-mail</h3></td>
        <td><input type="email" name ="email" value= ""></td>
    </tr>
    <tr>
        <td><h3>Password</h3></td>
        <td><input type="password" name ="password" value= ""></td>
    </tr>
          <tr><td>

            <h2><input type="submit"></h2>
          </td>
          </tr>
    
    </table>

  </form>
</body>
</html>