@extends('user.layouts.master')

@section('user-title', 'Data Scientists\' Corner')
@section('seo-description', 'Data Scientists\' Corner')
@section('seo-keyword',  'Data Scientists\' Corner')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">{{ __('data-scientist.Data_scientist_corner') }}</h3>
            <ol class="breadcrumb">
                <li><a href="{{ route('user.home') }}">{{ __('data-scientist.Home') }}</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- Banner End -->
@endsection

@section('user-content')
<!-- Main wrapper start -->
<div class="elh-main-wrap">

    <!-- Blog Style 3 -->
    <div class="elh-section elh-section-padding" style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 elh-posts-center">
                    <div class="row" style="padding-bottom: 30px">
                        <ul class="text-center">
                            @foreach ($categories as $category)
                                <li style="display: inline-block; font-size: 2rem; text-transform: uppercase;padding-left 15px;padding-right:15px">
                                    <a href="{{ route('user.data-scientist.category', [$category[fieldLanguage('slug')]]) }}"
                                        title="{{ $category[fieldLanguage('title')] }}"
                                    >{{ $category[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="elh-posts-listing list-data-scientist">
                        @php $post = $posts->first() @endphp
                        @if ($post)
                            <div class="row">
                                <article class="elh-post style-4">
                                    <div class="col-sm-8">
                                        <a class="elh-post-thumb"
                                            href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                            title="{{ $post[fieldLanguage('title')] }}"
                                        >
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($post->image_url ?: '', 750, null, array('resize')) }}" alt="{{ $post[fieldLanguage('title')] }}">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="elh-post-title">
                                            <a href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                title="{{ $post[fieldLanguage('title')] }}"
                                            >{{ $post[fieldLanguage('title')] }}</a>
                                        </h4>
                                        <p class="elh-post-excerpt" style="color: rgba(0,0,0,.54);">
                                            {!! nl2br($post[fieldLanguage('description')]) !!}
                                        </p>
                                        <div style="display: flex">
                                            <div>
                                                <img class="img-circle" src="{{ $post->author->image_url }}"
                                                    alt="$post->author[fieldLanguage('name')]"
                                                    style="width: 50px;height: 50px"
                                                />
                                            </div>
                                            <div style="padding-left: 15px">
                                                <span style="font-size: 1.5rem; color: #5E6A73">
                                                    {{ $post->author[fieldLanguage('name')] }}
                                                </span><br/>
                                                <span style="color: rgba(0,0,0,.54);">
                                                    {{ $post->created_at->format('M d') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endif
                        <div class="row elh-section-padding elh-bottom-0">
                            @foreach ($posts as $post)
                                @php
                                    if($loop->index === 0) continue
                                @endphp
                                <div class="col-md-4 col-xs-6">
                                    <article class="elh-post style-3">
                                        <a class="elh-post-thumb"
                                            href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                            title="{{ $post[fieldLanguage('title')] }}"
                                        >
                                            <img class="img-responsive fix-width" src="{{ Croppa::url($post->image_url ?: '', 400, null, array('resize')) }}"
                                                alt="$post[fieldLanguage('title')]"
                                            />
                                        </a>
                                        <div class="elh-post-body">
                                            <h4 class="elh-post-title">
                                                <a href="{{ route('user.data-scientist.detail', [$post->category[fieldLanguage('slug')], $post[fieldLanguage('slug')]]) }}"
                                                    title="{{ $post[fieldLanguage('title')] }}"
                                                >{{ $post[fieldLanguage('title')] }}</a>
                                            </h4>
                                            <p class="elh-post-excerpt elh-bottom-0" style="color: rgba(0,0,0,.54);">
                                                {!! nl2br($post[fieldLanguage('description')]) !!}
                                            </p>
                                            <div style="display: flex">
                                                <div>
                                                    <img class="img-circle" src="{{ $post->author->image_url }}"
                                                        alt="{{ $post->author[fieldLanguage('name')] }}"
                                                        style="width: 50px;height: 50px"
                                                    />
                                                </div>
                                                <div style="padding-left: 15px">
                                                    <span style="font-size: 1.5rem; color: #5E6A73">
                                                        {{ $post->author[fieldLanguage('name')] }}
                                                    </span><br/>
                                                    <span style="color: rgba(0,0,0,.54);">
                                                        {{ $post->created_at->format('M d') }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-xs-12">
                            <nav class="navigation post-pagination xs-text-center" role="navigation">
                                <div class="nav-links">
                                    {{ $posts->links('user.layouts.libraries.paginate') }}
                                </div>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Style 3 End -->

    <!-- Subscription -->
    @include('user.layouts.libraries.subcrice')
    <!-- Subscription End -->

</div>
<!-- Main wrapper start end -->
@endsection
