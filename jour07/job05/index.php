<?php
session_start();


if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['tour'] = 'X';  
    $_SESSION['message'] = '';  
}

function verifGagnant($grille) {

    for ($i = 0; $i < 3; $i++) {
      
        if ($grille[$i][0] === $grille[$i][1] && $grille[$i][1] === $grille[$i][2] && $grille[$i][0] !== '-') {
            return $grille[$i][0];
        }
     
        if ($grille[0][$i] === $grille[1][$i] && $grille[1][$i] === $grille[2][$i] && $grille[0][$i] !== '-') {
            return $grille[0][$i];
        }
    }
 
    if ($grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2] && $grille[0][0] !== '-') {
        return $grille[0][0];
    }
    if ($grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0] && $grille[0][2] !== '-') {
        return $grille[0][2];
    }
    
   
    foreach ($grille as $ligne) {
        if (in_array('-', $ligne)) {
            return null; 
        }
    }
    return 'match_nul'; 
}
if (isset($_POST['reset'])) {
    $_SESSION['grille'] = [['-', '-', '-'], ['-', '-', '-'], ['-', '-', '-']];
    $_SESSION['tour'] = 'X';
    $_SESSION['message'] = '';
}


if (isset($_POST['case'])) {
    $case = $_POST['case'];
    $row = floor($case / 3);
    $col = $case % 3;


    if ($_SESSION['grille'][$row][$col] === '-') {
        $_SESSION['grille'][$row][$col] = $_SESSION['tour'];
      
        $gagnant = verifGagnant($_SESSION['grille']);
        if ($gagnant === 'X' || $gagnant === 'O') {
            $_SESSION['message'] = "$gagnant a gagné !";
        } elseif ($gagnant === 'match_nul') {
            $_SESSION['message'] = "Match nul !";
        } else {
           
            $_SESSION['tour'] = ($_SESSION['tour'] === 'X') ? 'O' : 'X';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 100px;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
    </style>
</head>
<body>

<h1>Jeu du Morpion</h1>
<p><?php echo $_SESSION['message']; ?></p>

<form method="POST">
    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <form method="POST">
                            <button type="submit" name="case" value="<?php echo $i * 3 + $j; ?>">
                                <?php echo $_SESSION['grille'][$i][$j]; ?>
                            </button>
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</form>

<form method="POST">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>