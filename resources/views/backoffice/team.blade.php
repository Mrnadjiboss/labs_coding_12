@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="text-warning mt-4">Teams</h1>
            <a class="btn btn-lg btn-outline-warning" href='team/create'>
                <i class="fas fa-plus text-dark">create</i>
            </a>
        </div>
        <div class="row bg-warning">
            @foreach ($teams as $team)
            <div class="col-md-4 mb-4">
                <!-- Card -->
                <div class="card profile-card">
                  <!-- Avatar -->
                  <div class="bg-secondary d-flex justify-content-center align-items-center mt-2 mb-4">
                    @if (Storage::disk('public')->has($team->img))
                    <img width="150px" height="150px" src={{asset('storage/'.$team->img)}} alt="">
                    @else 
                        <img width="150px" height="350px" src="{{$team->img}}" alt="">
                    @endif
                  </div>
        
                  <div class="card-body pt-0 mt-0">
        
                    <!-- Name -->
                    <h3 class="mb-3 font-weight-bold text-info text-warning"><strong>{{$team->name}} {{$team->prename}}</strong></h3>
                    <p class="mt-4 font-weight-bold">{{$team->fonction}}</p>
                    <div class="row">
                        <div class="col-6 text-center">
                            <form action='team/{{$team->id}}/edit' method="get" class="text-center mb-3">
                                @csrf
                                <button type="submit" class="btn btn-lg btn-outline-warning text-dark">
                                    <i class="fas fa-edit text-dark"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-6 text-center">
                            <form action='team/{{$team->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-lg btn-outline-warning text-dark"><i
                                        class="fas fa-trash-alt text-dark"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                  </div>
        
                </div>
                <!-- Card -->
            </div>
            @endforeach
        </div>
    </div>
@endsection