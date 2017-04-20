@extends('layouts.main')

@section('HTMLTitle')
Home
@endsection

@section('contents')
             <!-- START SLIDER SECTION -->
            <div class="slider-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="slider-content">
                                <h1>Warwickshire CCVI</h1>
                                <p>Some random shit goes here</p>
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="match-time-section">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="time-content">
                                            <p><span>Next Match</span> (Sunday, 30 April 2017)  </p>
                                            <p><b>BBS Primary Club Heindrich Swanepoel Memorial Cup:</b> Warwickshire vs Samoset</p>
                                            <p><i class="fa fa-map-marker"></i> Bath Cricket Club, N Parade Rd, Bath BA2 4EX</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div id="countdowntimer">
                                            <ul class="countdown" >
                                                <li class="couner-box">
                                                    <span class="days" id="countdownDays"></span>
                                                    <p class="displayformat">Days</p>
                                                    <p class="time-divder">:</p>
                                                </li>
                                                <li class="couner-box">
                                                    <span class="hours" id="countdownHours"></span>
                                                    <p class="displayformat">Hours</p>
                                                    <p class="time-divder">:</p>
                                                </li>
                                                <li class="couner-box">
                                                    <span class="minutes" id="countdownMinutes"></span>
                                                    <p class="displayformat">Minutes</p>
                                                    <p class="time-divder">:</p>
                                                </li>
                                                <li class="couner-box">
                                                    <span class="seconds" id="countdownSeconds"></span>
                                                    <p class="displayformat">Seconds</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of /. row -->
                </div><!-- end of /. containere -->
            </div><!-- END OF /. SLIDER SECTION -->
            
            <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Apr 30, 2017 13:00:00").getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get todays date and time
              var now = new Date().getTime();
            
              // Find the distance between now an the count down date
              var distance = countDownDate - now;
            
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
              // Display the result in the element with id="demo"
              document.getElementById("countdownDays").innerHTML = days;
              document.getElementById("countdownHours").innerHTML = hours;
              document.getElementById("countdownMinutes").innerHTML = minutes;
              document.getElementById("countdownSeconds").innerHTML = seconds;
              
              
              // If the count down is finished, write some text 
              //if (distance < 0) {
                //clearInterval(x);
                //document.getElementById("demo").innerHTML = "EXPIRED";
              //}
            }, 1000);
            </script>
            
             <!-- START MAIN CONTANER -->
            <div class="section blog-container-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-section">
                                            <h2>Football <b>Feed</b></h2>
                                            <a href="#">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        </div><!-- end /. title section -->
                                    </div><!-- end of /. col -->
                                </div><!-- end of /. row -->

                                <!-- START BLOG ITEMS -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/1.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15  <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-md-6">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/2.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-md-6">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/3.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-md-6">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/4.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-md-6">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/5.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>Fernando Santos's Portugal manifesto</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-md-6">
                                        <div class="title-section sm-title">
                                            <h2>Top <b>Player</b></h2>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        </div><!-- end of /. col -->
                                        <div class="blog-items">
                                            <div class="owl-carousel top-player" id="player">
                                                <div class="item">
                                                    <a href="#">
                                                        <span>Euro 2016</span>
                                                        <img src="images/player.jpg" alt="" />
                                                        <div class="blog-content-title">
                                                            <h3>David Beckham</h3>
                                                            <span><i class="fa fa-male"></i> Halfback </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <span>Euro 2016</span>
                                                        <img src="images/player.jpg" alt="" />
                                                        <div class="blog-content-title">
                                                            <h3>David Beckham</h3>
                                                            <span><i class="fa fa-male"></i> Halfback </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <span>Euro 2016</span>
                                                        <img src="images/player.jpg" alt="" />
                                                        <div class="blog-content-title">
                                                            <h3>David Beckham</h3>
                                                            <span><i class="fa fa-male"></i> Halfback </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="player-navigation arrow-style">
                                                <button class="player-next"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                                <button class="player-prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-section sm-title">
                                            <h2>Our <b>Polls</b></h2>
                                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="blog-items our-polls">
                                            <div class="poll-item">
                                                <h3>Are Fernando Santos's Best Footballer in the team?</h3>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" id="a-option" name="selector">
                                                            <label for="a-option">Some Poll Option</label>
                                                            <div class="check"></div>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="b-option" name="selector">
                                                            <label for="b-option">Some Poll Option</label>
                                                            <div class="check"><div class="inside"></div></div>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="c-option" name="selector">
                                                            <label for="c-option">Some Poll Option</label>
                                                            <div class="check"><div class="inside"></div></div>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="d-option" name="selector">
                                                            <label for="d-option">Some Poll Option</label>
                                                            <div class="check"><div class="inside"></div></div>
                                                        </li>
                                                    </ul>
                                                <a href="#">Submit My Answer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end of /. blog container -->
                        </div><!-- end of /. col -->
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h3>Recent Result</h3>
                                        <div class="recent-navigation arrow-style">
                                            <button class="recent-re-next"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                            <button class="recent-re-prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></i></button>
                                        </div>
                                    </div>
                                    <div class="widget-container">
                                        <div class="owl-carousel" id="recent-result">
                                            <div class="item">
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div><!-- end of /. item -->
                                            <div class="item">
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="recent-items">
                                                    <a href="#">
                                                        <h4>06 Aug, 2016</h4>
                                                        <div class="result-coutry-area">
                                                            <div class="result-item">
                                                                <p>Portogal</p>
                                                                <img src="images/flag1.png" alt="" />
                                                            </div>
                                                            <div class="result-item">
                                                                <p>1-0</p>
                                                            </div>
                                                            <div class="result-item">
                                                                 <img src="images/flag2.png" alt="" />
                                                                 <p>France</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div><!-- end of /. item -->
                                        </div>
                                    </div>
                                </div><!-- end of /. widget -->
                                <div class="widget">
                                    <div class="widget-title">
                                        <h3>Club Ranking</h3>
                                        <div class="custom-navigation arrow-style">
                                            <button class="club-rank-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                            <button class="club-rank-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="widget-container">
                                        <div class="owl-carousel" id="club-rank">
                                            <div class="item">
                                                <div class="club-items">
                                                    <span>1</span>
                                                    <div class="club-logo">
                                                        <img src="images/club1.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Legacy</p>
                                                    <b>86</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>2</span>
                                                    <div class="club-logo">
                                                        <img src="images/club2.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Teamfoot</p>
                                                    <b>64</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>3</span>
                                                    <div class="club-logo">
                                                        <img src="images/club3.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Real M.</p>
                                                    <b>68</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>4</span>
                                                    <div class="club-logo">
                                                        <img src="images/club4.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Foolianto</p>
                                                    <b>72</b>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="club-items">
                                                    <span>1</span>
                                                    <div class="club-logo">
                                                        <img src="images/club1.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Legacy</p>
                                                    <b>86</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>2</span>
                                                    <div class="club-logo">
                                                        <img src="images/club2.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Teamfoot</p>
                                                    <b>64</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>3</span>
                                                    <div class="club-logo">
                                                        <img src="images/club3.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Real M.</p>
                                                    <b>68</b>
                                                </div>
                                                <div class="club-items">
                                                    <span>4</span>
                                                    <div class="club-logo">
                                                        <img src="images/club4.png" width="21" height="28" alt="">
                                                    </div>
                                                    <p>Foolianto</p>
                                                    <b>72</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of /. widget -->
                                <div class="widget">
                                    <div class="widget-title">
                                        <h3>Today on Sportsox</h3>
                                    </div>
                                    <div class="widget-container">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <ul class="sport-item">
                                                        <li>
                                                            <a href="#">
                                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                                <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end of slider /. item -->
                                                <div class="item">
                                                    <ul class="sport-item">
                                                        <li>
                                                            <a href="#">
                                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                                <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end of slider /. item -->
                                                <div class="item">
                                                    <ul class="sport-item">
                                                        <li>
                                                            <a href="#">
                                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                                <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end of slider /. item -->
                                                <div class="item">
                                                    <ul class="sport-item">
                                                        <li>
                                                            <a href="#">
                                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                                <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end of slider /. item -->
                                                <div class="item">
                                                    <ul class="sport-item">
                                                        <li>
                                                            <a href="#">
                                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                                <h3>Best Player in Europe final three: Cristiano Ronaldo</h3>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- end of slider /. item -->
                                              
                                            </div>
                                            <ol class="sport-item slider-game-time">
                                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                                    <a href="#">
                                                        <span>16:48</span>
                                                        <p>Best Player in Europe final three: Cristiano Ronaldo</p>
                                                    </a>
                                                </li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1">
                                                    <a href="#">
                                                        <span>15:24</span>
                                                        <p>Sweden and Germany in last four</p>
                                                    </a>
                                                </li>
                                                <li data-target="#carousel-example-generic" data-slide-to="2">
                                                    <a href="#">
                                                        <span>12:28</span>
                                                        <p>Men's Olympic football: day three</p>
                                                    </a>
                                                </li>
                                                <li data-target="#carousel-example-generic" data-slide-to="3">
                                                    <a href="#">
                                                        <span>11:42</span>
                                                        <p>Carvajal wins Super Cup for Madrid</p>
                                                    </a>
                                                </li>
                                                 <li data-target="#carousel-example-generic" data-slide-to="4">
                                                    <a href="#">
                                                        <span>11:42</span>
                                                        <p>Praise for City signing John Stones</p>
                                                    </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- end of /. widget -->
                            </div><!-- end of /. sidebar -->
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. blog container section -->

            <!-- START NEWS LATTER SECTION -->
            <div class="news-latter-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="news-latter-area">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                         <div class="new-latter-area">
                                            <div class="news-latter-title">
                                                <h2>Sign Up <b>for the Newsletter</b></h2>
                                            </div>
                                        </div>
                                    </div><!-- end of /. col -->
                                </div><!-- end of /. row -->
                                <div class="row">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="sub-title">
                                            <p>Vivamus quis mi. Phasellus a est. Phasellus magna. In hac abitasse platea dictumst. Curabitur at lacus. </p>
                                        </div>
                                    </div><!-- end of /. col -->
                                    <div class="col-lg-5 col-md-12">
                                        <div class="subscribe-area">
                                            <form action="#" class="form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your e-mail"  />
                                                </div>
                                                <input type="submit" value="Sign Up" class="submit-btn" />
                                            </form>
                                        </div>
                                    </div><!-- end of /. col -->
                                </div><!-- end of /. row -->
                            </div><!-- end of /. news title area -->

                        </div><!-- end of /. col-md-6 -->
                        <div class="col-md-3">
                            <div class="social-area facebook-box">
                                <h2>Join to <b>our Facebook</b></h2>
                                <div class="social-link">
                                    <div class="fb-like" data-href="https://www.facebook.com/webRedox/?__mref=message" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                </div>
                            </div>
                        </div><!-- end of /. col -->
                        <div class="col-md-3">
                            <div class="social-area twitter-box">
                                <h2>Join to <b>our Twitter</b></h2>
                                <div class="social-link">
                                    <iframe allowtransparency="true" frameborder="0" scrolling="no"
                                            src="https://platform.twitter.com/widgets/follow_button.html?screen_name=webRedox&show_screen_name=true&show_count=true"
                                            style="height:20px;"></iframe>

                                    <script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script>
                                    <script type="text/javascript">
                                        twttr.events.bind('follow', function(event) {
                                            console.log(event);
                                            var followed_user_id = event.data.user_id;
                                            var followed_screen_name = event.data.screen_name;
                                        });
                                    </script>
                                </div>
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. social section -->
            
            <!-- start blog container 2 -->
            <div class="section blog-container-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-section">
                                            <h2>Latest <b>News</b></h2>
                                            <ul class="filter-menu button-group sort-button-group">
                                                <li class="button active" data-category="all">All</li>
                                                <li class="button" data-category="team">The Team</li>
                                                <li class="button" data-category="uefa-2016">Uefa 2016</li>
                                                <li class="button" data-category="uefa-2017">UEFA 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row work">
                                    <div class="col-md-6 work-item team">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/2.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>UEFA EURO 2016 Team of the Tournament</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 work-item uefa-2017">
                                        <div class="blog-items">
                                            <a href="blog-single.html">
                                                <span>Euro 2016</span>
                                                <img src="images/blog/3.jpg" alt="" />
                                                <div class="blog-content-title">
                                                    <h3>On bringing in younger players</h3>
                                                    <span><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16 </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 work-item team">
                                        <div class="blog-items-sm">
                                            <a href="blog-single.html">
                                                <div class="thumbnail">
                                                    <img src="images/blog/s1.jpg" class="img-responsive" width="120" height="120" alt="">
                                                </div>
                                                <div class="blog-content">
                                                    <span>Euro 2016</span>
                                                    <h3>Lukas Podolski retires from Germany duty</h3>
                                                    <p><i class="fa fa-clock-o"></i>  12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 work-item uefa-2016">
                                        <div class="blog-items-sm">
                                            <a href="blog-single.html">
                                                <div class="thumbnail">
                                                    <img src="images/blog/s2.jpg" class="img-responsive" width="120" height="120" alt="">
                                                </div>
                                                <div class="blog-content">
                                                    <span>Euro 2016</span>
                                                    <h3>Lukas Podolski retires from Germany duty</h3>
                                                    <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 work-item  uefa-2017">
                                        <div class="blog-items-sm">
                                            <a href="blog-single.html">
                                                <div class="thumbnail">
                                                    <img src="images/blog/s3.jpg" class="img-responsive" width="120" height="120" alt="">
                                                </div>
                                                <div class="blog-content">
                                                    <span>Euro 2016</span>
                                                    <h3>Youngest German to reach 100 caps</h3>
                                                    <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 work-item uefa-2016">
                                        <div class="blog-items-sm">
                                            <a href="blog-single.html">
                                                <div class="thumbnail">
                                                    <img src="images/blog/s4.jpg" class="img-responsive" width="120" height="120" alt="">
                                                </div>
                                                <div class="blog-content">
                                                    <span>Euro 2016</span>
                                                    <h3>Podolski's top five moments for Germany</h3>
                                                    <p><i class="fa fa-clock-o"></i> 12 Aug, 2016 - 22:15 <i class="fa fa-comments"></i> 16</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /. col-md-8 -->
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="widget">
                                    <div class="widget-title">
                                    </div>
                                    <div class="social-like-area">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i> <span>108608   Likes</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i> <span>108608   Followers</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i> <span>1802   Followers</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget">
                                    <div class="sidebar-ad">
                                        <a href="#">
                                            <img src="images/banner.jpg" class="img-responsive" width="370" height="571" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. blog container 2 -->

            <!-- start video section -->
            <div class="section video-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section">
                                <h2>HOT <b>Videos</b></h2>
                                <div class="recent-navigation arrow-style">
                                    <button class="video-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i>
