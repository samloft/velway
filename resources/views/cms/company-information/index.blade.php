@extends('cms.layout.master')

@section('page.title', 'Company Information')

@section('content')
    <div class="card card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('cms.company-information.store') }}" method="post">

                    @foreach($company_information as $key => $value)
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
