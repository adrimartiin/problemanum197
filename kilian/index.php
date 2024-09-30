<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformar Frase</title>
</head>
<body>
    <h1>Transformar Frase</h1>

    <form method="POST" action="">
        <label for="frase">Introduce la frase:</label><br>
        <textarea id="frase" name="frase" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Transformar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function transformarFrase($frase_original) {
            $longitud = strlen($frase_original);  //strlen te da la longitud de la frase original
            $frase_transformada = []; //array de la frase transformada para ir metiendo cada una de als letras

            for ($i = 0; $i < $longitud; $i++) {
                if ($i % 2 == 0) {
                    // añado las posiciones pares desde el principio 
                    $frase_transformada[] = $frase_original[$i]; 
                }
            }

            // con este for añado las posiciones impares de manera inversa empezando desde el final 
            for ($i = $longitud - 1; $i >= 0; $i--) {
                if ($i % 2 != 0) {
                    $frase_transformada[] = $frase_original[$i];
                }
            }

            // convierto el array en una cadena para poder mostrarla por pantalla
            return implode('', $frase_transformada); 
        }

        $frase = $_POST['frase']; //guardo la frase del usuario y la meto a la variable "frase"
        $resultado = $frase; 

        // Mostrar el resultado
        echo "<h2>Frase transformada:</h2>";
        echo "<p>$resultado</p>";
    }

    // copia index a tu carpeta repositorio (AQUI A QUE TE REFIERES)donde tengas guardado este archivo copias a tu carpeta del repos vale
    // dentro de la carpeta git add . , git commit -m, git push origin main

    // copia el pseudocodgio en el archivo donde tenemos el de los dos y lo mismo
    ?>
</body>
</html>