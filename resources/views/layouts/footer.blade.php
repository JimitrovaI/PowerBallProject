<!-- footer-section start -->
<footer class="footer-section">
      <div class="footer-top border-top border-bottom has_bg_image" data-background="{{asset('images/bg-four.jpg')}}">
        <div class="footer-top-first">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
                <a href="home-one.html" class="site-logo"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
              </div>
              <div class="col-lg-6 col-md-7 col-sm-8">
                <div class="number-count-part d-flex">
                  <div class="number-count-item">
                    <span class="number">2,3402,233</span>
                    <p>TOTAL MEMBERS</p>
                  </div>
                  <div class="number-count-item">
                    <span class="number">1,9402,575</span>
                    <p>TOTAL winner</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-top-second">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget widget-about">
                  <h3 class="widget-title">About Sorteo</h3>
                  <ul class="footer-list-menu">
                    <li><a href="#0">About us</a></li>
                    <li><a href="#0">How it Works</a></li>
                    <li><a href="#0">Our services</a></li>
                    <li><a href="#0">Blog</a></li>
                    <li><a href="#0">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
                <div class="footer-widget widget-links">
                  <h3 class="widget-title">Quick links</h3>
                  <ul class="footer-list-menu">
                    <li><a href="#0">My Account</a></li>
                    <li><a href="#0">Affiliate Program</a></li>
                    <li><a href="#0">Terms & Conditions</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                    <li><a href="#0">Sorteo Licenses</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget widget-subscribe">
                  <h3 class="widget-title">email newsletters</h3>
                  <div class="subscribe-part">
                    <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
                    <form class="subscribe-form">
                      <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                      <input type="submit" value="subscribe">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-sm-7">
              <div class="copy-right-text">
                <p>© 2019 <a href="#">Sorteo</a> - All Rights Reserved.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-5">
              <ul class="footer-social-links d-flex justify-content-end">
                <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-section end -->

    <!--login registration Modal -->
    <div class="modal fade login-registration-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="login-registration-area">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                    aria-controls="login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab"
                    aria-controls="registration" aria-selected="false">Registration</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                  <form class="login-form cmn-frm">
                    <div class="frm-group">
                      <label>Username or Email Address</label>
                      <input type="email" name="login_email" id="login_email" placeholder="Username or Email Address">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                      <label>Password</label>
                      <input type="password" name="login_pass" id="login_pass" placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <input type="submit" name="registration_submit2" id="registration_submit2" value="login">
                    </div>
                    <div class="frm-group">
                      <div class="checkbox-area">
                        <input type="checkbox" id="login_remember_pass">
                        <label for="login_remember_pass">Remember Password</label>
                      </div>
                      <div class="forgot-pass-area">
                        <a href="#0">Forgot Password?</a>
                      </div>
                    </div>
                    <div class="frm-group">
                      <div class="or-text">
                        <span>Or login with</span>
                      </div>
                    </div>
                    <div class="frm-group">
                      <div class="login-with-area">
                        <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                      </div>
                    </div>
                  </form>
                  <div class="have-not-account">
                    <p>You don’t have an account?<a href="#0">Register Now</a></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                  <form class="registration-form cmn-frm">
                    <div class="frm-group">
                      <label>Username or Email Address</label>
                      <input type="email" name="registration_email" id="registration_email"
                        placeholder="Username or Email Address">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="frm-group">
                      <label>Password</label>
                      <input type="password" name="registration_pass" id="registration_pass"
                        placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <label>Confirm Password</label>
                      <input type="password" name="registration_re_pass" id="registration_re_pass"
                        placeholder="Enter Password">
                      <i class="fa fa-lock"></i>
                    </div>
                    <div class="frm-group">
                      <input type="submit" name="registration_submit" id="registration_submit" value="Registration">
                    </div>
                    <div class="frm-group">
                      <div class="checkbox-area">
                        <input type="checkbox" id="registration_remember_pass">
                        <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                      </div>
                      <div class="forgot-pass-area">
                        <a href="#0">Forgot Password?</a>
                      </div>
                    </div>
                    <div class="frm-group">
                      <div class="or-text">
                        <span>Or login with</span>
                      </div>
                    </div>
                    <div class="frm-group">
                      <div class="login-with-area">
                        <a href="#" class="facebook"><i class="fa fa-facebook-f"></i>facebook</a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>facebook</a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i>facebook</a>
                      </div>
                    </div>
                  </form>
                  <div class="have-not-account">
                    <p>Already have an account?<a href="#0">Login</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>