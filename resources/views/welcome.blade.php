<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>FINK</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tooplate-crispy-kitchen.css') }}" rel="stylesheet">

    {{-- <link href="asset('css/bootstrap.min.css')" rel="stylesheet">

    <link href="asset('css/bootstrap-icons.css')" rel="stylesheet">

    <link href="asset('css/tooplate-crispy-kitchen.css')" rel="stylesheet"> --}}

    <!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.html">
                FINK
            </a>

            <div class="d-lg-none">
                <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#BookingModal">Reservation</button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Story</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="news.html">Our Updates</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>   
                </ul>
            </div>

            <div class="d-none d-lg-block">
                <a
                href="{{ route('login') }}"class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Masuk
                </a>
                <a
                href="{{ route('register') }}"class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Daftar UMKM
                </a>
            </div>

        </div>
        
    </nav>

    <main>

        <section class="hero">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="heroText">

                            <h1 class="text-white mb-lg-5 mb-3">FINK HERE!</h1>

                            <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-wrap align-items-center">
                                </div>

                                <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrap">
                                        <img src="{{asset('assets/images/slide/mieayam.jpg')}}"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <span class="text-white">
                                            <i class="bi-geo-alt me-2"></i>
                                            Jl, Depok, No 15 
                                        </span>

                                        <h4 class="hero-text">Mie Ayam Ipan</h4>
                                        
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="{{asset('assets/images/slide/takoyakii.jpg')}}"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <span class="text-white">
                                            <i class="bi-geo-alt me-2"></i>
                                           jl, Depok, No 15
                                        </span>
                                        <h4 class="hero-text">Takoyaki Teteh </h4>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3"></h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="{{asset('assets/images/slide/sateayam.jpg')}}"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <i class="bi-geo-alt me-2"></i>
                                            jl, Depok, No 15
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">Sate Ayam</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="{{asset('assets/video/production_ID_3769033.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Daftar Toko</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/mieayam.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Hot</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Mie Ayam Ipan</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    JL, Depok, No 15
                                </span>


                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/takoyakii.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Poppuler</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Takoyaki Teteh</h4>
                                

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    JL, Depok, No 15
                                </span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/sateayam.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">New</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Sate Ayam</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    jl, Depok, No 15
                                </span>

                                <del class="ms-4"><small>$</small>150</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/nasgor.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Nasi Goreng Jokel </h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    Jl, Depok, No 15
                                </span>

                                <del class="ms-4"><small>$</small>124</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/pecellele.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Pecel Lele</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    Jakarta, Cilandak
                                </span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="{{asset('assets/images/slide/warkop.jpg')}}"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Lunch</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Warung Kopi</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                                <span class="text-white">
                                    <i class="bi-geo-alt me-2"></i>
                                    Jakarta, Cilandak
                                </span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="BgImage"></section>

        <section class="news section-padding">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">News &amp; Events</h2>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="{{asset('assets/images/news/pablo-merchan-montes-Orz90t6o0e4-unsplash.jpg')}}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Healthy Lifestyle and happy
                                        living tips</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="{{asset('assets/images/news/stefan-johnson-xIFbDeGcy44-unsplash.jpg')}}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info news-text-info-large">
                                <span class="category-tag bg-danger">Featured</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">How to make a healthy meal</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                            <a href="news-detail.html">
                                <img src="{{asset('assets/images/news/gilles-lambert-S_LhjpfIdm4-unsplash.jpg')}}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Promotions</span>

                                <strong>8 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Is Coconut good for you?</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                            <a href="news-detail.html">
                                <img src="{{asset('assets/images/news/caroline-attwood-bpPTlXWTOvg-unsplash.jpg')}}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag">News</span>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Salmon Steak Noodle</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="news-thumb mb-4">
                            <a href="news-detail.html">
                                <img src="{{asset('assets/images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg')}}"
                                    class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-text-info">
                                <span class="category-tag me-3 bg-info">Meeting</span>

                                <strong>30 April 2022</strong>

                                <h5 class="news-title mt-2">
                                    <a href="news-detail.html" class="news-title-link">Making a healthy salad</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer section-padding">

        <div class="container">

            <div class="row">

                <div class="col-12">
                    <h4 class="text-white mb-4 me-5">FINK</h4>
                </div>

                <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                    <p>Depok, Margonda</p>

                    <a href="https://goo.gl/maps/wZVGLA7q64uC1s886"
                        class="custom-btn btn btn-dark mt-2">Directions</a>
                </div>

                <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                    <p class="mb-2">Monday - Friday</p>

                    <p>10:00 AM - 08:00 PM</p>

                    <p>Tel: <a href="tel: 010-02-0340" class="tel-link">010-02-0340</a></p>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                                class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>

                    <p class="copyright-text tooplate-mt60">Copyright © 2022 FINK., Ltd.
                        <br>Design: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Tooplate</a>
                    </p>

                </div>

            </div><!-- row ending -->

        </div><!-- container ending -->

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-0">Reserve a table</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-column justify-content-center">
                    <div class="booking">

                        <form class="booking-form row" role="form" action="#" method="post">
                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Full Name</label>

                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="email" class="form-label">Email Address</label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="your@email.com" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="phone" class="form-label">Phone Number</label>

                                <input type="telephone" name="phone" id="phone"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control"
                                    placeholder="123-456-7890">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="people" class="form-label">Number of persons</label>

                                <input type="text" name="people" id="people" class="form-control"
                                    placeholder="12 persons">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="date" class="form-label">Date</label>

                                <input type="date" name="date" id="date" value=""
                                    class="form-control">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="time" class="form-label">Time</label>

                                <select class="form-select form-control" name="time" id="time">
                                    <option value="5" selected>5:00 PM</option>
                                    <option value="6">6:00 PM</option>
                                    <option value="7">7:00 PM</option>
                                    <option value="8">8:00 PM</option>
                                    <option value="9">9:00 PM</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Special Request</label>

                                <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer"></div>

            </div>

        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
