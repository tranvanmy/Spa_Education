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
                <h3 class="elh-page-title">{{ __('products.All_product') }}</h3>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('user.home') }}" title="Home">{{ __('products.Home') }}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

      <!-- Popular Courses -->
        <div class="elh-section elh-carousel-section">
        
        @foreach($products as $category)
            <div class="container elh-section-padding{{ end($products)['id'] == $category['id'] ? '' : ' elh-bottom-0' }}">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="elh-section-header text-left">
                            <h3 class="elh-section-title">
                                {{ $category[fieldLanguage('title')] }}
                                <a  
                                    href="{{ route('user.product.category', $category[fieldLanguage('slug')]) }}" 
                                    title="See All {{ $category[fieldLanguage('title')] }}"
                                    style="font-size: 1.5rem"
                                >({{ __("products.See_all") }})</a>
                                
                            </h3>
                            <p class="elh-section-text">
                                {!! nl2br($category[fieldLanguage('description')]) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="elh-generic-carousel owl-carousel">
                    @foreach($category['products'] as $product)
                        <div class="elh-course style-2">
                            <a class="elh-course-thumb" href="{{ route('user.product.detail',[$category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                <img class="img-responsive fix-width" src="{{ Croppa::url($product->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $product[fieldLanguage('title')] }}">
                            </a>
                            <div class="elh-course-content">
                                <h4 class="elh-course-title">
                                    <a href="{{ route('user.product.detail',[$category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ $product[fieldLanguage('title')] }}</a>
                                </h4>
                            </div>
                            <div class="elh-course-footer text-justify">
                                <p>
                                    {!! nl2br($product[fieldLanguage('description')]) !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        </div>
      <!-- Popular Courses End -->

        <!-- Subscription -->
        @include('user.layouts.libraries.subcrice')
        <!-- Subscription End -->

    </div>
@endsection
