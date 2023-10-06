<?php

$tensao01 = $_POST["tensao01"];
$tensao02 = $_POST["tensao02"];
$potencia = $_POST["potencia"];
$raizDe3 = 1.732;

$corrente01 = $potencia / $tensao01 / $raizDe3;
$corrente02 = $potencia / $tensao02 / $raizDe3;

echo "Corrente <br/>";
echo "A corente de ", $tensao01," é: ", $corrente01 ,"A <br/>";   
echo "A corente de ", $tensao02," é: ", $corrente02 ,"A <br/>";


echo '<a href="../index.html">Voltar</a>';

