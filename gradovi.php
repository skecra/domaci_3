<?php 
    include "startSession.php";
    include "connectDB.php";
    include "databaseFunctions.php";

    if(!$_SESSION['loggedIn']){
        header("location:login.php");
        exit;
    }

    $searchTerm = "";
    if(isset($_GET['searchTerm']) && $_GET['searchTerm'] != ""){
        $searchTerm = $_GET['searchTerm'];
        $cities = getCitiesFromDatabase($_GET['searchTerm']);
    }else{
        $cities = getCitiesFromDatabase();
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
        if(isset($_GET['msg']) && isset($_GET['id']) && $_GET['id']!=''){
            $id = $_GET['id'];
            $grad = findCityById($id);
            $naziv = $grad['name'];
            echo "<script type='text/javascript'>alert('Nije moguce brisanje grada $naziv jer postoje zavisni podaci');</script>";
        }
    ?>

    <div class="container">
        

        <div class="row mt-5">
            <div class="col-12">

                <form action="gradovi.php" method="GET">
                    <input type="text" value="<?=$searchTerm?>" name="searchTerm" placeholder="Pretraga" class="form-control my-3">
                </form>

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>Naziv</th>
                            <th>Drzava</th>
                            <th>Izmjena</th>
                            <th>Brisanje</th>
                        </tr>
                    </thead>

                    <?php 

                        foreach($cities as $city){
                            
                            $naziv = $city['name'];
                            $drzava = $city['country_name'];
                            $id = $city['id'];

                            echo "
                                <tr>
                                    <td>$naziv</td>
                                    <td>$drzava</td>
                                    <td>
                                        <a href='editCity.php?id=$id' >izmjena</a>
                                    </td>
                                    <td>
                                    <!-- Button trigger modal -->
                                    <button type=\"button\" class=\"btn btn-outline-info\" data-bs-toggle=\"modal\" data-bs-target=\"#modal$id\">
                                      brisanje
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"modal$id\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                      <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                          <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Brisanje</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          </div>
                                          <div class=\"modal-body\">
                                            Da li ste sigurni da zelite da izbrisete grad $naziv?
                                          </div>
                                          <div class=\"modal-footer\">
                                            <a type=\"submit\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Zatvori</a>
                                            <a type=\"button\" class=\"btn btn-primary\" href=\"deleteCity.php?id=$id\">Brisi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </td>
                                </tr>";
                        }

                    ?>        
                </table>
                <a class="btn btn-primary" href="addCity.php">Dodaj grad</a>
            </div>

         
            </div>