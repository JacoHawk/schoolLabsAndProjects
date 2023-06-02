let name = window.prompt("What is your name?")
let n1 = parseInt(window.prompt("Please enter a number:"))
let n2 = parseInt(window.prompt("Please enter a second number:"))
let n3 = parseInt(window.prompt("Please enter a third number:"))

function calc() {
    let added = n1 + n2 + n3
    let sub = n1 - n2 - n3
    let mult = n1 * n2 * n3
    let div = n1 / n2 / n3

    div = div.toFixed(3)

    document.getElementById("return").innerHTML = `Hello, ${name}, and thanks for visiting my site!<br> The three numbers you entered were ${n1}, ${n2}, and ${n3}.<br> Those numbers added together is ${added}.<br> Those numbers subtracted is ${sub}.<br> Multiplied together, they equal ${mult}.<br> When divided, they equal ${div}.`
}