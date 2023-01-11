<?php
define('NEW_LINE', "<br>\n");
//Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.
function squereOfNumber($number){
    $result = $number * $number;
    return $result;
} ;

echo squereOfNumber(5), NEW_LINE;
	
//Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.

function sumOfNumber($firstNumber, $secondNumber){
    $sumResult = $firstNumber + $secondNumber;
    return $sumResult;
}
echo sumOfNumber(5,9), NEW_LINE;
	
//Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.

function thirdCalculation ($firstNumber, $secondNumber, $thirdNumber){
    $result = $secondNumber - $firstNumber / $thirdNumber;
    return $result;
}
echo thirdCalculation(10, 20, 2), NEW_LINE;
	
//Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.


function showWeekDay ($number){
    if ($number <= 7 && $number > 0) {
    $arr = [
        'Pirmadienis',
        'Antradienis',
        'Trečiadienis',
        'Ketvirtadienis',
        'Penktadienis',
        'Šeštadienis',
        'Sekmadienis'
    ];
    return $arr[$number-1];
} else {
    return 'Iveskite skaiciu nuo 1 iki 7';
}
}

echo showWeekDay(0);