@extends('layouts.main')

@section('HTMLTitle')
Contact-Us
@endsection

@section('contents')
<br><br>This is contact page
            <!-- START PAGE TITILE SECTION -->
            <div class="page-title-section contact-page-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <h2>Contact Us</h2>
                                <p>Need Help or Promotion?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END OF /. PAGE TITLE SECTION -->

            <!-- START CONTACT INFO SECTION -->
            <div class="contact-info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-items">
                                <i class="fa fa-envelope"></i>
                                <h4>Our Email</h4>
                                <p>support@sportsox.com</p>
                                <p>admin@sportsox.com</p>
                            </div>
                        </div><!-- END OF /. COL -->
                        <div class="col-md-4">
                            <div class="info-items">
                                <i class="fa fa-phone"></i>
                                <h4>Our Phones</h4>
                                <p>+380 66 123 456 78</p>
                                <p>8 800 123 456 78</p>
                            </div>
                        </div><!-- END OF /. COL -->
                        <div class="col-md-4">
                            <div class="info-items">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4>Our Address  <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></h4>
                                <p>7555 Sussex St.</p>
                                <p>New Britain, CT 06051</p>
                            </div>
                        </div><!-- END OF /. COL -->
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact-title">
                                <h3>Use Contat Form <Span>& We Help you!</Span></h3>
                            </div>
                        </div>
                        
                        <div class="col-md-8 col-md-offset-2">
                            <form action="#" class="row comment-reply contact-form">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" placeholder="Email*">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" placeholder="Website*">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="yourtext" class="form-control" cols="30" rows="6" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="comment-submit" value="Submit Your Message">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div><!-- END OF /. CONTACT INFO SECTION  -->

            <div class="map-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  <span>Hide Map</span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                             
                                <div id="map">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-4">
                                            <br><br>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.8762356295774!2d-1.5360379838717113!3d52.30010077977322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487734e5102a0653%3A0xa7f7538766c6267a!2sLeamington+Cricket+Club!5e0!3m2!1sen!2suk!4v1492635616724" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection