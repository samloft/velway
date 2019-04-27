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
            <div class="col-lg-3" data-aos="fade-right">
                <img src="{{ asset('images/reactive_maintenance.png') }}" alt="Reactive Maintenance">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Reactive<br>Maintenance') !!}</h4>

                <p>
                    {{ __('Everything from a broken tap to a leaking roof or faulty AC.') }}
                </p>
            </div>
            <div class="col-lg-3" data-aos="fade-up">
                <img src="{{ asset('images/planned_maintenance.png') }}" alt="Planned Maintenance">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Planned<br>Maintenance') !!}</h4>

                <p>
                    {{ __('Cyclical and routine maintenance to Increase lifecycle longevity, manage compliance or maintain warranties.') }}
                </p>
            </div>
            <div class="col-lg-3" data-aos="fade-up">
                <img src="{{ asset('images/risk_assessment.png') }}" alt="Risk Assessment">

                <h4 class="heading heading--underlined heading--centered heading--dark-blue">{!! __('Risk Assessment<br>Management') !!}</h4>

                <p>
                    {{ __('Completion of all property related risk assessments and the management of all significant findings to manage compliance.') }}
                </p>
            </div>
            <div class="col-lg-3" data-aos="fade-left">
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

            <p>
                {{ __('Risk assessments form a critical and integral part of the management of any property and cover health and safety requirements within the workplace.
                   Velway systems manage all risk assessments not only issuing instructions for completion but also ensure all significant findings are recorded, managed and documented') }}
            </p>

            <div class="row mt-5">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/fire.png') }}" alt="Fire">
                </div>
                <div class="col">
                    <h4>{{ __('Fire') }}</h4>
                    <p>
                        {{ __('Velway manage all elements of Fire Protection Alarm Systems, and Fire Risk Assessments.
                        In line with the Regulatory Reform Order of 2005 which makes it a legal requirement to comply.') }}
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
                        {{ __('Velway work to manage the water safety solutions of our clients premises and assist in
                        the fulfilment of the legal responsibilities relating to Legionella control as laid out in the HSE’s Approved Code of Practice ACoP L8 and Guidance HSG 274.') }}
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
                        {{ __('Velway manage the risk of asbestos across any portfolio, working in conjunction with
                        service partners to ensure a robust programme of surveying and management plans are in place') }}
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
                        {{ __('Velway complete all levels of Health and safety inspections across any sized portfolio,
                        from void property inspections through to cyclical site audit inspections and full DDA audits.') }}
                    </p>
                </div>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-2">--}}
{{--                    <img class="img-fluid" src="{{ asset('images/dda.png') }}" alt="DDA">--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <h4>{{ __('DDA') }}</h4>--}}
{{--                    <p>--}}
{{--                        {{ __('Lorem ipsum dolor sit amet, proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet maorbi accumsan ipsum velit.') }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
