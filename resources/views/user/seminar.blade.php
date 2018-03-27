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
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
     <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">All Courses</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="course_hub.html">Home</a>
                    </li>
                    <li class="active">Courses</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

        <!-- Course Listing -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="elh-course-listing">
                                <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                                <span class="elh-event-day">22</span>
                                                <span class="elh-event-month">December</span>
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="detail-serminal.html">Inauguration Day 2018</a></h4>
                                                <p>
                                                    <span style="display: block;">
                                                        <i class="fa fa-clock-o"></i> 9am - 2pm
                                                    </span>
                                                    <span style="display: block;">
                                                        <i class="fa fa-map-marker"></i> Victoria Campus
                                                    </span>
                                                </p>
                                                <p class="elh-event-excerpt" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                                <span class="elh-event-day">22</span>
                                                <span class="elh-event-month">December</span>
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                                <p>
                                                    <span style="display: block;">
                                                        <i class="fa fa-clock-o"></i> 9am - 2pm
                                                    </span>
                                                    <span style="display: block;">
                                                        <i class="fa fa-map-marker"></i> Victoria Campus
                                                    </span>
                                                </p>
                                                <p class="elh-event-excerpt" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                                <span class="elh-event-day">22</span>
                                                <span class="elh-event-month">December</span>
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                                <p>
                                                    <span style="display: block;">
                                                        <i class="fa fa-clock-o"></i> 9am - 2pm
                                                    </span>
                                                    <span style="display: block;">
                                                        <i class="fa fa-map-marker"></i> Victoria Campus
                                                    </span>
                                                </p>
                                                <p class="elh-event-excerpt" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                                <span class="elh-event-day">22</span>
                                                <span class="elh-event-month">December</span>
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                                <p>
                                                    <span style="display: block;">
                                                        <i class="fa fa-clock-o"></i> 9am - 2pm
                                                    </span>
                                                    <span style="display: block;">
                                                        <i class="fa fa-map-marker"></i> Victoria Campus
                                                    </span>
                                                </p>
                                                <p class="elh-event-excerpt" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                                <span class="elh-event-day">22</span>
                                                <span class="elh-event-month">December</span>
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="#">Inauguration Day 2018</a></h4>
                                                <p>
                                                    <span style="display: block;">
                                                        <i class="fa fa-clock-o"></i> 9am - 2pm
                                                    </span>
                                                    <span style="display: block;">
                                                        <i class="fa fa-map-marker"></i> Victoria Campus
                                                    </span>
                                                </p>
                                                <p class="elh-event-excerpt" style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <nav class="navigation post-pagination xs-text-center" role="navigation">
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href="#">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a>
                                            <a class="page-numbers" href="#">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="page-numbers" href="#">4</a>
                                            <a class="page-numbers" href="#">5</a>
                                            <a class="next page-numbers" href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget category_widget">
                                <h4 class="widget-title">SIGN UP FOR MORE SEMINAR</h4>
                                <input class="form-control" style="margin: 10px" placeholder="Enter your name" />
                                <input class="form-control" style="margin: 10px" placeholder="Enter your email" />
                                <input class="form-control" style="margin: 10px" placeholder="Enter your phone number" />
                                <input type="submit" class="btn btn-primary" value="Sign up"/>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Listing End -->

        <!-- Subscription -->
        <div class="elh-section elh-theme-bg elh-subscribe-section style-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="elh-subscribe-heading">
                            <h3>Subscribe us for Future Updates</h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post">
                            <input type="email" name="email" placeholder="Enter your mail here">
                            <button type="submit">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscription End -->

    </div>
@endsection

@section('user-script')
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
    <script src="/static/js/jquery.sticky.js"></script>
    <script src="/static/js/custom.js"></script>

    <script>
        $(document).ready(function () {
            if ($(window).width() >= 1000) {
                $(".sidebar").sticky({ topSpacing: $('#navbar-collapse').innerHeight(), bottomSpacing: $('footer').innerHeight() + $('.elh-subscribe-section').innerHeight() + 20});
            }
            $(window).resize(function () {
                if ($(window).width() >= 1000) {
                    $(".sidebar").sticky({ topSpacing: $('#navbar-collapse').innerHeight() + 20, bottomSpacing: $('footer').innerHeight() + $('.elh-subscribe-section').innerHeight() + 20 });
                } else {
                    $(".sidebar").unstick();
                }
            });

        });
    </script>

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
@endsection
