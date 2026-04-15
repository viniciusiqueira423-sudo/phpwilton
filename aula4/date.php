<?php 
// datas
// echo date("d/m/Y");

// $data = date("d/m/Y");
// echo "<br>";
// echo "A data de hoje é $data";
/* tabela de formatação de data
| Codigo | Significado | Exemplo |
|------- |-------------|---------|
|   d    |    dia      | 01 a 31 |
|   m    |    mês      | 01 a 12 |
|   Y    |    ano      | 2026    | 
|   H    |    hora     | 00 a 23 |
|   i    |    minuto   | 00 a 59 |
|   s    |    segundo  | 00 a 59 |
*/

// date_default_timezone_set("America/Sao_Paulo");
// echo date("d/m/Y H:i:s");


// forma moderna de trabalhar com datas
// $data = new DateTime());
// echo ("data atual: ". $data);
// echo $data->format("d/m/Y");

// calcular a diferença entre duas datas
// $data1 = new DateTime("2026-04-01");
// $data2 = new DateTime("2026-04-15");

// // uso do método diff para calcular a diferença entre as datas
// $diferenca = $data1->diff($data2);
// // ->days para obter a diferença em dias
// echo $diferenca->days ." dias";
// //  $data é um objeto da classe DateTime, e o método diff retorna um objeto
// //  da classe DateInterval, que possui a propriedade days que representa a 
// // diferença em dias entre as duas datas.


// // calcular a idade de uma pessoa
// $dataNascimento = new DateTime("2008-04-18"); //criando um objeto DateTime com a data de nascimento
// $hoje = new DateTime(); //criando um objeto DateTime com a data atual (sem parâmetros, ele pega a data atual)
// $idade = $hoje->diff($dataNascimento); //calculando a diferença entre a data atual e a data de nascimento, o resultado é um objeto DateInterval que representa a idade da pessoa
// echo "Idade: " . $idade->y . " anos"; // Imprime a idade em anos 




?>