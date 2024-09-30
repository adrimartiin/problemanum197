<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrador de Frases</title>
</head>
<body>
    <form method="post">
        <label for="frase"> Frase </label>
        <br>
        <input type="text" id="frase" name="frase">
        <br>
        <br>
        <input type="submit" value="Descifrar">
    </form>
</body>
</html>

<?php
    if(isset($_POST["frase"])){
            $x = trim($_POST["frase"]);
            $x_prima = array();
            $segmento = "";

            for($i = 0;  $i < strlen($x); $i++){
                $parte_segmento = $x[$i];

                if(!isVocal($parte_segmento) && $parte_segmento !== " "){
                    $segmento .= $parte_segmento; 
                } else {
                    if($segmento !== ""){
                        $x_prima[] = strrev($segmento);
                        $segmento = "";
                    }
                    $x_prima[] = $parte_segmento;
                }

                if($segmento !== ""){
                    $x_prima[]  = strrev($segmento);
                }
    }

    $resultado = implode('', $x_prima);
    echo "$x => $resultado\n";

}
function isVocal($palabra){
    return in_array(strtolower($palabra), ['a', 'e', 'i', 'o', 'u']);
}

?>