@extends('user.layouts.master')

@section('user-title', $course[fieldLanguage('title')])
@section('seo-description', $course[fieldLanguage('seo-description')])
@section('seo-keyword',  $course[fieldLanguage('seo-keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header has-floatbox elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ $course[fieldLanguage('title')]}}</h3>
            <ol class="breadcrumb">
                <li><a href="{{ route('user.courses') }}">Home</a></li>
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
                            <img class="img-responsive" src="{{ $course['instructor']['image_url'] }}"
                                    alt="{{ $course['instructor'][fieldLanguage('name')] }}">
                        </div>
                        <div class="elh-instructor-name elh-course-profile-item">
                            <p>Instructor</p>
                            <h5>{{ $course['instructor'][fieldLanguage('name')] }}</h5>
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
                                <h5>({{ $course['total_review_manual'] }} Reviews)</h5>
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
                            {{ $course[fieldLanguage('description')] }}
                        </div>

                    </div>
                    <!-- Course Instructor box -->
                    <div class="elh-course-single-instructor">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Instructors</h3>
                        </div>
                        <div class="elh-course-instructor-box">
                            <div class="elh-course-instructor-thumb">
                                <img class="img-responsive" src="{{ $course['instructor']['image_url'] }}"
                                    alt="{{ $course['instructor'][fieldLanguage('name')] }}">
                            </div>
                            <div class="elh-course-instructor-body">
                                <h5 class="elh-course-instructor-name">{{ $course['instructor'][fieldLanguage('name')] }}</h5>
                                {{-- <p class="elh-course-instructor-field">UI Designer</p>
                                <p class="elh-course-instructor-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
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
                                    <p class="elh-rating-summery-count">{{ $course['comments_count'] }}</p>
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
                        @if( $course['comments'])
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
                        @endif
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
                            @foreach ($relatedCourses as $course)
                                <div class="col-xs-6">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="{{ route('user.course.detail', $course[fieldLanguage('slug')]) }}"
                                            title="{{ $course[fieldLanguage('title')] }}">
                                            <img class="img-responsive" src="{{ $course['image_url'] }}"
                                                alt="{{ $course[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title">
                                                <a href="{{ route('user.course.detail', $course[fieldLanguage('slug')]) }}"
                                                    title="{{ $course[fieldLanguage('title')] }}">
                                                    {{ $course[fieldLanguage('title')] }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="elh-course-instructor">
                                            <div class="elh-instructor-thumb">
                                                <img class="img-responsive" src="{{ $course['instructor']['image_url'] }}"
                                                    alt="{{ $course['instructor'][fieldLanguage('name')] }}">
                                            </div>
                                            <h5 class="elh-instructor-name">{{ $course['instructor'][fieldLanguage('name')] }}</h5>
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
                                                    <i class="fa fa-comments"></i>{{ $course['comments_count'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Related Course End -->
                </div>
                <div class="col-md-4 col-xs-12">
                    <div id="course-sidebar" class="course-sidebar">
                        <div id="sidebar-affix" class="sidebar-affix">
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
