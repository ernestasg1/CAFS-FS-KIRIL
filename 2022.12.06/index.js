let bandMembers = 0;
let answer = '';
if (bandMembers > 4){
    answer = 'didelė grupė';
} else if (bandMembers > 3) {
   answer = 'kvartetas';
}else if (bandMembers > 2){
    answer = 'trio';
}else if (bandMembers > 1){
    answer = 'duetas';
}else if (bandMembers > 0){
    answer = 'solo'
} else {
    answer = 'ne grupė';
}
console.log(answer)