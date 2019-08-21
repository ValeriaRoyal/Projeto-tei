<?php
$clubes =[
    "São Paulo" => "Palmeiras",
    "Rio de janeiro" => "Flamengo",
    "Minas Gerais" => "Cruzeiro"
    
];

print "<h1> Com forech </h1>";


$clubes["Espirito Santo"] = "Vitória";
$clubes[1] = "Corinthias";
$clubes[] = "Santos";
$clubes[TRUE] = "São paulo";
$clubes[FALSE] = "Vasco";
$clubes[NAN] = "Avaí";
$clubes[12.5] = "Barsa";


foreach ($clubes as $key => $value) {
    print"<p>Cidade: $key | Clubes: $value</p>";
}
