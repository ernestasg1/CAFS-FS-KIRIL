let h1Element = document.querySelector("h1");
let height = window.innerHeight;
let width = window.innerWidth;

btn.addEventListener("click",() => {
 h1Element.textContent = `Ekrano plotis: ${width}, o ekrano aukstis ${height}.`;
});