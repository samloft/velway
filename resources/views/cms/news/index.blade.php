@extends('cms.layout.master')

@section('page.title', 'News')

@section('content')
    <div class="card card-body">
        <div class="text-right mb-3">
            <a href="{{ route('cms.news.create') }}">
                <button class="btn btn-primary">{{ __('New Post') }}</button>
            </a>
        </div>

        <table class="table table-dark table-stripped table-bordered table-hover">
            <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Created') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $news_item)
                <tr>
                    <td>{{ $news_item->id }}</td>
                    <td>{{ $news_item->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($news_item->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td class="text-right pt-2 pb-2">
                        <a href="{{ route('cms.news.delete', ['id' => $news_item->id]) }}">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
