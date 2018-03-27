@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

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
                    <div>
                        <h3 id="category-name">Education</h3>
                    </div>
                    <div class="row">
                        <div class="elh-course-listing">
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/images/course/1.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Advance Method for
                                                <br/>Adobe Photoshop CC 2018</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <h5 class="elh-instructor-name">
                                            Professional Diploma in Web Page Design & Development
                                        </h5>
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
                                        <img class="img-responsive" src="/images/course/2.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Higher Diploma in
                                                <br/>Graphic Design &amp; Multimedia</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <h5 class="elh-instructor-name">
                                            Professional Diploma in Web Page Design & Development
                                        </h5>
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
                                        <img class="img-responsive" src="/images/course/3.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Diploma in
                                                <br/>Web Design &amp; Development</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <h5 class="elh-instructor-name">
                                            Professional Diploma in Web Page Design & Development
                                        </h5>
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
                                        <img class="img-responsive" src="/images/course/1.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Advance Method for
                                                <br/>Adobe Photoshop CC 2018</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">

                                        <h5 class="elh-instructor-name">
                                            Professional Diploma in Web Page Design & Development
                                        </h5>
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
                                        <img class="img-responsive" src="/images/course/2.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Higher Diploma in
                                                <br/>Graphic Design &amp; Multimedia</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">

                                        <h5 class="elh-instructor-name">Professional Diploma in Web Page Design & Development
                                        </h5>
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
                                        <img class="img-responsive" src="/images/course/3.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title">
                                            <a href="course-single.html">Diploma in
                                                <br/>Web Design &amp; Development</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-instructor">

                                        <h5 class="elh-instructor-name">
                                            Professional Diploma in Web Page Design & Development
                                        </h5>
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
                        <aside class="widget post_widget" id="related-course">
                            <h4 class="widget-title">Related Course</h4>
                            <div class="widget-posts">
                                <div class="widget-post">
                                    <a class="widget-post-thumb" href="#">
                                        <img class="img-responsive" src="/images/blog/s1.jpg" alt="Post Title">
                                    </a>
                                    <div class="widget-post-content">
                                        <a class="widget-post-title" href="#">Professional Diploma in Web Page Design &amp; Development</a>
                                        <p class="widget-price">$35.00</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-post">
                                    <a class="widget-post-thumb" href="#">
                                        <img class="img-responsive" src="/images/blog/s2.jpg" alt="Post Title">
                                    </a>
                                    <div class="widget-post-content">
                                        <a class="widget-post-title" href="#">Professional Diploma in Web Page Design &amp; Development</a>
                                        <p class="widget-price">$35.00</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-post">
                                    <a class="widget-post-thumb" href="#">
                                        <img class="img-responsive" src="/images/blog/s3.jpg" alt="Post Title">
                                    </a>
                                    <div class="widget-post-content">
                                        <a class="widget-post-title" href="#">Professional Diploma in Web Page Design &amp; Development</a>
                                        <p class="widget-price">$35.00</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
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
    <script>
        $(document).ready(function () {
            if ($(window).width() >= 1000) {
                $("#related-course").sticky({ topSpacing: $('#navbar-collapse').innerHeight() + 20, bottomSpacing: $('footer').innerHeight() + $('.elh-subscribe-section').innerHeight() + 100});
            }
            $(window).resize(function () {
                if ($(window).width() >= 1000) {
                    $("#related-course").sticky({ topSpacing: $('#navbar-collapse').innerHeight() + 20,bottomSpacing: $('footer').innerHeight() + $('.elh-subscribe-section').innerHeight() + 100 });
                } else {
                    $("#related-course").unstick();
                }
            });

            $categoriesList = $("#categories li");
            $.each($categoriesList, function (index, value) {
                if ($(this).text() == $('#category-name').html()) {
                    $(this).css('font-size', '150%');
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
