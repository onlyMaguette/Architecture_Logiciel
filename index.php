<?php
include 'configuration.php';

// Vérifiez si une catégorie est sélectionnée
$categorie_id = isset($_GET['categorie']) ? intval($_GET['categorie']) : 0;

// Modifiez la requête SQL en fonction de la catégorie sélectionnée
if ($categorie_id == 1) {
    $sql = "SELECT * FROM article WHERE id IN (1, 3)";
} 

elseif ($categorie_id == 2) 
{
    $sql = "SELECT * FROM article WHERE id IN (2, 4)";
}

elseif ($categorie_id == 3) 
{
    $sql = "SELECT * FROM article WHERE id = 5";
}
 elseif ($categorie_id > 0) {
   
    $sql = "SELECT * FROM article WHERE 1 = 0";
} 
 else {
    $sql = "SELECT * FROM article";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualités Polytechniciennes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>ACTUALITÉS POLYTECHNICIENNES</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li>
                        <a href="index.php?categorie=1">Sport</a>
                    </li>
                    <li><a href="index.php?categorie=4">Santé</a></li>
                    <li><a href="index.php?categorie=3">Éducation</a></li>
                    <li><a href="index.php?categorie=2">Politique</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Les dernières actualités</h2>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='news'>";
                    echo "<h3>" . $row["titre"] . "</h3>";
                    echo "<p>" . $row["contenu"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Aucune actualité trouvée.";
            }
            $conn->close();
            ?>
        </main>
        <footer>
            <p>Copyright © DGI 2019</p>
        </footer>
    </div>
</body>
</html>
