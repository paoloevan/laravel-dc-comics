<footer>
    <footer id="site_footer">

        <div class="header_footer">
            <div class="buy">
                @foreach ($buy as $item)
                <div class="mx-3">
                    <img src="{{Vite::asset($item['image'])}}" alt="">
                    {{ $item['text'] }}
                </div>
                @endforeach
            </div>
        </div>

        <div class="main_footer">
            <div class="container">
                <div class="content">
                    <div class="col_4 me-3">
                        @foreach ($links as $link)
                        <div class="footer_title">{{ $link['title'] }}</div>
                        @foreach ($link['link'] as $text)
                        <a class="footer_link" href="#">{{ $text['text'] }}</a>
                        @endforeach
                        @endforeach
                    </div>
                    <div class="col_4 me-3">
                        @foreach ($linksTwo as $link)
                        <div class="footer_title">{{ $link['title'] }}</div>
                        @foreach ($link['link'] as $text)
                        <a class="footer_link" href="#">{{ $text['text'] }}</a>
                        @endforeach @endforeach
                    </div>
                    <div class="col_4 me-3">
                        @foreach ($sities as $link)
                        <div class="footer_title">{{ $link['title'] }}</div>
                        @foreach ($link['link'] as $text)
                        <a class="footer_link" href="#">{{ $text['text'] }}</a>
                        @endforeach @endforeach
                    </div>

                </div>

                <div class="logo_bg">

                    <img src="{{ Vite::asset('resources/images/dc-logo-bg.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="footer_footer">
            <div class="container">
                <button>sign-up now</button>

                <div class="social">
                    <span>follow us</span>
                    <div><i class="fa-brands fa-facebook-f"></i></div>
                    <div><i class="fa-brands fa-twitter"></i></div>
                    <div><i class="fa-brands fa-youtube"></i></div>
                    <div><i class="fa-brands fa-pinterest-p"></i></div>
                    <div><i class="fa-solid fa-location-dot"></i></div>
                </div>
            </div>
        </div>

    </footer>
    <!-- / footer -->

</footer>