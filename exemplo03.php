<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $numero = $_POST["numero"];
    if($numero >= 0) {
       echo "Número maior que 0 ";

    }else {
        echo "O Número é negativo ";
    } 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>EXEMPLO03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
     <h2>Verifique o número </h2>

    <form action="#" method="post">
        <label for = "numero">Número</label>
        <input type="number" name="numero" min="-100" max="100"  required>
        <button type="submit"> Verificar </button> 
        















    </form>
    </div>
    
</body>
</html>