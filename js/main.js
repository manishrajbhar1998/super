// ------------------ Jquery js -------------------
const responsive = {
  0:{
    item:1
   },
   320:{
     items:1
   },
   560:{
     items:2
   },
   950:{
     items:3
   }
}

$(document).ready(function(){

   //   owl-crousel for blog
  $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    dots:false,
    nav:true,
    navText:[$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
    responsive: responsive
  });

  // click to scrole top
  // $('.move-up span').click(function(){
  //   $('html,body').animate({
  //     scrollTop:0
  //   },1000);
  // })

  //  AOS Animation;
  AOS.init();
});



