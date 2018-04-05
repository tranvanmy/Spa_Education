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
                    <li>Home</li>
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
                            <img class="img-responsive" src="/{{ $instructor['image_url'] }}" alt="{{ $instructor[fieldLanguage('name')] }}">
                        </div>
                        <div class="elh-contact-instructor">
                            <a class="btn" href="#">Contact Instructor</a>
                            <a class="btn btn-border" href="#">Subscribe Instructor</a>
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
                            <p>{{ $instructor[fieldLanguage('description')] }}
                            <br>
                            {{ $instructor[fieldLanguage('detail')] }}
                        </div>
                        <div class="elh-instructor-facts">
                            <div class="elh-instructor-fact-item">
                                <h5>Students</h5>
                                <p>246,332</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Total Courses</h5>
                                <p>4 Courses</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Reviews</h5>
                                <p>36,352</p>
                            </div>
                            <div class="elh-instructor-fact-item">
                                <h5>Ovarall Rating</h5>
                                <p>4.85 out of 5</p>
                            </div>
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
                        <h3 class="elh-section-title"><span>Courses</span> by {{ $instructor[fieldLanguage('name')] }}</h3>
                        <a class="all-link" href="{{ route('user.course.list') }}">See All Courses</a>
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
                                            <a class="elh-course-thumb" href="course/{{ $course[fieldLanguage('slug')] }}">
                                            <img class="img-responsive" src="{{ $course['image_url'] }}" alt="{{ $course[fieldLanguage('name')] }}">
                                            </a>
                                            <div class="elh-course-content">
                                            <h4 class="elh-course-title"><a href="course/{{ $course[fieldLanguage('slug')] }}">{{ $course[fieldLanguage('title')] }}</a></h4>
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
                        <form id="subscription" class="elh-subscribe-form pull-right xs-pull-center" action="#" method="post" novalidate="true">
                            <input type="email" name="EMAIL" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

    </div>
@endsection
