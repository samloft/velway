@extends('layout.master')

@section('page.title', 'We do something!')
@section('header.color', 'light-blue')

@section('content')
    <div id="home-banner"></div>

    <div class="container">
        <div class="video-container">
            <div class="row h-100">
                <div class="col">
                    <video id="video" controls>
{{--                        <source src="{{ asset('videos/home.mp4') }}#t=3" type="video/mp4">--}}
                        <source src="{{ asset('videos/home.mp4') }}" type="video/mp4">
                    </video>
{{--                    <div class="play">--}}
{{--                        <button class="btn btn-primary"><i class="fas fa-play"></i> Click to play</button>--}}
{{--                    </div>--}}
                </div>
                <div class="col my-auto">
                    <p>{{ __('Watch our video and see how Velway can solve all your problems') }}</p>
                </div>
            </div>
        </div>

        <div class="container section__3-column">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="block__info">
                        <img src="{{ asset('images/heading-record.png') }}" alt="Record">

                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Record') }}</h4>

                        <p>
                            {{ __('Our Helpdesk uses a bespoke CAFM system alongside processes that have been developed and improved
                            over the last 5 years to accurately record all levels of work instruction, both reactive and planned, as well as statutory compliance and warranties') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="block__info">
                        <img src="{{ asset('images/heading-manage.png') }}" alt="Manage">

                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Manage') }}</h4>

                        <p>
                            {{ __('All works are managed through their lifecycle, initially through the helpdesk team then via our Operations team.
                            We ensure all works are completed to the customer satisfaction or to manage compliance.') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="block-info">
                        <img src="{{ asset('images/heading-document.png') }}" alt="Document">

                        <h4 class="heading heading--underlined heading--centered heading--light-blue">{{ __('Document') }}</h4>

                        <p>{{ __('All documentation is centrally stored on our system and provided to our clients in any format they wish.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section__info bg__dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" data-aos="fade-right">
                    <h3 class="heading heading--underlined heading--left heading--white">The Vel<img
                                src="{{ asset('images/icon.png') }}" class="icon" alt="->">way
                    </h3>

                    <p>
                        {{ __('In the ever changing world of property management Velway is leading the way with a
                        combined approach to not only manage the lifecycle longevity of your asset but also ensure compliance across your property portfolio.') }}
                    </p>

                    <p>
                        {{ __('Yes we use modern integrated systems and are embracing new technology such as the IoE
                        but above all else we keepour service simple and user friendly built around 3 integrated levels of delivery – the Velway way!') }}
                    </p>
                </div>
                <div class="col text-right" data-aos="zoom-in-left">
                    <img class="m-200 img-fluid mt-5" src="{{ asset('images/the-velway.png') }}"
                         alt="The Velway">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center block__details">
            <div class="col">
                <div class="img-row">
                    <img src="{{ asset('images/electrician.png') }}" alt="Electrician" data-aos="fade-right">
                    <img src="{{ asset('images/plumber.png') }}" alt="Plumber" data-aos="fade-up">
                    <img src="{{ asset('images/heating.png') }}" alt="Engineer" data-aos="fade-left">
                </div>

                <h4 class="heading heading--underlined heading--centered heading--light-blue">
                    {{ __('Do you need an Electrician, Plumber or Heating Engineer') }}
                </h4>

                <p>
                    {{ __('All engineers and trades people provided by Velway are fully qualified and experienced in their chosen
                    specialisms. Relationships have been build and developed with subcontractors to ensure excellence in service delivery
                    to our clients at all times, meeting service levels and increasing 1st fix responses.') }}
                </p>

                <a href="{{ route('services') }}">
                    <button class="btn btn-primary">{{ __('Find Out More') }}</button>
                </a>
            </div>
        </div>
    </div>

    <div class="section__customers">
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