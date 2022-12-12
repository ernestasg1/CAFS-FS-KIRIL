// Parašykite „JavaScript“ funkciją, kuri grąžina perduotą eilutę su raidėmis abėcėlės tvarka.
 

function alphabetOrder(string){
    return [...string].sort().join('');
}

console.assert(alphabetOrder('abca') == 'aabc');