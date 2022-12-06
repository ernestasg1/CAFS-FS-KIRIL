/*Funkcija grąžins true, jei parametro amžius yra didesnis nei 18 metų.*/

function checkAge(age) {
    return (age > 18) ? true : 'did parents allow you?';
}

console.log(checkAge(20));