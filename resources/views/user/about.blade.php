<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salads - Restaurants  Website</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    @include('user.common.header')
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="inner-text-title font-weight-bold pt-5">About Us</h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 inner-banner-right text-center">
                        <img src="user/assets/images/banner2.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 about-right-faq align-self pe-lg-5 mb-xl-4">
                    <h3 class="text-bgs mb-2">Since 2000</h3>
                    <h3 class="title-style">We Have <span>30+</span> Years of Experience</h3>
                    <p class="ab-text mt-4 pt-lg-2">"Orem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat".</p>
                    <p class="mt-4">Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat. Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula.</p>
                    <img class="img-fluid mt-md-5 mt-4 img-dark-color" src="user/assets/images/sign.png" alt=" ">
                </div>
                <div class="col-lg-6 left-wthree-img position-relative mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <img src="user/assets/images/ab3.jpg" alt="" class="img-fluid radius-image">
                    <img src="user/assets/images/ab4.jpg" alt=""
                        class="img-fluid img-border position-absolute img-position radius-image me-xl-5">
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- about popular section -->
    <section class="w3l-recipes py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 recipe-right pe-lg-5">
                    <img src="user/assets/images/about.jpg" alt="" class="img-fluid radius-image" />
                </div>
                <div class="col-lg-6 recipe-left mt-lg-0 mt-5">
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Populars In</h3>
                        <p class="">
                            Sed ut perspiciatis unde omnis iste natus error sit accusantium doloremque,
                            eaque ipsa quae ab illo inventore.
                        </p>
                    </div>
                    <div class="menu-sec mt-5 pt-md-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>Green salad</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$19.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sec mt-sm-5 mt-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>Fruit salads</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$40.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="menu-sec mt-sm-5 mt-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>Dessert salads</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>$36.50</h6>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-style mt-5" href="menu.html">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about popular section -->

    <!-- team section -->
    <section class="w3l-team py-5" id="chefs">
        <div class="container py-md-5 py-4">
            <h3 class="title-style text-center mb-sm-5 mb-4">Our Specialists</h3>
            <div class="row text-center">
                <div class="team-info col-md-3 col-6">
                    <div class="column position-relative">
                        <a href="#url"><img src="user/assets/images/team1.jpg" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><a href="#team">John Doe</a></h4>
					<p>Owner</p>
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a class="twitter" href="#url">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a class="instagram" href="#url">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-info col-md-3 col-6">
                    <div class="column position-relative">
                        <a href="#url"><img src="user/assets/images/team2.jpg" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><a href="#team">Alexander</a></h4>
					<p>Chef</p>
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a class="twitter" href="#url">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a class="instagram" href="#url">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-info col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                    <div class="column position-relative">
                        <a href="#url"><img src="user/assets/images/team3.jpg" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><a href="#team">Martin ker</a> </h4>
					<p>Co-founder</p>
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a class="twitter" href="#url">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a class="instagram" href="#url">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-info col-md-3 col-6 mt-md-0 mt-sm-5 mt-5">
                    <div class="column position-relative">
                        <a href="#url"><img src="user/assets/images/team4.jpg" alt="" class="img-fluid" /></a>
                    </div>
                    <h4><a href="#team">Elizabeth</a></h4>
					<p>Specialist</p>
                    <div class="team-info">
                        <div class="caption">
                            <div class="social-icons-section text-center">
                                <a class="fac" href="#url">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                                <a class="twitter" href="#url">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a class="instagram" href="#url">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section -->

    <!-- testimonials section -->
    <section class="w3l-clients py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div id="owl-demo2" class="owl-carousel owl-theme pb-5">
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi1.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi2.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi3.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="assets/images/testi1.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi2.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet.</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <ul class="d-flex">
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#rating"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi3.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->

    <!-- subscribe form section -->
    
    <!-- //subscribe form section -->

    <!-- footer -->
    
    @include('user.common.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="user/assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- counter-->
    <script src="user/assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- owl carousel -->
    <script src="user/assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- theme switch js (light and dark)-->
    <script src="user/assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="user/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>