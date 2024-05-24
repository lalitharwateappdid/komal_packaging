@extends('site.layouts.main')

@section('page-content')
    <main>
        <!-- breadcrumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="col">
                    <div class="row">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb main-title start-->
                            <div class="breadcrumb-title">
                                <h2>Contact us 2</h2>
                            </div>
                            <!-- breadcrumb main-title end-->
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item-link">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item-link">
                                    <span>Contact us</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <section class="main-content-wrap contact-us-page">
            <div class="container">
                <h2 class="text-align mb-4">Contact Us</h2>


                <div class="row  ">
                    <div class="col-lg-6">
                        
                        <h5 >We Are Listening!</h5>
                        <p>Please contact us if you have any queries.</p>

                        <div class="form-group mt-3">
                            <textarea placeholder="Type your requirements in details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="form-group mt-3">
                            <input type="number" class="form-control" placeholder="Your Email or Contact Number" id="exampleFormControlTextarea1" rows="3"></input>
                          </div>
                    </div>
                    <div class="col-lg-6">
                        <h5>Get in touch</h5>
                        <p>You can reach out to us at</p>
                        <div class="d-flex mt-4 align-items-center ">
                            <i class="fa-solid fa-house me-3"></i>
                            <div>
                            <p class="fw-bold">Office No 131, Raja Industrial Estate, P. K. Road, Mulund West, 400080</p>
                            <p>Mumbai, India, 400080</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>

    </main>
@endsection
