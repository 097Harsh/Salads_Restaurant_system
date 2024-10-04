

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salads - Restaurants  Website </title>
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
                        <h4 class="inner-text-title font-weight-bold pt-5">Login </h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><i class="fas fa-angle-right mx-2"></i>Login</li>
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
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-6 col-lg-4 col-xl-6">
        <img src="user/assets/images/login.png"
          class="img-fluid" style="height: 500px;">
      </div>
      <div class="col-md-8 col-lg-8 col-xl-5 offset-xl-1">
        <h3><center>Sign in</center></h3><br>
        <form method="post" action="">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
          	<label class="form-label" for="email">Email </label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          	 <label class="form-label" for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control form-control-lg"  />
          </div>

          <div class="form-outline mb-4">
        <select class="form-control"  id="role" name="role">
         <option value="">--Select Role--</option>
                  
            </select>
        
        </div>
      

        
          <!-- Submit button -->
          <button type="submit" class="btn btn-style btn-lg btn-block" name="submit" id="submit">Sign in</button>
        </form><br>
        <h6>If you not register then <a href="{{route('register')}}">Register here</a></h6><br>
        </a>
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