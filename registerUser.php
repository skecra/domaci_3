<?php 

include "databaseFunctions.php";

if(isset($_POST['name']) && $_POST['name']!="" ){
    $name = $_POST['name'];
}

if(isset($_POST['username']) && $_POST['username']!="" ){
    $username = $_POST['username'];
}

if(isset($_POST['password']) && $_POST['password']!="" ){
    $password = $_POST['password'];
}



if(registerUser($name, $username, $password)  && $user = findUserByUsernameAndPassword($username, $password)){
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['user'] = $user;
}

header('location: index.php');

?>