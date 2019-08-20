@component('mail::message')
# Hey Admin

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
    {{ $msg->message }}
@endcomponent

{{-- @component('mail::button', ['url' => route('contact_path'), 'color' => 'green'])
Créer un compte
@endcomponent

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
