@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }} - Contact
        @endcomponent
    @endslot

    New contact form submitted.

    Name: {{ $message->name }}
    Email: {{ $message->email }}
    Company: {{ $message->company }}
    Telephone: {{ $message->telephone }}

    Message: {{ $message->message }}

    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}.
        @endcomponent
    @endslot
@endcomponent