</button>
                                    <button class="video-next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
 </button>
                                </div>
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row owl-carousel gallery" id="hot-video">
                                <div class="item">
                                    <div class="video-items">
                                        <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                            <img src="images/video/1.jpg" class="img-responsive" width="370" height="370" alt="">
                                            <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                                        </a>
                                    </div>
                                </div><!-- end of /. item -->
                                <div class="item">
                                    <div class="video-items">
                                        <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                            <img src="images/video/2.jpg" class="img-responsive" width="370" height="370" alt="">
                                            <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                                        </a>
                                    </div>
                                </div><!-- end of /. item -->
                                <div class="item">
                                    <div class="video-items">
                                        <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                            <img src="images/video/3.jpg" class="img-responsive" width="370" height="370" alt="">
                                            <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                                        </a>
                                    </div>
                                </div><!-- end of /. item -->
                                <div class="item">
                                    <div class="video-items">
                                        <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                            <img src="images/video/4.jpg" class="img-responsive" width="370" height="370" alt="">
                                            <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                                        </a>
                                    </div>
                                </div><!-- end of /. item -->
                                <div class="item">
                                    <div class="video-items">
                                        <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                            <img src="images/video/1.jpg" class="img-responsive" width="370" height="370" alt="">
                                            <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                                        </a>
                                    </div>
                                </div><!-- end of /. item -->
                            </div>
                        </div><!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. video section -->
@endsection