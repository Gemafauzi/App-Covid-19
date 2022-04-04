$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('scroll load',function(){

      $('#menu').removeClass('fa-times');
      $('.navbar').removeClass('nav-toggle');

      if($(window).scrollTop() > 0){
        $('.scroll-top').show();
      }else{
        $('.scroll-top').hide();
      }

      // scroll spy 

      
    $('section').each(function(){

      let height = $(this).height();
      let offset = $(this).offset().top - 200;
      let id = $(this).attr('id');
      let top = $(window).scrollTop();

      if(top > offset && top < offset + height){
        $('.navbar ul li a').removeClass('active')
        $('.navbar').find(`[href="#${id}"]`).addClass('active');
      }

    });

    });

    // smooth scrolling

    $('a[href*="#"]').on('click',function(e){

      e.preventDefault();

      $('html, body').animate({

        scrollTop : $($(this).attr('href')).offset().top,

      },
      500,
      'linear'
      )

      

    })

    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  }); 




anime.timeline({loop: true})
  .add({
    targets: '.ml15 .word',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
  }).add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });



 // Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });


});