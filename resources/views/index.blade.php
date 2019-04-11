@extends('layout.master')

@section('page.title', 'We do something!')

@section('content')
    <img src="{{ asset('images/header-bg.png') }}" class="header-bg" alt="velway-header">

    <div class="container">

        <div class="container section__3-column">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('images/heading-record.png') }}" alt="Record">

                    <h4>{{ __('Record') }}</h4>

                    <p>{{ __('Our helpdesk uses a CAFM system and processes developed and improved over the last 5 years to accurately record all levels of work instruction both reactive and plan as well as statutory compliance and warranties.') }}</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/heading-manage.png') }}" alt="Manage">

                    <h4>{{ __('Manage') }}</h4>

                    <p>{{ __('All works are managed through their lifecycle, initially through the helpdesk team then via our Facility managers. We ensure all works are completed to the customer satisfaction or to ensure compliance.') }}</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/heading-document.png') }}" alt="Document">

                    <h4>{{ __('Document') }}</h4>

                    <p>{{ __('All documentation is centrally stored on our system and provided to our clients in any format they wish.') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section__info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="heading__white">The Vel<img src="{{ asset('images/icon.png') }}" class="icon" alt="->">way</h3>

                    <p>{{ __('We build partnerships will all stakeholders, ensuring mutually dependent relationships with both clients and service partners – we don’t acknowledge the old “Master – slave” mentality.') }}</p>
                    <p>{{ __('All costs are benchmarked and integrated by our teams before any charges are passed to our client.') }}
                </div>
                <div class="col text-center">
                    <img class="m-200 img-fluid" src="{{ asset('images/the-velway.png') }}" alt="The Velway">
                </div>
            </div>
        </div>
    </div>

    <div class="container section__3-column">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('images/handy-man.png') }}" alt="Electrician">

                <h4>{{ __('I need an electrician') }}</h4>

                <p>{{ __('Velways has a team of experienced and qualified electricans who are NICEIC registered and approved contractors') }}</p>

                <button class="btn btn-primary">{{ __('Find Out More') }}</button>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('images/handy-man.png') }}" alt="Plumber">

                <h4>{{ __('I need an plumber') }}</h4>

                <p>{{ __('All of Velways services are priced by the hour and we’re very clear about the costs and how much a call-out will cost you as a company') }}</p>

                <button class="btn btn-primary">{{ __('Find Out More') }}</button>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('images/handy-man.png') }}" alt="Engineer">

                <h4>{{ __('I need an Heating Engineer') }}</h4>

                <p>{{ __('Velways team of Gas Safe registered engineers offer a breakdown repair service and will sort the problem quickly and efficiently') }}</p>

                <button class="btn btn-primary">{{ __('Find Out More') }}</button>
            </div>
        </div>
    </div>

    <div class="section__customers">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/customer.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/customer.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/customer.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/customer.png') }}" alt="customer">
            </div>
            <div class="col">
                <img src="{{ asset('images/customer.png') }}" alt="customer">
            </div>
        </div>
    </div>
@endsection