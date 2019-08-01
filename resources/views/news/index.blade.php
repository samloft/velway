@extends('layout.master')

{{--@section('page.title', 'News')--}}
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
                                <div class="col-lg-10">
                                    <h3 class="heading heading--underlined heading--left heading--light-blue pt-0">
                                        {{ $news->title }}
                                    </h3>
                                </div>
                                <div class="col-lg-2 text-right">
                                    <div class="pull-right">{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}</div>
                                </div>
                            </div>
                            <p class="card-text">
                                {!! Str::limit($news->content, 500) !!}
                                <a href="{{ route('news.show', ['slug' => $news->slug]) }}" class="light-blue">
                                    {{ __('[Read More]') }}
                                </a>
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
