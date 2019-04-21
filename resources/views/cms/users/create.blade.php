@extends('cms.layout.master')

@section('page.title', 'Create User')

@section('content')
    <div class="card card-body">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form action="{{ route('cms.users.store') }}" method="post">
                    <div class="form-group">
                        <label>{{ __('Name') }}</label>
                        <input class="form-control" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Email') }}</label>
                        <input class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input class="form-control" name="password">
                    </div>

                    <div class="text-right">
                        <a href="{{ route('cms.users') }}" class="text-decoration-none">
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
