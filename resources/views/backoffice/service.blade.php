@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="text-warning text-center">Services</h1>
            <a class="btn- btn-lg btn-outline-warning text-white" href='service/create'>
                <i class="fas fa-plus text-dark">Create</i>
            </a>
        </div>
        <hr class="bg-primary">
        <div class="row bg-warning">
            @foreach ($services as $service)
            <div class="col-md-4 mb-4">
                <!-- Card -->
                <div class="card profile-card">
                  <!-- Avatar -->
                  <div class="avatar white d-flex justify-content-center align-items-center border border-success p-5 mb-4">
                    <div class="icon ">
                        <i class="h1 {{$service->icon->icon}} bg-danger"></i>
                    </div>
                  </div>
        
                  <div class="card-body pt-0 mt-0">
        
                    <!-- Name -->
                    <h3 class="mb-3 font-weight-bold text-info"><strong>{{$service->title}}</strong></h3>
                    <p class="mt-4 text-muted">{{$service->description}}</p>
                    <div class="row">
                        <div class="col-12 text-center">
                            <form action='service/{{$service->id}}/edit' method="get" class="text-center mb-3">
                                @csrf
                                <button type="submit" class="btn btn-lg btn-outline-warning border-0 btn-lg sunny-morning-gradient text-white">
                                    <i class="fas fa-edit text-white"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-12 text-center">
                            <form action='service/{{$service->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-warning border-0 btn-lg young-passion-gradient text-white"><i
                                        class="fas fa-trash-alt text-white"></i>
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
        <div class="page-pagination">
            {{$services->links()}}
        </div>
    </div>
@endsection