colorsArray = ["blue", "green", "yellow", "pink", "orange"]

function run() {
    fname = document.getElementById("name").value 
    age = document.getElementById("age").value 
    document.body.style.backgroundColor = "#222930"
    document.body.style.color = "#E9E9E9"

    if (fname == "" || age < 1 || age > 125 || age == "") {
        document.getElementById("return").innerHTML="Please enter your name and an age ranging from 1 to 125."
    } else {
        document.getElementById("return").innerHTML=`Thank you for visiting my page, ${fname}!`

        if (age >= 1 && age <= 25) {
            document.body.style.backgroundColor = colorsArray[0]
        } else if (age >= 26 && age <= 40) {
            document.body.style.backgroundColor = colorsArray[1]
        } else if (age >= 41 && age <= 55) {
            document.body.style.backgroundColor = colorsArray[2]
            document.body.style.color = "black"
        } else if (age >= 56 && age <= 75) {
            document.body.style.backgroundColor = colorsArray[3]
            document.body.style.color = "black"
        } else if (age >= 76 && age <= 125) {
            document.body.style.backgroundColor = colorsArray[4]
        } 
    }
}