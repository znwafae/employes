<?php include "navbar.php" ?>
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
<div class="container">
            <form class="form my-3" method="POST">
                <div>
                    <label> <h4>Search by :</h4></label>
                    <select class="form-select" name="searchType">
                        <option value="Matricule">Matricule</option>
                        <option value="Nom">Nom</option>
                        <option value="Prénom">Prénom</option>
                        <option value="Département">Département</option>
                    </select>
                </div>
                <div>
                    <input class="form-control my-3" id="searchInput" type="text" name="search" placeholder="Search">
                </div>
                <div>
                    <button class="submit btn btn-success" type="submit">Search</button>
                </div>
            </form>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Département</th>
      <th scope="col">Salaire</th>
      <th scope="col">Fonction</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'Conexion.php';
    
    
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $searchType = $_POST['searchType'];
        if($searchType == "Matricule"){
            $sql = "SELECT * FROM employés WHERE Matricule LIKE '%$search%';";
        }
        elseif($searchType == "Nom"){
            $sql = "SELECT * FROM employés WHERE Nom LIKE '%$search%';";
        }
        elseif($searchType == "Prénom"){
            $sql = "SELECT * FROM employés WHERE Prénom LIKE '%$search%';";
        }
        else{
            $sql = "SELECT * FROM employés WHERE Département LIKE '%$search%';";
        }
    }
    else{
        $sql = "SELECT * FROM employés";
    }
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo '<img class="photos" src=photos/'. $row['Photo'] .'>';?></td>
                <td><?php echo $row['Matricule'];?></td>
                <td><?php echo $row['Nom'];?></td>
                <td><?php echo $row['Prénom'];?></td>
                <td><?php echo $row['Date de naissance'];?></td>
                <td><?php echo $row['Département'];?></td>
                <td><?php echo $row['Salaire'];?></td>
                <td><?php echo $row['Fonction'];?></td>
                
                
            </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>