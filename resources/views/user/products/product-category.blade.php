@extends('user.layouts.master')

@section('user-title', $category[fieldLanguage('title')])
@section('seo-description', $category[fieldLanguage('seo-description')] ?: 'AI Academy')
@section('seo-keyword',  $category[fieldLanguage('seo-keyword')] ?: 'AI Academy')

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
                          <a href="{{ route('user.home') }}" title="Home">{{ __('products.Home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('user.product.list') }}" title="All Product">
                            {{ __('products.All_product') }}
                        </a>
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
                            @foreach($products as $product)    
                                <div class="col-xs-6 col-md-4">
                                    <div class="elh-course style-2">
                                        <a class="elh-course-thumb" href="{{ route('user.product.detail', [$category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($product->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $product[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title">
                                                <a href="{{ route('user.product.detail', [$category[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                                    {{ $product[fieldLanguage('title')] }}
                                                </a>
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
                                <div class="col-xs-12">
                                    {{ $products->links('user.layouts.libraries.paginate') }}
                                </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- Popular Courses End -->

        <!-- Subscription -->
        @include('user.layouts.libraries.subcrice')
        <!-- Subscription End -->

    </div>
@endsection
