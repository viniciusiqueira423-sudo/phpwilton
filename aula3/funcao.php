<?php 
// funções
//funcao Olá mundo
// function olaMundo(){
//     echo "Olá, mundo!";
// };
// function olaTi101(){
//     echo "Olá, turma de TI101!";
// };
// function olaWell(){
//     echo "Olá, professor Wellington!";
// };
// //chamando a função
// olaMundo();
// olaTi101();
// olaWell();


// // função com parâmetros
// function saudacao($nome){
//     echo "Olá, $nome!";
// };
// saudacao("Vinicius");

// function soma($a, $b){
//     return $a + $b;
// };
// // multi - sub - div
// function multi($a, $b){
//     return $a * $b;
// };
// function sub($a, $b){
//     return $a - $b;
// };
// function div($a, $b){
//         return $a / $b;
// };
// $resultadoSoma = soma(10, 20);
// echo "O resultado da soma é: " . $resultado . "<br>";
// $resultadoMulti = multi(10, 20);
// echo "O resultado da multiplicação é: " . $resultadoMulti . "<br>";
// $resultadoSub = sub(10, 20);
// echo "O resultado da subtração é: " . $resultadoSub . "<br>";
// $resultadoDiv = div(10, 20);
// echo "O resultado da divisão é: " . $resultadoDiv . "<br>";

// // funcao para calcular a média de 3 números
// function media($a, $b, $c){
//     return ($a + $b + $c) / 3;
// };
// $resultadoMedia = media(5, 7, 8);
// echo "O resultado da média é = $resultadoMedia";

// //funcao para converter para maiúscula
// function maiuscula($texto){
//     return strtoupper($texto);
// };
// echo maiuscula("programando com php"); //imprime "PROGRAMANDO COM PHP"

// funcao para converter para minúscula
function minuscula($texto){
    return strtolower($texto);
};
echo minuscula("PROGRAMANDO COM PHP"); //imprime "programando com php"

?>