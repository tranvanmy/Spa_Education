@extends('user.layouts.master')

@section('user-title', 'AI Academy Products')
@section('seo-description', 'AI Academy Products')
@section('seo-keyword',  'AI Academy Products')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ __('navbar.Search') }}</h3>
                <form action="">
                    <input type="text" name="q" placeholder="{{ __("navbar.Search here") }}" style="max-width:500px"  maxlength="200">
                    <input type="submit" value="{{ __("navbar.Search") }}" class="btn" style="height:44px; border-radius:0px;vertical-align:bottom">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

      <!-- Popular Courses -->
        <div class="elh-section elh-carousel-section">
            <h3 class="container" style="padding-left:0px">
            {{ __('navbar.Search for') }} "{{ str_limit($searchQuery, 100) }}"
            </h3>
            @if(count($results))
                @if($results['products']->isNotEmpty())
                    <div class="container elh-section-padding elh-bottom-0" >
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="elh-section-header text-left">
                                    <h5 class="elh-section-title">
                                        {{ __('navbar.Products') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="elh-course-listing">
                                @foreach($results['products'] as $product)
                                <div class="col-md-3">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="{{ route('user.product.detail',[$product->category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($product->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $product[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title">
                                                <a href="{{ route('user.product.detail',[$product->category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ $product[fieldLanguage('title')] }}</a>
                                            </h4>
                                        </div>
                                        <div class="elh-course-footer text-justify">
                                            <p>
                                                {!! nl2br($product[fieldLanguage('description')]) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if($results['courses']->isNotEmpty())
                    <div class="container elh-section-padding elh-bottom-0">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="elh-section-header text-left">
                                    <h5 class="elh-section-title">
                                        {{ __('navbar.Courses') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="elh-course-listing">
                                @foreach ($results['courses'] as $course)
                                    <div class="col-md-3">
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
                            </div>
                        </div>
                    </div>
                @endif

                @if($results['events']->isNotEmpty())
                    <div class="container elh-section-padding elh-bottom-0">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="elh-section-header text-left">
                                    <h5 class="elh-section-title">
                                        {{ __('navbar.Events') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                @foreach($results['events'] as $event)
                                <div class="col-md-12 col-xs-12">
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

                @endif

                @if($results['dataScientists']->isNotEmpty())
                    <div class="container elh-section-padding elh-bottom-0">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="elh-section-header text-left">
                                    <h5 class="elh-section-title">
                                        {{ __("navbar.Data Scientists' corner") }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row elh-section-padding elh-bottom-0">
                            @foreach($results['dataScientists'] as $scientist)
                            <div class="col-md-3">
                                <article class="elh-post style-3">
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
                                        >{{ __("data-scientist.Read_more") }}<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                @if($results['research_development']->isNotEmpty())
                    <div class="container elh-section-padding elh-bottom-0">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="elh-section-header text-left">
                                    <h5 class="elh-section-title">
                                        {{ __('navbar.R&D') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="elh-course-listing">
                            @foreach($results['research_development'] as $research)
                            <div class="col-md-3 col-xs-6 elh-grid-item elh-category-item">
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
                @endif 
            @else
                <h3 class="container text-center">{{ __('navbar.Search nothing') }}</h3>
            @endif          
        </div>
      <!-- Popular Courses End -->

        <!-- Subscription -->
        @include('user.layouts.libraries.subcrice')
        <!-- Subscription End -->

    </div>
@endsection
