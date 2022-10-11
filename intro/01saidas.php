<?php //->ABERTURA DO BLOCO PHP
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
//imprime um valor na tela

$hello = 'Olá Mundo';
$univates = "UNIVATES";

echo "<h1>{$hello}</h1>"; //HTML dentro do PHP

//, = juntar os textos em um comando ECHO
echo "<h1>Hello, world!</h1>", "<h2>Hello, world!</h2>", "<h3>Hello, world!</h3>";

echo "<h5>" . $hello . "</h5>";

echo "<h6>" . $hello . "</h6>";

echo '<span class="tag">' . $hello . '</span>';

//->SINAL DE FECHAMENTO DO BLOCO PHP
?>

<h2><?= $univates //PHP dentro do HTML ?></h2>

<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
//Faz a mesma coisa que o comando echo

print("<h1>Olá Mundo</h1>");

print "<h2>Olá Mundo</h2>";

print "<h3>Hello, " . " World!</h3>";

print "<h3>Olá: {$univates}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
//imprime um array

$array = ["Teutônia", "Lajeado", "Estrela"];

print_r($array);

$vetor = print_r($array, true);

echo "<pre>" . $vetor . "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
//dar uma saída em uma variável pré-formatada, exemplo seria um artigo

$article = "<article><h2>%s</h2><p>%s</p></article>";
$titulo = "Título da Notícia";
$noticia = "Texto da notícia";

printf($article, $titulo, $noticia);
sprintf($article, $titulo, $noticia); //mesma coisa do de cima, porém em forma de retorno

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
//mesma coisa do printf, porém agora passando um array como argumento

$company = "<article><h1>Instituição: %s</h1><h3>Curso: %s</h3></article>";

$array_company = ["UNIVATES", "Técnico em Informática"];

vprintf($company, $array_company);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array_company, $array);