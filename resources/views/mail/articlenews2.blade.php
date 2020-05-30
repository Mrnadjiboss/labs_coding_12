@component('mail::message')
<h1>hello, {{$user->name}}</h1>
<p>the article has been published</p>
<h2>{{$article->titre}}</h2>
<p>{{\Str::limit($article->text, 50, $end='...') }}</p>
<hr>

@component('mail::button', ['url' => 'localhost:8000/blog'])
<hr>
Watch out !!!
<hr>
@endcomponent


Thank you,<br> <hr>
{{ config('app.name') }}
@endcomponent
