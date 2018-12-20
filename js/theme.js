// pre-loader
$(window).on('load', function(){
  $('#pre_loader').fadeOut();
});

// menu icon change
function myFunction(x) {
    x.classList.toggle("change");
}

//nav showing for click toggle
$("#toggle").ready(function(){
    $("#toggle_nav").hide();
});
$("toggle_menu,#toggle").click(function(){
    $("#toggle_nav").toggle(350);
});

// Scrool Top Button
// When the user scrolls down 200 from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("scrollTop").style.display = "block";
    // for affix menu
    $("#main_header").addClass("fixedTop0DesktopMenu");
  } else {
    document.getElementById("scrollTop").style.display = "none";
    // for affix menu
    $("#main_header").removeClass("fixedTop0DesktopMenu");
  }
}
// When the user clicks on the button, scroll to the top of the document
function scrollTopFunction() {
  $('html, body').animate({scrollTop:0}, 400); // 400 means 4s
}

