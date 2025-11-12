<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["valor"];
    $media = $numero1 / 2;
    if($media = 0 ) { 
    echo "o resultado  é : par  ";
        
    }else{

    echo "O resultado  é  impar : " ;
    }
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Verificador </title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

 

<div class="container">

    <h2>Verifique sua Média</h2>

 

    <form method="POST">

        <label for="valor">Digite o Número :</label>

        <input type="number"  name="valor"  id="valor" required>



 

        <button type="submit">Calcular Média</button>

    </form>

 

 

</div>

 

</body>

</html>

 

