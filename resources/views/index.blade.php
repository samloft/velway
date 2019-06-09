@extends('layout.master')

@section('page.title', 'We do something!')
@section('header.color', 'light-blue')

@section('content')
    <div class="loader"></div>

    <div id="home-banner"></div>

    <div class="container">
        <div class="video-container">
            <div class="row">
                <div class="col">
                    <video id="video" poster="{{ asset('images/video-poster.png') }}" class="embed-responsive" controls>
                        <source src="{{ asset('videos/home.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="col my-auto">
                    <p>{{ __('Watch our video and see how Velway can solve all your problems') }}</p>
                </div>
            </div>
        </div>

        <div class="section__info">
            <div class="container">
                <h3 class="heading heading--underlined heading--left heading--light-blue">The Vel<img
                            src="{{ asset('images/icon.png') }}" class="icon" alt="->">way
                </h3>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <p>
                            {{ __('In the ever-changing world of property management, Velway is leading the way with a combined approach, not only to manage the lifecycle longevity of your asset, but also to manage compliance across your property portfolio.') }}
                        </p>

                        <p>
                            {{ __('Managing all in-house teams and service partners to ensure that works are completed to the clients’ satisfaction, with Health and Safety as a main driver, Velway manages works in line with current regulations for the safety of all stakeholders.') }}
                        </p>
                        <p>
                            {{ __('All engineers and tradespeople provided by Velway are fully qualified and experienced in their chosen specialisms. Relationships have been built and developed with trusted partners to ensure excellence in service delivery to our clients at all times, meeting service levels and increasing 1st fix responses.') }}
                        </p>
                        <p>
                            {{ __('Yes, we use modern integrated systems and we are embracing new technology! However, as Customer Service is key to us, above all else we keep our service simple and user friendly, built around 3 integrated levels of delivery:
RECORD, MANAGE and DOCUMENT – the Velway way!') }}
                        </p>
                    </div>
                    <div class="col text-right" data-aos="zoom-in-left">
                        <img class="img-fluid mt-5" src="{{ asset('images/the-velway.png') }}"
                             alt="The Velway">
                    </div>
                </div>
            </div>
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-4" data-aos="fade-right">--}}
            {{--                    <div class="block__info">--}}
            {{--                        <img src="{{ asset('images/heading-record.png') }}" alt="Record">--}}

            {{--                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Record') }}</h4>--}}

            {{--                        <p>--}}
            {{--                            {{ __('Our Helpdesk uses a bespoke CAFM system alongside processes that have been developed and improved--}}
            {{--                            over the last 5 years to accurately record all levels of work instruction, both reactive and planned, as well as statutory compliance and warranties') }}--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4" data-aos="fade-up">--}}
            {{--                    <div class="block__info">--}}
            {{--                        <img src="{{ asset('images/heading-manage.png') }}" alt="Manage">--}}

            {{--                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Manage') }}</h4>--}}

            {{--                        <p>--}}
            {{--                            {{ __('All works are managed through their lifecycle, initially through the helpdesk team then via our Operations team.--}}
            {{--                            We ensure all works are completed to the customer satisfaction or to manage compliance.') }}--}}
            {{--                        </p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4" data-aos="fade-left">--}}
            {{--                    <div class="block-info">--}}
            {{--                        <img src="{{ asset('images/heading-document.png') }}" alt="Document">--}}

            {{--                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Document') }}</h4>--}}

            {{--                        <p>{{ __('All documentation is centrally stored on our system and provided to our clients in any format they wish.') }}</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>

    <div class="section__3-column bg__dark-blue">
        <div class="container">
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-7" data-aos="fade-right">--}}
            {{--                    <h3 class="heading heading--underlined heading--left heading--white">The Vel<img--}}
            {{--                                src="{{ asset('images/icon.png') }}" class="icon" alt="->">way--}}
            {{--                    </h3>--}}

            {{--                    <p>--}}
            {{--                        {{ __('In the ever changing world of property management Velway is leading the way with a--}}
            {{--                        combined approach to not only manage the lifecycle longevity of your asset but also ensure compliance across your property portfolio.') }}--}}
            {{--                    </p>--}}

            {{--                    <p>--}}
            {{--                        {{ __('Yes we use modern integrated systems and are embracing new technology such as the IoE--}}
            {{--                        but above all else we keepour service simple and user friendly built around 3 integrated levels of delivery – the Velway way!') }}--}}
            {{--                    </p>--}}
            {{--                </div>--}}
            {{--                <div class="col text-right" data-aos="zoom-in-left">--}}
            {{--                    <img class="m-200 img-fluid mt-5" src="{{ asset('images/the-velway.png') }}"--}}
            {{--                         alt="The Velway">--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="block__info">
                        <img src="{{ asset('images/record.png') }}" alt="Record">

                        <h4 class="heading heading--underlined heading--centered heading--white">{{ __('Record') }}</h4>

                        <p>
                            {{ __('Our helpdesk uses a CAFM system and processes, developed and improved over the last 5 years to accurately record all levels of work instruction
                                - both reactive and planned - as well as statutory compliance and warranties.') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="block__info">
                        <img src="{{ asset('images/manage.png') }}" alt="Manage">

                        <h4 class="heading heading--underlined heading--centered heading--white">{{ __('Manage') }}</h4>

                        <p>
                            {{ __('All works are managed through their lifecycle, initially through the helpdesk team then via our operations team, to ensure works are completed to the customers’ satisfaction, are delivered safely and compliance is managed. We ensure our clients are aware of the status of any works by centralising all communications and storing these
                                on a fully auditable system.') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="block-info">
                        <img src="{{ asset('images/document.png') }}" alt="Document">

                        <h4 class="heading heading--underlined heading--centered heading--white">{{ __('Document') }}</h4>

                        <p>{{ __('All documentation is centrally stored on our unique Velway Portal. Clients are given easy 24/7 access via any
                                web-enabled device. Alternatively, Velway can provide the documentation in any format our clients wish.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center block__details">
            <div class="col">
                {{--                <div class="img-row">--}}
                {{--                    <img src="{{ asset('images/electrician.png') }}" alt="Electrician" data-aos="fade-right">--}}
                <img class="img-fluid" src="{{ asset('images/reactive-maintenance.png') }}" alt="Plumber"
                     data-aos="fade-up">
                {{--                    <img src="{{ asset('images/heating.png') }}" alt="Engineer" data-aos="fade-left">--}}
                {{--                </div>--}}

                <h4 class="heading heading--underlined heading--centered heading--light-blue">
                    {{ __('Do you require a competent tradesperson or specialist contract?') }}
                </h4>

                <p>
                    {{ __('All engineers and tradespeople provided by Velway are fully qualified and experienced in their chosen specialisms. Relationships have been built and developed with subcontractors to ensure excellence in service delivery to our clients at all times, meeting service levels and increasing 1st fix responses.') }}
                </p>

                <a href="{{ route('services') }}">
                    <button class="btn btn-primary">{{ __('Find Out More') }}</button>
                </a>
            </div>
        </div>
    </div>

    <div class="section__customers">
        <div class="text-center">
            {{ __('OUR CLIENTS') }}
        </div>

        <div class="row">
            <div class="col">
                <img src="{{ asset('images/scolmore.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/esp.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/unicrimp.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/sangamo.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/ovia.png') }}" alt="customer">
            </div>
        </div>
    </div>
@endsection