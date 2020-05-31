@extends('templates.index')
@section('head')
   @include('templates.head')
@endsection
@section('nav')
   @include('templates.nav')
@endsection

@section('content')

<br>
<br>
    
<br>
<br>
<br> 
  
<br>
<hr class="bg-secondary">  
<hr>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <h2>hello <span class="text-warning">{{Auth::user()->name}}</span> , you are connected</h2>
                    <ul>
                        <li class="list-style-none">role 1: webmaster</li>
                        <li class="list-style-none">role 2: admin </li>
                        <li class="list-style-none">role 3: redacteur </li>
                        <li class="list-style-none">role 4: membre </li>
                    </ul>
                      <h2> your role is  : role {{Auth::user()->role_id}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br>
<br>
@endsection
<br>
<br>
<br>
<br>
@section('footer')
   @include('templates.footer')
@endsection
@section('script')
   @include('templates.script')
@endsection

