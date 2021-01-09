// призентация 9-10 задача 1
function arrFunc () {
    return [Math.random(), Math.random(), Math.random()];
}
arrFunc();

//задача 2
function stringCounter (str) {
    return str.split(" ").length;
}
stringCounter("HTML, CSS, PHP");

//задача 3
function reverseString (str) {
    return str.split("").reverse().join("");
}
reverseString("HTML, CSS, PHP");

//ES6
const revString = (str) => {
    let i = str.length - 1;
    let result = '';

    while (i >= 0) {
        result += str[i];
        i -= 1;
    }

    return result;
}
revString("HTML, CSS, PHP");

//задача 4
function excFunc (str) {
    let result = 0;
    for (let i = 0; i < str.length; i++) {
         result = str.length;
    }
    return result;
}
excFunc("HTML, CSS, PHP");