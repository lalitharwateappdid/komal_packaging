@extends('site.layouts.main')

@section("page-style")
<link rel="stylesheet" href="{{asset("assets/css/product-page.css")}}">
@endsection

@section("page-content")
<main>
    <section class="breadcrumb-area">
      <div class="container">
        <div class="col">
          <div class="row">
            <div class="breadcrumb-index">
              <!-- breadcrumb main-title start-->
              <div class="breadcrumb-title">
                <h2>Stripping pliers</h2>
              </div>
              <!-- breadcrumb main-title end-->
              <!-- breadcrumb-list start -->
              <ul class="breadcrumb-list">
                <li class="breadcrumb-item-link">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item-link">
                  <span>Stripping pliers</span>
                </li>
              </ul>
              <!-- breadcrumb-list end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb start-->
    <section class="product-details-page pro-style1">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="pro_details_pos pro_details_left_pos">
              <!-- Product slider start -->
              <div class="product_detail_slider product_details_tb product_details product_details_sticky">
                <a href="product-template7.html" class="next-prev-product prev">
                  <span></span>
                </a>
                <a href="product-template2.html" class="next-prev-product next">
                  <span>Next</span>
                </a>
                <!-- Product slider start -->
                <div class="product_detail_img product_detail_img_bottom">
                  <!-- top slick-slider start -->
                  <div class="product_img_top">
                    <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                    <div class="slider-big slick-slider">
                      <div class="slick-slide ">
                        <a href="img/product/packging-pro-04.jpg" class="product-single">
                          <figure class="zoom" onmousemove="zoom(event)"
                            style="background-image: url('https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg');">
                            <img src="https://productimages.withfloats.com/tile/5e1036cf163e0f0001ee8881.jpeg" class="img-fluid" alt="packging-pro-04">
                          </figure>
                        </a>
                      </div>
                     
                    </div>
                  </div>
                  <!-- top slick-slider end -->
                  <!-- small slick-slider start -->
                  
                  <!-- small slick-slider end -->
                </div>
                <!-- Product slider end -->
              </div>
              <!-- peoduct detail start -->
              <div class="product_details_wrap product_details_tb product_details">
                <div class="product_details_info">
                  <div class="pro-nprist">
                    <div class="product-info">
                      <!-- product-rating start -->
                      <div class="product-rating">
                        <span class="star-rating">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </span>
                        <span class="spr-badge-caption">3 reviews</span>
                      </div>
                      <!-- product-rating end -->
                    </div>
                    <div class="product-info">
                      <!-- product-title start -->
                      <div class="product-title">
                        <h2>HDPE jars</h2>
                      </div>
                      <!-- product-title end -->
                    </div>
                 
                
                  
                  
                    <div class="product-info">
                      <div class="product-actions">
                        <!-- pro-deatail button start -->
                        <div class="pro-detail-button">
                          <button type="button" class="btn add-to-cart ajax-spin-cart">
                            <span class="cart-title">Check Now</span>
                          </button>
                          <a href="cart-empty.html" class="btn btn-cart btn_theme">
                            <span>Enquiry Now</span>
                          </a>
                        </div>
                        <!-- pro-deatail button start -->
                        <!-- pro-deatail wishlist start -->
                    
                        <!-- pro-deatail wishlist end -->
                      </div>
                    </div>
                    
                   
                    <!-- que-modal stat -->
                    <div class="modal fade que-modal" id="que-modal" aria-modal="true" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-body">
                            <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="feather-x"></i></button>
                            <div class="product-form-list">
                              <div class="single-product-wrap">
                                <div class="product-image">
                                  <a class="pro-img" href="collection.html">
                                    <img class="img-fluid img1 resp-img1" src="img/product/packging-pro-10-b.jpg"
                                      alt="p-1">
                                    <img class="img-fluid img2 resp-img2" src="img/product/packging-pro-10-c.jpg"
                                      alt="p-2">
                                  </a>
                                </div>
                               
                              </div>
                            </div>
                            <div class="ask-form">
                              <h6>Ask a question</h6>
                              <form method="post" class="contact-form">
                                <input type="hidden" name="contact[product url]" value="">
                                <div class="form-grp">
                                  <input type="text" name="contact[name]" required="" placeholder="Your name*">
                                  <input type="text" name="contact[phone]" placeholder="Your phone number">
                                  <input type="email" name="contact[email]" required="" placeholder="Your email*">
                                  <textarea name="contact[question]" rows="4" required=""
                                    placeholder="Your message*"></textarea>
                                  <p>* Required fields</p>
                                  <button type="submit" class="btn-style2">Submit Now</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- que-modal end -->
                   
                    <div class="product-info">
                      <div class="share-icons">
                        <h6>Share:</h6>
                        <ul class="pro_social_link">
                          <li class="facebook">
                            <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="twitter">
                            <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="twitter">
                            <a href="https://web.telegram.org" class="twitter"><i class="fab fa-telegram"></i></a>
                          </li>
                          <li class="pinterest">
                            <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
              
                  </div>
                </div>
              </div>
              <!-- peoduct detail end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="related-product bt">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="product-related">
              <!-- related-pro. title start -->
              <div class="section-capture">
                <div class="section-title">
                  <div class="section-cont-title">
                    <h2>
                      <span>Related product</span>
                    </h2>
                  </div>
                </div>
              </div>
              <!-- related-pro. title end -->
              <!-- related-pro. slider start -->
              <div class="related-slider">
                <div class="product-related-slider swiper" id="related-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <!-- product start -->
                      <div class="single-product-wrap">
                        <!-- product-img start -->
                        <div class="product-image">
                          <a href="product-template2.html" class="pro-img">
                            <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img1" alt="packging-pro-01.jpg">
                            <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img2"
                            alt="packging-pro-01-a.jpg">
                          </a>
                          <!-- product-action start -->
                          <div class="product-action">
                            <a href="wishlist-product.html" class="wishlist-product">
                              <span class="wishlist-icon"><i class="feather-heart"></i></span>
                            </a>
                          </div>
                          <div class="product-add-cart-action">
                            <div class="product-action">
                              <a href="javascript:void(0)" class="add-to-cart">
                                <span class="cart-title">Add to cart</span>
                              </a>
                              <a href="#quickview" class="quick-view" data-bs-toggle="modal"
                                data-bs-target="#quickview">
                                <span class="quickview-title">Quickview</span>
                              </a>
                            </div>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-img end -->
                        <!-- product-content start -->
                        <div class="product-content">
                          <!-- product-title start -->
                          <h6><a href="product-template2.html">Plastic Water Camper</a></h6>
                          <!-- product-title end -->
                          <!-- product-price start -->
                          
                          <!-- product-price end -->
                          <!-- product-action start -->
                          <div class="product-action">
                          
                            
                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                              <span class="quickview-icon">View</span>
                            </a>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-content end -->
                      </div>
                      <!-- product end -->
                    </div>
                    <div class="swiper-slide">
                      <!-- product start -->
                      <div class="single-product-wrap">
                        <!-- product-img start -->
                        <div class="product-image">
                          <a href="product-template2.html" class="pro-img">
                            <img src="https://productimages.withfloats.com/tile/5dec773495f21f0001f5c0ef.jpeg" class="img-fluid img1" alt="packging-pro-03.jpg">
                            <img src="https://productimages.withfloats.com/tile/5dec773495f21f0001f5c0ef.jpeg" class="img-fluid img2"
                            alt="packging-pro-03-a.jpg">
                          </a>
                          <!-- product-action start -->
                          <div class="product-action">
                            <a href="wishlist-product.html" class="wishlist-product">
                              <span class="wishlist-icon"><i class="feather-heart"></i></span>
                            </a>
                          </div>
                          <div class="product-add-cart-action">
                            <div class="product-action">
                            
                              <a href="#quickview" class="quick-view" data-bs-toggle="modal"
                                data-bs-target="#quickview">
                                <span class="quickview-title">View</span>
                              </a>
                            </div>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-img end -->
                        <!-- product-content start -->
                        <div class="product-content">
                          <!-- product-title start -->
                          <h6><a href="product-template2.html">Shaker</a></h6>
                          <!-- product-title end -->
                          <!-- product-price start -->
                         
                          <!-- product-price end -->
                          <!-- product-action start -->
                          <div class="product-action">
                            <a href="wishlist-product.html" class="wishlist-product">
                              <span class="wishlist-icon"><i class="feather-heart"></i></span>
                            </a>
                            <a href="javascript:void(0)" class="add-to-cart">
                              <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                            </a>
                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                              <span class="quickview-icon"><i class="feather-eye"></i></span>
                            </a>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-content end -->
                      </div>
                      <!-- product end -->
                    </div>
                    
                    <div class="swiper-slide">
                        <!-- product start -->
                        <div class="single-product-wrap">
                          <!-- product-img start -->
                          <div class="product-image">
                            <a href="product-template2.html" class="pro-img">
                              <img src="https://productimages.withfloats.com/tile/5dec773495f21f0001f5c0ef.jpeg" class="img-fluid img1" alt="packging-pro-03.jpg">
                              <img src="https://productimages.withfloats.com/tile/5dec773495f21f0001f5c0ef.jpeg" class="img-fluid img2"
                              alt="packging-pro-03-a.jpg">
                            </a>
                            <!-- product-action start -->
                            <div class="product-action">
                              <a href="wishlist-product.html" class="wishlist-product">
                                <span class="wishlist-icon"><i class="feather-heart"></i></span>
                              </a>
                            </div>
                            <div class="product-add-cart-action">
                              <div class="product-action">
                              
                                <a href="#quickview" class="quick-view" data-bs-toggle="modal"
                                  data-bs-target="#quickview">
                                  <span class="quickview-title">View</span>
                                </a>
                              </div>
                            </div>
                            <!-- product-action end -->
                          </div>
                          <!-- product-img end -->
                          <!-- product-content start -->
                          <div class="product-content">
                            <!-- product-title start -->
                            <h6><a href="product-template2.html">Shaker</a></h6>
                            <!-- product-title end -->
                            <!-- product-price start -->
                           
                            <!-- product-price end -->
                            <!-- product-action start -->
                            <div class="product-action">
                              <a href="wishlist-product.html" class="wishlist-product">
                                <span class="wishlist-icon"><i class="feather-heart"></i></span>
                              </a>
                              <a href="javascript:void(0)" class="add-to-cart">
                                <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                              </a>
                              <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                                <span class="quickview-icon"><i class="feather-eye"></i></span>
                              </a>
                            </div>
                            <!-- product-action end -->
                          </div>
                          <!-- product-content end -->
                        </div>
                        <!-- product end -->
                      </div>
                  </div>

                   <div class="swiper-slide">
                      <!-- product start -->
                      <div class="single-product-wrap">
                        <!-- product-img start -->
                        <div class="product-image">
                          <a href="product-template2.html" class="pro-img">
                            <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img1" alt="packging-pro-01.jpg">
                            <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img2"
                            alt="packging-pro-01-a.jpg">
                          </a>
                          <!-- product-action start -->
                          <div class="product-action">
                            <a href="wishlist-product.html" class="wishlist-product">
                              <span class="wishlist-icon"><i class="feather-heart"></i></span>
                            </a>
                          </div>
                          <div class="product-add-cart-action">
                            <div class="product-action">
                              <a href="javascript:void(0)" class="add-to-cart">
                                <span class="cart-title">Add to cart</span>
                              </a>
                              <a href="#quickview" class="quick-view" data-bs-toggle="modal"
                                data-bs-target="#quickview">
                                <span class="quickview-title">Quickview</span>
                              </a>
                            </div>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-img end -->
                        <!-- product-content start -->
                        <div class="product-content">
                          <!-- product-title start -->
                          <h6><a href="product-template2.html">Plastic Water Camper</a></h6>
                          <!-- product-title end -->
                          <!-- product-price start -->
                          
                          <!-- product-price end -->
                          <!-- product-action start -->
                          <div class="product-action">
                          
                            
                            <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                              <span class="quickview-icon">View</span>
                            </a>
                          </div>
                          <!-- product-action end -->
                        </div>
                        <!-- product-content end -->
                      </div>
                      <!-- product end -->
                    </div>
                </div>

                <div class="swiper-slide">
                    <!-- product start -->
                    <div class="single-product-wrap">
                      <!-- product-img start -->
                      <div class="product-image">
                        <a href="product-template2.html" class="pro-img">
                          <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img1" alt="packging-pro-01.jpg">
                          <img src="https://productimages.withfloats.com/tile/5df8d333d7aa880001cb72e3.jpeg" class="img-fluid img2"
                          alt="packging-pro-01-a.jpg">
                        </a>
                        <!-- product-action start -->
                        <div class="product-action">
                          <a href="wishlist-product.html" class="wishlist-product">
                            <span class="wishlist-icon"><i class="feather-heart"></i></span>
                          </a>
                        </div>
                        <div class="product-add-cart-action">
                          <div class="product-action">
                            <a href="javascript:void(0)" class="add-to-cart">
                              <span class="cart-title">Add to cart</span>
                            </a>
                            <a href="#quickview" class="quick-view" data-bs-toggle="modal"
                              data-bs-target="#quickview">
                              <span class="quickview-title">Quickview</span>
                            </a>
                          </div>
                        </div>
                        <!-- product-action end -->
                      </div>
                      <!-- product-img end -->
                      <!-- product-content start -->
                      <div class="product-content">
                        <!-- product-title start -->
                        <h6><a href="product-template2.html">Plastic Water Camper</a></h6>
                        <!-- product-title end -->
                        <!-- product-price start -->
                        
                        <!-- product-price end -->
                        <!-- product-action start -->
                        <div class="product-action">
                        
                          
                          <a href="#quickview" class="quick-view" data-bs-toggle="modal" data-bs-target="#quickview">
                            <span class="quickview-icon">View</span>
                          </a>
                        </div>
                        <!-- product-action end -->
                      </div>
                      <!-- product-content end -->
                    </div>
                    <!-- product end -->
                  </div>
                <!-- related-pro. slider start -->
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
@endsection