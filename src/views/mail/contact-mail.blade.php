@component('mail::message')
# Introduction

{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ $name }}<br>
{{ $email }} 
@endcomponent
