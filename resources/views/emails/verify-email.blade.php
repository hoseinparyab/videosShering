@component('mail::message')
    @component('mail::button', ['url' => $url])
        Verify Email
    @endcomponent

    Thanks
    {{ config('app.name') }}
@endcomponent
