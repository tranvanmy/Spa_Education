@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Events</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">A vision based method for automatic evaluation of germination rate of rice seeds</li>
                </ol>
            </div>
        </div>
        <div class="elh-header-floatbox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-course-profile">
                            <div class="elh-instructor-thumb elh-course-profile-item">
                                <img class="img-responsive" src="/images/instructor/large-1.jpg" alt="..." style="height: 100%;">
                            </div>
                            <div class="elh-instructor-name elh-course-profile-item">
                                <p>Author</p>
                                <h5>Thuy Nguyen</h5>
                            </div>
                            <div class="elh-student-count elh-course-profile-item">
                                <p>Day</p>
                                <h5>19/5/2018</h5>
                            </div>
                            <div class="elh-student-count elh-course-profile-item">
                                <p>Time</p>
                                <h5>9.00-12.00</h5>
                            </div>
                            <div class="elh-review-score elh-course-profile-item">
                                <p>Location</p>
                                <h5>Main office</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
 <!-- Main wrapper start -->
    <div class="elh-main-wrap">

        <!-- Blog Sigle -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row" id="elh-course-container">
                    <div class="col-md-8 col-xs-12">
                        <div class="elh-course-body">
                            <div class="elh-course-description elh-course-section">
                                <h3>Description</h3>
                                <div class="post-entry">
                                    Good seed germination is important for rice seed quality. However, it can only be evaluated manually by experienced specialists. We present a system for automatic evaluation of germination rate of rice seeds using computer vision and machine learning techniques... Rice is one of the most cultivated cereal in Asian countries and Vietnam in particular. Good seed germination is important for rice seed quality, that impacts the rice production and crop yield. Currently, seed germination evaluation is carried out manually by experienced persons. This is a tedious and timeconsuming task. In this paper, we present a system for automatic evaluation of germination rate of rice seeds based on advanced techniques in computer vision and machine learning. We propose to use U-Net - a convolutional neural network - for segmentation and separation of rice seeds. Further processing such as computing distance transform and thresholding will be applied on the segmented regions for rice seed detection. Finally, ResNet is utilized to classify segmented rice seed regions into two classes: germinated and non-germinated seeds. Our contributions in this paper are three-fold. Firstly, we propose a framework which confirms that convolutional neural networks are better than traditional methods for both segmentation and classification tasks (with F1-scores of 93.38% and 95.66% respectively). Secondly, we deploy successfully an automatic tool in a real application for estimating rice germination rate. Finally, we introduce a new dataset of 1276 images of rice seeds of various rice varieties germinated from 6 to 10 days. This dataset is publicly available for research purpose.
                                </div>
                            </div>
                        </div>
                        <br>
                        Tag
                         <div class="elh-course-tag">
                           <ul>
                               <li>Computer vision</li>
                               <li>Convolution neural network</li>
                               <li>agriculture</li>
                           </ul>
                        </div>

                        <!-- Student feedback end -->
                        <!-- Seminar -->
                        <div class="elh-related-course">
                            <div class="elh-section-header text-left">
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="course-single.html">
                                            <img class="img-responsive" src="/images/course/1.jpg" alt="...">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title"><a href="course-single.html">Chat</a></h4>
                                        </div>
                                        <div class="elh-course-instructor">
                                            <div class="elh-instructor-thumb">
                                                <img class="img-responsive" src="/images/instructor/small-1.jpg" alt="...">
                                            </div>
                                            <h5 class="elh-instructor-name">Z.Alexander</h5>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                <a class="widget-read-more" href="blog-single.html"><i class="fa fa-clock-o"></i> 20/10/2019</a>
                                            </p>
                                            <p class="elh-course-price">
                                                <a class="widget-read-more" href="blog-single.html"><i class="fa fa-map-marker"></i> HaNoi</a>
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
                                            <h4 class="elh-course-title"><a href="course-single.html">HLC-serminal</a></h4>
                                        </div>
                                        <div class="elh-course-instructor">
                                            <div class="elh-instructor-thumb">
                                                <img class="img-responsive" src="/images/instructor/small-2.jpg" alt="...">
                                            </div>
                                            <h5 class="elh-instructor-name">Olivia Chloe</h5>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                    <a class="widget-read-more" href="blog-single.html"><i class="fa fa-clock-o"></i> 20/10/2019</a>
                                            </p>
                                            <p class="elh-course-price">
                                                <a class="widget-read-more" href="blog-single.html"><i class="fa fa-map-marker"></i> NamDInh</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Related Posts End -->
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget post_widget">
                                <div class="sidebar">
                                    <h4 class="widget-title">SIGN UP FOR MORE SEMINAR</h4>
                                    <input class="form-control" style="margin: 10px" placeholder="Enter your name" />
                                    <input class="form-control" style="margin: 10px" placeholder="Enter your email" />
                                    <input class="form-control" style="margin: 10px" placeholder="Enter your phone number" />
                                    <input type="submit" class="btn btn-primary" value="Sign up"/>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Single End -->

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
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
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
@endsection
