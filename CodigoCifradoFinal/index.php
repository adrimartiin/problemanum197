<?php
    $arrayA = array(
        "¿Cuál es el animal más antiguo?", 
        "¿Qué es amarillo y si le pones azúcar no endulza?", 
        "¿Cómo llama Batman a su compañero de trabajo?"
    ); 

    $adivinanzaClave = array_rand($arrayA, 1); 
    $adivinanzaRandom = $arrayA[$adivinanzaClave]; 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinanzas</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>

<body> 
    <div class="container">
        <h3>Bienvenido al Juego</h3>
        <br><br>
        <p><?php echo $adivinanzaRandom; ?></p>
        <form action="" method="POST">
            <label for="">Password: </label>
            <input type="password" name="adivinanza">
            <input type="submit" name="boton" value="ENTRAR">
            <input type="hidden" name="adivinanzaClave" value="<?php echo $adivinanzaClave; ?>">
        </form>
    </div>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['adivinanza'])) {
            $psswd = $_POST["adivinanza"];
            $psswdEncr = ucfirst(strtolower($psswd)); 

            $arrayA = array(
                "¿Cuál es el animal más antiguo?", 
                "¿Qué es amarillo y si le pones azúcar no endulza?", 
                "¿Cómo llama Batman a su compañero de trabajo?"
            );

            $adivinanzaClave = $_POST['adivinanzaClave'];
            $adivinanzaRandom = $arrayA[$adivinanzaClave]; 

            if (($adivinanzaRandom == $arrayA[0]) && ($psswdEncr === "Cebra")) {
                header('Location: cifrado.php');
                exit();
            } else if (($adivinanzaRandom == $arrayA[1]) && ($psswdEncr === "Limon")) {
                header('Location: cifrado.php');
                exit();
            } else if (($adivinanzaRandom == $arrayA[2]) && ($psswdEncr === "Robin")) {
                header('Location: cifrado.php');
                exit();
            } else {
                header('Location: index.php'); 
                exit();
            }
        }
    }
?>
