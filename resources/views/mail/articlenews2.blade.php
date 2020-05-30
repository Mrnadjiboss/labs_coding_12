@component('mail::message')
<h1>Bonjour {{$user->name}}</h1>
<p>un article a été publié</p>
<h2>{{$article->titre}}</h2>
<p>{{\Str::limit($article->text, 50, $end='...') }}</p>
<hr>

@component('mail::button', ['url' => 'localhost:8000/blog'])
<hr>
Watch out !!!
<hr>
@endcomponent


Merci,<br> <hr>
{{ config('app.name') }}
@endcomponent
