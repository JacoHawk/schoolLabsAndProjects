// set insectLegs as a variable and define the value
let insectLegs = 6;

// allow insectLegs to be changed to whatever value the user wants
function show() {
    let insectLegs=document.getElementById("insect").value;

    window.alert("You said insects have " + insectLegs + " legs!");
}