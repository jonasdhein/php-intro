<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
echo fullStackPHPClassName("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 10;

echo "<h5>operadorA = {$operadorA}</h5>";
$operadores = [
    "operadorA += 5" => $operadorA += 5, //15
    "operadorA -= 5" => $operadorA -= 5, //10
    "operadorA *= 5" => $operadorA *= 5, //50
    "operadorA /= 5" => $operadorA /= 5, //10
];

var_dump($operadores);

$operadorB = 5;

echo "<h5>operadorB = {$operadorB}</h5>";
$incrementos = [
    "pós-incremento" => $operadorB++, //5
    "res-incremento" => $operadorB, //6
    "pré-incremento" => ++$operadorB, //7
    "pós-decremento" => $operadorB--, //7
    "res-decremento" => $operadorB, //6
    "pré-decremento" => --$operadorB, //5
];

var_dump($incrementos);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$varA = 5; //int
$varB = "5"; //string
$varC = 4; //int

$comparacoes = [
    "a == b" => ($varA == $varB), //valor é igual?
    "a === b" => ($varA === $varB), //valor e tipo são iguais?
    "a != b" => ($varA != $varB), //valores são diferentes?
    "a !== b" => ($varA !== $varB), //valores e tipo são diferentes?
    "a > c" => ($varA > $varC),
    "a < c" => ($varA < $varC),
];

var_dump($comparacoes);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("operadores lógicos", __LINE__);

$pessoa = new stdClass();
$pessoa->idade = 18;
$pessoa->possui_hab = true;
$pessoa->bebeu = false;

$logicos = [
    "&&" => ($pessoa->idade >= 18 && $pessoa->possui_hab),
    "||" => ($pessoa->possui_hab || $pessoa->bebeu),
];

var_dump($logicos);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 12;
$calcB = 3;

$calculos = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB), //resto da divisão de ambos
];

var_dump($calculos);

fullStackPHPClassSession("exercícios", __LINE__);
/*
    1 - Crie um array com 10 números inteiros e através 
    de um laço de repetição, diga quantos destes números são
    pares.
*/

$numeros = array(1,2,3,4,5,6,7,8,9,10);
$num_pares = 0;

for ($var=0; $var < count($numeros); $var++) { 
    $valor = $numeros[$var];

    if($valor % 2 == 0){
        $num_pares++;
    }
}

echo "TOTAL DE PARES = " . $num_pares;