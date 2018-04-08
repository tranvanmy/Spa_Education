@extends('user.layouts.master')

@section('user-title', $event[fieldLanguage('title')])
@section('seo-description', $event[fieldLanguage('description')])
@section('seo-keyword', $event[fieldLanguage('keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ $event[fieldLanguage('title')] }}</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('user.home') }}">Home</a></li>
                    <li><a href="{{ route('user.event.list') }}">All Events</a></li>
                </ol>
            </div>
        </div>
        <div class="elh-header-floatbox">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-course-profile">
                            <div class="elh-instructor-thumb elh-course-profile-item">
                                <img class="img-responsive fix-width"  src="{{ Croppa::url($event->author->image_url ?: '', 100, null, array('resize')) }}" alt="{{ $event->author[fieldLanguage('name')] }}" style="height: 100%;">
                            </div>
                            <div class="elh-instructor-name elh-course-profile-item">
                                <p>Author</p>
                                <h5> {{ $event->author[fieldLanguage('name')] }}</h5>
                            </div>
                            <div class="elh-student-count elh-course-profile-item">
                                <p>Day</p>
                                <h5>{{ date_format(date_create($event['start_at']), 'd/m/Y') }}</h5>
                            </div>
                            <div class="elh-student-count elh-course-profile-item">
                                <p>Time</p>
                                <h5>{{ date_format(date_create($event['start_at']), 'G:i'). '-' .  date_format(date_create($event['end_at']), 'H:i')}}</h5>
                            </div>
                            <div class="elh-review-score elh-course-profile-item">
                                <p>Location</p>
                                <h5>{{ $event[fieldLanguage('location')] }}</h5>
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
                                {!! $event[fieldLanguage('detail')] !!}
                            </div>
                        </div>
                        <br>
                        Tag
                         <div class="elh-course-tag">
                           <ul>
                               <li>High-tech</li>
                           </ul>
                        </div>

                        <!-- Student feedback end -->
                        <!-- Seminar -->
                        <div class="elh-related-course">
                            <div class="elh-section-header text-left">
                               <h3 class="elh-section-title">Related Event</h3>
                            </div>
                            <div class="row">
                            @foreach($relatedEvents as $event)
                                <div class="col-xs-6">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="{{ route('user.event.detail', $event[fieldLanguage('slug')]) }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($event->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $event[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title">
                                                <a href="{{ route('user.event.detail', $event[fieldLanguage('slug')]) }}"
                                                    title="{{ $event[fieldLanguage('title')] }}"
                                                >{{ $event[fieldLanguage('title')] }}</a>
                                            </h4>
                                        </div>
                                        <div class="elh-course-instructor">
                                            <div class="elh-instructor-thumb">
                                                <img class="img-responsive fix-width" src="{{ Croppa::url($event->author->image_url ?: '', 100, null, array('resize')) }}"
                                                    alt="{{ $event[fieldLanguage('title')] }}"
                                                />
                                            </div>
                                            <h5 class="elh-instructor-name">{{ $event->author[fieldLanguage('name')] }}</h5>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                <i class="fa fa-clock-o"></i>
                                                {{ date("d/m/Y", strtotime($event->start_at)) }}
                                            </p>
                                            <p class="elh-course-price">
                                                <i class="fa fa-map-marker"></i>
                                                {{ $event[fieldLanguage('location')] }}
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
