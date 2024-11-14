<?php
    session_start();
    if (!isset($_SESSION['importanza'])) {
        $_SESSION['importanza'] = array();
    }
    if (!isset($_SESSION['parole'])) {
        $_SESSION['parole'] = 0;
    }
    if (!isset($_SESSION['caratteri'])) {
        $_SESSION['caratteri'] = 0;
    }
    if ($_POST['valore'] == 4) {
        array_push($_SESSION['importanza'],$_POST['frase']);
    }
    $_SESSION['parole'] += str_word_count($_POST['frase']);
    $_SESSION['caratteri'] += strlen($_POST['frase']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="titolo">
        <h1>Frasi</h1>
    </div> <br>
    <div class="divCentrale">
        <h2>DATI INVIATI</h2>
        <p><?php echo $_POST['frase']?></p>
        <p><b>Importanza: </b><?php echo $_POST['valore']?></p>
        <a href="./risultato.php">Risultato</a> <br>
        <a href="./index.html">Torna indietro</a>
    </div>
    <br>
</body>
</html>