@extends('layout.master')

@section('page.title', 'Services we provide')
@section('header.color', 'dark-blue')

@section('content')
    <section class="heading__curved">
        <div class="container pt-4 pb-4">
            <h1 class="pb-3 font-weight-bold">{{ __('Property Management') }}</h1>

            <p>{{ __('Velway are able to deliver planned, preventative maintenance, reactive and emergency works as well as offer an in-house facilities management provision to clients’ requirements nationally.') }}</p>
        </div>
    </section>

    <section class="container management__options">
        <div class="row text-center">
            <div class="col-lg-3">
                <img src="{{ asset('images/reactive_maintenance.png') }}" alt="Reactive Maintenance">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Reactive<br>Maintenance') !!}</h4>

                <p>
                    {{ __('Everything from a broken tap to a leaking roof or faulty AC.') }}
                </p>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('images/planned_maintenance.png') }}" alt="Planned Maintenance">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Planned<br>Maintenance') !!}</h4>

                <p>
                    {{ __('Cyclical and routine maintenance to Increase lifecycle longevity, ensure compliance or maintain warranties.') }}
                </p>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('images/risk_assessment.png') }}" alt="Risk Assessment">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Risk Assessment<br>Management') !!}</h4>

                <p>
                    {{ __('Completion of all property related risk assessments and the management of all significant findings to make sure you are compliant.') }}
                </p>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('images/building_inspection.png') }}" alt="Building Inspection">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Routine Building<br>Inspection') !!}</h4>

                <p>
                    {{ __('Velway manage a schedule of routine inspection of tenanted, used or void buildings managing any issues that may arise.') }}
                </p>
            </div>
        </div>
    </section>

    <section class="off-white">
        <div class="container compliance">
            <h3 class="heading heading--underlined heading--left heading--dark-blue">{{ __('Compliance') }}</h3>

            <div class="row mt-5">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/fire.png') }}" alt="Fire">
                </div>
                <div class="col">
                    <h4>{{ __('Fire') }}</h4>
                    <p>
                        Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet maorbi accumsan ipsum velit.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/water.png') }}" alt="Water">
                </div>
                <div class="col">
                    <h4>{{ __('Water') }}</h4>
                    <p>
                        {{ __('We manage all elements of legionella control from the L* risk assessment through to ensuring all significant findings are closed down, meaning all properties comply with the L8 Acop standards') }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/asbestos.png') }}" alt="Asbestos">
                </div>
                <div class="col">
                    <h4>{{ __('Asbestos') }}</h4>
                    <p>
                        {{ __('Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet maorbi accumsan ipsum velit.') }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/health_and_safety.png') }}" alt="Health and Safety">
                </div>
                <div class="col">
                    <h4>{{ __('Health and Safety') }}</h4>
                    <p>
                        {{ __('Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet maorbi accumsan ipsum velit.') }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/dda.png') }}" alt="DDA">
                </div>
                <div class="col">
                    <h4>{{ __('DDA') }}</h4>
                    <p>
                        {{ __('Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet maorbi accumsan ipsum velit.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
