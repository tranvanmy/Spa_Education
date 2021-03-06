@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<div class="elh-page-header elh-img-bg elh-bg-17">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ $instructor[fieldLanguage('name')] }}</h3>
                <ol class="breadcrumb">
                    <li>{{ __('instructors.Home') }}</li>
                    <li class="active">{{ $instructor[fieldLanguage('specialized')] }}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
<div class="elh-main-wrap">

        <!-- Instructor Body -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="elh-instructor-thumb">
                            <img
                                class="img-responsive" src="{{ Croppa::url($instructor->image_url ?: '', 345, null, array('resize')) }}"
                                alt="{{ $instructor[fieldLanguage('name')] }}"
                                style="width:100%"
                            />
                        </div>
                        <div class="elh-contact-instructor">
                            <a class="btn" href="#">{{ __('instructors.Contact_instructor') }}</a>
                            <a class="btn btn-border" href="#">{{ __('instructors.Subscribe_instructor') }}</a>
                        </div>
                        <div class="elh-instructor-single-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-dribble"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="elh-instructor-entry">
                            <p>{!! $instructor[fieldLanguage('description')] !!}
                            <br>
                            {!! nl2br($instructor[fieldLanguage('detail')]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Instructor Body End -->

        <!-- Popular Courses -->
        <div class="elh-section elh-section-padding elh-gray-bg elh-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title"><span>{{ __('instructors.Courses') }}</span> {{ __('instructors.by') }} {{ $instructor[fieldLanguage('name')] }}</h3>
                            <p class="elh-section-text">{{ __('instructors.Text') }}</p>
                            <a class="all-link" href="{{ route('user.courses') }}">{{ __('instructors.See_all_courses') }}</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
                        @foreach ($instructor->courses as $course)
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 3120px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 390px;">
                                        <div class="elh-course">
                                            <a class="elh-course-thumb" href="{{ route('user.course.detail', [$course[fieldLanguage('slug')]]) }}">
                                            <img class="img-responsive" src="{{ $course['image_url'] }}" alt="{{ $course[fieldLanguage('name')] }}">
                                            </a>
                                            <div class="elh-course-content">
                                            <h4 class="elh-course-title"><a href="{{ route('user.course.detail', [$course[fieldLanguage('slug')]]) }}">{{ $course[fieldLanguage('title')] }}</a></h4>
                                            </div>
                                            <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                <span class="elh-student-count"><i class="fa fa-users"></i> {{ $course[('total_review')] }}</span>
                                            </p>
                                            <p class="elh-course-metas">
                                                <span class="elh-comment-count"><i class="fa fa-eye"></i> {{ $course[('viewed')] }}</span>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-controls clickable">
                                    <div class="owl-buttons">
                                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses End -->
        <!-- Subscribe -->
        @include('user.layouts.libraries.subcrice')
        <!-- Subscribe End -->

    </div>
@endsection
