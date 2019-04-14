@if($errors->any())
    <div class="alert alert-danger">
        An error has occurred, please fix any errors and try again.
    </div>
@endif

@if(session('mail.success'))
    <div class="alert alert-success">
        {{ session('mail.success') }}
    </div>
@endif
