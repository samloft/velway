@extends('layout.master')

@section('page.title', 'News')
@section('header.color', 'light-blue')

@section('content')
    <div class="news off-white">
        <div class="container pt-4 pb-5">
            <h2 class="pb-3">{{ __('News') }}</h2>

            @if(count($news_posts) > 0)
                @foreach($news_posts as $news)
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ asset('images/news/' . $news->image) }}"
                             alt="{{ $news->title }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="heading heading--underlined heading--left heading--light-blue pt-0">
                                        {{ $news->title }}
                                    </h3>
                                </div>
                                <div class="col text-right">
                                    <div class="pull-right">{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}</div>
                                </div>
                            </div>
                            <p class="card-text">
                                {!! $news->content !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">{{ __('No news articles have been created yet.') }}</h2>
            @endif

            <div class="text-right">
                {{ $news_posts->links() }}
            </div>
        </div>
    </div>
@endsection
