<?php

/*
1 - Crie um array com 5 registros e imprima na tela, 
o array deve armazenar valores do tipo string;
*/

$array = array("1", "2", "3", "4", "5");
$array2 = ["1", "2", "3", "4", "5"];

$array3[] = "1";
$array3[] = "2";
$array3[] = "3";
$array3[] = "4";
$array3[] = "5";

echo var_dump($array);

/*
2 - Realize uma inserção no início do array com 
um novo item e imprima o resultado em tela;
*/

array_unshift($array, "0"); //adiciona na frente do vetor
array_push($array, "6"); //adiciona um novo elemento no final do vetor

echo var_dump($array);

/*
3 - Utilize a função in_array para localizar um determinado elemento dentro do array, 
realize o teste duas vezes, uma com um item que existe e outra com um item 
inexistente no array, imprima o resultado da consulta em tela 
(Existe ou não existe tal informação);
*/

function verificaExistencia($info, $array)
{
    if (in_array($info, $array)) {
        echo "<p>{$info} existe dentro do vetor!</p>";
    } else {
        echo "<p>{$info} não existe dentro do vetor!</p>";
    }
}

verificaExistencia("7", $array);
verificaExistencia("8", $array);
verificaExistencia("-1", $array);
verificaExistencia("2", $array);

/*
4 - Crie uma variável com uma frase qualquer e através de um método em PHP 
identifique o tamanho de caracteres presentes na frase;
*/

$frase = "Um método em PHP qualquer";

print($frase . "</br>");
print(strlen($frase) . "</br>"); //não reconhece corretamente caractéres especiais ou acentuados
print(mb_strlen($frase)); //reconhece caractéres especiais ou acentuados

/*
5 - Converta a frase acima para CARACTERES MAIÚSCULOS, faça isso de duas formas, 
com os dois exemplos que vimos em aula.
*/

echo "<h2>" . mb_strtoupper($frase) . "</h2>";

converter($frase, 1);
converter($frase, 2);
converter($frase, 3);

function converter($string, $modo)
{
    if ($modo == 1)
        echo "<h2>" . mb_convert_case($string, MB_CASE_UPPER) . "</h2>";
    else if ($modo == 2)
        echo "<h2>" . mb_convert_case($string, MB_CASE_LOWER) . "</h2>";
    else if ($modo == 3)
        echo "<h2>" . mb_convert_case($string, MB_CASE_TITLE) . "</h2>";
}
