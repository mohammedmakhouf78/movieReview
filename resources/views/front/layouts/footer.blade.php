<footer class="site-footer">
    <div class="container">
          <div class="row">
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">About Us</h3>

                            <p>Writing a movie review is a great way to express your opinion of a movie. The
                                  purpose of most movie reviews is to help readers determine if they want to
                                  watch, rent, or buy the movie.</p>

                      </div>
                </div>
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">Recent Review</h3>
                            <ul class="no-bullet">
                                  <li><a href="#rvu1">Godzilla WeakStory</a></li>
                                  <li><a href="#rvu2"> Maleficent High Performance</a></li>
                                  <li><a href="#rvu3">Luca Funny Movie</a></li>

                            </ul>
                      </div>
                </div>
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">Help Center</h3>
                            <ul class="no-bullet">
                                  <li>Contact Us Send Us Message about Your problem</li>
                                  <li><a href="#">Send Us E-mail :<a
                                                    href="mailto:info@ Moviervu.com?subject=subject&cc=cc@example.com">
                                                    Movie
                                                    Rvu</a>
                                        </a></li>

                            </ul>
                      </div>
                </div>
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">Join Us</h3>
                            <ul class="no-bullet">
                                  <li> To Join Our Team Send us Your Information To Our E-mail </li>
                                  <li><a href="#"> <a
                                                    href="mailto:info@ Moviervu.com?subject=subject&cc=cc@example.com">
                                                    Movie
                                                    Rvu Email Address</a>
                                        </a></li>

                            </ul>
                      </div>
                </div>
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">Social Media</h3>
                            <ul class="no-bullet">
                                  <li><a href="https://WWW.Facebook.COM">Facebook</a></li>
                                  <li><a href="https://WWW.TWITTER.COM">Twitter</a></li>
                                  <li><a href="https://WWW.GOOGLE.COM">Google+</a></li>

                            </ul>
                      </div>
                </div>
                <div class="col-md-2">
                      <div class="widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <form action="#" class="subscribe-form">
                                  <input type="text" placeholder="Email Address">
                            </form>
                      </div>
                </div>
          </div> <!-- .row -->
          <div class="colophon">Copyright 2022 &copy; All rights reserved , Designed by Movie Rvu Team.</div>
    </div> <!-- .container -->

</footer>
</div>
<!-- Default snippet for navigation -->

@yield('script')


<script src="{{asset('frontTemplate/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('frontTemplate/js/plugins.js')}}"></script>
<script src="{{asset('frontTemplate/js/app.js')}}"></script>
<script src="{{asset('frontTemplate/bootstrap-5.1.3-dist\js\jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontTemplate/bootstrap-5.1.3-dist\js\bootstrap.min.js')}}"></script>

@include('sweetalert::alert')

</body>

</html>