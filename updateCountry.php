<?php 

    include "connectDB.php";
    include "databaseFunctions.php";

    $country = $_POST['country'];
    $id = $_POST['id'];

    updateCountry($country, $id);

    header('location:drzave.php');
?>