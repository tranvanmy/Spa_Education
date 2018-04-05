@extends('user.layouts.master')

@section('user-title', $post[fieldLanguage('title')])
@section('seo-description', $post[fieldLanguage('seo_description')])
@section('seo-keyword', $post[fieldLanguage('seo_keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ $post[fieldLanguage('title')] }}</h3>
            <ol class="breadcrumb">
                <li><a href="/" title="Home">Home</a></li>
                <li>
                    <a href="{{ route('user.data-scientist.category', [$category[fieldLanguage('slug')]]) }}"
                        title="{{ $category[fieldLanguage('title')] }}"
                    >{{ $category[fieldLanguage('title')] }}</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="elh-header-floatbox">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-course-profile">
                        <div class="elh-instructor-thumb elh-course-profile-item">
                            <img class="img-responsive" src="{{ $post->author->image_url }}"
                                alt="{{ $post->author[fieldLanguage('name')] }}"
                            >
                        </div>
                        <div class="elh-instructor-name elh-course-profile-item">
                            <p>Author</p>
                            <h5>{{ $post->author[fieldLanguage('name')] }}</h5>
                        </div>
                        <div class="elh-student-count elh-course-profile-item">
                            <p>Views</p>
                            <h5>{{ $post->viewed }}</h5>
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
                                <h5>({{ $post->total_review_manual }} Reviews)</h5>
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

    <!-- Blog Sigle -->
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row" id="elh-course-container">
                <div class="col-md-8 col-xs-12">
                    <div class="elh-course-body">
                        <div class="elh-course-description elh-course-section">
                            <div class="post-entry">
                                {!! $post[fieldLanguage('detail')] !!}
                            </div>
                        </div>
                    </div>

                    <!-- Feedback -->
                    <div class="elh-course-student-feedback">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Feeback</h3>
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

                    <!-- Related Posts -->
                    <div class="elh-related-course">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Related Posts</h3>
                        </div>
                        <div class="row">
                            @foreach($postRelate as $post)
                                <div class="col-xs-6">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb"
                                            href="{{ route('user.data-scientist.detail', [$category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                            title="{{ $post[fieldLanguage('title')] }}"
                                        >
                                            <img class="img-responsive" src="{{ $post->image_url }}"
                                                alt="{{ $post[fieldLanguage('title')] }}"
                                            >
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title">
                                                <a title="{{ $post[fieldLanguage('title')] }}"
                                                    href="{{ route('user.data-scientist.detail', [$category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                >{{ $post[fieldLanguage('title')] }}</a>
                                            </h4>
                                        </div>
                                        <div class="elh-course-instructor">
                                            <div class="elh-instructor-thumb">
                                                <img class="img-responsive" src="{{ $post->author->image_url }}"
                                                    alt="{{ $post->author[fieldLanguage('name')] }}"
                                                />
                                            </div>
                                            <h5 class="elh-instructor-name">{{ $post->author[fieldLanguage('name')] }}</h5>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                <a class="widget-read-more"
                                                    href="{{ route('user.data-scientist.detail', [$category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                >Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Related Posts End -->
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside class="widget post_widget">
                            <h4 class="widget-title">Popular Posts</h4>
                            <div class="widget-posts">
                                @foreach($postLastest as $post)
                                    <div class="widget-post">
                                        <a class="widget-post-thumb"
                                            href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                            title="{{ $post[fieldLanguage('title')] }}"
                                        >
                                            <img class="img-responsive" src="{{ $post->image_url }}"
                                                alt="{{ $post[fieldLanguage('title')] }}"
                                            >
                                        </a>
                                        <div class="widget-post-content">
                                            <a class="widget-post-title"
                                                href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                title="{{ $post[fieldLanguage('title')] }}"
                                            >{{ $post[fieldLanguage('title')] }}</a>
                                            <a class="widget-read-more"
                                                href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                title="{{ $post[fieldLanguage('title')] }}"
                                            >Read More<i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                @endforeach
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
    <!-- Script -->
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
