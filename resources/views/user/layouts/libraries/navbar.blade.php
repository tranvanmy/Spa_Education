<nav class="navbar fix-nav style-2" data-spy="affix" data-offset-top="51" style="border-bottom: 1px solid #FFF">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="padding-top: 5px; padding-bottom: 5px">
                <img src="/images/logo.png" alt="Site Logo">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="navbar-search navbar-right">
                <button id="navbar-search-toggle" class="navbar-search-toggle"><i class="fa fa-search"></i></button>
                <form id="navbar-searchform" class="navbar-searchform">
                    <input type="search" name="search" placeholder="Search...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul class="nav navbar-nav navbar-right" id="home-nav-onepage">
                <li class="dropdown">
                    <a href="{{ isset($isHomePage) ? '#home_about_us' : '#'}}" title="About us">About us</a>
                    @if(isset($navbar['about_us']))
                        <ul class="dropdown-menu">
                            @foreach ($navbar['about_us'] as $about)
                                <li>
                                    <a class="purchase-link" href="{{ route('user.about-us.detail', $about[fieldLanguage('slug')]) }}" title="{{ $about[fieldLanguage('title')] }}">{{ $about[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.courses') }}">Courses</a>
                    <ul class="dropdown-menu">
                        <li><a class="purchase-link" href="category-course.html">ML Fundamental</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in Computer Vision</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in NLP</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in Cyber Security</a></li>
                        <li><a class="purchase-link" href="category-course.html">ML in the Cloud</a></li>
                        <li >
                            <a class="purchase-link" href="category-course.html">
                                AI in Smart Agriculture (upcoming)
                            </a>
                        </li>
                        <li>
                            <a class="purchase-link" href="category-course.html">
                                AI in Smart City (upcoming)
                            </a>
                        </li>
                        <li><a class="purchase-link" href="category-course.html">Student & PhD. candidates </a></li>
                        <li><a class="purchase-link" href="category-course.html">AI in Marketing</a></li>
                        <li><a class="purchase-link" href="category-course.html">BigData ecosystem & architecture</a></li>
                        <li><a class="purchase-link" href="category-course.html">Data governance in the enterprise</a></li>
                        <li><a class="purchase-link" href="category-course.html">Data analytics & visualization</a></li>
                        <li><a class="purchase-link" href="category-course.html">AI for Business leaders</a></li>
                        <li><a class="purchase-link" href="category-course.html">AI for IT leaders</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ isset($isHomePage) ? '#home_research_develop' : route('user.research.list')}}" title="R&D">R&D</a>
                    @if(isset($navbar['research_development_categories']))
                        <ul class="dropdown-menu">
                            @foreach ($navbar['research_development_categories'] as $category)
                                <li>
                                    <a class="purchase-link" href="{{ route('user.research.category', $category[fieldLanguage('slug')]) }}" title="{{ $category[fieldLanguage('title')] }}">{{ $category[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li class="dropdown">
                    <a href="{{ route('user.product.list') }}" title="Products">Products</a>
                    @if(isset($navbar['products_categories']))
                        <ul class="dropdown-menu">
                            @foreach ($navbar['products_categories'] as $category)
                                <li>
                                    <a class="purchase-link" href="{{ route('user.product.category', $category[fieldLanguage('slug')]) }}" title="{{ $category[fieldLanguage('title')] }}">{{ $category[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                <li>
                    <a href="{{ isset($isHomePage) ? '#home_seminar' : route('user.event.list')}}" title="Events">Events</a>
                </li>
                <li>
                    <a href="{{ isset($isHomePage) ? '#home_news_blog' : route('user.data-scientist.list')}}" title="Data Scientists' corner">Data Scientists' corner </a>
                </li>
                <li class="dropdown">
                    <a href="{{ isset($isHomePage) ? '#home_join_us' : '#'}}" title="Join us">Join us</a>
                    @if(isset($navbar['join_us']))
                        <ul class="dropdown-menu">
                            @foreach ($navbar['join_us'] as $us)
                                <li>
                                    <a class="purchase-link" href="{{ route('user.join-us.detail', $us[fieldLanguage('slug')]) }}" title="{{ $us[fieldLanguage('title')] }}">{{ $us[fieldLanguage('title')] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
