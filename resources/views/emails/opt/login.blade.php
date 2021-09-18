@component('mail::message')
# Hello

Your two factor code is {{ $otp }}

@component('mail::button', ['url' => route('verify.index')])
Verify Here
@endcomponent

The code will expire in 10 minutes
If you have not tried to login, ignore this message.

Regards,<br>
{{ config('app.name') }}
@endcomponent
