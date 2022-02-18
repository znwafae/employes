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
<!------------------------------------ Navbar ---------------------------------------->
    <div class="navbar navbar-dark navbar-expand-lg bg-dark text-white">
            <div class="container">
                <a href="#" class="navbar-brand">Gestion des employés</a>
                <button class="navbar-toggler text-white" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#mainmenu" >
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Liste des employées</a></li>
                        <li class="nav-item"><a href="#search.php" class="nav-link">Rechercher un employé</a></li>
                        <li class="nav-item"><a href="add.php" class="nav-link">Ajouter un employé</a></li>
                    </ul>
                </div> 
            </div>  
        </div>
</body>
</html>