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
                            <a class="navbar-brand" href="{{ route('default.index') }}"><img src="/images/logo.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->

                        @include('includes._HTMLNavBar')
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
                                    <img src="/images/logo.png" class="img-responsive" width="262" height="76" alt="">
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
		
		@include('includes._HTMLBodyScripts')
		
    </body>
</html>