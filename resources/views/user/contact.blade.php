@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salads - Restaurants Category Bootstrap Responsive Website Template - About Us : W3Layouts</title>
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
                        <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
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

    <!-- contact -->
    <section class="w3l-contact-11 py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="row contact-info-left text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class=" contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Location</h4>
                        <p>Dolor sit, #PTH,8800 Honey Street UK.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class=" contact-info">
                        <i class="fas fa-phone-volume"></i>
                        <h4>Phone</h4>
                        <p><a href="tel:+44 7834 857829">+22 123 984 434</a></p>
                        <p><a href="tel:+44 987 654 321">+44 123 984 439</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class=" contact-info">
                        <i class="fas fa-envelope-open-text"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
                        <p><a href="mailto:mail@example1.com" class="email">mail@example1.com</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class=" contact-info">
                        <i class="fas fa-clock"></i>
                        <h4>Working Hours</h4>
                        <p>Wednesday - Sunday</p>
                        <p>7:00 AM - 9:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">
                    <div class="form-inner-cont">
                        <form action="{{route('store_contact')}}" method="post" class="signin-form">
                        @csrf
                            <div class="row align-form-map">
                                <div class="col-sm-6 form-input">
                                    <label for="w3lName">Name</label>
                                    <input type="text" name="w3lName" id="w3lName" placeholder="" />
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="w3lSender">Email(Required)*</label>
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="" required="" />
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="w3lSender">Subject*</label>
                                    <input type="text" name="w3lSubect" placeholder="" class="contact-input">
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="w3lSender">Phone Number*</label>
                                    <input type="number" name="w3lPhone" placeholder="" class="contact-input">
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="w3lMessage">Message(Required)*</label>
                                <textarea placeholder="" name="w3lMessage" id="w3lMessage" required=""></textarea>
                            </div>
                            <div class="submit text-end">
                                <button type="submit" class="btn btn-style">Submit
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
   
    <!-- //contact -->

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