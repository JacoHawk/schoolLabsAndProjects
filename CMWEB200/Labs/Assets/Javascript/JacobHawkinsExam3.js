$(document).ready(function(){
    $("button").click(function(){
      $("#fade3").fadeIn();
      $("#fade2").fadeIn(1000);
      $("#fade1").fadeIn(2000);
    });
  });