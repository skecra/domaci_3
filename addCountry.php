
<?php 
    include "startSession.php";
    include "connectDB.php";
    include "databaseFunctions.php";

    if(!$_SESSION['loggedIn']){
        header("location:login.php");
        exit;
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="col-6 offset-3 mt-5">
                <form action="dodajDrzavu.php" method="POST" class="mt-5">
                        <input class="form-control mt-5" type="text" name="drzava" id="" placeholder="unesite drzavu...">
                        <button class="btn btn-success mt-3">Dodaj</button>

                </form>
            </div>