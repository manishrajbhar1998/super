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
  
  //  click event on toggle menu
     $nav = $('.nav');
     $toggleCollapse = $('.toggle-collapse')
  
     $toggleCollapse.click(function (){
      //    alert('hello');
         $nav.toggleClass('collapse');
     })
  
    //    owl-crousel for blog
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
    $('.move-up span').click(function(){
      $('html,body').animate({
        scrollTop:0
      },1000);
    })
  
    //  AOS Animation
    AOS.init();
  });
  // ----------X-------- Jquery js ----------X---------
  
  // ------------- custom js --------------------
  // header image flip 
//   let header_img = document.getElementById('header-img');
  
//   setInterval(function(){
//     if(header_img.src == "./assets/landing/slide.jpg"){
//       header_img.src = "./assets/landing/statu.jpg";
//     }else{
//       header_img.src = "./assets/landing/slide.jpg";
//     }
    
//   },3000);
//   setInterval(function(){
//     if(header_img.src == "./assets/landing/statu.jpg"){
//       header_img.src = "./assets/landing/slide.jpg";
//     }else{
//       header_img.src ="./assets/landing/statu.jpg";
//     }
//   },6000);
  // ---------X------- custom js ----------X----------
  