@extends('user.layouts.master')

@section('user-title', 'All Courses')
@section('seo-description', 'All Courses')
@section('seo-keyword',  'All Courses')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ __('courses.All_course') }}</h3>
            <ol class="breadcrumb">
                <li>
                    <a href="/">{{ __('courses.Home') }}</a>
                </li>
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="elh-course-listing">
                            @foreach ($courses as $course)
                                <div class="col-md-4" style="height: 490px;">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="{{ route('user.course.detail', $course[fieldLanguage('slug')]) }}"
                                            title="{{ $course[fieldLanguage('title')] }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($course->image_url ?: '', 400, null, array('resize')) }}"
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
                                                <img class="img-responsive fix-width" src="{{ Croppa::url($course['instructor']['image_url'] ?: '', 400, null, array('resize')) }}"
                                                    alt="{{ $course['instructor'][fieldLanguage('name')] }}">
                                            </div>
                                            <h5 class="elh-instructor-name">{{ $course['instructor'][fieldLanguage('name')] }}</h5>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price" style="color: #00bcd4">
                                               {{ $course[fieldLanguage('level')] }}
                                            </p>
                                            <p class="elh-course-metas">
                                                <i class="fa fa-comments"></i>{{ $course['comments_count'] }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-xs-12">
                                <nav class="navigation post-pagination xs-text-center" role="navigation">
                                    <div class="nav-links">
                                        {{ $courses->links('user.layouts.libraries.paginate') }}
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Listing End -->

    <!-- Subscription -->
    @include('user.layouts.libraries.subcrice')
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
     <!--Start of Tawk.to Script-->
@endsection
