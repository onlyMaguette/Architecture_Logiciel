<?php include 'header.php'; ?>
<main>
    <h2>Les dernières actualités</h2>
    <?php
    if ($articles->num_rows > 0) {
        while($row = $articles->fetch_assoc()) {
            echo "<div class='news'>";
            echo "<h3>" . $row["titre"] . "</h3>";
            echo "<p>" . $row["contenu"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Aucune actualité trouvée.";
    }
    ?>
</main>
<?php include 'footer.php'; ?>
