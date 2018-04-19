@extends('user.layouts.master')

@section('user-title', $data[fieldLanguage('title')])
@section('seo-description', $data[fieldLanguage('seo_description')])
@section('seo-keyword',  $data[fieldLanguage('seo_keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ $data[fieldLanguage('title')] }}</h3>
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
                <div class="col-md-12 col-xs-12">
                    <div class="elh-course-body">
                        <div class="elh-course-description elh-course-section">
                            <div class="post-entry">
                                {!! $data[fieldLanguage('detail')] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center" style="margin-top: 30px">
                    <a class="btn" href="#" style="color: #fff">{{ __('join-us.Join_today') }}</a>
                    <div class="quick-contact" id="home-form-join-us" style="margin-top: 20px">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="email" id="home-subcribe-email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" id="name" name="home-subcribe-name" placeholder="{{ __('join-us.Name') }} *" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="tel" id="home-subcribe-phone" name="phone" placeholder="{{ __('join-us.Phone') }}">
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="home-subcribe-message" name="message" placeholder="{{ __('join-us.Message') }}" rows="3" required></textarea>
                                    <button class="btn" type="submit" id="home-subcribe-submit">{{ __('join-us.Submit') }}</button>
                                </div>
                            </div>
                        </form>
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
                        <h3>{{ __('join-us.Subscribe_us') }}</h3>
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
