<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$curso = "Técnico em Informática";

var_dump([
    "string" => $curso,
    "strlen" => strlen($curso),
    "mb_strlen" => mb_strlen($curso),
    "substr" => substr($curso, 11),
    "mb_substr" => mb_substr($curso, 11),
]);

/*  ***EXERCÍCIO***
    1 - Crie um vetor com 5 palavras e através de um laço de repetição, identifique
    a quantidade de letras em cada palavra

    2 - Crie um laço de repetição que transforme cada palavra para maiúsculo 
*/

$vet_palavras = ["Maça", "Abacaxi", "Luva", "Vinícius", "Kleber"];

var_dump([
    $vet_palavras,
]);
$contador = 0;
while($contador < count($vet_palavras)){

    $letras = mb_strlen($vet_palavras[$contador]);
    echo "<h5>A palavra {$vet_palavras[$contador]} tem {$letras} letras</h5>";

    $contador++;
}

$contador = 0;
while($contador < count($vet_palavras)){

    $transform = mb_strtoupper($vet_palavras[$contador]);
    echo "<h5>A palavra {$vet_palavras[$contador]} = {$transform}</h5>";

    $contador++;
}

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$curso = "TÉCNICO em informática";

var_dump([
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" => mb_strtolower($curso),
    "mb_convert_case UPPER" => mb_convert_case($curso, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($curso, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($curso, MB_CASE_TITLE),
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$substituicao = "Programação para Internet"; //Desenvolvimento para Mobile

echo "<h5>{$substituicao}</h5>";

echo "<h5>" . str_replace("Internet", "Mobile", $substituicao) . "</h5>";

echo "<h5>" . str_replace(["Programação","Internet"], 
                array("Desenvolvimento","Mobile"), $substituicao) . "</h5>";

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$site = "https://www.google.com.br/search?q=univates&source=hp&ei=PEBPY4_CKInM1sQPu_ukmAQ&iflsig=AJiK0e8AAAAAY09OTHPSTSx2z6xaHoD1LqcoykcExz5v&ved=0ahUKEwiP0LavgOv6AhUJppUCHbs9CUMQ4dUDCAg&uact=5&oq=univates&gs_lcp=Cgdnd3Mtd2l6EAMyCwgAEIAEELEDEIMBMgsIABCABBCxAxCDATIFCAAQgAQyBQgAEIAEMgsILhCABBDHARCvATIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgoILhDqAhC0AhBDOg0ILhDUAhDqAhC0AhBDOgoIABDqAhC0AhBDOhEILhCABBCxAxCDARDHARDRAzoOCC4QgAQQsQMQgwEQ1AI6CAguELEDEIMBOggILhCABBDUAjoFCC4QgAQ6DgguELEDEIMBEMcBENEDOggIABCABBCxAzoLCC4QgAQQsQMQgwFQuAZY6Axgxw5oCXAAeACAAQCIAQCSAQCYAQCgAQGwAQo&sclient=gws-wiz";

mb_parse_str($site, $siteComParametros);

var_dump([
    "site" => $site,
    "parametros" => $siteComParametros,
]);