@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
<!-- Navigation -->
<nav class="navbar fix-nav style-2" data-spy="affix" data-offset-top="51" style="border-bottom: 1px solid #FFF">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="padding-top: 5px; padding-bottom: 5px">
                <img src="/images/logo.png" alt="Site Logo">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="navbar-search navbar-right">
                <button id="navbar-search-toggle" class="navbar-search-toggle"><i class="fa fa-search"></i></button>
                <form id="navbar-searchform" class="navbar-searchform">
                    <input type="search" name="search" placeholder="Search...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right" id="home-nav-onepage">
                <li class="dropdown">
                    <a href="#home_about_us">About us</a>
                    @if(isset($data['about_us']))
                        <ul class="dropdown-menu">
                            @foreach ($data['about_us'] as $about)
                                <li>
                                    <a class="purchase-link" href="about-us/{{ $about[fieldLanguage('slug')] }}">{{ $about[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="#home_course">Courses</a>
                    @if(isset($data['courses']))
                        <ul class="dropdown-menu">
                            @foreach ($data['courses'] as $course)
                                <li>
                                    <a class="purchase-link" href="course/{{ $course[fieldLanguage('slug')] }}">{{ $course[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="#home_research_develop">R&D</a>
                    @if(isset($data['research_development_categories']))
                        <ul class="dropdown-menu">
                            @foreach ($data['research_development_categories'] as $category)
                                <li>
                                    <a class="purchase-link" href="research-category/{{ $category[fieldLanguage('slug')] }}">{{ $category[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="products.html">Products</a>
                    @if(isset($data['products_categories']))
                        <ul class="dropdown-menu">
                            @foreach ($data['products_categories'] as $category)
                                <li>
                                    <a class="purchase-link" href="product-category/{{ $category[fieldLanguage('slug')] }}">{{ $category[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li>
                    <a href="#home_seminar">Events</a>
                </li>
                <li>
                    <a href="#home_news_blog">Data Scientists' corner </a>
                </li>
                <li class="dropdown">
                    <a href="#home_join_us">Join us</a>
                    @if(isset($data['join_us']))
                        <ul class="dropdown-menu">
                            @foreach ($data['join_us'] as $us)
                                <li>
                                    <a class="purchase-link" href="join-us/{{ $us[fieldLanguage('slug')] }}">{{ $us[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation End -->
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-banner style-2" id="elh-banner">
    <div class="owl-carousel" id="banner-slider">

        <div class="elh-banner-item banner-item-4">
              <div class="banner-content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xs-12" style="color: #40632c;">
                              <h4 class="elh-banner-title">
                                  Want to learn AI <br> at AI Academy?
                              </h4>
                              <h1 class="elh-banner-subtitle">
                                 Whether you’re a business leader, engineer, industry expert or marketer
                                 <br>there are AI skills to learn !
                              </h1>
                          </div>
                      </div>
                  </div>
              </div>
        </div>

    </div>
</div>
<!-- Banner End -->
@endsection

@section('user-content')
<div class="main-wrap">

    <!-- At a glance -->
    <div class="elh-section elh-theme-bg elh-fact-section" style="margin-top: 50px" id="home_about_us">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="slogan_class">Academy - at a glance</h3>
                </div>
                <div class="col-sm-9">
                    <div class="elh-counter-group">
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="12"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Industry experts</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="15"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Professors</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="45"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Researchers</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="15"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Courses</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="5"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- At a glance end -->

    <!-- About Us -->
    <div class="elh-section elh-section-padding elh-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: justify;">
                    <div class="elh-about-section sm-bottom-30">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">About of <span>Us</span></h3>
                        </div>
                        <p>
                        We are a group of AI researchers, practitioners and industry specialists who set to build a learning environment for everyone to learn and apply AI to innovate.
                        </p>
                        <p>
                        We consult on practical aspects of applied machine learning for enterprises, helping them build Data science team, AI-powered products to stay ahead of competition. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="plyr-video">
                        <div data-type="youtube" data-video-id="3BhkeY974Rg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Popular Courses -->
    <div class="elh-section elh-section-padding elh-carousel-section" id="home_course">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Popular <span>Courses</span></h3>
                        <a class="all-link" href="course.html">See All Courses</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-generic-carousel owl-carousel">
                @foreach ($data['courses'] as $course)
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course/{{ $course[fieldLanguage('slug')] }}" title="{{ $course[fieldLanguage('title')] }}">
                            <img class="img-responsive" src="{{ $course['image_url'] ?: 'http://afamilycdn.com/2017/4732596789-687e6d997e-b-1503900479088.jpg'}}" alt="{{ $course[fieldLanguage('title')] }}">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title" style="height: 50px"><a href="course/{{ $course[fieldLanguage('slug')] }}" title="{{ $course[fieldLanguage('title')] }}">{{ $course[fieldLanguage('title')] }}</a></h4>
                            <p style="text-align: justify">
                                {{ $course[fieldLanguage('description')] }}
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price" style="color: #00bcd4">
                               {{ $course[fieldLanguage('level')] }}
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-comment-count"><i class="fa fa-comments"></i>{{ $course->comments->count() }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses End -->

    <!-- Our instructor -->
    <div class="elh-section elh-carousel-section elh-img-bg elh-bg-2">
        <div class="elh-overlay elh-section-padding-big">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Our <span>Instructors</span></h3>
                            <p class="elh-section-text">All our intrustors have at least 5 years of experiences researching and working at universities and hightech companies in AI disciplines and related fields like Big Data analytics, Data mining, Information architect, Cyber security, Image processing, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel elh-generic-4">
                    @foreach($data['instructors'] as $instructor)
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html" title="{{ $instructor[fieldLanguage('name')] }}">
                                <img class="img-responsive" src="{{ $instructor['image_url'] }}" alt="{{ $instructor[fieldLanguage('name')] }}">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title" style="height: 45px"><a href="instructor/{{ $instructor[fieldLanguage('slug')] }}" title="{{ $instructor[fieldLanguage('name')] }}">{{ $instructor[fieldLanguage('name')] }}</a></h4>
                                <p class="elh-instructor-field">{{ $instructor[fieldLanguage('specialized')] }}</p>
                                <p class="elh-instructor-excerpt">{{ $instructor[fieldLanguage('description')] }}</p>
                                <a class="elh-instructor-link" href="instructor/{{ $instructor[fieldLanguage('slug')] }}" title="{{ $instructor[fieldLanguage('name')] }}">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our instructor -->

    <!-- Category Tile -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_research_develop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Research & Development</h3>
                        <p class="elh-section-text">
                            We've embraced collaboration with companies to innovate and power their products with AI-engines and features. Joined R&D activities from prototyping, piloting through to commercial implementation keeps us engaged in practical aspects of applied AI and Machine learning
                        </p>
                        <a class="all-link style-2" href="research-develop-all.html" title="See All Research & Development">See All Research & Development</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-grid elh-category-tiles">
                @foreach($data['research_development'] as $research)
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research/{{ $research[fieldLanguage('slug')] }}" title="{{ $research[fieldLanguage('title')] }}">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="{{ $research['image_url'] }}" alt="{{ $research[fieldLanguage('title')] }}">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">{{ $research[fieldLanguage('title')] }}</h5>
                                    <p class="elh-course-count">Project name</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Category Tile End -->

    <!-- Partner Logoes -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_our_partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-12">
                        <div class="elh-section-header text-center">
                            <h3 class="elh-section-title">Success <span>Stories</span></h3>
                            <p class="elh-section-text">... Add your text here ....</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="partner-logoes">
                            <a class="partner-logo" href="#">
                                <img class="img-responsive" src="/images/partner/1.png" alt="...">
                            </a>
                            <a class="partner-logo" href="#">
                                <img class="img-responsive" src="/images/partner/2.png" alt="...">
                            </a>
                            <a class="partner-logo" href="#">
                                <img class="img-responsive" src="/images/partner/3.png" alt="...">
                            </a>
                            <a class="partner-logo" href="#">
                                <img class="img-responsive" src="/images/partner/4.png" alt="...">
                            </a>
                            <a class="partner-logo" href="#">
                                <img class="img-responsive" src="/images/partner/5.png" alt="...">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Upcoming Event -->
    <div class="elh-section elh-section-padding" id="home_seminar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Upcoming <span>Events</span></h3>
                        <p class="elh-section-text">... Add your text here ....</p>
                        <a class="all-link style-2" href="seminar.html" title="All Events">See All Events</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-events">
                    @foreach($data['events'] as $event)
                        <div class="col-md-6 col-xs-12">
                            <div class="elh-event style-2">
                                <div class="elh-event-date" style="background-image: url({{ $event['image_url'] }})">
                                </div>
                                <div class="elh-event-detail">
                                    <h4 class="elh-event-title"><a href="serminal/{{ $event[fieldLanguage('slug')] }}">{{ $event[fieldLanguage('title')] }}</a></h4>
                                    <p class="elh-event-metas">
                                        <span><i class="fa fa-clock-o"></i>{{ timeEvent($event['start_at'], $event['end_at']) }}</span>
                                        <span><i class="fa fa-users"></i>{{ $event->author[fieldLanguage('name')] }}</span>
                                    </p>
                                    <p class="elh-event-excerpt">
                                        {{ $event[fieldLanguage('description')] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Upcoming Event End -->

    <!-- News & blog -->
    <div class="elh-section elh-img-bg elh-bg-3 elh-carousel-section" id="home_news_blog">
        <div class="elh-overlay elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title"><span>Data Scientists' corner</span></h3>
                            <p class="elh-section-text">... Add your text here ....</p>
                            <a class="all-link style-2" href="blog.html">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel">
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-1.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-2.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-3.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-1.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-2.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/images/blog/medium-3.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News & blog end -->

    <!-- Education for all -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_join_us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                    <div class="elh-section-header">
                        <h3 class="elh-section-title">Education for all! Join with us...</h3>
                        <p class="elh-section-text">... Add your text here ....</p>
                    </div>
                    <a class="btn" id="home-button-join-us" href="#" style="color: #fff">Join Today</a>
                    <div class="quick-contact" id="home-form-join-us" style="display: none">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" id="name" name="name" placeholder="Name *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" id="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="tel" id="phone" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="message" name="message" placeholder="Message *" rows="3" required></textarea>
                                    <button class="btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="join-us-img">
            <img class="img-responsive" src="/images/bg/join-us.jpg" alt="Join us">
        </div>
    </div>
    <!-- Education for all end -->
@endsection

@section('user-script')
    <!-- Script -->
    <script>
        $(document).ready(function(){
            $('#home-nav-onepage').onePageNav({
                filter: ':not(.purchase-link)'
            });

            $('#home-button-join-us').click(function(event){
                event.preventDefault();
                $(this).hide();
                $('#home-form-join-us').animate({ height: 'toggle' }, 700);
            });
        });
    </script>
@endsection
