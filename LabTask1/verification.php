<?php
if(is_numeric($_REQUEST["firstName"])){
    echo "First name cannot contain numric values ";
}

else{
    $firstName = $_REQUEST["firstName"];
    echo "First Name : " .$firstName;
}
if(is_numeric($_REQUEST["lastName"])){
    echo "Last name cannot contain numric values ";
}

else{
    $firstName = $_REQUEST["lastName"];
    echo "Last Name : " .$lastName;
}
if(isset($_REQUEST["designation"])){
    $designation = $_REQUEST["designation"];
    echo "Designation: " . $designation  . "<br>";
}
else{
    echo "Please select your designation"  . "<br>";
}

$email = $_REQUEST["email"];
if($email == ""){
    echo "Email field cannot be empty"  . "<br>";
}
else{
    echo "Email: " . $email  . "<br>";
}


?>