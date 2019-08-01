@extends('layout.master')

{{--@section('page.title', 'Contact Us')--}}
@section('header.color', 'dark-blue')

@section('content')
    <div class="contact--background">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 contact--form">
                    <h2 class="mb-5 mt-5">{{ __('Contact Us') }}</h2>

                    @include('layout.alerts')

                    <form method="post" action="{{ route('contact.send') }}" class="form-contact">
                        <div class="form-group">
                            @if($errors->get('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                            <input class="form-control" name="name" placeholder="Full Name:" autocomplete="off"
                                   value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            @if($errors->get('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                            <input class="form-control" name="email" placeholder="Email Address:" autocomplete="off"
                                   value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="telephone" placeholder="Telephone:" autocomplete="off"
                                   value="{{ old('telephone') }}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="company" placeholder="Company Name:" autocomplete="off"
                                   value="{{ old('company') }}">
                        </div>

                        @if($errors->get('message'))
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        @endif
                        <div class="form-group">
                            <textarea rows="8" class="form-control" name="message"
                                      placeholder="Message:">{{ old('message') }}</textarea>
                        </div>

                        <button class="btn btn-dark">{{ __('Submit') }}</button>
                    </form>
                </div>

                <div class="col-lg-5 chat pb-5">
                    <h2 class="heading heading--underlined heading--left heading--white">{{ __('Let\'s Chat?') }}</h2>

                    {!! $company_details->email ? '<span>Email: <a href="MAILTO:' . $company_details->email . '" class="link__dark">' . $company_details->email . '</a></span>' : '' !!}
                    {!! $company_details->telephone ? '<span>Phone: ' . $company_details->telephone . '</span>' : '' !!}
                    {!! $company_details->fax ? '<span>Fax: ' . $company_details->fax . '</span>' : '' !!}
                    <span>{{ __('Location: ' . $company_details->address_line_1 . ', ' . $company_details->address_line_2 . ',') }}</span>
                    <span>{{ __($company_details->address_line_3 . ', ' . $company_details->address_line_4 . ',') }}</span>
                    <span>{{ $company_details->address_line_5 . ' ' . $company_details->postcode . '.' }}</span>

                    @if($company_details->google_maps_url)
                        <span class="mt-5">
                        <a href="{{ $company_details->google_maps_url }}" target="_blank"
                           class="link__dark link__underline">
                            {{ __('Where to find us') }}
                        </a>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
