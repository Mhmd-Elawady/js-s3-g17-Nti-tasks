
let name = prompt("Enter your name: ");
let gpa = prompt("Enter your GPA: ");

function yourResult(name,gpa) {
    let welcome = `Hello ${name}, your result is: `;
    if (gpa < 3) {
        return welcome + " you didn't pass";
    } else {
        return welcome + "Great you passed";
    }
}
console.log(yourResult(name,gpa));
