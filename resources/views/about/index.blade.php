@extends('layout.master')

@section('page.title', 'About Us')
@section('header.color', 'green')

@section('content')
    <div class="section__about">
        <div class="about--top">
            <div class="container">
                <h2 class="page__title">{{ __('About Us') }}</h2>

                <div class="row row__has-curve">
                    <div class="col-lg-6">
                        <h3 class="heading heading--underlined heading--left heading--white">{{ __('Compliance – Openness – Service – Mutual Dependency') }}</h3>

                        <p>
                            {{ __('In the ever changing world of property management Velway is leading the way with a combined approach to not only manage the lifecycle longevity of your asset but also ensure compliance across your property portfolio.') }}
                        </p>
                        <p class="m-0">
                            {{ __('Yes we use modern integrated systems and are embracing new technology such as the IoE but above all else we keepour service simple and user friendly built around 3 integrated levels of delivery – the Velway way!') }}
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card__quote">
                            <p>
                                {{ __('“Its is our goal to be the best national provider of property and compliance services,
                                providing an uncomplicated solutions whilst building and maintaining mutually dependent
                                relationships with all stakeholders”') }}
                            </p>
                            <p>
                                - Job Title<br>Name
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="600" viewBox="0 1 100 300" preserveAspectRatio="none">
            <path d="M-1 -10 C 00 0 10 600 100 0 Z"></path>
        </svg>

        <div class="container mb-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h2 class="heading heading--underlined heading--left heading--green">{{ __('Where to find us?') }}</h2>

                    <p class="mb-5">
                        {{ __('Velway Group engineers and construction teams work across the country to design, build and maintain commercial properties on a nationwide basis. From operational bases in Wakefield, London, Swindon and Norwich Velway are able to deliver planned, preventative maintenance, reactive and emergency works as well as offer an in-house facilities management provision to clients’ requirements nationally.') }}
                    </p>

                    <a href="{{ route('contact') }}">
                        <button class="btn btn-green">Contact Us</button>
                    </a>
                </div>
                <div class="col-lg-6 text-right">
                    <img src="{{ asset('map.png') }}" alt="Velway Map" class="contact-map">
                </div>
            </div>
        </div>
    </div>
@endsection