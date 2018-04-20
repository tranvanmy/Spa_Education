@extends('user.layouts.master')

@section('user-title', $research[fieldLanguage('title')])
@section('seo-description', $research[fieldLanguage('seo_description')])
@section('seo-keyword',  $research[fieldLanguage('seo_keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
     <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ $research[fieldLanguage('title')] }}</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('user.home') }}" title="Home">{{ __('research.Home') }}</a></li>
                    <li>
                        <a href="{{ route('user.research.category', [$category[fieldLanguage('slug')]]) }}" title="{{ $category[fieldLanguage('title')] }}">
                            {{ $category[fieldLanguage('title')] }}
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">
        <!-- Blog Sigle -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row" id="elh-course-container">
                    <div class="col-md-8 col-xs-12">
                        <div class="elh-course-body">
                            <div class="elh-course-description elh-course-section">
                                <div class="post-entry">
                                    {!! $research[fieldLanguage('detail')] !!}
                                </div>
                            </div>
                        </div>

                        <!-- Feedback -->
                        <div class="elh-course-student-feedback">
                            <div class="elh-section-header text-left">
                                <h3 class="elh-section-title">{{ __('research.Feedback') }}</h3>
                            </div>

                            <!-- Given Reiviews -->
                            {{-- <div class="elh-course-reviews">
                                <div class="elh-course-review-item">
                                    <div class="elh-course-reviewer-thumb">
                                        <img class="img-responsive fix-width" src="/images/course/course-reviewer-thumb.jpg" alt="...">
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
                            </div> --}}
                            <!-- Given Reiviews End -->

                            <!-- Write a review -->
                            {{-- <form id="courseReviewForm" class="elh-course-review-form" action="#" method="post">
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
                            </form> --}}
                            <!-- Write a review End -->

                        </div>
                        <!-- Student feedback end -->

                        <!-- Related Posts -->
                        <div class="elh-related-course">
                            <div class="elh-section-header text-left">
                                <h3 class="elh-section-title">{{ __('research.Related') }} {{ nl2br($research[fieldLanguage('title')]) }}</h3>
                            </div>
                            <div class="row">
                                @foreach($researchRelated as $research)
                                    <div class="col-xs-6">
                                        <div class="elh-course">
                                            <a class="elh-course-thumb"
                                                href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                title="{{ $research[fieldLanguage('title')] }}"
                                            >
                                                <img class="img-responsive fix-width"
                                                    src="{{ Croppa::url($research->image_url ?: '', 400, null, array('resize')) }}"
                                                    alt="{{ $research[fieldLanguage('title')] }}"
                                                    style="width: 100%"
                                                />
                                            </a>
                                            <div class="elh-course-content">
                                                <h4 class="elh-course-title">
                                                    <a title="{{ $research[fieldLanguage('title')] }}"
                                                        href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                    >
                                                    {{ $research[fieldLanguage('title')] }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="elh-course-footer">
                                                <p class="elh-course-price">
                                                    <a class="widget-read-more"
                                                        href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                        title="{{ $research[fieldLanguage('title')] }}"
                                                    >{{ __('research.Read_more') }} <i class="fa fa-long-arrow-right"></i></a>
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
                                <h4 class="widget-title">{{ __('research.Popular_rd') }}</h4>
                                <div class="widget-posts">
                                    @foreach ($researchLastest as $research)
                                        <div class="widget-post">
                                            <a class="widget-post-thumb"
                                                title="{{ $research[fieldLanguage('title')] }}"
                                                href="{{ route('user.research.detail', [$research->category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                            >
                                                <img class="img-responsive fix-width"
                                                    src="{{ Croppa::url($research->image_url ?: '', 100, null, array('resize')) }}"
                                                    alt="{{ $research[fieldLanguage('title')] }}"
                                                    style="width: 100%"
                                                />
                                            </a>
                                            <div class="widget-post-content">
                                                <a class="widget-post-title"
                                                    title="{{ $research[fieldLanguage('title')] }}"
                                                    href="{{ route('user.research.detail', [$research->category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                >{{ $research[fieldLanguage('title')] }}</a>
                                                <a class="widget-read-more"
                                                    title="{{ $research[fieldLanguage('title')] }}"
                                                    href="{{ route('user.research.detail', [$research->category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                >{{ __('research.Read_more') }}<i class="fa fa-long-arrow-right"></i></a>
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
        @include('user.layouts.libraries.subcrice')
        <!-- Subscription End -->

    </div>
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
