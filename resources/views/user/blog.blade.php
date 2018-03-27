@extends('user.layouts.master')

@section('user-title', 'AI Academy')
@section('seo-description', 'AI Academy')
@section('seo-keyword',  'AI Academy')

@section('user-nav')
    @include('user.layouts.libraries.navbar')
@endsection

@section('user-banner')
<!-- Banner -->
<div class="elh-page-header elh-img-bg elh-bg-9">
    <div class="elh-overlay">
        <div class="container text-center">
            <h3 class="elh-page-title">Blog</h3>
            <ol class="breadcrumb">
                <li><a href="course_hub.html">Home</a></li>
                <li class="active">Blog</li>
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
    <div class="elh-section elh-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 elh-posts-center">
                    <div class="elh-posts-listing">
                        <article class="elh-post style-4">
                            <a class="elh-post-thumb" href="blog-single.html">
                                        <img class="img-responsive" src="/images/banner/8.jpg" alt="...">
                                    </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <p class="elh-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post style-4">
                            <a class="elh-post-thumb" href="blog-single.html">
                                        <img class="img-responsive" src="/images/banner/8.jpg" alt="...">
                                    </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <p class="elh-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <article class="elh-post style-4">
                            <a class="elh-post-thumb" href="blog-single.html">
                                        <img class="img-responsive" src="/images/banner/8.jpg" alt="...">
                                    </a>
                            <div class="elh-post-body">
                                <h4 class="elh-post-title"><a href="blog-single.html">The Certificate giving ceremony of 2018 in California</a></h4>
                                <p class="elh-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                <a class="elh-post-link" href="blog-single.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </article>
                        <div class="text-center col-xs-12">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Style 3 End -->

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

@section('user-script')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5aa3a4174b401e45400d980c/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection
