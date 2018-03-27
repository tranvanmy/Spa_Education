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
<!-- Banner -->
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
<!-- Banner End -->
@endsection

@section('user-content')
<!-- Main wrapper start -->
<div class="elh-main-wrap">

    <!-- Course Listing -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="elh-course-listing">
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/1.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Advance Method for
                                                <br/>Adobe Photoshop CC 2018</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-1.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Z.Alexander</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/2.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Higher Diploma in
                                                <br/>Graphic Design &amp; Multimedia</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-2.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Olivia Chloe</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/3.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Diploma in
                                                <br/>Web Design &amp; Development</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-3.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">William Logan</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/1.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Advance Method for
                                                <br/>Adobe Photoshop CC 2018</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-1.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Z.Alexander</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/2.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Higher Diploma in
                                                <br/>Graphic Design &amp; Multimedia</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-2.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Olivia Chloe</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/static/images/course/3.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Diploma in
                                                <br/>Web Design &amp; Development</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/static/images/instructor/small-3.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">William Logan</h5>
                                    </div>
                                    <div class="elh-course-footer">
                                        <p class="elh-course-price">
                                            <span class="elh-price-now">$35.00</span>
                                            <span class="elh-price-regular">$45.00</span>
                                        </p>
                                        <p class="elh-course-metas">
                                            <span class="elh-student-count">
                                                <i class="fa fa-users"></i> 25</span>
                                            <span class="elh-comment-count">
                                                <i class="fa fa-comments"></i> 5</span>
                                        </p>
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
                            <h4 class="widget-title">Categories</h4>
                            <ul class="categories">
                                <li><a class="purchase-link" href="category-course.html">ML Fundamental</a></li>
                                <li><a class="purchase-link" href="category-course.html">ML in Computer Vision</a></li>
                                <li><a class="purchase-link" href="category-course.html">ML in NLP</a></li>
                                <li><a class="purchase-link" href="category-course.html">ML in Cyber Security</a></li>
                                <li><a class="purchase-link" href="category-course.html">ML in the Cloud</a></li>
                                <li><a class="purchase-link" href="category-course.html">ML Fundamental</a></li>
                                <li><a class="purchase-link" href="category-course.html">AI in Smart Agriculture (upcoming)</a></li>
                                <li><a class="purchase-link" href="category-course.html">AI in Smart City (upcoming)</a></li>
                                <li><a class="purchase-link" href="category-course.html">Student & PhD. candidates </a></li>
                                <li><a class="purchase-link" href="category-course.html">AI in Marketing</a></li>
                                <li><a class="purchase-link" href="category-course.html">BigData ecosystem & architecture</a></li>
                                <li><a class="purchase-link" href="category-course.html">Data governance in the enterprise</a></li>
                                <li><a class="purchase-link" href="category-course.html">Data analytics & visualization</a></li>
                                <li><a class="purchase-link" href="category-course.html">AI for Business leaders</a></li>
                                <li><a class="purchase-link" href="category-course.html">AI for IT leaders</a></li>
                            </ul>
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
<!-- Main wrapper start end -->
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
    <script src="/static/js/custom.js"></script>

    <script src="/static/js/jquery.sticky.js"></script>
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
