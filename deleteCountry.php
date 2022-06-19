<?php 

    include "connectDB.php";
    include "databaseFunctions.php";
    session_start();
    include "navbar.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header("location:drzave.php");
    }

    deleteCountry($id);
    
    header("location:drzave.php");

?>

