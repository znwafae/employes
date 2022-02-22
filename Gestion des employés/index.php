<?php include "conexion.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés</title>
    <script defer src="bootstrap.bundle.min.js"></script>
    <link href="bootstrap.min.css"  rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
            if (isset($_POST['ajouter'])){
                $Photos = $_FILES['Photos']['name'];
                $Matricule = $_POST['Matricule'];
                $Nom = $_POST['Nom'];
                $Prénom = $_POST['Prénom'];
                $Date = $_POST['Date'];
                $Département = $_POST['Département'];
                $Salaire = $_POST['Salaire'];
                $Fonction = $_POST['Fonction'];
                $fileLocation = 'Photos/'.$Photos;
                $nameOfPicturs = $_FILES['Photos']['tmp_name'];
                
            
                $mysql_insert = "INSERT INTO `employés`(`Photo`, `Matricule`, `Nom`, `Prénom`, `Date de naissance`, `Département`, `Salaire`, `Fonction`)
                 VALUES ('$Photos', '$Matricule', '$Nom', '$Prénom', '$Date', '$Département', '$Salaire', '$Fonction')";
                 $conn->query($mysql_insert);
                 move_uploaded_file($nameOfPicturs,$fileLocation);
                }
        ?>
<!------------------------------------ container ---------------------------------------->
    <?php include "navbar.php" ?>
    <div class="container ">
        <table class="table my-3">
            <thead>
                <th>Photo</th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Département</th>
                <th>Salaire</th>
                <th>Fonction</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php 
                $sql="Select * from employés";
                $result = mysqli_query($conn , $sql);
                foreach ($result as $key => $value) {
                    echo "<tr>
                    <td><img class='photos' src=Photos/" . $value["Photo"] . "></td>
                    <td>" . $value["Matricule"] . "</td>
                    <td>" . $value["Nom"] . "</td>
                    <td>" . $value["Prénom"] . "</td>
                    <td>" . $value["Date de naissance"] . "</td>
                    <td>" . $value["Département"] . "</td>
                    <td>" . $value["Salaire"] . "</td>
                    <td>" . $value["Fonction"] . "</td>
                    <td>
                        <a href='update.php?edit=".$value["Matricule"]."'
                            class='btn btn-success' > Edit </a>
                        <a href='index.php?delete=".$value["Matricule"]."'
                            class='btn btn-danger' onClick=\"return confirm('Are You Sure ?')\"> delete </a>
                    </td>";
                    echo "</tr>";
                }
                if(isset($_GET['delete'])){
                    $id = $_REQUEST["delete"];
                    $conn->query("DELETE FROM `employés` WHERE Matricule='$id'");
                    
                        header('location:index.php');                       
                    }
                
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>