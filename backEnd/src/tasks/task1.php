<?php
define('NEW_LINE', "<br>\n");
$firstArr = [
    "a",
    "b",
    "c",
] ;
var_dump($firstArr, NEW_LINE);
// Naudodamiesi $arr masyvu iš ankstesnės užduoties, 
// išveskite pirmo, antro ir trečio elementų turinį.


echo $firstArr[0] . ' ' . $firstArr[1] . ' ' . $firstArr[2], NEW_LINE;

$secondArr = [
    'a',
    'b',
    'c',
    'd',
];
echo $secondArr[0] . ' + ' . $secondArr[1]. ', ' . $secondArr[2] . ' + ' . $secondArr[3], NEW_LINE;

//Sukurkite $arr masyvą su elementais 2, 5, 3, 9. Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo. 
//Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.
$thirdArr = [
    2,
    5,
    3,
    9,
];
$result = ($thirdArr[0] * $thirdArr[1]) + ($thirdArr[2] * $thirdArr[3]);
echo $result, NEW_LINE;

//Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.

$forthArr = [];
for ($i=1; $i <= 5; $i++) { 
    $forthArr[$i] = $i;
};
