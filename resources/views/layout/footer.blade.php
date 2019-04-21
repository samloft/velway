<footer class="footer">
    <div class="container">
        <div class="nav__footer">
            <a href="{{ route('home') }}">{{ ('Home') }}</a> |
            <a href="{{ route('services') }}">{{ ('Services') }}</a> |
            <a href="{{ route('about') }}">{{ ('About Us') }}</a> |
            <a href="{{ route('news') }}">{{ ('News') }}</a> |
            <a href="{{ route('contact') }}">{{ ('Contact Us') }}</a>
        </div>

        <div class="contact__footer">
            <span>{!! ('Email: <a href="MAILTO:info@velway.co.uk">info@velway.com</a> | Phone: 0123 456 789 | Fax: 0123 456 789') !!}</span>
            <span>{{ ('Location: Velway, Landsberg, Lichfield Road Ind. Est., Tamworth, Staffordshire B79 7XB.') }}</span>
        </div>

        <div class="social__footer">
            <a href="#" class="image-link">
                <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
            </a>
            <a href="#" class="image-link">
                <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
            </a>
            <a href="#" class="image-link">
                <img src="{{ asset('images/linked-in.png') }}" alt="LinkedIn">
            </a>
            <a href="#" class="image-link">
                <img src="{{ asset('images/youtube.png') }}" alt="Youtube">
            </a>
        </div>
    </div>
</footer>

<footer class="copyright">
    <div class="container">
        {{ __('Ⓒ ' . date('Y') . ' Velway Company Ltd. All Rights Reserved') }}
    </div>
</footer>
