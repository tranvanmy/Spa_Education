@extends('user.layouts.master')

@section('user-title', $product[fieldLanguage('title')])
@section('seo-description', $product[fieldLanguage('seo-description')] ?: 'AI Academy')
@section('seo-keyword',  $product[fieldLanguage('seo-keyword')] ?: 'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">{{ $product[fieldLanguage('title')] }}</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('user.home') }}" title="Home">{{ __('products.Home') }}</a></li>
                    <li>
                        <a href="{{ route('user.product.list') }}" title="All Product">
                            {{ __('products.All_product') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.product.category', $productsCategory[fieldLanguage('slug')]) }}">{{ $productsCategory[fieldLanguage('title')] }}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('user-content')
    <div class="elh-main-wrap">

        <!-- Blog Sigle -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row" id="elh-course-container">
                    <div class="col-md-8 col-xs-12">
                        <div class="elh-course-body">
                            <div class="elh-course-description elh-course-section">
                                {!! $product[fieldLanguage('detail')] !!}
                            </div>
                        </div>

                        <!-- Feedback -->
                      
                        <!-- Student feedback end -->

                        <!-- Related Posts -->
                        <div class="elh-related-course">
                            <div class="elh-section-header text-left">
                                <h3 class="elh-section-title">{{ __('products.Related') }} {{ $productsCategory[fieldLanguage('title')] }}</h3>
                            </div>
                            <div class="row">
                            @foreach($productsCategory->products as $product)
                                <div class="col-xs-6">
                                    <div class="elh-course">
                                        <a class="elh-course-thumb" href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($product->image_url ?: '', 400, null, array('resize')) }}" alt="{{ $product[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="elh-course-content">
                                            <h4 class="elh-course-title"><a href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ $product[fieldLanguage('title')] }}</a></h4>
                                        </div>
                                        <div class="elh-course-footer">
                                            <p class="elh-course-price">
                                                <a class="widget-read-more" href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ __('products.Read_more') }}<i class="fa fa-long-arrow-right"></i></a>
                                            </p>
                                            <p class="elh-course-metas">
                                                <span class="elh-student-count"><i class="fa fa-users"></i> 25</span>
                                                <span class="elh-comment-count"><i class="fa fa-comments"></i> 5</span>
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
                                <h4 class="widget-title">{{ __('products.Popular_product') }}</h4>
                                <div class="widget-posts">
                                @foreach($productsPopular as $product)
                                    <div class="widget-post">
                                        <a class="widget-post-thumb" href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($product->image_url ?: '', 60, null, array('resize')) }}" alt="{{ $product[fieldLanguage('title')] }}">
                                        </a>
                                        <div class="widget-post-content">
                                            <a class="widget-post-title" href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ $product[fieldLanguage('title')] }}</a>
                                            <a class="widget-read-more" href="{{ route('user.product.detail', [$productsCategory[fieldLanguage('slug')], $product[fieldLanguage('slug')]]) }}" title="{{ $product[fieldLanguage('title')] }}">{{ __('products.Read_more') }}<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Single End -->

        <!-- Subscription -->
        @include('user.layouts.libraries.subcrice')
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
