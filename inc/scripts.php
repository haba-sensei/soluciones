<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>


<script type="text/javascript" src="assets/js/classie.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.js"></script>


<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="assets/js/smooth-scroll.polyfills.js"></script>
<script type="text/javascript" src="assets/js/styleTiping.js" defer></script>

<script type="text/javascript" src="assets/js/jquery.stepy.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-dropdownhover.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js">
</script>
<script type="text/javascript" src="assets/js/cart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script src="assets/plugins/datepicker/bootstrap-datepicker.es.min.js"></script>
<script src="assets/plugins/datepicker/daterangepicker.min.js"></script>



<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
<script src="assets/js/bootstrap-touch-slider.js"></script>

<script>
function modalFrame(id) {
    const screen = window.matchMedia("(max-width: 767px)");

    switch (id) {
        case 1:
        
            if(screen.matches == true){

            var link = document.createElement('a');
            link.href = 'registro/pdf/lista_de_precio.pdf';
            link.download ="lista_de_precio.pdf";
            link.dispatchEvent(new MouseEvent('click'));
           
            }else {
                $("#mostrar1").modal("show");
            }

           
            break;
         

    }



}
var btn = $('#back_to_top');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});
$('.autoplay').slick({
    slidesToShow: 10,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: false,
    infinite: true,
    nextArrow: false,
    autoplaySpeed: 2000,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }

    ]
});
</script>






<script src="assets/extras/slidebars.js"></script>
<script src="assets/extras/scripts.js"></script>
<script>
$('.lnr-menu').on('click', function() {

    $('.menu').toggleClass("menu-show");
    $('main').toggleClass("main-move");
})
</script>