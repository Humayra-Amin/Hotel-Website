// jQuery(document).ready(function() {
//     jQuery('.slider').slick({
//         // Slick slider options and configurations go here
//         // For example:
//         dots: true,
//         infinite: true,
//         speed: 500,
//         slidesToShow: 1,
//         adaptiveHeight: true
//     });
// });




jQuery(document).ready(funtion(){

jQuery('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  jQuery('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });
});