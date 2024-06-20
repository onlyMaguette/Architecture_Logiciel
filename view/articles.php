<?php
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='news'>";
        echo "<h3>" . htmlspecialchars($row["titre"]) . "</h3>";
        echo "<p>" . htmlspecialchars($row["contenu"]) . "</p>";
        echo "</div>";
    }
} else {
    echo "Aucune actualité trouvée.";
}
?>
