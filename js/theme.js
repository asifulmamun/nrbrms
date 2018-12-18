// menu icon change
function myFunction(x) {
    x.classList.toggle("change");
}

//nav showing for click toggle
$("#toggle").ready(function(){
    $("#toggle_nav").hide();
});

$("#toggle").click(function(){
    $("#toggle_nav").toggle(500);
});

// Scrool Top Button
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollTop").style.display = "block";
  } else {
    document.getElementById("scrollTop").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function scrollTopFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}