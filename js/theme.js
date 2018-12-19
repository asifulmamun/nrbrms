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
// When the user scrolls down 200 from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("scrollTop").style.display = "block";
    // for affix menu
    $("#main_header").addClass("fixedTop0DesktopMenu");
    // document.getElementById("main_header").style.position = "fixed";
    // document.getElementById("main_header").style.top = "0px";
  } else {
    document.getElementById("scrollTop").style.display = "none";
    // for affix menu
    $("#main_header").removeClass("fixedTop0DesktopMenu");
    // document.getElementById("main_header").style.position = "absolute";
  }
}
// When the user clicks on the button, scroll to the top of the document
function scrollTopFunction() {
  $('html, body').animate({scrollTop:0}, 400); // 400 means 4s
}

