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
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>hello {{Auth::user()->name}} , Welcome</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br><br>
<br>
@endsection
@section('footer')
   @include('templates.footer')
@endsection
@section('script')
   @include('templates.script')
@endsection
