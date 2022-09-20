@component('mail::message')

# Hello!

# This is {{ $data['name'] }}

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
