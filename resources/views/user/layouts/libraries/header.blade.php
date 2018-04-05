<!-- Topbar -->
<header class="elh-topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-4">
                <div class="top-block">
                    <p class="top-phone"><i class="fa fa-phone"></i>+1-0000-000-000</p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-8 text-right">
                <div class="top-block top-socials">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="{{ route('user.change-language') }}" style="margin-left: 30px">
                        @if (config('app.locale') == 'vi')
                            {{ 'Vietnam' }}
                        @else
                            {{ 'English' }}
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
