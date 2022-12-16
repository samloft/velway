<footer class="footer">
    <div class="container">
        <div class="nav__footer">
            <a href="{{ route('home') }}">{{ ('Home') }}</a> |
            <a href="{{ route('services') }}">{{ ('Services') }}</a> |
            <a href="{{ route('about') }}">{{ ('About Us') }}</a> |
            <a href="{{ route('news') }}">{{ ('News') }}</a> |
            <a href="{{ route('contact') }}">{{ ('Contact Us') }}</a>

            <div class="pt-3">
                <a href="https://www.safecontractor.com/" target="_blank">
                    <img src="{{ asset('images/sc.png') }}" alt="Sage Contractor"/>
                </a>

            </div>
        </div>

        <div class="contact__footer">
            <span>
                {!! $company_details->email ? 'Email: <a href="MAILTO:' . $company_details->email .'">' . $company_details->email . '</a> ' : ' ' !!}
                {{ $company_details->telephone ? '| Phone: ' . $company_details->telephone : ' ' }}
                {{ $company_details->fax ? '| Fax: ' . $company_details->fax : ' ' }}
            </span>
            <span>
                {{ $company_details->address_line_1 ? 'Location: ' . $company_details->address_line_1 . ', ' : '' }}
                {{ $company_details->address_line_2 ? $company_details->address_line_2 . ', '  : '' }}
                {{ $company_details->address_line_3 ? $company_details->address_line_3 . ', '  : '' }}
                {{ $company_details->address_line_4 ? $company_details->address_line_4 . ', '  : '' }}
                {{ $company_details->address_line_5 ? $company_details->address_line_5 . ', ' : '' }}
                {{ $company_details->postcode ? $company_details->postcode . '.' : '' }}
            </span>
        </div>

        <div class="social__footer">
            @foreach($social as $key => $value)
                @if($value && $key !== 'id')
                    <a href="{{ $value }}" class="image-link" target="_blank">
                        <img src="{{ asset('images/' . $key . '.png') }}" alt="{{ ucfirst($key) }}">
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</footer>

<footer class="copyright">
    <div class="container">
        {{ __('Ⓒ ' . date('Y') . ' Velway Company Ltd. All Rights Reserved') }}
    </div>
</footer>
