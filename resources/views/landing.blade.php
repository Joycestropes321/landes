<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Express &mdash; Union Research</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
      rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('landing/fonts/icomoon/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('landing/css/jquery.fancybox.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap-datepicker.css') }}" />

    <link rel="stylesheet" href="{{  asset('landing/fonts/flaticon/font/flaticon.css')  }}" />

    <link rel="stylesheet" href="{{  asset('landing/css/aos.css')  }}" />

    <link rel="stylesheet" href="{{  asset('landing/css/style.css')  }}" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header
        class="site-navbar js-sticky-header site-navbar-target"
        role="banner"
      >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-xl-2">
              <h1 class="mb-0 site-logo">
                <a href="index.html" class="h2 mb-0"
                  >EUR<span class="text-primary">.</span>
                </a>
              </h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav
                class="site-navigation position-relative text-right"
                role="navigation"
              >
                <ul
                  class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block"
                >
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li>
                    <a href="#about-section" class="nav-link">About Us</a>
                  </li>

                  <li>
                    <a href="#services-section" class="nav-link">Services</a>
                  </li>

                  <li>
                    <a href="#contact-section" class="nav-link">Contact</a>
                  </li>
                  <li><a href="{{ url('/auth') }}" class="nav-link">Login</a></li>
                  <!-- <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li> -->
                </ul>
              </nav>
            </div>

            <div
              class="col-6 d-inline-block d-xl-none ml-md-0 py-3"
              style="position: relative; top: 3px;"
            >
              <a href="#" class="site-menu-toggle js-menu-toggle float-right"
                ><span class="icon-menu h3"></span
              ></a>
            </div>
          </div>
        </div>
      </header>

      <div
        class="site-blocks-cover overlay"
        style="background-image: url({{ asset('landing/images/hero_2.jpg') }});"
        data-aos="fade"
        id="home-section"
      >
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-10 mt-lg-5 text-center">
              <div class="single-text owl-carousel">
                <div class="slide">
                  <h1 class="text-uppercase" data-aos="fade-up">
                    Banking Solutions
                  </h1>
                  <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">
                    We provide all sort of services for our customers.
                  </p>
                  <div data-aos="fade-up" data-aos-delay="100">
                    <a
                      href="#"
                      target="_blank"
                      class="btn btn-primary mr-2 mb-2"
                      >Get In Touch</a
                    >
                  </div>
                </div>

                <div class="slide">
                  <h1 class="text-uppercase" data-aos="fade-up">
                    Financing Solutions
                  </h1>
                  <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">
                    Say No! to getting stranded. We have partnered with
                    differenct loan agencies to get you instant loans.
                  </p>
                  <div data-aos="fade-up" data-aos-delay="100">
                    <a
                      href="#"
                      target="_blank"
                      class="btn btn-primary mr-2 mb-2"
                      >Get In Touch</a
                    >
                  </div>
                </div>

                <div class="slide">
                  <h1 class="text-uppercase" data-aos="fade-up">
                    Savings Accounts
                  </h1>
                  <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">
                    Do you know, you can save your money with us.
                  </p>
                  <div data-aos="fade-up" data-aos-delay="100">
                    <a
                      href="#"
                      target="_blank"
                      class="btn btn-primary mr-2 mb-2"
                      >Get In Touch</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#next" class="mouse smoothscroll">
          <span class="mouse-icon">
            <span class="mouse-wheel"></span>
          </span>
        </a>
      </div>

      <div class="site-section cta-big-image" id="about-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <h2
                class="section-title mb-3"
                data-aos="fade-up"
                data-aos-delay=""
              >
                About Us
              </h2>
              <p class="lead" data-aos="fade-up" data-aos-delay="100">
                Get to know about Express Union Reserve.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
              <figure class="circle-bg">
                <img
                  src="{{  asset('landing/images/img_2.jpg') }}"
                  alt="Free Website Template by Free-Template.co"
                  class="img-fluid"
                />
              </figure>
            </div>
            <div
              class="col-lg-5 ml-auto"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <h3 class="text-black mb-4">We Solve Your Financial Problem</h3>

              <p>
                Far far away, behind the word mountains, lies Express Union
                Reserve, a multinational financial institution that provides
                individuals, businesses, private and public institutions across
                the globe.
              </p>

              <p>
                Whether you need to transfer money to friends down the street or
                family across the globe.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" id="next">
        <div class="container">
          <div class="row mb-5">
            <div
              class="col-md-4 text-center"
              data-aos="fade-up"
              data-aos-delay=""
            >
              <img
                src="{{  asset('landing/images/flaticon-svg/svg/001-wallet.svg') }}"
                alt="Free Website Template by Free-Template.co"
                class="img-fluid w-25 mb-4"
              />
              <h3 class="card-title">Money Savings</h3>
              <p>
                A small river named Duden flows by their place and supplies it
                with the necessary regelialia.
              </p>
            </div>
            <div
              class="col-md-4 text-center"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <img
                src="{{  asset('landing/images/flaticon-svg/svg/004-cart.svg') }}"
                alt="Free Website Template by Free-Template.co"
                class="img-fluid w-25 mb-4"
              />
              <h3 class="card-title">Online Shoppings</h3>
              <p>
                A small river named Duden flows by their place and supplies it
                with the necessary regelialia.
              </p>
            </div>
            <div
              class="col-md-4 text-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img
                src="{{  asset('landing/images/flaticon-svg/svg/006-credit-card.svg') }}"
                alt="Free Website Template by Free-Template.co"
                class="img-fluid w-25 mb-4"
              />
              <h3 class="card-title">Credit / Debit Cards</h3>
              <p>
                A small river named Duden flows by their place and supplies it
                with the necessary regelialia.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
              <figure class="circle-bg">
                <img
                  src="{{  asset('landing/images/about_2.jpg') }}"
                  alt="Free Website Template by Free-Template.co"
                  class="img-fluid"
                />
              </figure>
            </div>
            <div
              class="col-lg-5 ml-auto"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="mb-4">
                <h3 class="h3 mb-4 text-black">
                  Banking Solutions Is Our Priority
                </h3>
                <p>
                  Banking and finance are no one’s favourite task, trust us we
                  know. That’s why we have a full set of services to make sure
                  that banking does not get in the way of your lifestyle.
                </p>
              </div>

              <div class="mb-4">
                <ul class="list-unstyled ul-check success">
                  <li>Business consultation</li>
                  <li>Private banking</li>
                  <li>SME banking</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section
        class="site-section border-bottom bg-light"
        id="services-section"
      >
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Our Services</h2>
            </div>
          </div>
          <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
              <div class="unit-4">
                <div class="unit-4-icon">
                  <img
                    src="{{  asset('landing/images/flaticon-svg/svg/001-wallet.svg') }}"
                    alt="Free Website Template by Free-Template.co"
                    class="img-fluid w-25 mb-4"
                  />
                </div>
                <div>
                  <h3>Business Consulting</h3>
                  <p>
                    While supporting your business, we also help mitigate risk!
                  </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 mb-4 mb-lg-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="unit-4">
                <div class="unit-4-icon">
                  <img
                    src="{{  asset('landing/images/flaticon-svg/svg/006-credit-card.svg') }}"
                    alt="Free Website Template by Free-Template.co"
                    class="img-fluid w-25 mb-4"
                  />
                </div>
                <div>
                  <h3>Electronic Services</h3>
                  <p>
                    Don't wait in line, get online with our e-banking services
                    for the best banking experience anywhere, everywhere.
                  </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 mb-4 mb-lg-4"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="unit-4">
                <div class="unit-4-icon">
                  <img
                    src="{{  asset('landing/images/flaticon-svg/svg/002-rich.svg') }}"
                    alt="Free Website Template by Free-Template.co"
                    class="img-fluid w-25 mb-4"
                  />
                </div>
                <div>
                  <h3>Income Monitoring</h3>
                  <p>
                    our financial experts are always available to give you
                    insight into how to best maximize your income
                  </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 mb-4 mb-lg-4"
              data-aos="fade-up"
              data-aos-delay=""
            >
              <div class="unit-4">
                <div class="unit-4-icon">
                  <img
                    src="{{  asset('landing/images/flaticon-svg/svg/003-notes.svg') }}"
                    alt="Free Website Template by Free-Template.co"
                    class="img-fluid w-25 mb-4"
                  />
                </div>
                <div>
                  <h3>Insurance Consulting</h3>
                  <p>
                    You can subscribe for our insurance packages to see what
                    best works for you.
                  </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 mb-4 mb-lg-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="unit-4">
                <div class="unit-4-icon">
                  <img
                    src="{{  asset('landing/images/flaticon-svg/svg/004-cart.svg') }}"
                    alt="Free Website Template by Free-Template.co"
                    class="img-fluid w-25 mb-4"
                  />
                </div>
                <div>
                  <h3>Financial Investment</h3>
                  <p>
                    We give the power to create wealth by assigning you a
                    financial expert, who would guide you and advise you as
                    needed.
                  </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section" id="about-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
              <figure class="circle-bg">
                <img
                  src="{{  asset('landing/images/img_4.jpg') }}"
                  alt="Free Website Template by Free-Template.co"
                  class="img-fluid"
                />
              </figure>
            </div>
            <div
              class="col-lg-5 ml-auto"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="row">
                <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                  <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4 mb-3">
                      <span class="text-primary flaticon-head"></span>
                    </div>
                    <div>
                      <h3>Bank Loan</h3>
                      <p>
                        Say No! to getting stranded. We have partnered with
                        differenct loan agencies to get you instant loans.
                      </p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
                <div
                  class="col-12 mb-4"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4 mb-3">
                      <span class="text-primary flaticon-smartphone"></span>
                    </div>
                    <div>
                      <h3>Banking Consulation</h3>
                      <p>
                        Get the help you needed, our team of customer agents are
                        readily available to listen to you and work with you.
                      </p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="site-section bg-light"
        id="contact-section"
        data-aos="fade"
      >
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Contact Us</h2>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-4 text-center">
              <p class="mb-4">
                <span class="icon-room d-block h2 text-primary"></span>
                <span
                  >203 Drake St. Mountain View, San Francisco, California,
                  USA</span
                >
              </p>
            </div>
            <!-- <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#">+1 232 3235 324</a>
            </p>
          </div> -->
            <div class="col-md-4 text-center">
              <p class="mb-0">
                <span class="icon-mail_outline d-block h2 text-primary"></span>
                <a href="#">support@expressunionreserve.com</a>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-5">
              <form action="#" class="p-5 bg-white">
                <h2 class="h4 text-black mb-5">Contact Form</h2>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control" />
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label>
                    <input type="subject" id="subject" class="form-control" />
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label>
                    <textarea
                      name="message"
                      id="message"
                      cols="30"
                      rows="7"
                      class="form-control"
                      placeholder="Write your notes or questions here..."
                    ></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input
                      type="submit"
                      value="Send Message"
                      class="btn btn-primary btn-md text-white"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-5">
                  <h2 class="footer-heading mb-4">About Us</h2>
                  <p>
                    Far far away, behind the word mountains, lies Express Union
                    Reserve, a multinational financial institution that provides
                    individuals, businesses, private and public institutions
                    across the globe.
                  </p>

                  <p>
                    Whether you need to transfer money to friends down the
                    street or family across the globe.
                  </p>
                </div>
                <div class="col-md-3 ml-auto">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#about-section" class="smoothscroll">Terms</a>
                    </li>
                    <li>
                      <a href="#about-section" class="smoothscroll">Policy</a>
                    </li>
                    <li>
                      <a href="#about-section" class="smoothscroll">About Us</a>
                    </li>
                    <li>
                      <a href="#services-section" class="smoothscroll"
                        >Services</a
                      >
                    </li>
                    <li>
                      <a href="#contact-section" class="smoothscroll"
                        >Contact Us</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-md-3 footer-social">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"
                    ><span class="icon-facebook"></span
                  ></a>
                  <a href="#" class="pl-3 pr-3"
                    ><span class="icon-twitter"></span
                  ></a>
                  <a href="#" class="pl-3 pr-3"
                    ><span class="icon-instagram"></span
                  ></a>
                  <a href="#" class="pl-3 pr-3"
                    ><span class="icon-linkedin"></span
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
              <form action="#" method="post" class="footer-subscribe">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control border-secondary text-white bg-transparent"
                    placeholder="Enter Email"
                    aria-label="Enter Email"
                    aria-describedby="button-addon2"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-primary text-black"
                      type="button"
                      id="button-addon2"
                    >
                      Send
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved
                </p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- .site-wrap -->
 
    <script src="{{  asset('landing/js/jquery-3.3.1.min.js')  }}"></script>
    <script src="{{  asset('landing/js/jquery-ui.js')  }}"></script>
    <script src="{{  asset('landing/js/popper.min.js')  }}"></script>
    <script src="{{  asset('landing/js/bootstrap.min.js')  }}"></script>
    <script src="{{  asset('landing/js/owl.carousel.min.js')  }}"></script>
    <script src="{{  asset('landing/js/jquery.countdown.min.js')  }}"></script>
    <script src="{{  asset('landing/js/jquery.easing.1.3.js')  }}"></script>
    <script src="{{  asset('landing/js/aos.js')  }}"></script>
    <script src="{{  asset('landing/js/jquery.fancybox.min.js')  }}"></script>
    <script src="{{  asset('landing/js/jquery.sticky.js')  }}"></script>
    <script src="{{  asset('landing/js/isotope.pkgd.min.js')  }}"></script>

    <script src="{{  asset('landing/js/main.js')  }}"></script>
  </body>
</html>
