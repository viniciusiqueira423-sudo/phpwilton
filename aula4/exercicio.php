<?php 
$resultado = "";

if(isset($_POST["enviar"])){
    $frase = $_POST["frase"];

    /*
    A frase sem espaços extras  
    Quantidade de caracteres  
    Frase em maiúsculo  
    Frase em minúsculo  
    Primeira letra de cada palavra maiúscula  
    */ 
    $fraseLimpa = trim($frase);
    $quantidadeCaracteres = strlen($fraseLimpa);
    $fraseMaiuscula = strtoupper($fraseLimpa);
    $fraseMinuscula = strtolower($fraseLimpa);
    $primeiraMaiuscula = ucwords($fraseLimpa);

    $resultado = "Tabela de resultados: <br>
    ° Frase sem espaços extras: $fraseLimpa <br>
    ° Quantidade de caracteres: $quantidadeCaracteres <br>
    ° Frase em maiúsculo: $fraseMaiuscula <br>
    ° Frase em minúsculo: $fraseMinuscula <br>
    ° Primeira letra de cada palavra maiúscula: $primeiraMaiuscula <br>";

}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Strings PHP</title>
</head>

<body>
    <h2>Trabalhando com Strings</h2>
    <form method="post">
        Digite uma frase: <br><br>
        <input type="text" name="frase" size="40" required>
        <br><br>
        <button type="submit" name="enviar">Processar</button>
    </form>
    <br>
    <div>
        <?php echo $resultado; ?>
    </div>
</body>

</html>