<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $idade =$_POST["idade"];
    if($idade >=18){
       echo "Você é maior de idade ";

    }else{
        echo "Você é menor de idade";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>EXEMPLO01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <div class="container">
     <h2>Verifique sua idade</h2>

    <form action="#" method="post">
        <label for = "idade">Idade</label>
        <input type="number" name="idade" min="0" required>
        <button type="submit"> Verificar </button> 
        















    </form>
    </div>
    
</body>
</html>