@extends('user.layouts.master')

@section('user-title', 'Events')
@section('seo-description', 'AI Academy Events')
@section('seo-keyword',  'AI Academy Events')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">All Events</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="course_hub.html">Home</a>
                    </li>
                    <li class="active">Events</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

        <!-- Course Listing -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="elh-course-listing">
                                @foreach ($events as $event)
                                    @include('user.events.event-item')
                                @endforeach
                                <div class="col-xs-12">
                                    {{ $events->links('user.layouts.libraries.paginate') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget category_widget">
                                <h4 class="widget-title">SIGN UP FOR MORE SEMINAR</h4>
                                <input class="form-control" style="margin: 10px" placeholder="Enter your name" />
                                <input class="form-control" style="margin: 10px" placeholder="Enter your email" />
                                <input class="form-control" style="margin: 10px" placeholder="Enter your phone number" />
                                <input type="submit" class="btn btn-primary" value="Sign up"/>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Listing End -->

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
                            <button type="submit">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
