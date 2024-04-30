
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                        <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+998 91 503 00 89</span></a>
                    <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">mail@ideal-study.uz</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="logo.png" alt="" title="" height="70px"/></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="index.html">{{ __('home') }}</a></li>
                    <li><a href="about.html">{{ __('about') }}</a></li>
                    <li><a href="courses.html">{{ __('rules') }}</a></li>
                    <li><a href="courses.html">{{ __('contact') }}</a></li>
{{--                    <li><a href="events.html">Events</a></li>--}}
{{--                    <li><a href="gallery.html">Gallery</a></li>--}}
                    <li class="menu-has-children">
                        <a href="">
                            @if(Config::get('app.locale') == 'uz')
                                <img src="https://ucell.uz/img/flags/UZ.png"> O'ZB
                            @else
                                <img src="https://ucell.uz/img/flags/RU.png"> РУС
                            @endif
                        </a>
                        <ul>
                            <li><a href="{{ route('change_locale', ['locale' => 'uz']) }}"><img src="https://ucell.uz/img/flags/UZ.png"> O'ZB</a></li>
                            <li><a href="{{ route('change_locale', ['locale' => 'ru']) }}"><img src="https://ucell.uz/img/flags/RU.png"> РУС</a></li>
                        </ul>
                    </li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-9 col-md-12">
                <h1 class="text-uppercase">
                    {{ __('primary_text') }}
                </h1>
                <p class="pt-10 pb-10">
                    {{ __('description') }}
                </p>
                <a href="#" class="primary-btn text-uppercase">{{ __('invite') }}</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{ __('first') }}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{ __('first_rules') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{ __('second') }}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{ __('second_rules') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-feature">
                    <div class="title">
                        <h4>{{ __('third') }}</h4>
                    </div>
                    <div class="desc-wrap">
                        <p>
                            {{ __('third_rules') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- Start popular-course Area -->
<section class="popular-course-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">{{ __('register_now') }}</h1>
                    <p>{{ __('test_knowledge') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular-course Area -->


<!-- Start search-course Area -->
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6 search-course-left">
                <h1 class="text-white">
                    {{ __('ariza') }}
                </h1>
{{--                <p>--}}
{{--                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.--}}
{{--                </p>--}}
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-graduation-hat"></span>
                        <a href="#"><h4>{{ __('expert') }}</h4></a>
                        <p>
                            {{ __('expert_description') }}
                        </p>
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-license"></span>
                        <a href="#"><h4>{{ __('certification') }}</h4></a>
                        <p>
                            {{ __('certification_description') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 search-course-right section-gap">
                <form class="form-wrap" action="#">
                    <h4 class="text-white pb-20 text-center mb-30">{{ __('ariza') }}</h4>
                    <input type="text" class="form-control" name="name" placeholder="{{ __('form_name') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{ __('form_name') }}'" >
                    <input type="phone" class="form-control" name="phone" placeholder="{{ __('form_phone') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{ __('form_name') }}'" >
                    <input type="email" class="form-control" name="email" placeholder="{{ __('form_school') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{{ __('form_school') }}'" >
                    <div class="form-select" id="service-select">
                        <select>
                            <option datd-display="">{{ __('form_lesson') }}</option>
                            <option value="1">Course One</option>
                            <option value="2">Course Two</option>
                            <option value="3">Course Three</option>
                            <option value="4">Course Four</option>
                        </select>
                    </div>
                    <button class="primary-btn text-uppercase">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End search-course Area -->


<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Upcoming Events of our Institute</h1>
                    <p>If you are a serious astronomy fanatic like a lot of us</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-upcoming-event-carusel">
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e2.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e2.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
                <div class="single-carusel row align-items-center">
                    <div class="col-12 col-md-6 thumb">
                        <img class="img-fluid" src="img/e1.jpg" alt="">
                    </div>
                    <div class="detials col-12 col-md-6">
                        <p>25th February, 2018</p>
                        <a href="#"><h4>The Universe Through
                                A Child S Eyes</h4></a>
                        <p>
                            For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End upcoming-event Area -->

<!-- Start review Area -->
<section class="review-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="active-review-carusel">
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Fannie Rowe</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Hulda Sutton</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Fannie Rowe</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Hulda Sutton</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Fannie Rowe</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Hulda Sutton</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <img src="img/r1.png" alt="">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Fannie Rowe</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
                <div class="single-review item">
                    <div class="title justify-content-start d-flex">
                        <a href="#"><h4>Hulda Sutton</h4></a>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End review Area -->

<!-- Start cta-one Area -->
<section class="cta-one-area relative section-gap">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row justify-content-center">
            <div class="wrap">
                <h1 class="text-white">Become an instructor</h1>
                <p>
                    There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
                </p>
                <a class="primary-btn wh" href="#">Apply for the post</a>
            </div>
        </div>
    </div>
</section>
<!-- End cta-one Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest posts from our Blog</h1>
                    <p>In the history of modern astronomy there is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="img/b1.jpg" alt="">
                </div>
                <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
                <a href="blog-single.html">
                    <h5>Addiction When Gambling Becomes A Problem</h5>
                </a>
                <p>
                    Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
                </p>
                <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="img/b2.jpg" alt="">
                </div>
                <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
                <a href="blog-single.html">
                    <h5>Computer Hardware Desktops And Notebooks</h5>
                </a>
                <p>
                    Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons.
                </p>
                <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="img/b3.jpg" alt="">
                </div>
                <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
                <a href="blog-single.html">
                    <h5>Make Myspace Your Best Designed Space</h5>
                </a>
                <p>
                    Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
                </p>
                <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="img/b4.jpg" alt="">
                </div>
                <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
                <a href="blog-single.html">
                    <h5>Video Games Playing With Imagination</h5>
                </a>
                <p>
                    About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet
                </p>
                <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- End blog Area -->


<!-- Start cta-two Area -->
<section class="cta-two-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 cta-left">
                <h1>Not Yet Satisfied with our Trend?</h1>
            </div>
            <div class="col-lg-4 cta-right">
                <a class="primary-btn wh" href="#">view our blog</a>
            </div>
        </div>
    </div>
</section>
<!-- End cta-two Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Quick links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
            <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-6 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/hoverIntent.js') }}"></script>
<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.tabs.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- Code injected by live-server -->
</body>
</html>
