$(document).ready(function () {
  $('.my-slider').slick({
    slidesToShow: 3.6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: false,
    autoplaySpeed: 5000,
    autoplay: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
