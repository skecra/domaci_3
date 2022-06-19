<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Phonebook - register</title>
</head>
<body>
    
    <div class="container">

        <div class="row mt-5">
            <div class="col-6 offset-3">
                <h3 class="text-center">Registracija</h3>
                <form action="registerUser.php" method="POST">
                <input type="text" required class="mt-3 form-control" name="name" placeholder="Ime i prezime...">
                    <input type="text" required class="mt-3 form-control" name="username" placeholder="Korisnicko ime...">
                    <input type="password" required class="mt-3 form-control" name="password" placeholder="Lozinka...">
                    <p>Imas nalog? <a href="login.php">Prijavi se!</a></p>
                    <button class="btn float-end mt-3 btn-primary">Prijavi me</button>
                </form>
            </div>
        </div>

    </div>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
