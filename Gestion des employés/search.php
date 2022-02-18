<?php
include "navbar.php";

if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $conn = new mysqli("localhost", "root", "", "testing");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM `employés` WHERE Matricule LIKE '%$searchValue%'";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['Matricule'] . "<br>";
        }
    }   
}
?>
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
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>
</html>