<?php
// Vérifie si des arguments $_GET existent
if (!empty($_GET)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    
    // Parcourt chaque élément de $_GET
    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "Aucun argument GET trouvé.";
}
?>
