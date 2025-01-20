<?php
// Récupérer le style sélectionné à partir du formulaire
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1'; // Par défaut 'style1'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du style</title>
    <!-- Inclure le fichier CSS sélectionné -->
    <link rel="stylesheet" href="styles/<?php echo $selectedStyle; ?>.css">
</head>
<body>
    <h1>Choisissez un style pour la page</h1>
    <form method="post" action="index.php">
        <label for="style">Sélectionner un style:</label>
        <select name="style" id="style">
            <option value="style1" <?php if ($selectedStyle == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($selectedStyle == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($selectedStyle == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>