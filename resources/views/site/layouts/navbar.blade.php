<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description"
    content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
    <meta name="keywords"
    content="food template, bakery products, html, eCommerce html template, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
    <meta name="author" content="spacingtech_webify">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Unimo - The Multipurpose HTML5 Template</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo/favicon.png">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/magnific-popup.css")}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/animate.min.css")}}">
    <!-- bootstrap icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap-icons.css")}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/all.min.css")}}">
    <!--fether css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/feather.css")}}">
    <!-- owl css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <!-- swiper-bundle css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/swiper-bundle.min.css")}}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/slick.css")}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield("page-style")
  </head>
  <body>
    <!-- top-notification start -->
    <section class="top-notification-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <ul class="notification-entry">
              <li class="notify-wrap coupan-text">
                <p>
                  <span>Get 20% off your first order:</span>
                  <span class="code-text">20%OFF</span>
                </p>
              </li>
              <li class="notify-wrap social-media">
                <ul class="social-icon">
                  <li>
                    <a href="https://facebook.com/">
                      <span class="icon-social facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/">
                      <span class="icon-social twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/">
                      <span class="icon-social instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="https://youtube.com/">
                      <span class="icon-social youtube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="https://linkedin.com/">
                      <span class="icon-social linkedin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                      </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="notify-wrap contact-wrap">
                <div class="contact-link">
                  <div class="connect-wrap contact-mail">
                    <a href="mailto:komalpkg14@gmail.com">
                      <i class="feather-mail"></i>
                      <span>komalpkg14@gmail.com</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- top-notification end -->
    <!-- header start -->
    <header class="header-area">
      <div class="header-main-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="header-main">
                <!-- header logo start -->
                <div class="header-element logo">
                  <a href="index.html" class="theme-header-logo">
                    <img src="https://fplogoimages.withfloats.com/tile/5d64d4075a899b000169014c.jpeg" width="50px"  class="img-fluid" alt="logo">
                  </a>
                </div>
                <!-- header logo end -->
                <!-- header megamenu start -->
                <div class="header-element megamenu-content">
                  <a href="#main-collapse" class="browse-cat" data-bs-toggle="collapse" aria-expanded="true">
                    <span class="menu-icon"><i class="feather-menu"></i></span>
                    <span class="menu-title">Menu</span>
                    <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                  </a>
                  <div class="mainwrap collapse show" id="main-collapse">
                    <ul class="main-menu">
                      <li class="menu-link">
                        <a href="{{route("home")}}" class="link-title">
                          <span class="sp-link-title">Home</span>
                        </a>
                      </li>

                      <li class="menu-link">
                        <a href="{{route('about')}}" class="link-title">
                          <span class="sp-link-title">About</span>
                        </a>
                      </li>
                      <li class="menu-link">
                        <a href="{{route("product")}}" class="link-title">
                          <span class="sp-link-title">Product
                            
                          </span>
                        </a>
                        
                      </li>
                     
                      <li class="menu-link">
                        <a href="{{route("contact")}}" class="link-title">
                          <span class="sp-link-title">Contact</span>
                        </a>
                        {{-- <a href="#desk-pages" class="link-title link-title-lg" data-bs-toggle="collapse">
                          <span class="sp-link-title">Pages</span>
                          <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                        </a>
                        <div class="menu-dropdown sub-menu collapse" id="desk-pages">
                          <ul class="container p-0 ul">
                            <li class="submenu-li">
                              <a href="about-us.html" class="sublink-title">
                                <span class="sp-link-title">About us</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <a href="#desk-about-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                <span class="sp-link-title">About us</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <ul class="supmenu-dropdown collapse" id="desk-about-us">
                                <li class="supmenu-li">
                                  <a href="about-us.html" class="suplink-title">
                                    <span class="sp-link-title">About us</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="about-us-2.html" class="suplink-title">
                                    <span class="sp-link-title">About us 2</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="about-us-3.html" class="suplink-title">
                                    <span class="sp-link-title">About us 3</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="submenu-li">
                              <a href="my-account.html" class="sublink-title">
                                <span class="sp-link-title">My account</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <a href="#desk-account" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                <span class="sp-link-title">My account</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <ul class="supmenu-dropdown collapse" id="desk-account">
                                <li class="supmenu-li">
                                  <a href="order-history.html" class="suplink-title">
                                    <span class="supmenu-title">Order</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="profile.html" class="suplink-title">
                                    <span class="supmenu-title">Profile</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="pro-address.html" class="suplink-title">
                                    <span class="supmenu-title">Address</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="pro-wishlist.html" class="suplink-title">
                                    <span class="supmenu-title">Wishlist</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="pro-tickets.html" class="suplink-title">
                                    <span class="supmenu-title">My tickets</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="billing-info.html" class="suplink-title">
                                    <span class="supmenu-title">Billing info</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="track-page.html" class="suplink-title">
                                    <span class="supmenu-title">Track page</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="order-complete.html" class="suplink-title">
                                    <span class="supmenu-title">Order complete</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="submenu-li">
                              <a href="contact-us.html" class="sublink-title">
                                <span class="sp-link-title">Contact us</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <a href="#desk-contact-us" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                <span class="sp-link-title">Contact us</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <ul class="supmenu-dropdown collapse" id="desk-contact-us">
                                <li class="supmenu-li">
                                  <a href="contact-us.html" class="suplink-title">
                                    <span class="supmenu-title">Contact us</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="contact-us-2.html" class="suplink-title">
                                    <span class="supmenu-title">Contact us 2</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="submenu-li">
                              <a href="javascript:void(0)" class="sublink-title">
                                <span class="sp-link-title">Checkout</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <a href="#desk-checkout" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                <span class="sp-link-title">Checkout</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <ul class="supmenu-dropdown collapse" id="desk-checkout">
                                <li class="supmenu-li">
                                  <a href="checkout-style1.html" class="suplink-title">
                                    <span class="supmenu-title">Checkout style 1</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="checkout-style2.html" class="suplink-title">
                                    <span class="supmenu-title">Checkout style 2</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="checkout-style3.html" class="suplink-title">
                                    <span class="supmenu-title">Checkout style 3</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="submenu-li">
                              <a href="javascript:void(0)" class="sublink-title">
                                <span class="sp-link-title">Features</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <a href="#desk-feature" class="sublink-title sublink-title-lg" data-bs-toggle="collapse">
                                <span class="sp-link-title">Features</span>
                                <span class="menu-arrow"><i class="feather-chevron-right"></i></span>
                              </a>
                              <ul class="supmenu-dropdown collapse" id="desk-feature">
                                <li class="supmenu-li">
                                  <a href="cancellation.html" class="suplink-title">
                                    <span class="supmenu-title">Cancellation</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="cart-page.html" class="suplink-title">
                                    <span class="supmenu-title">Cart page</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="wishlist-product.html" class="suplink-title">
                                    <span class="supmenu-title">Wishlist product</span>
                                  </a>
                                </li>
                                <li class="supmenu-li">
                                  <a href="sitemap.html" class="suplink-title">
                                    <span class="supmenu-title">Sitemap</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="submenu-li">
                              <a href="faq.html" class="sublink-title">
                                <span class="sp-link-title">Faq's</span>
                              </a>
                              <a href="faq.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Faq's</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="privacy-policy.html" class="sublink-title">
                                <span class="sp-link-title">Privacy policy</span>
                              </a>
                              <a href="privacy-policy.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Privacy policy</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="payment-policy.html" class="sublink-title">
                                <span class="sp-link-title">Payment policy</span>
                              </a>
                              <a href="payment-policy.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Payment policy</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="terms-condition.html" class="sublink-title">
                                <span class="sp-link-title">Terms & condition</span>
                              </a>
                              <a href="terms-condition.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Terms & condition</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="return-policy.html" class="sublink-title">
                                <span class="sp-link-title">Return policy</span>
                              </a>
                              <a href="return-policy.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Return policy</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="404.html" class="sublink-title">
                                <span class="sp-link-title">404</span>
                              </a>
                              <a href="404.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">404</span>
                              </a>
                            </li>
                            <li class="submenu-li">
                              <a href="coming-soon.html" class="sublink-title">
                                <span class="sp-link-title">Coming soon</span>
                              </a>
                              <a href="coming-soon.html" class="sublink-title sublink-title-lg">
                                <span class="sp-link-title">Coming soon</span>
                              </a>
                            </li>
                          </ul>
                        </div> --}}
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- header megamenu end -->
                <!-- right-block-box start-->
                <div class="header-element right-block-box">
                  <ul class="shop-element">
                    <li class="side-wrap toggle-wrap">
                      <!-- button toggler start -->
                      <button class="toggler-button"><span class="line"></span></button>
                      <!-- button toggler end -->
                    </li>
                    <li class="side-wrap search-bar-wrap">
                      <div class="search-rap">
                        <a class="search-crap" data-bs-toggle="collapse" href="#search-crap">
                          <i class="feather-search"></i>
                        </a>
                        <div class="crap-search collapse" id="search-crap">
                          <div class="form-search">
                            <input type="search" name="q" value="" placeholder="Search product here..." id="search"
                            class="input-text" aria-label="Search our store" required="" autocomplete="off">
                            <a href="search.html" class="search-btn"><i class="feather-search"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="side-wrap search-wrap">
                      <a href="#seachmodal" class="search-popup" data-bs-toggle="modal">
                        <i class="feather-search"></i>
                      </a>
                      <a href="#seachmodal" class="search-popup search-popup-lg" data-bs-toggle="modal"><i
                      class="feather-search"></i></a>
                    </li>
                    <li class="side-wrap user-wrap">
                      <div class="acc-desk-header">
                        <div class="acc-title">
                          <a href="login-account.html">
                            <span class="user-icon"><i class="feather-user"></i></span>
                          </a>
                        </div>
                        <div class="acc-title-lg">
                          <a href="login-account.html"><i class="feather-user"></i></a>
                        </div>
                      </div>
                    </li>
                    <li class="side-wrap wishlist-wrap">
                      <a href="wishlist-product.html" class="header-wishlist-btn">
                        <span class="wishlist-icon"><i class="feather-heart"></i></span>
                        <span class="wishlist-title">Wishlist</span>
                        <span class="wishlist-counter">5</span>
                      </a>
                    </li>
                    <li class="side-wrap cart-wrap">
                      <div class="shopping-widget">
                        <div class="shopping-cart">
                          <a href="javascript:void(0)" class="cart-count">
                            <span class="cart-icon-wrap">
                              <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                              <span class="cart-title">My cart</span>
                              <span class="bigcounter">8</span>
                            </span>
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- right-block-box end-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>