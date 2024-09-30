
<?php
include_once './functions.php';
    $generated_password = null; //inizializzo la variabile password
    // Verifica se il form è stato inviato
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['passwordgenerator']) && is_numeric($_GET['passwordgenerator'])) {
        $password_length = intval($_GET['passwordgenerator']);
        $generated_password = random_password($password_length);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <form action="" method="get">
        <label for="number">Inserisci un numero per la lunghezza della password sicura</label>
        <input type="number" id="number" name="passwordgenerator" min="4" max="64" required>
        <button type="submit">Genera Password</button>
    </form>
    <?php if ($generated_password !== null && $generated_password !==''){ ?>
        <p>Password generata: <strong><?php echo $generated_password; ?></strong></p>
    <?php }; ?>
</body>
</html>