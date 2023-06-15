const selector = document.getElementById("selector");
const contents = document.querySelectorAll(".content");

selector.addEventListener("change", function () {
  const selectedOption = selector.value;

  // Hide all content divs
  contents.forEach(function (content) {
    content.style.display = "none";
  });

  // Show the content div corresponding to the selected option
  const selectedContent = document.getElementById(selectedOption);
  if (selectedContent) {
    selectedContent.style.display = "block";
  }
});
