@if($errors->any())
    <div class="alert alert-danger">
        An error has occurred, please fix any errors and try again.
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
