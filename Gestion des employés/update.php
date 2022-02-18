<?php

use LDAP\Result;

 include "navbar.php" ?>  
<?php
include 'conexion.php';

$id = $_GET['edit'];
$sql = "SELECT * FROM `employés` WHERE Matricule='$id'";
 $result = mysqli_query($conn , $sql);
 $row = mysqli_fetch_assoc($result);
$Photos=$row['Photo'];
$Matricule=$row['Matricule'];
$Nom=$row['Nom'];
$Prénom=$row['Prénom'];
$Date=$row['Date de naissance'];
$Département=$row['Département'];
$Salaire=$row['Salaire'];
$Fonction=$row['Fonction'];


            if (isset($_POST['update'])){
                $Photos = $_POST['Photos'];
                $Nom = $_POST['Nom'];
                $Prénom = $_POST['Prénom'];
                $Date = $_POST['Date'];
                $Département = $_POST['Département'];
                $Salaire = $_POST['Salaire'];
                $Fonction = $_POST['Fonction'];
            
                $mysql_insert = " UPDATE `employés` SET `Photo`='$Photos',`Matricule`='$Matricule',`Nom`='$Nom',`Prénom`='$Prénom',`Date de naissance`='$Date',`Département`='$Département',`Salaire`='$Salaire',`Fonction`='$Fonction' WHERE `Matricule`='$id'";
                 $result = mysqli_query($conn , $mysql_insert);
                 if ($result){
                    header('location:index.php');
                 }
                 else{
                     die(mysqli_error($conn));
                 }
                }
        ?>  
        <div class=container>
            <form class="form-group my-3" method="POST">
                
                <label for="">Photo:</label>
                <input type="file" name="Photos" class="form-control" value=<?php echo $Photos; ?>>

                <label for="">Matricule:</label>
                <input type="text" name="Matricule" class="form-control" disabled value=<?php echo $Matricule; ?>>

                <label for="">Nom:</label>
                <input type="text" name="Nom" class="form-control" value=<?php echo $Nom; ?>>

                <label for="">Prénom:</label>
                <input type="text" name="Prénom" class="form-control" value=<?php echo $Prénom; ?>>

                <label for="">Date de naissance:</label>
                <input type="date" name="Date" class="form-control" value=<?php echo $Date; ?>>

                <label for="">Département:</label>
                <input type="text" name="Département" class="form-control" value=<?php echo $Département; ?>>

                <label for="">Salaire:</label>
                <input type="text" name="Salaire" class="form-control"value=<?php echo $Salaire; ?>>

                <label for="">Fonction:</label>
                <input type="text" name="Fonction" class="form-control" value=<?php echo $Fonction; ?>>
                
                <button type="submit" name="update" class="btn btn-primary mt-3">Update</button>


            </form>
        </div>