@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

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
                                @for ($i = 0; $i < 5; $i++)
                                    <div>
                                    <div class="elh-event style-2">
                                        <div class="row">
                                            <div class="elh-event-date" style="background-image: url('http://vov.be/assets/files/events/InternalCommunication.jpg'); width: 40%; height: 300px;">
                                            </div>
                                            <div>
                                                <h4 class="elh-event-title"><a href="detail-serminal.html">Fall event detection using single camera for health care</a></h4>
                                                <div style="display: flex">
                                                    <div>
                                                        <img class="img-circle" src="images/instructor/small-1.jpg" alt="..." style="width: 50px;height: 50px"/>
                                                    </div>
                                                    <div style="padding-left: 15px; line-height: 50px">
                                                        <span style="font-size: 1.5rem; color: #5E6A73">
                                                            Thuy Nguyen
                                                        </span><br/>
                                                    </div>
                                                </div>
                                                <p class="elh-event-metas">
                                                    <span><i class="fa fa-clock-o"></i>Apr 21 (9:00-12:00)</span>
                                                    <span><i class="fa fa-users"></i>Victoria Campus</span>
                                                </p>
                                                <p class="elh-event-description elh-event-excerpt" style="margin-top: 20px; margin-right: 15px;">
                                                <a href="detail-serminal.html">
                                                    Fall detection is important for safety for old people or patient living alone. There have been approaches for fall detection using wearable sensors or mobile phone accelerometers. However, wearable equipment is inconvenient for users and the elderly usually forget the equipment. Camera-based methods are more convenient .....
                                                </a>                                                
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                                
                                <div class="col-xs-12">
                                    <nav class="navigation post-pagination xs-text-center" role="navigation">
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href="#">
                                                <i class="fa fa-angle-double-left"></i>
                                            </a>
                                            <a class="page-numbers" href="#">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="page-numbers" href="#">4</a>
                                            <a class="page-numbers" href="#">5</a>
                                            <a class="next page-numbers" href="#">
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </nav>
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
