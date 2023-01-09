let headerElement = document.querySelector("h1");

window.addEventListener("resize", () =>{reportWindowSize()});

function reportWindowSize(){
    headerElement.textContent = `Width: ${window.innerWidth}, Height: ${window.innerHeight}.`;
}