<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$nome = "Jonas Dhein";
$cidade = "Teutônia";
$idade = 33;

echo "<h4>Olá, me chamo {$nome}, moro em {$cidade} e tenho {$idade} anos</h4>";

$pre_formatado = "<h4>Olá, me chamo %s, moro em %s e tenho %d anos</h4>";
printf($pre_formatado, $nome, $cidade, $idade);

var_dump([
    "variavel" => $idade
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
$true2 = "true";

$idade_pessoa = 19;

$maior_idade = ($idade_pessoa >= 18);

echo "MAIOR DE IDADE = " . ($maior_idade ? "SIM" : "NÃO");

var_dump([$true, $false, $maior_idade, $true === $true2]);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);
//uma variável que nos retorna uma rotina ou um valor. Tem um retorno que é executado

$code = "<h3>Título H3</h3><h4>Título H4</h4>";
$cleanCode = call_user_func("strip_tags", $code);

echo $code;
echo $cleanCode;

var_dump([
    'code' => $code,
    'cleanCode' => $cleanCode
]);

$retorno = function($val1, $val2){
    echo "Saída = " . ($val1 + $val2);
};

$retorno(5, 10);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Jonas Dhein";
$array = array("Olá", "Mundo");

$objeto = new stdClass();
$objeto->nomeCompleto = $string;
$objeto->idade = 33;

$int = 10;
$float = 127.50;
$null = null;

var_dump([
    $string,
    $array,
    $objeto,
    $int,
    $float,
    $null
]);

fullStackPHPClassSession("exercícios", __LINE__);
/*
    1 - Crie dois objetos com os atributos nome e idade.
    Preencha os atributos dos dois objetos e em seguida 
    faça um teste mostrando qual é a pessoa que possui a 
    idade mais avançada.
*/

$pessoa1 = new stdClass();
$pessoa1->nome = "Jorge";
$pessoa1->idade = 22;

$pessoa2 = new stdClass();
$pessoa2->nome = "Julia";
$pessoa2->idade = 30;

if($pessoa1->idade > $pessoa2->idade){
    echo $pessoa1->nome . " é a pessoa com mais idade";
}else if($pessoa2->idade > $pessoa1->idade){
    echo $pessoa2->nome . " é a pessoa com mais idade";
}else{
    echo "Ambos possuem a mesma idade";
}

/*
    2 - Dado o seguinte texto: <p>Olá <span><i>mundo</i><span><p>,
    realize um comando ECHO que consiga mostrar o texto sem as
    marcações em HTML.
*/

$codigoHtml = "<h2>Olá <i>mundo</i></h2>";
$codigoLimpo = call_user_func("strip_tags", $codigoHtml);


echo $codigoHtml;
echo $codigoLimpo;