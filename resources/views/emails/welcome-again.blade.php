@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
knubbe rules
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
