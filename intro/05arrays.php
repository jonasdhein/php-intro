<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$array = [
    "Javascript",
    "PHP",
    "Java"
];

$assoc = [
    "Lang2" => "Javascript",
    "Lang1" => "PHP",
    "Lang3" => "Java",
];

array_unshift($array, "C#", "C++"); //adicionando novos itens na frente do vetor

array_push($array, "Assembly"); //adiciona um novo elemento no final do vetor

var_dump($array, $assoc);

$novo_array = ["Ruby", "React"] + $array;

$novo_assoc = ["Lang4" => "C#"] + $assoc;

var_dump($novo_array, $novo_assoc);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$novo_assoc_ksort = $novo_assoc;

//asort($novo_assoc); //ordenação através do valor do item e mantem a chave ao invés de retornar apenas o índice

echo "<h6>ordenação através do valor do item</h6>";
sort($novo_assoc); //ordenação através do valor do item
var_dump($novo_assoc);

echo "<h6>ordenação através da chave do índice - array associativo</h6>";
ksort($novo_assoc_ksort); //ordenação através da chave do índice - array associativo
var_dump($novo_assoc_ksort);


$reverse_array = [
    "A","B","F","Z","X"
];

echo "<h6>ordenação reversa do valor do item</h6>";
$novo_reverse_array = array_reverse($reverse_array, true);
var_dump($novo_reverse_array);

/*
    1 - Segue o ARRAY:
        ["A", "B", "X", "Z", "F", "E", "J", "Ç"]
        -> Imprima este array de forma alfabética
        -> Imprima este array de forma alfabética ao contrário 
*/

/*
 * [ verificação ]  keys | values | in | implode | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    array_keys($array),
    array_values($array)
);

echo "<h5>Verificar se existe PHP dentro do array</h5>";
if(in_array("PHP", $array)){
    echo "TEM PHP!";
}

$separator = ", ";

//implode
$arrayToString = implode($separator, $array);

echo "<h4>Array em String: " . $arrayToString . "</h4>";

//explode
$arrayDeNovo = explode($separator, $arrayToString);
echo var_dump($arrayDeNovo);
