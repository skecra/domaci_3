<?php 
    include "connectDB.php";


    if(isset($_POST['grad']) && $_POST['grad']!=''){
        $grad = $_POST['grad'];
    }
    if(isset($_POST['drzava_id']) && $_POST['drzava_id']!=''){
        $drzava_id = $_POST['drzava_id'];
    }

    $sql = "INSERT into cities (name, country_id) VALUES ('$grad', $drzava_id)";
    $rez = mysqli_query($db_connection, $sql);

    header("location: gradovi.php");









?>