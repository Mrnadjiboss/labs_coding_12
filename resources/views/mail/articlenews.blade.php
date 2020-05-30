@component('mail::message')
<h1>hello , mr or mrs</h1>
<p>the article has been published</p>
<h2>{{$article->titre}}</h2>
<p>{{\Str::limit($article->text, 60, $end='...') }}</p>

@component('mail::button', ['url' => 'localhost:8000/blog'])
watch out !!!
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
