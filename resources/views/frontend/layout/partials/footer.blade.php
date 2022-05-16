<div class="footer-top-area">
    <div class="container">
        <div class="footer-top">

            <div class="footer-column">
                <h2>About Us</h2>
                @if(isset($headersettings) && $headersettings['about_us'])
                    {!! $headersettings['about_us'] !!}
                @endif
            </div>

            <div class="footer-column">
                <h2>Categoies</h2>
                @foreach($footernewscategorylist as $newscategory)
                    <div class="section-item news-category-list">
                        <h3>
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <a href="{{ route('page.category',$newscategory->slug) }}">{{ $newscategory->name }}</a>
                            <span>({{ $newscategory->newslist_count }})</span>
                        </h3>
                    </div>
                @endforeach
            </div>

            <div class="footer-column">
                <h2>News Subscription</h2>
                <div class="newsletter-subscription">
                    <p>Luôn cập nhật và nhận tin tức mới nhất của chúng tôi ngay trong hộp thư đến của bạn và nhận các ưu đãi tuyệt vời.</p>
                    <form action="" method="">
                        <input type="email" name="" class="mailbox" placeholder="yourmail@example.com">
                        <input type="submit" value="Subscribe" class="submitbox">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; 2022 - Đồ án website tin tức.</p>
        </div>
    </div>
</div>