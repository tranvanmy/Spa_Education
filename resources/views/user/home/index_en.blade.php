@extends('user.layouts.master')

@section('user-title', $webSetup[fieldLanguage('title')] ?: 'AI Academy')
@section('seo-description', $webSetup[fieldLanguage('seo_description')] ?: 'AI Academy')
@section('seo-keyword',  $webSetup[fieldLanguage('seo_keyword')] ?: 'AI Academy')

@section('user-nav')
<!-- Navigation -->

@include('user.layouts.libraries.navbar', ['isHomePage' => true])
<!-- Navigation End -->
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-banner style-2" id="elh-banner">
    <div class="owl-carousel" id="banner-slider">
        @foreach ($data['sliders'] as $slider)
            <div class="elh-banner-item" style="background-image: url({{ $slider->image }})">
                <div class="banner-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12" style="color: #40632c;">
                                <h4 class="elh-banner-title">
                                    {!! nl2br($slider[fieldLanguage('title')]) !!}
                                </h4>
                                <h1 class="elh-banner-subtitle">
                                    {!! nl2br($slider[fieldLanguage('description')]) !!}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Banner End -->
@endsection

@section('user-content')
<div class="main-wrap">

    <!-- At a glance -->
    <div class="elh-section elh-theme-bg elh-fact-section" style="margin-top: 50px" id="home_about_us">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="slogan_class">Academy - at a glance</h3>
                </div>
                <div class="col-sm-9">
                    <div class="elh-counter-group">
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="12"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Industry experts</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="15"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Professors</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="45"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Researchers</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="15"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Courses</p>
                        </div>
                        <div class="elh-counter-item">
                                <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="5"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Projects</p>
                        </div>
                        <div class="elh-counter-item">
                            <h3 class="elh-fact-number"><span class="elh-count" data-form="0" data-to="8"></span></h3>
                            <p class="elh-fact-name" style="height: 50px">Patents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- At a glance end -->

    <!-- About Us -->
    <div class="elh-section elh-section-padding elh-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: justify;">
                    <div class="elh-about-section sm-bottom-30">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">About <span>Us</span></h3>
                        </div>
                        <p>
                            {!! nl2br($webSetup[fieldLanguage('about_us')]) !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    @if ($webSetup[fieldLanguage('about_us_youtube')])
                        <div class="plyr-video">
                            <div data-type="youtube" data-video-id="{{ $webSetup[fieldLanguage('about_us_youtube')] }}"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Popular Courses -->
    <div class="elh-section elh-section-padding elh-carousel-section" id="home_course">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Popular <span>Courses</span></h3>
                        <a class="all-link" href="{{ route('user.courses') }}">See All Courses</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-generic-carousel owl-carousel">
                @foreach ($data['courses'] as $course)
                    <div class="elh-course style-2">
                        <a class="elh-course-thumb" href="{{ route('user.course.detail', [$course[fieldLanguage('slug')]]) }}" title="{{ $course[fieldLanguage('title')] }}">
                            <img class="img-responsive fix-width"
                                src="{{ Croppa::url($course->image_url ?: '', 358, null, array('resize')) }}"
                                alt="{{ $course[fieldLanguage('title')] }}"
                            />
                        </a>
                        <div class="elh-course-content">
                            <h4 class="elh-course-title" style="height: 50px">
                                <a href="{{ route('user.course.detail', [$course[fieldLanguage('slug')]]) }}"
                                    title="{{ $course[fieldLanguage('title')] }}"
                                >{{ $course[fieldLanguage('title')] }}</a>
                            </h4>
                            <p style="text-align: justify">
                                {!! nl2br($course[fieldLanguage('description')]) !!}
                            </p>
                        </div>
                        <div class="elh-course-footer">
                            <p class="elh-course-price" style="color: #00bcd4">
                               {{ $course[fieldLanguage('level')] }}
                            </p>
                            <p class="elh-course-metas">
                                <span class="elh-comment-count"><i class="fa fa-comments"></i>{{ $course->comments->count() }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses End -->

    <!-- Our instructor -->
    <div class="elh-section elh-carousel-section elh-img-bg elh-bg-2" id="scientific-advisory-boards">
        <div class="elh-overlay elh-section-padding-big">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">Our <span>Scientific Advisory Boards</span></h3>
                            <p class="elh-section-text">
                                {!! nl2br($webSetup[fieldLanguage('instructor_description')]) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel elh-generic-4">
                        @foreach($data['instructors'] as $instructor)
                            <div class="elh-instructor">
                                <a class="elh-instructor-thumb"
                                    href="{{ route('user.instructor.detail', [$instructor[fieldLanguage('slug')]]) }}"
                                    title="{{ $instructor[fieldLanguage('name')] }}"
                                >
                                    <img class="img-responsive fix-width"
                                        src="{{ Croppa::url($instructor->image_url ?: '', 345, null, array('resize')) }}"
                                        alt="{{ $instructor[fieldLanguage('name')] }}"
                                    />
                                </a>
                                <div class="elh-instructor-body">
                                    <h4 class="elh-instructor-title" style="height: 45px">
                                        <a href="{{ route('user.instructor.detail', [$instructor[fieldLanguage('slug')]]) }}"
                                            title="{{ $instructor[fieldLanguage('name')] }}"
                                        >{{ $instructor[fieldLanguage('name')] }}</a>
                                    </h4>
                                    <p class="elh-instructor-field">{{ $instructor[fieldLanguage('specialized')] }}</p>
                                    <p class="elh-instructor-description">
                                            {!! nl2br($instructor[fieldLanguage('description')]) !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our instructor -->

    <!-- Category Tile -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_research_develop">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Research & Development</h3>
                        <p class="elh-section-text">
                            {!! nl2br($webSetup[fieldLanguage('rd_description')]) !!}
                        </p>
                        <a class="all-link style-2" href="{{ route('user.research.list') }}" title="See All Research & Development">See All Research & Development</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-grid elh-category-tiles">
                @foreach($data['research_development'] as $research)
                    <div class="col-md-4 col-xs-6 elh-grid-item elh-category-item">
                        <a class="elh-category-tile" href="{{ route('user.research.detail', [$research->category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}" title="{{ $research[fieldLanguage('title')] }}">
                            <div class="elh-category-tile-thumb">
                                <img class="img-responsive fix-width"
                                    src="{{ Croppa::url($research->image_url ?: '', 400, null, array('resize')) }}"
                                    alt="{{ $research[fieldLanguage('title')] }}"
                                />
                            </div>
                            <div class="elh-category-tile-overlay">
                                <div class="elh-category-tile-content">
                                    <h5 class="elh-category-title">{{ $research[fieldLanguage('title')] }}</h5>
                                    <p class="elh-course-count">{!! nl2br($research[fieldLanguage('description')]) !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Category Tile End -->

    <!-- Partner Logoes -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_our_partner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="elh-section-header text-center">
                        <h3 class="elh-section-title">Success <span>Stories</span></h3>
                        <p class="elh-section-text">
                            {!! nl2br($webSetup[fieldLanguage('partner')]) !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="partner-logoes">
                        @foreach ($data['partners'] as $partner)
                            <a class="partner-logo" href="{{ $partner[fieldLanguage('link')] }}">
                                <img class="img-responsive fix-width" src="{{ $partner->image }}"
                                    alt="{{ $partner[fieldLanguage('title')] }}"
                                />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Event -->
    <div class="elh-section elh-section-padding" id="home_seminar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="elh-section-header text-left">
                        <h3 class="elh-section-title">Upcoming <span>Events</span></h3>
                        <p class="elh-section-text">
                            {!! nl2br($webSetup[fieldLanguage('rd_description')]) !!}
                        </p>
                        <a class="all-link style-2" href="{{  route('user.event.list') }}" title="All Events">See All Events</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="elh-events">
                    @foreach($data['events'] as $event)
                        <div class="col-md-6 col-xs-12">
                            <div class="elh-event style-2">
                                <div class="elh-event-date" style="background-image: url({{ $event['image_url'] }})">
                                </div>
                                <div class="elh-event-detail">
                                    <h4 class="elh-event-title"><a href="{{ route('user.event.detail', $event[fieldLanguage('slug')]) }}" title="{{ $event[fieldLanguage('title')] }}">{{ $event[fieldLanguage('title')] }}</a></h4>
                                    <p class="elh-event-metas">
                                        <span><i class="fa fa-clock-o"></i>{{ timeEvent($event['start_at'], $event['end_at']) }}</span>
                                        <span><i class="fa fa-users"></i>{{ $event->author[fieldLanguage('name')] }}</span>
                                    </p>
                                    <p class="elh-event-excerpt">
                                        {!! nl2br($event[fieldLanguage('description')]) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Upcoming Event End -->

    <!-- News & blog -->
    <div class="elh-section elh-img-bg elh-bg-3 elh-carousel-section" id="home_news_blog">
        <div class="elh-overlay elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title"><span>Data Scientists' corner</span></h3>
                            <p class="elh-section-text">
                                {!! nl2br($webSetup[fieldLanguage('data_scientist')]) !!}
                            </p>
                            <a class="all-link style-2" href="{{ route('user.data-scientist.list') }}" title="Data Scientists' corner">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel">
                    @foreach($data['dataScientist'] as $scientist)
                        <article class="elh-post">
                            <a class="elh-post-thumb" href="{{ route('user.data-scientist.detail', [$scientist->category[fieldLanguage('slug')], $scientist[fieldLanguage('slug')]]) }}" title="{{ $scientist[fieldLanguage('title')] }}">
                                <img class="img-responsive fix-width" src="{{ Croppa::url($scientist->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $scientist[fieldLanguage('title')] }}">
                            </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title">
                                    <a href="{{ route('user.data-scientist.detail', [$scientist->category[fieldLanguage('slug')], $scientist[fieldLanguage('slug')]]) }}"
                                        title="{{ $scientist[fieldLanguage('title')] }}"
                                    >{{ $scientist[fieldLanguage('title')] }}</a></h4>
                                <a class="elh-post-link" href="{{ route('user.data-scientist.detail', [$scientist->category[fieldLanguage('slug')], $scientist[fieldLanguage('slug')]]) }}"
                                    title="{{ $scientist[fieldLanguage('title')] }}"
                                >Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News & blog end -->

    <!-- Education for all -->
    <div class="elh-section elh-section-padding elh-bottom-0" id="home_join_us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                    <div class="elh-section-header">
                        <h3 class="elh-section-title">Education for all! Join with us...</h3>
                        <p class="elh-section-text">
                            {!! nl2br($webSetup[fieldLanguage('join_us')]) !!}
                        </p>
                    </div>
                    <div id="errors" class="alert alert-danger alert-dismissable hidden">
                        <button type="button" class="close" aria-hidden="true">×</button>
                        <p id="message-failure"></p>
                    </div>
                    <div class="alert alert-success alert-dismissable hidden">
                        <button type="button" class="close" aria-hidden="true">×</button>
                        <p id="message-success"></p>
                    </div>
                    <a class="btn" id="home-button-join-us" href="#" style="color: #fff">Join Today</a>
                    <div class="quick-contact" id="home-form-join-us" style="display: none">
                        <form action="post" url="{{ route('user.subcribe') }}">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="email" id="home-subcribe-email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" id="name" name="home-subcribe-name" placeholder="Name *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="tel" id="home-subcribe-phone" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="home-subcribe-message" name="message" placeholder="Message" rows="3" required></textarea>
                                    <button class="btn" type="submit" id="home-subcribe-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="join-us-img">
            <img class="img-responsive fix-width" src="/images/bg/join-us.jpg" alt="Join us">
        </div>
    </div>
    <!-- Education for all end -->
@endsection

@section('user-script')
    <script type="text/javascript" src="{{ mix('/user/home-subcribe.js') }}"></script>
@endsection
