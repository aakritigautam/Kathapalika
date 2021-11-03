<section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col_box">
                        <a href="" class="footer_branding">
                            <h3 class="footer_heading">कथालिका</h3>
                            <p>नलेखिएको कथा</p>
                        </a>
                        <ul class="footersocial_media">
                            <li>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col_box">
                        <a href="" class="footer_branding">
                            <h5 class="footer_heading2">उपयोगी लिंकहरु</h5>
                        </a>
                        <ul class="quick_links">
                            <li>
                                <a href="">हाम्रो बारे</a>
                            </li>
                            <li>
                                <a href="">हाम्रो टिम</a>
                            </li>
                            <li>
                                <a href="">सम्पादकीय</a>
                            </li>
                            <li>
                                <a href="">Trending समाचार</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col_box">
                        <a href="" class="footer_branding">
                            <h5 class="footer_heading2">सम्पर्कठेगाना </h5>
                        </a>
                        <ul class="quick_links">
                            <li>
                                ०१४१९४७९४, ०१७७९४१०५
                            </li>
                            <li>
                                शान्तिनगर, काठमाडौं
                            </li>
                            <li>
                                info@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col_box">
                        <a href="" class="footer_branding">
                            <h5 class="footer_heading2">समाचार</h5>
                        </a>
                        <ul class="quick_links">
                            <li>
                                <a href="">समाज</a>
                            </li>
                            <li>
                                <a href="">साहित्य</a>
                            </li>
                            <li>
                                <a href="">खेलकुद़़</a>
                            </li>
                            <li>
                                <a href="">प्रवास</a>
                            </li>
                            <li>
                                <a href="">अन्तर्राष्ट्रिय</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            COPYRIGHT © KATHALIKA 2021. ALL RIGHTS RESERVED.
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 400,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }]
        });
        $('.story_slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 400,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }]
        });
    });


    // next and previous button click
    $('body').on('click', '.slick-arrow', function () {
        alert('click working')
    })
    </script>

