@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-css')
    <!-- External CSS -->
    <link rel="stylesheet" href="/static/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/static/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/static/assets/css/slick.css">
    <link rel="stylesheet" href="/static/assets/css/plyr.css">
    <link rel="stylesheet" href="/static/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/static/css/style.css?id=1">
    <link rel="stylesheet" href="/static/css/scheme/primary.css">
    <link rel="stylesheet" href="/static/css/responsive.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CRoboto+Slab:400,700%7CPacifico" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/static/images/favicon.png">
    <link rel="apple-touch-icon" href="/static/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/images/icon-114x114.png">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
@endsection

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
            <a class="navbar-brand" href="index.html"><img src="/static/images/logo-7.svg" alt="Site Logo"></a>
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
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="about-us.html">Vision / Mission</a></li>
                        <li><a class="purchase-link" href="about-us.html">Scientific Advisory Board</a></li>
                        <li><a class="purchase-link" href="about-us.html">Researchers & Data scientists</a></li>
                        <li><a class="purchase-link" href="about-us.html">Student & PhD. candidates </a></li>
                        <li><a class="purchase-link" href="about-us.html">Our philosophy and approaches</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#home_course">Courses</a>
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="category-course.html">ML Fundamental</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in Computer Vision</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in NLP</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in Cyber Security</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in the Cloud</a></li>
                        <li >
                        <a class="purchase-link" href="category-course.html">
                            AI in Smart Agriculture
                            <p class="upcoming">(upcoming)</p>
                        </a>
                    </li>
                    <li>
                        <a class="purchase-link" href="category-course.html">
                            AI in Smart City
                            <p class="upcoming">
                                (upcoming)
                            </p>
                        </a>
                    </li>
                        <li><a class="purchase-link" href="category-course.html">AI in Marketing</a></li>
                        <li><a class="purchase-link" href="category-course.html">BigData ecosystem & architecture</a></li>
                        <li><a class="purchase-link" href="category-course.html">Data governance in the enterprise</a></li>
                        <li><a class="purchase-link" href="category-course.html">Data analytics & visualization</a></li>
                        <li><a class="purchase-link" href="category-course.html">AI for Business leaders</a></li>
                        <li><a class="purchase-link" href="category-course.html">AI for IT leaders</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#home_research_develop">R&D</a>
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="research-category.html">Research projects</a></li>
                        <li><a class="purchase-link" href="research-category.html">Publications</a></li>
                        <li><a class="purchase-link" href="research-category.html">Data Science Lab</a></li>
                        <li><a class="purchase-link" href="research-category.html">Technology transfer</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="products.html">Products</a>
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="product-category.html">Smart camera</a></li>
                        <li><a class="purchase-link" href="product-category.html">NLP</a></li>
                        <li><a class="purchase-link" href="product-category.html">Data Science Lab</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="">DataScientists' corner</a>
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="data-scientist.html">Tutorials</a></li>
                        <li><a class="purchase-link" href="data-scientist.html">Tools and practices</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#home_seminar">Seminars</a>
                </li>
                <li>
                    <a href="#home_news_blog">Blog</a>
                </li>
                <li class="dropdown">
                    <a href="#home_join_us">Join us</a>
                    <ul class="dropdown-menu">
                        <li><a href="join-us.html">Deliver courses with us</a></li>
                        <li><a href="join-us.html">Become our data scientist</a></li>
                        <li><a href="join-us.html">Become our industry advisor </a></li>
                        <li><a href="join-us.html">Join our partner network</a></li>
                    </ul>
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
                          <div class="col-xs-12" style="color: #40632c; padding-left: 30px;">
                              <h4 class="elh-banner-title" style="font-size: 4.4rem; padding-left: 50px">
                                  Want to learn AI <br> with AI Academy ?
                              </h4>
                              <h1 class="elh-banner-subtitle">
                                  Whether you’re an Business Leader, SW engineer,
                                  <br>Marketing specialist, Industry expert  there’s a AI skills to learn.
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
                <div class="col-sm-4">
                    <h3 class="fact-title" style="font-size: 3rem">Academy - at a glance</h3>
                </div>
                <div class="col-sm-8">
                    <div class="elh-counter-group">
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="125"></span></h3>
                            <p class="elh-fact-name">Instructors</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="12"></span>K</h3>
                            <p class="elh-fact-name">Students</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="28"></span></h3>
                            <p class="elh-fact-name">Courses</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="5"></span></h3>
                            <p class="elh-fact-name">Projects</p>
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
                <div class="col-md-6">
                    <div class="elh-about-section sm-bottom-30">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">About <span>Us</span></h3>
                        </div>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</strong></p>
                        <p>ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
                        <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <a class="all-link" href="course.html">See All Courses</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-generic-carousel owl-carousel">
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="static/images/course/1.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Advance Method for<br/>Adobe Photoshop CC 2018</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-free">Free</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="/static/images/course/2.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Higher Diploma in<br/>Graphic Design &amp; Multimedia</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-now">$35.00</span>
                                <span class="elh-price-regular">$45.00</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="/static/images/course/3.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Diploma in<br/>Web Design &amp; Development</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-now">$35.00</span>
                                <span class="elh-price-regular">$45.00</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="/static/images/course/1.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Advance Method for<br/>Adobe Photoshop CC 2018</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-now">$35.00</span>
                                <span class="elh-price-regular">$45.00</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="/static/images/course/2.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Higher Diploma in<br/>Graphic Design &amp; Multimedia</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-now">$35.00</span>
                                <span class="elh-price-regular">$45.00</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="course-single.html">
                            <img class="img-responsive" src="/static/images/course/3.jpg" alt="...">
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title"><a href="course-single.html">Diploma in<br/>Web Design &amp; Development</a></h4>
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price">
                                <span class="elh-price-now">$35.00</span>
                                <span class="elh-price-regular">$45.00</span>
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
                            </p>
                        </div>
                    </div>
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
                            <h3 class="elh-section-title">Our <span>Instructor</span></h3>
                            <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel elh-generic-4">
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-1.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Lillian Galilea</a></h4>
                                <p class="elh-instructor-field">Computer vision</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-2.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Ryan Brayden</a></h4>
                                <p class="elh-instructor-field">Natural language processing</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-3.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Anabel Hattie</a></h4>
                                <p class="elh-instructor-field">Network Security</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-1.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Lillian Galilea</a></h4>
                                <p class="elh-instructor-field">Natural language processing</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-2.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Ryan Brayden</a></h4>
                                <p class="elh-instructor-field">Network Security</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="elh-instructor">
                            <a class="elh-instructor-thumb" href="instructor-single.html">
                                <img class="img-responsive" src="/static/images/instructor/large-3.jpg">
                            </a>
                            <div class="elh-instructor-body">
                                <h4 class="elh-instructor-title"><a href="instructor-single.html">Anabel Hattie</a></h4>
                                <p class="elh-instructor-field">Network Security</p>
                                <p class="elh-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a class="elh-instructor-link" href="instructor-single.html">View Profile <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
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
                        <h3 class="elh-section-title">Highlights <span>Research & Development</span></h3>
                        <p class="elh-section-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        </p>
                        <a class="all-link" href="research-develop-all.html">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-grid elh-category-tiles">
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research-single.html">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="/static/images/category/medium-1.jpg" alt="...">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">Project 2</h5>
                                    <p class="elh-course-count">Name project</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research-single.html">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="/static/images/category/large-1.jpg" alt="...">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">Project 1</h5>
                                    <p class="elh-course-count">Name project</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research-single.html">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="/static/images/category/medium-2.jpg" alt="...">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">Project 3</h5>
                                    <p class="elh-course-count">Name project</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research-single.html">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="/static/images/category/medium-3.jpg" alt="...">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">Project 4</h5>
                                    <p class="elh-course-count">Name project</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="research-single.html">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive" src="/static/images/category/medium-4.jpg" alt="...">
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">Project 5</h5>
                                    <p class="elh-course-count">Name project</p>
                                </div>
                            </div>
                        </a>
                    </div>
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
                        <h3 class="elh-section-title">Our <span>Partners</span></h3>
                        <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="partner-logoes">
                        <a class="partner-logo" href="#">
                            <img class="img-responsive" src="/static/images/partner/1.png" alt="...">
                        </a>
                        <a class="partner-logo" href="#">
                            <img class="img-responsive" src="/static/images/partner/2.png" alt="...">
                        </a>
                        <a class="partner-logo" href="#">
                            <img class="img-responsive" src="/static/images/partner/3.png" alt="...">
                        </a>
                        <a class="partner-logo" href="#">
                            <img class="img-responsive" src="/static/images/partner/4.png" alt="...">
                        </a>
                        <a class="partner-logo" href="#">
                            <img class="img-responsive" src="/static/images/partner/5.png" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logoes End -->

    <!-- Upcoming Event -->
    <div class="elh-section elh-section-padding" id="home_seminar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Upcoming <span>Seminars</span></h3>
                        <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <a class="all-link style-2" href="seminar.html">See All Seminars</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-events">
                    <div class="col-md-6 col-xs-12">
                        <div class="elh-event style-2">
                            <div class="elh-event-date" style="background-image: url(/static/images/event/small-1.jpg)">
                            </div>
                            <div class="elh-event-detail">
                                <h4 class="elh-event-title"><a href="detail-serminal.html">Inauguration Day 2018</a></h4>
                                <p class="elh-event-metas">
                                    <span><i class="fa fa-clock-o"></i>22 Dec (9am - 2pm)</span>
                                    <span><i class="fa fa-map-marker"></i>Victoria Campus</span>
                                </p>
                                <p class="elh-event-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="elh-event style-2">
                            <div class="elh-event-date" style="background-image: url(/static/images/event/small-2.jpg)">
                            </div>
                            <div class="elh-event-detail">
                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                <p class="elh-event-metas">
                                    <span><i class="fa fa-clock-o"></i>23 Dec (9am - 2pm)</span>
                                    <span><i class="fa fa-map-marker"></i>Victoria Campus</span>
                                </p>
                                <p class="elh-event-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="elh-event style-2">
                            <div class="elh-event-date" style="background-image: url(/static/images/event/small-3.jpg)">
                            </div>
                            <div class="elh-event-detail">
                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                <p class="elh-event-metas">
                                    <span><i class="fa fa-clock-o"></i>24 Dec (9am - 2pm)</span>
                                    <span><i class="fa fa-map-marker"></i>Victoria Campus</span>
                                </p>
                                <p class="elh-event-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="elh-event style-2">
                            <div class="elh-event-date" style="background-image: url(/static/images/event/small-4.jpg)">
                            </div>
                            <div class="elh-event-detail">
                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                <p class="elh-event-metas">
                                    <span><i class="fa fa-clock-o"></i>25 Dec (9am - 2pm)</span>
                                    <span><i class="fa fa-map-marker"></i>Victoria Campus</span>
                                </p>
                                <p class="elh-event-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
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
                            <h3 class="elh-section-title">News &amp; <span>Blog</span></h3>
                            <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                            <a class="all-link style-2" href="blog.html">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel">
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-1.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-2.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-3.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-1.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-2.jpg" alt="...">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="blog-single.html">
                                <img class="img-responsive" src="/static/images/blog/medium-3.jpg" alt="...">
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
                        <p class="elh-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>
                    <a class="btn" href="#">Join Today</a>
                </div>
            </div>
        </div>
        <div class="join-us-img">
            <img class="img-responsive" src="/static/images/bg/join-us.jpg" alt="...">
        </div>
    </div>
    <!-- Education for all end -->
@endsection

@section('user-script')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5aa3a4174b401e45400d980c/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Script -->
    <script src="/static/assets/js/jquery.min.js"></script>
    <script src="/static/assets/js/bootstrap.min.js"></script>
    <script src="/static/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/static/assets/js/visible.js"></script>
    <script src="/static/assets/js/isotope.pkgd.min.js"></script>
    <script src="/static/assets/js/owl.carousel.min.js"></script>
    <script src="/static/assets/js/slick.min.js"></script>
    <script src="/static/assets/js/plyr.js"></script>
    <script src="/static/assets/js/jquery.countTo.js"></script>
    <script src="/static/assets/js/jquery.countdown.min.js"></script>
    <script src="/static/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/static/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/static/js/jquery.nav.js"></script>
    <script src="/static/js/custom.js"></script>
    <script>
        $(document).ready(function(){
            $('#home-nav-onepage').onePageNav({
                filter: ':not(.purchase-link)'
            })
        });
    </script>
@endsection