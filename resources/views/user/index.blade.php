@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@elseif(session('reg_success'))
    <script>
        alert('{{ session('reg_success') }}');
    </script>
@endif

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salads - Restaurants Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
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

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3 pb-lg-2">Fresh Healthy <span class="d-block">Delicious Salads</span>
                        </h3>
                        <p class="banner-sub">Healthy foods to eat everyday, Tasty and healthy vegetables salad
                            with fresh tomatoes,
                            coriander leaves and more.</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="menu.html" class="btn btn-style mt-lg-5 mt-4">Order Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative">
                        <div class="sub-banner-image mx-auto">
                            <img src="user/assets/images/banner1.png" class="img-fluid position-relative" alt=" ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 left-wthree-img position-relative mb-lg-0 mb-5 pb-lg-0 pb-5">
                    <img src="user/assets/images/ab1.jpg" alt="" class="img-fluid radius-image">
                    <img src="user/assets/images/ab2.jpg" alt=""
                        class="img-fluid img-border position-absolute img-position radius-image me-xl-5">
                </div>
                <div class="col-lg-6 about-right-faq align-self ps-lg-5 mt-xl-4">
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
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- popular section -->
    <section class="w3l-bottom-grids-6 pb-5">
        <div class="container pb-md-5 pb-4">
            <h3 class="title-style text-center mb-md-5 mb-4">Our <span>Popular</span> Salads</h3>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <img class="img-fluid" src="user/assets/images/s2.jpg" alt=" ">
                        <h4><a href="menu.html" class="title-head">Green salad</a></h4>
                        <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed et dolor amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-sm-5 mt-4">
                    <div class="area-box active">
                        <img class="img-fluid" src="user/assets/images/s1.jpg" alt=" ">
                        <h4><a href="menu.html" class="title-head">Fruit salads</a></h4>
                        <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-sm-5 mt-4">
                    <div class="area-box">
                        <img class="img-fluid" src="user/assets/images/s3.jpg" alt=" ">
                        <h4><a href="menu.html" class="title-head">Dessert salads</a></h4>
                        <p>Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //popular section -->

    <!-- content image section -->
    <div class="content-image py-5">
        <div class="container py-md-5 py-4">
            <div class="row py-md-4">
                <div class="col-md-9 col-sm-8 col-6 responsive-content">
                    <h3 class="title-style">Our Restaurants <span>Menu</span></h3>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <a href="menu.html" class="btn btn-style mt-sm-5 mt-4">What's on the Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //content image section -->

    <!-- 3 grids section -->
    <div class="w3l-index-block4 pt-5">
        <div class="container pt-md-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-apple-alt"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Healthy Food</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-utensils"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Fresh Salads</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-carrot"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Natural Fiber</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-lemon"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Nutritional Food</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Protect Your Heart</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 features15-col-text">
                    <a href="about.html" class="d-flex feature-unit">
                        <div class="col-2">
                            <div class="features15-info">
                                <i class="fas fa-weight"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="features15-para">
                                <h4>Weight Control</h4>
                                <p>Ras effic itur metusga via suscipit consectetur adipisicing unde omnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //3 grids section -->

    <!-- chef section -->
    <div class="w3l-chef pt-5">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5">
                    <h3 class="title-style mb-4">Meet Our Best <span>Chef's</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor
                        vehicula nullam augue ipsum dolor. Aenean egestas magna at porttitor ehicula nullam augue ipsum
                        dolor.</p>
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at
                        porttitor
                        vehicula nullam augue ipsum dolor.</p>
                    <a href="{{route('about')}}" class="btn btn-style mt-sm-5 mt-4">See Our Chef's</a>
                </div>
                <div class="col-lg-5 img-bg-clr mt-lg-0 mt-4">
                    <img src="user/assets/images/img2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- //chef section -->

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
                            <a class="comment-img mt-3" href="#url"><img src="user/assets/images/testi1.jpg"
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