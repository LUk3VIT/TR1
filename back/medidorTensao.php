<?php

$tensao01 = $_POST["tensao01"];
$tensao02 = $_POST["tensao02"];
$potencia = $_POST["potencia"];
$raizDe3 = 1.732;

$corrente01 = $potencia / $tensao01 / $raizDe3;
$corrente01 = number_format($corrente01, 2, '.', '');
round($corrente01, 2, PHP_ROUND_HALF_UP);
$corrente02 = $potencia / $tensao02 / $raizDe3;
$corrente02 = number_format($corrente02, 2, '.', '');
round($corrente02, 2, PHP_ROUND_HALF_UP);


$NominalTc = 600;
$NEspirasAT = $NominalTc / $corrente01; 
$NEspirasAT = number_format($NEspirasAT, 0, '.', '');
round($NEspirasAT, 2, PHP_ROUND_HALF_UP);
$NEspirasBT = $NominalTc / $corrente02;
$NEspirasBT = number_format($NEspirasBT, 0, '.', '');
round($NEspirasBT, 2, PHP_ROUND_HALF_UP);


$corenteAT = $NominalTc / $NEspirasAT;
$corenteAT = number_format($corenteAT, 2, '.', '');
round($corenteAT, 2, PHP_ROUND_HALF_UP);
$corenteBT = $NominalTc / $NEspirasBT;
$corenteBT = number_format($corenteBT, 2, '.', '');
round($corenteBT, 2, PHP_ROUND_HALF_UP);


$medidorAT = $corrente01 / ($corenteAT / $NEspirasAT);
$medidorAT = number_format($medidorAT, 2, '.', '');
round($medidorAT, 2, PHP_ROUND_HALF_UP);
$medidorBT = $corrente02 / ($corenteBT / $NEspirasBT);
$medidorBT = number_format($medidorBT, 2, '.', '');
round($medidorBT, 2, PHP_ROUND_HALF_UP);



echo "Calculo da corrente <br/><br/>";
echo "Corrente da AT: " . $corrente01 . "<br/>";
echo "Corrente da BT: " . $corrente02 . "<br/><br/>";

echo "Calculo de Teste em curto <br/><br/>";
echo "Numero de espiras AT: " . $NEspirasAT . "<br/>";
echo "Corrente da AT: " . $corenteAT . "<br/><br/>";
echo "Numero de espiras BT: " . $NEspirasBT . "<br/>"; 
echo "Corrente da BT: " . $corenteBT  . "<br/><br/>";

echo "medidor de alta Tensão: " . $medidorAT . "<br/>"; 
echo "medidor de baixa Tensão: " . $medidorBT ."<br/>";


echo '<a href="../index.html">Voltar</a>';
