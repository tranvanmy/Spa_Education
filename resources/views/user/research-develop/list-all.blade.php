@extends('user.layouts.master')

@section('user-title', 'Research & Development')
@section('seo-description', 'Research & Development')
@section('seo-keyword',  'Research & Development')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ __('research.All_rd') }}</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('user.home') }}">{{ __('research.Home') }}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">
        @foreach($categories as $category)
        <!-- Popular Courses -->
            <div class="elh-section elh-carousel-section">
                <div class="container elh-section-padding elh-bottom-0">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="elh-section-header text-left">
                                <a title="{{ $category[fieldLanguage('title')] }}"
                                    href="{{ route('user.research.category', [$category[fieldLanguage('slug')]]) }}"
                                    style="font-size: 1.5rem"
                                >
                                    <h3 class="elh-section-title">{{ $category[fieldLanguage('title')] }}</h3>
                                </a>
                                <p class="elh-section-text">
                                    {{ nl2br($category[fieldLanguage('description')]) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="elh-generic-carousel owl-carousel">
                            @foreach($category->reseachDevelopments as $research)

                                <div class="elh-course style-2">
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
                                            <a
                                                href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $research[fieldLanguage('slug')]]) }}"
                                                title="{{ $research[fieldLanguage('title')] }}"
                                            > {{ $research[fieldLanguage('title')] }}</a>
                                        </h4>
                                    </div>
                                    <div class="elh-course-footer text-justify">
                                        <p>
                                            {!! nl2br($research[fieldLanguage('description')]) !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        <!-- Popular Courses End -->
        @endforeach

        <!-- Subscription -->
        <div class="elh-section elh-theme-bg elh-subscribe-section style-2" style="margin-top: 30px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="elh-subscribe-heading">
                            <h3>{{ __('research.Subscribe_us') }}</h3>
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
