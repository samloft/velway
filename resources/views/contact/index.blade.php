@extends('layout.master')

@section('page.title', 'Contact Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pr-5">
                <h2 class="mb-5 mt-5">{{ __('Contact Us') }}</h2>

                <form action="" class="form-contact pb-5">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Full Name:" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email Address:" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="telephone" placeholder="Telephone:" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="company" placeholder="Company Name:" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <textarea rows="8" class="form-control" name="message" placeholder="Message:"></textarea>
                    </div>

                    <div class="btn btn-dark">{{ __('Submit') }}</div>
                </form>
            </div>

            <div class="col-lg-5 chat">
                <h2 class="heading__white mb-5">{{ __('Let\'s Chat?') }}</h2>

                <span>{{ ('Email: Velway@velway.com') }}</span>
                <span>{{ __('Phone: 0123 456 789') }}</span>
                <span>{{ __('Fax: 0123 456 789') }}</span>
                <span>{{ __('Location: Velway, Landsberg,') }}</span>
                <span>{{ __('Lichfield Road Ind. Est., Tamworth,') }}</span>
                <span>{{ __('Staffordshire B79 7XB.') }}</span>
            </div>
        </div>
    </div>
@endsection
