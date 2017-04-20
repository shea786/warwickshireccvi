<!doctype html>
<html class="no-js" lang="en">
    @include('includes._HTMLHead')
    <body>
        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="loader-wrapper">
                <div class="loader1"></div>
            </div>
        </div>
        <!-- END OF /. PRELOADER -->
        
        <div class="wrapper">
            <!-- START HEADER TOP SECTION -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-social">
                                @include('includes._picticons')
                            </div><!-- end of /. header social -->
                            <div class="top-left-menu">
                                
                            </div><!-- end of /. top left menu -->
                        </div>
                        <div class="col-md-6">
                            <div class="header-right-menu">
                                <div class="attr-nav">
                                    <ul>
                                        <li class="search">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search"  />
                                                <button><i class="fa fa-search"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </div><!-- end of /. header search button -->
                                <!-- End Atribute Navigation -->
                            </div><!-- end of /. header top right menu -->
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- END OF /. HEADER TOP SECTION -->

            <div class="header-section">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default cart">
                    <div class="container">
                       

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed top-m-btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse top-nav" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right" >
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index1.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="club-histry.html">Club History</a></li>
                                        <li><a href="cooming-soon.html">Coming Soon</a></li>
                                        <li><a href="point-table.html">Point Table</a></li>
                                        <li><a href="profiles.html">Profile</a></li>
                                        <li><a href="result.html">Result</a></li>
                                        <li><a href="turnament-history.html">Turnament History </a></li>
                                        <li><a href="wcup-fixture.html">Wcup fixture</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- end of /. container -->
                </nav><!-- End Navigation -->
            </div><!-- end of /. nav area-->
            <!-- End Navigation -->
            
            @yield('contents')

           

            <!-- start twitter section -->
            <div class="twitter-tweit-section">
                <div class="container-fluid footer-top-bg left-arrow-bg">
                    <div class="row">
                        <div class="col-md-3 bg-parent gry-bg">
                            <Div class="right-bg-g"></Div>
                        </div>
                    </div>
                </div><!-- arrow shape -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="titter-title">
                                <h3><i class="fa fa-twitter"></i>  Recent Tweets</h3>
                                <span>Find Us:  @BBershadsky</span>
                            </div>
                        </div><!-- twiiter title -->
                        <div class="col-md-7">
                            <div class="twitter-slide">
                                <div class="owl-carousel" id="twitter-slide">
                                    <div class="item">
                                        <p>The 2016 UEFA European Championship, commonly referred to as UEFA Euro 2016 or simply Euro 2016, was the 15th UEFA European</p>
                                    </div>
                                    <div class="item">
                                        <p>The 2016 UEFA European Championship, commonly referred to as UEFA Euro 2016 or simply Euro 2016, was the 15th UEFA European</p>
                                    </div>
                                    <div class="item">
                                        <p>The 2016 UEFA European Championship, commonly referred to as UEFA Euro 2016 or simply Euro 2016, was the 15th UEFA European</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="twitter-navigation">
                                <button class="twitter-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                <button class="twitter-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. twitter section -->
            <!-- satrt footer top section -->
            <div class="section footer-top-section">
                <div class="container-fluid footer-top-bg">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7 bg-parent">
                            <Div class="right-bg-g"></Div>
                        </div>
                    </div><!-- bg arrow shape -->
                </div><!-- end of /. container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>About Us</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Players Room</a></li>
                                        <li><a href="#">Media Gallery</a></li>
                                        <li><a href="#">Feedback</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Information</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="#">Olympics</a></li>
                                        <li><a href="#">FIFA 2016</a></li>
                                        <li><a href="#">NFL 2016</a></li>
                                        <li><a href="#">NBA 2016</a></li>
                                        <li><a href="#">Boxing</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Support</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Account</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Support</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Account</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-4">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="images/logo.png" class="img-responsive" width="262" height="76" alt="">
                                </a>
                            </div><!-- end of /. footer logo -->
                        </div><!-- end of /.col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. footer top -->

            <!-- star footer  -->
            <div class="footer-section">
                <div class="container-fluid footer-top-bg">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7 bg-parent">
                            <Div class="right-bg-g"></Div>
                        </div>
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <div class="alignleft copyright">
                                <p>&copy; All Rights Reserved 2017</p>
                            </div><!-- end of /. copyright -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-social">
                                <p>Follow Us:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div><!-- end of /. follow  -->
                        </div> <!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. footer -->
        </div><!-- end /. wrapper -->
		
        <!-- jQuery libery -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- jQuery Ui -->
		<script src="js/jquery-ui-min.js"></script>
        <!-- Owl -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Downcount -->
        <script src="js/jquery.downCount.js"></script>
        <!-- Bootsnav -->
        <script src="js/bootsnav.js"></script>
        <!-- Isotope -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- prettyphoto -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- tweetie -->
        <script src="scripts/Tweetie/tweetie.min.js"></script>
        <!-- appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- waypoint -->
        <script src="js/waypoints.min.js"></script>
        <!-- progress bar -->
        <script src="js/jQuery-plugin-progressbar.js"></script>
        <!-- V carousel -->
        <script src="js/v.carousel.js"></script>  
        <!-- custom -->
        <script src="js/custom.js"></script>
        <!-- facebook like js -->
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=937758502980138";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>