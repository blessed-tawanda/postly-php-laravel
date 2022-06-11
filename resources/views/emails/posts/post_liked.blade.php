@component('mail::message')
# Your Post Was Liked

{{$liker->name}} Liked Your Post On Postly.

@component('mail::button', ['url' => ''])
 View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
