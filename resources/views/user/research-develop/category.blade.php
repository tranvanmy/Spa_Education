@extends('user.layouts.master')

@section('user-title', $category[fieldLanguage('title')])
@section('seo-description', $category[fieldLanguage('seo-description')])
@section('seo-keyword',  $category[fieldLanguage('seo-keyword')])

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ $category[fieldLanguage('title')] }}</h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('user.home')}}" title="Home">{{ __('research.Home') }}</a>
                        </li>
                        <li> <a href="{{ route('user.research.list')}}" title="All Research & Development">{{ __('research.All_rd') }}</a></li>
                    </ol>
                </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">
        <!-- Popular Courses -->
        <div class="elh-section elh-carousel-section">
            <div class="container elh-section-padding">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">{{ $category[fieldLanguage('title')] }}</h3>
                            <p class="elh-section-text">
                                {!! nl2br($category[fieldLanguage('description')]) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="elh-course-listing">
                                @foreach($researchDevs as $researchDev)
                                    <div class="col-xs-6 col-md-4">
                                        <div class="elh-course style-2">
                                            <a class="elh-course-thumb"
                                                href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $researchDev[fieldLanguage('slug')]]) }}"
                                                title="{{ $researchDev[fieldLanguage('slug')] }}"
                                            >
                                                <img class="img-responsive fix-width"
                                                    src="{{ Croppa::url($researchDev->image_url ?: '', 400, null, ['resize']) }}"
                                                    alt="{{ $researchDev[fieldLanguage('title')] }}"
                                                    style="width: 100%"
                                                />
                                            </a>
                                            <div class="elh-course-content">
                                                <h4 class="elh-course-title">
                                                    <a href="{{ route('user.research.detail', [$category[fieldLanguage('slug')], $researchDev[fieldLanguage('slug')]]) }}"
                                                        title="{{ $researchDev[fieldLanguage('slug')] }}"
                                                    >
                                                        {{ $researchDev[fieldLanguage('title')] }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="elh-course-footer text-justify">
                                                <p>
                                                    {!! nl2br($researchDev[fieldLanguage('description')]) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-xs-12">
                                    <nav class="navigation post-pagination xs-text-center" role="navigation">
                                        <div class="nav-links">
                                            {{ $researchDevs->links('user.layouts.libraries.paginate') }}
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Popular Courses End -->

        <!-- Subscription -->
        <div class="elh-section elh-theme-bg elh-subscribe-section style-2">
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
