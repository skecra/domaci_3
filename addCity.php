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

<div class="col-6 offset-3 my-5">
                <form action="dodajGrad.php" method="POST">
                        <input class="form-control my-4" type="text" name="grad" id="" placeholder="unesite grad">
                        <select name="drzava_id" id="" class="form-control my-4">
                            <option disabled selected value="">-izaberi drzavu-</option>
                            <?php 
                                 $countries = getCountries();
                                 while($country = mysqli_fetch_assoc($countries)){
                                     $countryId = $country['id'];
                                     $countryName = $country['name'];
                                     echo "<option value=\"$countryId\" >$countryName</option>";
                                 }
                            ?>
                        </select>
                        <button class="btn btn-success">Dodaj</button>

                </form>
            </div>