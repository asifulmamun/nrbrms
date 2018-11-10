// this is them js

// menu js


// // Menu-toggle button
// $(document).ready(function() {
//     $(".menu-icon").on("click", function() {
//           $("nav ul").toggleClass("showing");
//     });
// });

// // Scrolling Effect
// $(window).on("scroll", function() {
//     if($(window).scrollTop()) {
//           $('#header').addClass('hideed');
//     }

//     else {
//           $('nav').removeClass('black');
//     }
// })


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