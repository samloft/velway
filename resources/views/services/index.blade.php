@extends('layout.master')

@section('page.title', 'Services we provide')
@section('header.color', 'dark-blue')

@section('content')
    <section class="heading__curved">
        <div class="container pt-5 pb-5 text-center">
            <h1 class="pb-3 font-weight-bold">{{ __('Services') }}</h1>

            <p class="pl-3 pr-3">
                {{ __('Velway works alongside in-house teams and service partners to deliver reactive and planned preventative maintenance nationally.
                    Velway also calls upon an in-house Facilities Management team to ensure they meet all their clients requirements.
                    From a Work Management Helpdesk solution to a full property management service for any sized portfolio within any sector,
                    Velway provides it all.') }}
            </p>
        </div>
    </section>

    <div class="container">
        <div class="section__img-text-info">
            <div class="row">
                <div class="col-lg-6 text-center my-auto order-first__mobile">
                    <img class="img-fluid" src="{{ asset('images/reactive-maintenance.png') }}"
                         alt="Reactive Maintenance">

                    <h5 class="color--dark-blue pl-5 pr-5 pt-3">{{ __('Do you require a competent tradesperson or specialist contract?') }}</h5>
                </div>
                <div class="col-lg-6 text-right my-auto">
                    <h3 class="heading heading--underlined heading--right heading--dark-blue heading--centered-mobile">{{ __('Reactive Maintenance') }}</h3>

                    <p class="mobile--centered">
                        {{ __('All engineers and tradespeople provided by Velway are
                            fully qualified and experienced in their chosen specialisms.
                            Relationships have been built and developed with subcontractors
                            to ensure excellence in service delivery to our clients at all times,
                            meeting service levels and increasing first fix responses.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="section__img-text-info">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h3 class="heading heading--underlined heading--left heading--dark-blue heading--centered-mobile">{{ __('Planned Maintenance') }}</h3>

                    <p class="mobile--centered">{{ __('The Velway CAFM system plans all cyclical and routine maintenance,
                        allocating and issuing all works to the specialist contractor to ensure
                        completion before expiry. All works are managed to increase lifecycle
                        longevity, manage compliance or maintain warranties.') }}
                    </p>
                </div>
                <div class="col-lg-6 text-right my-auto order-first__mobile">
                    <img class="img-fluid" src="{{ asset('images/planned-maintenance.png') }}"
                         alt="Planned Maintenance">
                </div>
            </div>
        </div>
    </div>

    <div class="bg__dark-blue pt-5">
        <div class="container">
            <div class="section__img-text-info order-first__mobile">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <img class="img-fluid" src="{{ asset('images/M_E_asset_surveys.png') }}"
                             alt="M+E Asset Surveys">
                    </div>
                    <div class="col-lg-6 text-right my-auto">
                        <h3 class="heading heading--underlined heading--right heading--white heading--centered-mobile">{{ __('M+E Asset Surveys') }}</h3>

                        <p class="mobile--centered">
                            {{ __('Velway works alongside landlords or property owners
                                to ensure full asset registers are in place. Scheduled
                                condition surveys enable Velway to assist with the
                                implementation of capital expenditure plans.') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="section__img-text-info">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <h3 class="heading heading--underlined heading--left heading--white heading--centered-mobile">{{ __('Velway Portal') }}</h3>

                        <p class="mobile--centered">{{ __('The Velway Portal is our unique way of storing documentation
                            so that it is easy to reference by our clients. Gone are the days
                            of filing cabinets and piles of paper!') }}
                        </p>
                        <p class="mobile--centered">
                            {{ __('At Velway we provide all documentation via our portal, which
                                we make easily accessible on any web-enabled device.') }}
                        </p>
                    </div>
                    <div class="col-lg-6 text-right my-auto order-first__mobile">
                        <img class="img-fluid" src="{{ asset('images/velway-portal.png') }}" alt="Velway Portal">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="section__img-text-info">
            <div class="row">
                <div class="col-lg-6 text-left my-auto order-first__mobile">
                    <img class="img-fluid" src="{{ asset('images/routine-building-inspection.png') }}"
                         alt="Routine Building Inspection">
                </div>
                <div class="col-lg-6 text-right my-auto">
                    <h3 class="heading heading--underlined heading--right heading--dark-blue heading--centered-mobile">{{ __('Routine Building Inspection') }}</h3>

                    <p class="mobile--centered">
                        {{ __('Velway manages a schedule of routine inspections
                            throughout our clients’ portfolios, inspecting all properties
                            to ensure they are in good condition, safe and compliant.
                            Vacant property inspections can ensure our clients meet
                            insurance requirements whilst maintaining the appearance
                            for potential sales or let. All findings from the inspections
                            are communicated to the client in a Velway report, with the
                            findings managed on instruction from the client.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="section__img-text-info">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h3 class="heading heading--underlined heading--left heading--dark-blue heading--centered-mobile">{{ __('Invoicing') }}</h3>

                    <p class="mobile--centered">{{ __('Another problem Velway solves is multiple invoices on multiple
                        payment runs. At Velway we consolidate multiple invoices, coding
                        to cost codes, business units or individual properties as requested
                        by the client, only invoicing our clients when we have confirmation
                        the works have been completed to the satisfaction of the client, or
                        when we have received the relevant paperwork.') }}
                    </p>
                </div>
                <div class="col-lg-6 text-center my-auto order-first__mobile">
                    <img class="img-fluid mb-3" src="{{ asset('images/invoicing.png') }}" alt="Invoicing">
                    <h3 class="heading--dark-blue">{{ __('One Invoice - One Payment') }}</h3>
                </div>
            </div>
        </div>
    </div>

    <section class="off-white">
        <div class="container compliance">
            <h3 class="heading heading--underlined heading--left heading--dark-blue">{{ __('Risk Assessment Management') }}</h3>

            <p>
                {{ __('Risk assessments form a critical and integral part of the management of any property and cover health and safety requirements
                    within the workplace. Velway systems manage all risk assessments, not only issuing instructions for completion but also ensuring
                    all significant findings are recorded, managed and documented.') }}
            </p>

            <div class="row mt-5">
                <div class="col-2">
                    <img class="img-fluid" src="{{ asset('images/fire.png') }}" alt="Fire">
                </div>
                <div class="col">
                    <h4>{{ __('Fire') }}</h4>
                    <p>
                        {{ __('Velway manages all elements of Fire Protection Alarm Systems and Fire Risk Assessments in line with the
                            Regulatory Reform Order of 2005 which makes it a legal requirement to comply.') }}
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
                        {{ __('Velway works to manage the water safety solutions of our clients’ premises and assists in the fulfilment of
                            the legal responsibilities relating to Legionella control as laid out in the HSE’s Approved Code of Practice
                            ACoP L8 and Guidance HSG 274.') }}
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
                        {{ __('Velway manages the risk of asbestos across any portfolio, working in conjunction with service partners to
                            ensure a robust programme of surveying and management plans are in place.') }}
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
                        {{ __('Velway completes all levels of Health and safety inspections across any sized portfolio, from void property
                            inspections through to cyclical site audit inspections and full DDA audits.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
