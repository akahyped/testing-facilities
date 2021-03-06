@extends('layout')

@section('header')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="navbar navbar-custom navbar-fixed-top sticky" role="navigation">
      <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header">
          <!-- Responsive menu button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="zmdi zmdi-menu"></i>
          </button>

          <!-- LOGO -->
          <a class="navbar-brand logo" href="index.html">
             <span class="navbar_logotext--active">Constructly</span>
          </a>

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">

          <!-- Navbar left -->
          <ul class="nav navbar-nav nav-custom-left">
            <li class="activeLink">
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#features">Features</a>
            </li>
            <li>
              <a href="#pricing">Plans</a>
            </li>
            <li>
              <a href="#team">Team</a>
            </li>
            <li>
              <a href="#faq">FAQ</a>
            </li>
            <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              Pages
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu arrow">
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="blog-post.html">Blog Post</a></li>
            </ul>
          </li>
          </ul>

          <!-- Navbar right -->
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li>
                    <a href="/home">Home</a>
                </li>
            @else
                <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/register" class="btn btn-inverse btn-bordered navbar-btn">Signup</a>
                </li>
            @endif
        </ul>

        </div>
        <!--/Menu -->
      </div>
      <!-- end container -->
  </div>
  <!-- End navbar-custom -->


  <!-- HOME -->
  <section class="home homepage-hero-module" id="home">
    <!-- <div class="bg-overlay"></div> -->
    <div class="video-container">
                <video autoplay loop class="fillWidth">
                    <source src="{{ asset('Construction.mp4') }}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="{{ asset('Construction.webm') }}" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
                <div class="poster hidden">
                    <img src="{{ asset('Construction.jpg') }}" alt="">
                </div>

                <div class="filter"></div>

          <div class="home-wrapper text-center">

            <h2 class="animated fadeInDown wow" data-wow-delay=".1s">
            <br><br>
            <br><br>
            <br><br>
            <img class="main--logo img-responsive" src="images/transparent-logo.png"><br><br>
                A platform for managing commmercial construction businesses
            </h2>
            <p class="animated fadeInDown wow text-muted" data-wow-delay=".2s">
                Constructly.io offers a modular, scalable web solution that aims to reduce the repetition and <br>monotony of everyday tasks in the commercial construction industry.
            </p>
            <a href="#features" class="btn btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Coming 2017</a>

            <div class="clearfix"></div>
          </div><!-- home wrapper -->
        </div> <!-- end col -->
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- END HOME -->


  <!-- FEATURES -->
  <section class="section" id="features">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Services</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Our Best Features</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <img src="images/icons/cup.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Strategy Solutions</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <img src="images/icons/diploma.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Digital Design</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <img src="images/icons/combo_chart.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>SEO</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


      <div class="row text-center">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <img src="images/icons/space-rocket.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Strategy Solutions</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <img src="images/icons/umbrella.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Digital Design</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <img src="images/icons/support.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Support</h4>
              <p>We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste.</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


    </div> <!-- end container -->
  </section>
  <!-- END FEATURES -->


  <!-- FEATURES-ALT -->
  <section class="section bg-gray" id="features">
    <div class="container">

      <div class="row">
        <div class="col-sm-6">
          <div class="feature-detail">

            <div class="title-box">
              <p class="title-alt">Features</p>
              <h3 class="fadeIn animated wow" data-wow-delay=".1s">Clean and Ultra Modern Design</h3>
              <div class="border"></div>
            </div>

            <ul class="zmdi-hc-ul">
              <li class="fadeIn animated wow" data-wow-delay=".1s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Fully Responsive design.</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".2s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Based on Bootstrap 3.3.6</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".3s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Many variants to choose from</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".4s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Built with HTML5 & CSS3</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".5s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Commented and clean code</span></li>

            </ul>

            <a href="" class="btn btn-primary btn-shadow btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Get Started</a>
          </div>
        </div>

        <div class="col-sm-6">
          <img src="images/macbook.png" class="img-responsive fadeIn animated wow" data-wow-delay=".2s">
        </div>

      </div>
    </div>
  </section>
  <!-- END FEATURES-ALT -->



  <!-- PRICING -->
  <section class="section" id="pricing">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt fadeIn animated wow" data-wow-delay=".1s">Pricing</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".2s">Select a Plan</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row">

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".1s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Basic</h3>
                    <h2 class="plan-price">$19</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>5 Projects</li>
                    <li>1 GB Storage</li>
                    <li>No Domain</li>
                    <li>1 User</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".2s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Premium</h3>
                    <h2 class="plan-price">$29</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>5 Projects</li>
                    <li>1 GB Storage</li>
                    <li>No Domain</li>
                    <li>1 User</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".3s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Developer</h3>
                    <h2 class="plan-price">$39</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>5 Projects</li>
                    <li>1 GB Storage</li>
                    <li>No Domain</li>
                    <li>1 User</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".4s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Business</h3>
                    <h2 class="plan-price">$49</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>5 Projects</li>
                    <li>1 GB Storage</li>
                    <li>No Domain</li>
                    <li>1 User</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>

      </div><!-- end row -->

    </div> <!-- end container -->
  </section>
  <!-- END PRICING -->



  <!-- CLIENTS -->
  <section>
    <div class="container clients section">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Testimonials</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Happy Clients</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row text-center">
        <div class="col-sm-12">
          <div class="">
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".1s">
              <a href="#"><img alt="01 brand" src="images/clients/01_brand.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".2s">
              <a href="#"><img alt="02 brand" src="images/clients/02_brand.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".3s">
              <a href="#"><img alt="03 brand" src="images/clients/03_brand.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".4s">
              <a href="#"><img alt="04 brand" src="images/clients/04_brand.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".5s">
              <a href="#"><img alt="05 brand" src="images/clients/05_brand.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".6s">
              <a href="#"><img alt="06 brand" src="images/clients/06_brand.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END CLIENTS -->

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Faq</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Simple Questions</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row m-t-30">
        <div class="col-md-5 col-md-offset-1">
          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".1s">
            <h4 class="question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".3s">
            <h4 class="question">Why use Lorem Ipsum?</h4>
            <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".5s">
            <h4 class="question">How many variations exist?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

        </div>
        <!--/col-md-5 -->

        <div class="col-md-5">
          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".2s">
            <h4 class="question">Is safe use Lorem Ipsum?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".4s">
            <h4 class="question">When can be used?</h4>
            <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".6s">
            <h4 class="question">License &amp; Copyright</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

        </div>
        <!--/col-md-5-->
      </div>

    </div>
  </section>
  <!-- END FAQ -->

  
  <!-- FOOTER -->
  <footer class="section bg-gray footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h5>Constructly</h5>
          <ul class="list-unstyled">
            <li><a href="">Home</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">FAQ</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Social</h5>
          <ul class="list-unstyled">
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
            <li><a href="">Behance</a></li>
            <li><a href="">Dribbble</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Support</h5>
          <ul class="list-unstyled">
            <li><a href="">Help & Support</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms & Conditions</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Contact</h5>
          <address>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890<br/>
            E: <a href="mailto:lugada@lugada.com">email@email.com</a>
          </address>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="footer-alt">
            <p class="pull-right text-muted m-b-0">
            @php 
                echo date("Y");
            @endphp 

            © Constructly
            </p>
            <a class="navbar-brand logo" href="index.html">
              <i class="zmdi zmdi-navigation"></i> <span>Constructly</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- END FOOTER -->


  <!-- Back to top -->
  <a href="#" class="back-to-top"> <i class="zmdi zmdi-chevron-up"> </i> </a>
    
@endsection
