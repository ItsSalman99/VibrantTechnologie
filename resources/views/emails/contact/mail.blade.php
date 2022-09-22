@component('mail::message')

# Email From [ {{ $data['name'] }} ]
<hr>

# My Message:
This is {{ $data['name'] }}, {{ $data['message'] }}

<hr>
Thanks,<br>
# {{ config('app.name') }}
@endcomponent
