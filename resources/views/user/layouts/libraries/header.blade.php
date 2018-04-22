<!-- Topbar -->
<header class="elh-topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-4">
                <div class="top-block">
                    <p class="top-phone">
                        @if ($webSetup->phone)
                            <i class="fa fa-phone"></i>{{ $webSetup->phone }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-8 text-right">
                <div class="top-block top-socials">
                    @if ($webSetup->facebook)
                        <a href="{{ $webSetup->facebook }}" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    @endif
                    @if ($webSetup->twitter)
                        <a href="{{ $webSetup->twitter }}" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @if ($webSetup->google)
                        <a href="{{ $webSetup->google }}" title="Google">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    @endif
                    @if ($webSetup->youtube)
                        <a href="{{ $webSetup->youtube }}" title="Youtube">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    @endif
                    @if ($webSetup->linkedin)
                        <a href="{{ $webSetup->linkedin }}" title="Linked in">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    @endif
                    @if ($webSetup->vimeo)
                        <a href="{{ $webSetup->vimeo }}" title="Vimeo">
                            <i class="fa fa-vimeo"></i>
                        </a>
                    @endif
                </div>
                <div class="top-block top-socials">
                    <a title="Vietnamese" href="{{ route('user.change-language') }}?lang=vi"
                        style="margin-left: 0px; height: 42px;{{ config('app.locale') == 'vi' ? 'border-bottom: 1px solid #fff' : '' }}"
                    >
                        <img src="/images/flag/vietnam.png" alt="Vietnamese"/>
                    </a> |
                    <a title="English" href="{{ route('user.change-language') }}?lang=en"
                        style="margin-left: 0px; height: 42px; {{ config('app.locale') == 'en' ? 'border-bottom: 1px solid #fff' : '' }}"
                    >
                        <img src="/images/flag/english.png" alt="Vietnamese"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Topbar End -->
