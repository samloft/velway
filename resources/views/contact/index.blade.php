@extends('layout.master')

@section('page.title', 'Contact Us')
@section('header.color', 'dark-blue')

@section('content')
    <div class="contact--background">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-5 contact--form">
                    <h2 class="mb-5 mt-5">{{ __('Contact Us') }}</h2>

                    @include('layout.alerts')

                    <form method="post" action="{{ route('contact.send') }}" class="form-contact">
                        <div class="form-group">
                            @if($errors->get('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                            <input class="form-control" name="name" placeholder="Full Name:" autocomplete="off" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            @if($errors->get('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                            <input class="form-control" name="email" placeholder="Email Address:" autocomplete="off" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="telephone" placeholder="Telephone:" autocomplete="off" value="{{ old('telephone') }}">
                        </div>

                        <div class="form-group">
                            <input class="form-control" name="company" placeholder="Company Name:" autocomplete="off" value="{{ old('company') }}">
                        </div>

                        @if($errors->get('message'))
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        @endif
                        <div class="form-group">
                            <textarea rows="8" class="form-control" name="message" placeholder="Message:">{{ old('message') }}</textarea>
                        </div>

                        <button class="btn btn-dark">{{ __('Submit') }}</button>
                    </form>
                </div>

                <div class="col-lg-5 chat">
                    <h2 class="heading heading--underlined heading--left heading--white">{{ __('Let\'s Chat?') }}</h2>

                    <span>{{ ('Email:') }} <a href="MAILTO:info@velway.co.uk"
                                              class="link__dark">info@velway.co.uk</a></span>
                    <span>{{ __('Phone: 0123 456 789') }}</span>
                    <span>{{ __('Fax: 0123 456 789') }}</span>
                    <span>{{ __('Location: Velway, Landsberg,') }}</span>
                    <span>{{ __('Lichfield Road Ind. Est., Tamworth,') }}</span>
                    <span>{{ __('Staffordshire B79 7XB.') }}</span>

                    <span class="mt-5"><a href="https://www.google.com/maps/place/Landsberg,+Tamworth+B79+7XB/@52.6399783,-1.7160993,17z/data=!3m1!4b1!4m5!3m4!1s0x4870a90cd02cc073:0xccb818798cc352a9!8m2!3d52.6399751!4d-1.7139106"
                                          target="_blank" class="link__dark link__underline">{{ __('Where to find us') }}</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
