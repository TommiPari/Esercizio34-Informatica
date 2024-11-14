<?php
    session_start();
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
        <h1>Frase</h1>
    </div> <br>
    <div class="divCentrale">
        <div style="text-align:left;">
            <h2>Riepilogo:</h2>
            <ul>
                <?php foreach ($_SESSION['importanza'] as $frase) {
                    echo "<li>$frase</li>";
                }?>
            </ul>
            <table>
                <tr>
                    <th>Numero parole</th>
                    <th>Numero caratteri</th>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['parole']?></td>
                    <td><?php echo $_SESSION['caratteri']?></td>
                </tr>
            </table>
            <a href="./index.html">Torna indietro</a>
        </div>
    </div>
    <br>
</body>
</html>