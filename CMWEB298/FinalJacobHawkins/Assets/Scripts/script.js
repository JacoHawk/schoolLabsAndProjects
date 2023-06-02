function checkFavoriteNumber() {
  var favoriteNumber = document.getElementById("favorite-number").value;

  if (favoriteNumber < 100) {
    document.getElementById("result").innerHTML = "Your favorite number is 100 or less, and here's a picture of Toby!";
    document.getElementById("result").appendChild(document.createElement("img")).src = "Assets/Images/toby.jpeg";
  } else if (favoriteNumber >= 100) {
    document.getElementById("result").innerHTML = "Your favorite number is over 100, and here's a picture of Winston!";
    document.getElementById("result").appendChild(document.createElement("img")).src = "Assets/Images/winnie.jpeg";
  } else {
    document.getElementById("result").innerHTML = "You did not enter a number";
  }
}
