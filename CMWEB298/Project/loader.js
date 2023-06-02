document.addEventListener("DOMContentLoaded", function () {
  var loader = document.getElementById("loader");

  function hideLoader() {
    loader.style.display = "none";
  }

  setTimeout(hideLoader, 500); // Adjust the timeout duration as needed
});
