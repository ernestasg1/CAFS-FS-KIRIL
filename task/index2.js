const firstInp = document.getElementById('firstInp');
const secondInp = document.getElementById('secondInp');
const btn = document.getElementById('button');

btn.addEventListener("click",() => {
    secondInp.value = firstInp.value
    firstInp.value = ""
});