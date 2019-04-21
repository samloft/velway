@extends('cms.layout.master')

@section('page.title', 'Users')

@section('content')
    <div class="card card-body">
        <div class="text-right mb-3">
            <button class="btn btn-primary">{{ __('Create User') }}</button>
        </div>

        <table class="table table-dark table-stripped table-bordered table-hover">
            <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Created') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</td>
                    <td class="text-right pt-2 pb-2">
                        <button class="btn btn-sm btn-info">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
