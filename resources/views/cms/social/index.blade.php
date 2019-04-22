@extends('cms.layout.master')

@section('page.title', 'Social Media Links')

@section('content')
    <div class="card card-body">
        <div class="alert alert-info">
            {{ __('To show a social icon, add the URL to the social media page below, removing the link will remove the icon') }}
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('cms.social.store') }}" method="post">

                    @foreach($social as $key => $value)
                        @if($key !== 'id')
                            <div class="form-group">
                                <label>{{ ucfirst(str_replace('_', ' ', $key)) }}</label>
                                <input class="form-control" name="{{ $key }}" value="{{ old($key) ? old($key) : $value }}">
                            </div>
                        @endif
                    @endforeach

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
