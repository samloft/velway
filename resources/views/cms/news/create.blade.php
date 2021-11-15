@extends('cms.layout.master')

@section('page.title', 'Create News')

@section('content')
    <div class="card card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('cms.news.store') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>{{ __('Title') }}</label>
                        <input class="form-control" name="title" value="{{ old('title') ? old('title') : ($news ? $news->title : '') }}">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Image') }}</label>
                        <div class="custom-file" id="customFile" lang="es">
                            <input type="file" class="custom-file-input" name="image" value="{{ old('image') }}">
                            <label class="custom-file-label" for="exampleInputFile">
                                Select file...
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Content') }}</label>
                        <textarea class="form-control"
                                  name="content">{{ old('content') ? old('content') : ($news ? $news->content : '') }}</textarea>
                    </div>

                    <div class="text-right">
                        @if($news)
                            <input name="id" value="{{ $news->id }}" hidden>
                        @endif
                        <a href="{{ route('cms.news') }}" class="text-decoration-none">
                            <button type="button" class="btn btn-danger">{{ __('Cancel') }}</button>
                        </a>
                        <button type="submit" class="btn btn-primary">{{ $news ? 'Update' : 'Create' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        $('input[name="image"]').on('change', function (e) {
            var imageName = e.target.files[0].name;

            $(this).next('.custom-file-label').html(imageName);
        });

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@endsection
