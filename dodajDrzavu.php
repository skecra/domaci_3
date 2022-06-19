<?php 
    include "connectDB.php";


    if(isset($_POST['drzava']) && $_POST['drzava']!=''){
        $drzava = $_POST['drzava'];
    }

    
    $sql = "INSERT into countries (name) VALUES ('$drzava')";
    var_dump($sql);
    $rez = mysqli_query($db_connection, $sql);

    header("location: drzave.php");









?>