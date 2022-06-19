<?php 

    include "connectDB.php";
    include "databaseFunctions.php";
    session_start();
    include "navbar.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header("location:gradovi.php");
    }

    deleteCity($id);
    
    header("location:gradovi.php");

?>

