@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header has-floatbox elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">Master color in Adobe Photoshop</h3>
            <ol class="breadcrumb">
                <li><a href="course_hub.html">Home</a></li>
                <li class="active">Course</li>
            </ol>
        </div>
    </div>
    <div class="elh-header-floatbox">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-course-profile">
                        <div class="elh-instructor-thumb elh-course-profile-item">
                            <img class="img-responsive" src="/images/instructor/small-4.jpg" alt="...">
                        </div>
                        <div class="elh-instructor-name elh-course-profile-item">
                            <p>Teacher</p>
                            <h5>Oliver Liam</h5>
                        </div>
                        <div class="elh-student-count elh-course-profile-item">
                            <p>Students</p>
                            <h5>120 (Registered)</h5>
                        </div>
                        <div class="elh-review-score elh-course-profile-item">
                            <p>Review</p>
                            <div class="elh-rating">
                                <span class="star star-on"></span>
                                <span class="star star-on"></span>
                                <span class="star star-on"></span>
                                <span class="star star-on"></span>
                                <span class="star"></span>
                            </div>
                            <div class="elh-review-count">
                                <h5>(12 Reviews)</h5>
                            </div>
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
<!-- Main wrapper start -->
<div class="elh-main-wrap">

    <!-- Course Body -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="elh-course-infos">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-file-video-o"></i>
                            </div>
                            <p class="elh-course-info-name">Duration</p>
                            <h4 class="elh-course-info-value">50 Hours</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-file-word-o"></i>
                            </div>
                            <p class="elh-course-info-name">Topics</p>
                            <h4 class="elh-course-info-value">08 Articles</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <p class="elh-course-info-name">Resources</p>
                            <h4 class="elh-course-info-value">25 Files</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <p class="elh-course-info-name">Access</p>
                            <h4 class="elh-course-info-value">Lifetime</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-language"></i>
                            </div>
                            <p class="elh-course-info-name">Language</p>
                            <h4 class="elh-course-info-value">English</h4>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="elh-course-infobox">
                            <div class="course-info-icon">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <p class="elh-course-info-name">Certification</p>
                            <h4 class="elh-course-info-value">Yes</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="elh-course-container">
                <div class="col-md-8 col-xs-12">
                    <div class="elh-course-body">
                        <div class="elh-learning-objectives elh-course-section">
                            <h3>What I will Learn!</h3>
                            <ul class="checklist half-list">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Nemo autem atque nesciunt aperiam.</li>
                                <li>Quidem sunt, aliquid dolore molestias.</li>
                                <li>Reiciendis voluptatem corrupti amet iste?</li>
                                <li>Blanditiis natus delectus nihil, illum!</li>
                                <li>Ab dolores explicabo, architecto ad?</li>
                                <li>Voluptas adipisci facilis ipsam ipsum.</li>
                                <li>Harum dicta, fuga culpa magnam.</li>
                            </ul>
                        </div>
                        <div class="elh-learning-requirements elh-course-section">
                            <h3>Requirements</h3>
                            <ul class="checklist half-list">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Consequatur, vitae, sunt. Earum, ea.</li>
                                <li>Neque optio deleniti, consectetur eaque!</li>
                                <li>Quaerat doloribus, reprehenderit in ab.</li>
                            </ul>
                        </div>
                        <div class="elh-course-description elh-course-section">
                            <h3>Description</h3>
                            <div class="post-entry">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                                <div class="plyr-video">
                                    <div data-type="youtube" data-video-id="3BhkeY974Rg"></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br>Let’s begin!</p>
                            </div>
                        </div>
                        <div class="elh-course-offer-coupon elh-theme-bg">
                            <div class="coupon-img">
                                <img class="img-responsive" src="/images/course/course-coupon.jpg" alt="...">
                            </div>
                            <div class="coupon-code-content">
                                <p>Use coupon code</p>
                                <h5>"All-off"</h5>
                                <p>to receive 100% off all courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="elh-course-pdf-curriculum elh-theme-bg">
                        <div class="elh-pdf-icon"><i class="fa fa-file-pdf-o"></i></div>
                        <div class="elh-pdf-text">
                            <p>Use Coupon Code</p>
                            <h5>Download Course Curriculum</h5>
                        </div>
                        <div class="elh-pdf-download-link pull-right">
                            <a class="btn" href="#">Download Now</a>
                        </div>
                    </div>

                    <!-- Course Instructor box -->
                    <div class="elh-course-single-instructor">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Instructors</h3>
                        </div>
                        <div class="elh-course-instructor-box">
                            <div class="elh-course-instructor-thumb">
                                <img class="img-responsive" src="/images/course/single-course-instructor-1.jpg" alt="...">
                            </div>
                            <div class="elh-course-instructor-body">
                                <h5 class="elh-course-instructor-name">Oliver Liam</h5>
                                <p class="elh-course-instructor-field">UI Designer</p>
                                <p class="elh-course-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="elh-socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="elh-course-instructor-box">
                            <div class="elh-course-instructor-thumb">
                                <img class="img-responsive" src="/images/course/single-course-instructor-2.jpg" alt="...">
                            </div>
                            <div class="elh-course-instructor-body">
                                <h5 class="elh-course-instructor-name">Jacob Anderson</h5>
                                <p class="elh-course-instructor-field">UI Designer</p>
                                <p class="elh-course-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="elh-socials">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Course Instructor box End -->

                    <!-- Student feedback -->
                    <div class="elh-course-student-feedback">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Student Feeback</h3>
                        </div>
                        <div class="elh-course-rating">
                            <div class="elh-rating-summery">
                                <div class="elh-rating-summery-content">
                                    <h5 class="elh-rating-summery-text">5</h5>
                                    <div class="elh-rating-summery-star">
                                        <span class="star on"></span>
                                        <span class="star on"></span>
                                        <span class="star on"></span>
                                        <span class="star on"></span>
                                        <span class="star on"></span>
                                    </div>
                                    <p class="elh-rating-summery-count">12 Rating</p>
                                </div>
                            </div>
                            <div class="elh-rating-counter">
                                <div class="elh-rating-counter-item">
                                    <p class="elh-rating-counter-star">5 Stars</p>
                                    <div class="elh-rating-counter-bar-wrap">
                                        <div class="elh-rating-counter-percent">
                                            <div class="elh-rating-counter-percentbar" style="width: 100%"></div>
                                        </div>
                                    </div>
                                    <p class="elh-rating-counter-count">12</p>
                                </div>
                                <div class="elh-rating-counter-item">
                                    <p class="elh-rating-counter-star">4 Stars</p>
                                    <div class="elh-rating-counter-bar-wrap">
                                        <div class="elh-rating-counter-percent">
                                            <div class="elh-rating-counter-percentbar"></div>
                                        </div>
                                    </div>
                                    <p class="elh-rating-counter-count">0</p>
                                </div>
                                <div class="elh-rating-counter-item">
                                    <p class="elh-rating-counter-star">3 Stars</p>
                                    <div class="elh-rating-counter-bar-wrap">
                                        <div class="elh-rating-counter-percent">
                                            <div class="elh-rating-counter-percentbar"></div>
                                        </div>
                                    </div>
                                    <p class="elh-rating-counter-count">0</p>
                                </div>
                                <div class="elh-rating-counter-item">
                                    <p class="elh-rating-counter-star">2 Stars</p>
                                    <div class="elh-rating-counter-bar-wrap">
                                        <div class="elh-rating-counter-percent">
                                            <div class="elh-rating-counter-percentbar"></div>
                                        </div>
                                    </div>
                                    <p class="elh-rating-counter-count">0</p>
                                </div>
                                <div class="elh-rating-counter-item">
                                    <p class="elh-rating-counter-star">1 Star</p>
                                    <div class="elh-rating-counter-bar-wrap">
                                        <div class="elh-rating-counter-percent">
                                            <div class="elh-rating-counter-percentbar"></div>
                                        </div>
                                    </div>
                                    <p class="elh-rating-counter-count">0</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- Given Reiviews -->
                        <div class="elh-course-reviews">
                            <div class="elh-course-review-item">
                                <div class="elh-course-reviewer-thumb">
                                    <img class="img-responsive" src="/images/course/course-reviewer-thumb.jpg" alt="...">
                                </div>
                                <div class="elh-course-review-body">
                                    <div class="elh-course-review-title">
                                        <h5>Oliver Liam</h5>
                                        <div class="elh-course-reviewer-rating">
                                            <span class="star on"></span>
                                            <span class="star on"></span>
                                            <span class="star on"></span>
                                            <span class="star on"></span>
                                            <span class="star on"></span>
                                        </div>
                                    </div>
                                    <p class="elh-course-review-time"><i class="fa fa-clock-o"></i> June 9, 2018 at 09:52 am</p>
                                    <p class="elh-course-review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <form class="elh-review-feedback-form" action="#" method="post">
                                        <span class="elh-feedback-on-review-question">Was this review helpful?</span>
                                        <button class="submitted" type="submit" value="yes"><i class="fa fa-check"></i> Yes</button>
                                        <button type="submit" value="no"><i class="fa fa-close"></i> No</button>
                                        <a href="#">Report</a>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- Given Reiviews End -->

                        <!-- Write a review -->
                        <form id="courseReviewForm" class="elh-course-review-form" action="#" method="post">
                            <p class="lead elh-theme-color">Write a Review</p>
                            <div class="elh-rating-inputs">
                                <label class="elh-rate-on"><input type="radio" name="rate-value" value="1"><i class="star"></i></label>
                                <label><input type="radio" name="rate-value" value="2"><i class="star"></i></label>
                                <label><input type="radio" name="rate-value" value="3"><i class="star"></i></label>
                                <label><input type="radio" name="rate-value" value="4"><i class="star"></i></label>
                                <label><input type="radio" name="rate-value" value="5"><i class="star"></i></label>
                            </div>
                            <textarea name="review-message" rows="4"></textarea>
                            <button class="btn" type="submit">Submit</button>
                        </form>
                        <!-- Write a review End -->

                    </div>
                    <!-- Student feedback end -->

                    <!-- Related Course -->
                    <div class="elh-related-course">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Related Course</h3>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/images/course/1.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title"><a href="course-single.html">Advance Method for<br>Adobe Photoshop CC 2018</a></h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/images/instructor/small-1.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Z.Alexander</h5>
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
                            <div class="col-xs-6">
                                <div class="elh-course">
                                    <a class="elh-course-thumb" href="course-single.html">
                                        <img class="img-responsive" src="/images/course/2.jpg" alt="...">
                                    </a>
                                    <div class="elh-course-content">
                                        <h4 class="elh-course-title"><a href="course-single.html">Higher Diploma in<br>Graphic Design &amp; Multimedia</a></h4>
                                    </div>
                                    <div class="elh-course-instructor">
                                        <div class="elh-instructor-thumb">
                                            <img class="img-responsive" src="/images/instructor/small-2.jpg" alt="...">
                                        </div>
                                        <h5 class="elh-instructor-name">Olivia Chloe</h5>
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
                    <!-- Related Course End -->
                </div>
                <div class="col-md-4 col-xs-12">
                    <div id="course-sidebar" class="course-sidebar">
                        <div id="sidebar-affix" class="sidebar-affix">
                            <div class="widget widget-purchase text-center">
                                <h4 class="elh-price">$185</h4>
                                <a class="widget-purchase-btn" href="#">Buy This Course</a>
                                <p class="widget-purchase-guarantee">10-Day Money Back Guarantee</p>
                                <p class="lead">Short Brief</p>
                                <p class="widget-purchase-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="widget widget-course-share text-center">
                                <p class="lead">Share in Social</p>
                                <div class="elh-course-social-share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Body End -->

    <!-- Subscribe -->
    <div class="elh-section elh-theme-bg elh-subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="elh-subscribe-heading">
                        <h5>for Future Update</h5>
                        <h3>Subscribe Us</h3>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your mail">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

</div>
<!-- Main wrapper start end -->
@endsection
