<?php

$NominalTc = 600;
$NEspiras = $_POST["NEspiras"];

$corente = $NominalTc / $NEspiras;

echo "calculo do teste em Curto é: " . $corente ."<br/>";

echo '<a href="../index.html">Voltar</a>';