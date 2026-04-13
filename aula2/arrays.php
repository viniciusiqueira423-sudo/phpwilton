<?php


// $nomes = [ "Maria", "João", "Pedro", "vinicius"];
// $recebe = $nomes[3];
// echo $recebe;

// $frutas = array("maçã", "laranja", "banana");
// // var_dump($frutas);
// $cestaFrutas = $frutas;
// print_r($cestaFrutas);
// $alunos = [ "leonardo", "ryan", "kauã", "guilherme.S", "vinicius.M", "guilherme.F", "gabriel", "diogo", "julia"];

// $frutas = array("maçã", "laranja", "banana");
// print_r($frutas);
// // adicionando no inicio do array
// array_unshift($frutas, "uva");
// // adicionando no final do array
// array_push($frutas, "abacaxi");

// echo "<pre>"; //formata a saída do array para melhor visualização
// print_r($frutas);
// echo "</pre>";

//estrutura de repetição - loop
// for = para

// for($i=1; $i<=5; $i++){
//     echo "Ti 101 <br>";
// }

//for inicio, condição, incremento
for($i=1; $i<=10; $i++){
    if($i == 5){
        break; //interrompe o loop
    }
    echo "i vale: $i <br>";
}