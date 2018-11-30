$(document).ready(function(){
  $('.owl-carousel').owlCarousel();

    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1200:{
            items:4
        }
    }
})

$(".fancybox").fancybox();


    // if(window.location.href.indexOf("index.html") > -1) 
    // {
    //      $(".navbar-selected").text("Inicio");
    // }

    // else if(window.location.href.indexOf("consultoria-corporativa.html") > -1) 
    // {
    //      $(".navbar-selected").text("Consultoría Corporativa");
    // }

    // else if(window.location.href.indexOf("experiencias-interculturales.html") > -1) 
    // {
    //      $(".navbar-selected").text("Experiencias Interculturales");
    // }

    // else if(window.location.href.indexOf("programas-exterior.html") > -1) 
    // {
    //      $(".navbar-selected").text("Programas en el Exterior");
    // }

    // else if(window.location.href.indexOf("traducciones-interpretaciones.html") > -1) 
    // {
    //      $(".navbar-selected").text("Traducciones");
    // }


});