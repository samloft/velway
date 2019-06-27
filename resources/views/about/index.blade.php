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
                            {{ __('It is Velway’s goal to be the best national provider of
                                property and compliance services, providing uncomplicated
                                solutions and excellent customer service, whilst building
                                and maintaining mutually dependent relationships with
                                all stakeholders.') }}
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card__quote font-italic">
                            <p>
                                {{ __('“Velway is the current Property Management company for the Scolmore Group.') }}
                            </p>
                            <p> {{ __('They cover all elements of our property management from reactive to planned maintenance whilst also centralising all our compliance.') }}
                            </p>
                            <p> {{ __('I have found them to be a very hard-working and highly organised with great communication skills, and I have always been very impressed with the way that the company has approached work. I highly recommend Velway as they always do a great job.”') }}
                            </p>
                            <p>
                                - {{ __('Steve Taylor') }}<br>{{ __('Group Operations Director') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" viewBox="0 1 100 300"
             preserveAspectRatio="none" height="300">
            <path d="M-10 -10 C 00 0 10 500 100 0 Z"></path>
        </svg>
        <div id="svg-mobile-check"></div>

        <div class="section__services mb-5">
            <div class="container">
                <h5>{{ __('To enable Velway to deliver this service we have in place the following services -') }}</h5>

                <div class="row">
                    <div class="col-lg-3">
                        <h4>{{ __('Maintenance') }}</h4>

                        <ul class="arrow-bullets">
                            <li>{{ __('Reactive') }}</li>
                            <li>{{ __('Planned') }}</li>
                            <li>{{ __('Specialist') }}</li>
                            <li>{{ __('Cleaning') }}</li>
                            <li>{{ __('Security') }}</li>
                            <li>{{ __('Grounds Maintenance') }}</li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h4>{{ __('Operations') }}</h4>

                        <ul class="arrow-bullets">
                            <li>{{ __('Facilities Management') }}</li>
                            <li>{{ __('Helpdesk') }}</li>
                            <li>{{ __('Supply Chain') }}</li>
                            <li>{{ __('Procurement') }}</li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h4>{{ __('Project Management') }}</h4>

                        <ul class="arrow-bullets">
                            <li>{{ __('Electrical') }}</li>
                            <li>{{ __('Mechanical') }}</li>
                            <li>{{ __('Fabric') }}</li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h4>{{ __('Finance') }}</h4>

                        <ul class="arrow-bullets">
                            <li>{{ __('Accounting') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <h2 class="heading heading--underlined heading--left heading--green">{{ __('Where to find us?') }}</h2>

                    <p class="mb-5">
                        {{ __('Velway operate nationally delivering property and compliance services across the country. From their centrally located head office in Tamworth and Support Hub in the North.
                        We are able to deliver planned, reactive and emergency works as well as offer an in-house facilities management provision to meet our clients requirements') }}
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
