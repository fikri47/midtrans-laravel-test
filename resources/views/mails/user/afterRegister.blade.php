<x-mail::message>
# Introduction

The body of your message.

HI {{$user->name}}
<br>
Welcome to Bootcamp Laravel, Your Account has been created.

<x-mail::button :url="route('login')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
