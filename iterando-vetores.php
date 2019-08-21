<?php
$candidatos =[
    'Bolsonaro',
    'Temer',
    'Dilma',
    'Lula',

];
/*
//depuração do codigo
print "<pre>";
var_dump ($candidatos); //explora o canteudo da variavel
print "</pre>";
*/

print"<h1> Com foregh </h1>";

foreach ($candidatos as $key => $value) {
    print"<p> $value</p>";
}

for ($i=0; $i < sizeof($candidatos); $i++) { 
    print "<p>" . $candidatos[$i]. "</p>";
}

print "<p>Indice: $i </p>";