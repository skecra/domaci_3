<?php 
    include "connectDB.php";
    include "databaseFunctions.php";
    session_start();
    if(isset($_GET['id'])){
        $cities = findCountryById($_GET['id']);
    }else{
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Phonebook</title>
</head>
<body>
<?php 
        include "navbar.php";
    ?>
    <div class="container">

        <div class="row mt-5">
            <div class="col-8 offset-2">
                <h3>Izmjena detalja drzave</h3>
                <form action="updateCountry.php" method="POST">
                    <input type="hidden" name="id" value="<?=$cities['id']?>">
                    <input type="text" required class="mt-3 form-control" name="country" placeholder="Unesite ime..." value="<?=$cities['name']?>">
                    
                

                    
                    <button class="btn float-end mt-3 btn-primary">Izmijeni kontakt</button>
                </form>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
