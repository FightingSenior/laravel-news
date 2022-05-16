<div class="header-top-area">
    <div class="container">
        <div class="header-top">
            <div class="info">
                <ul>
                    @php 
                        $timezone = 'Asia/Ho_Chi_Minh';
                        date_default_timezone_set($timezone);
                    @endphp
                    <li><span>{{ date('h:i A') }} - {{ date('d M Y') }}</span></li>

                    @guest
                        <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Đăng kí</a></li>
                        <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                        @else
                        <li><a href="{{ route('profile') }}"><i class="fas fa-user-alt"></i> {{ auth()->user()->name }}</a></li>
                        <li><a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();"><i class="fas fa-sign-in-alt"></i> Đăng xuất</a></li>
                        <form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest

                </ul>
            </div>

            <div class="socials">
                <ul>
                    @if(isset($headersettings) && $headersettings['facebook'])
                        <li><a href="{{ $headersettings['facebook'] }}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['twitter'])
                        <li><a href="{{ $headersettings['twitter'] }}" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['linkedin'])
                        <li><a href="{{ $headersettings['linkedin'] }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['youtube'])
                        <li><a href="{{ $headersettings['youtube'] }}" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                    @endif
                    @if(isset($headersettings) && $headersettings['vimeo'])
                        <li><a href="{{ $headersettings['vimeo'] }}" target="_blank"><i class="fab fa-vimeo-square"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="header-logo">
        <div class="logo">
            <a href="{{ route('home') }}">
                @if(isset($headersettings) && $headersettings['site_logo'])
                    <img src="{{ asset('images/'.$headersettings['site_logo']) }}" alt="Logo">
                @elseif(isset($headersettings) && $headersettings['site_name'])
                    {{ $headersettings['site_name'] }}
                @else
                    TIN TỨC 24H
                @endif
            </a>
        </div>
    </div>
</div>