$(document).foundation();
//$('#home_banner').parallax({imageSrc: 'https://placehold.it/1200x400', speed: .8});
// $(window).scroll(function () {
//    $('.top-bar').css({
//       'top' : -($(this).scrollTop()/8)+"px"
//    });
// });
$( document ).ready(function() {
    $galleryImages = $('.gallery-large').html();
    $('.gallery-medium').html($galleryImages);
    $('.gallery-small').html($galleryImages);
});
