// Made by Zua (Zavaar Shah) @ https://github.com/thatziv

// init side nav 
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
//Preloader
$(window).on("load", function() {
fadeout = 420;
function hidePreloader() {
var preload = $('.spinner-wrapper');
preload.fadeOut(fadeout);
}
hidePreloader();
});

