<?php
$clubes =[
    "São Paulo" => "Palmeiras",
    "Rio de janeiro" => "Flamengo",
    "Minas Gerais" => "Cruzeiro"
    
];

print "<h1> Com forech </h1>";

/*
foreach ($clubes as $key => $value) {
    print"<p>Cidade: $key | Clubes: $value</p>";
}
*/

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sintaxer alternativa</title>
</head>
<body>
   <!--table[border=1]>tr*2>td*2 -->
    <table border=1>
        <tr>
            <th>Cidade</td>
            <th>Clube</td>
        </tr>
        <?php foreach ($clubes as $key => $value):  ?>
        <tr>
            <td><?= $key; ?></td>
            <td><?= $value;?></td>
        </tr>
        <?php endforeach?>
    </table>
    
</body>
</html>