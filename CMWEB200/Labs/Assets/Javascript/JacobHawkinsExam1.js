function calc() {
    let less=document.getElementById("less").value
    let more=document.getElementById("more").value
    document.getElementById("return").innerHTML=""

    if (isNaN(less)==true || isNaN(more)==true || less == "" || more == "" || less>49 || less<1 || more<50) {
        document.getElementById("return").innerHTML="Please enter a number less than 50 as well as a number that is 50 or more."
    } else {
        let added = parseInt(less) + parseInt(more)
        let mult = parseInt(less) * parseInt(more)

        document.getElementById("return").innerHTML="The first number you entered was " + less + "<br> The second number you entered was " + more + "<br> Those two values added together equals " + added + "<br> Those two values multiplied are " + mult
    }
}