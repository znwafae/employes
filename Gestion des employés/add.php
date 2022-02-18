<?php include "conexion.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="bootstrap.bundle.min.js"></script>
    <link href="bootstrap.min.css"  rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "navbar.php" ?>   
        <div class=container>
            <form class="form-group my-3" action="index.php" method="POST" enctype="multipart/form-data">
                
                <label for="">Photo:</label>
                <input type="file" name="Photos" class="form-control">

                <label for="">Matricule:</label>
                <input type="text" name="Matricule" class="form-control">

                <label for="">Nom:</label>
                <input type="text" name="Nom" class="form-control">

                <label for="">Prénom:</label>
                <input type="text" name="Prénom" class="form-control">

                <label for="">Date de naissance:</label>
                <input type="date" name="Date" class="form-control">

                <label for="">Département:</label>
                <input type="text" name="Département" class="form-control">

                <label for="">Salaire:</label>
                <input type="text" name="Salaire" class="form-control">

                <label for="">Fonction:</label>
                <input type="text" name="Fonction" class="form-control">
                
                <button type="submit" name="ajouter" class="btn btn-primary mt-3">Ajouter</button>
                <button class="btn btn-danger mt-3">Cancel</button>


            </form>
        </div>
</body>
</html>