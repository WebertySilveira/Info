<?php

require __DIR__ . "/vendor/autoload.php";

$challenge[0] = new \Src\Challenge\Century();
$challenge[0]->setYear(1700);
$challenge[0]->centuryFromYear();
echo("Ano: " . $challenge[0]->getYear()) . "<br>";
echo("Século: " . $challenge[0]->getCentury());

echo("<hr>");

$challenge[1] = new \Src\Challenge\PrimeNumber();
$challenge[1]->primeNumberRange(10, 29);
echo("Números Primos: ");
foreach($challenge[1]->getNumbers() as $value){
    echo($value . " ");
}

echo("<hr>");

$challenge[2] = new \Src\Challenge\NonRepeated();
$challenge[2]->repeatedValue([2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]);

echo("Valores Que Não Repetem: ");
foreach($challenge[2]->getList() as $value)
{
    echo($value . ' ');
}