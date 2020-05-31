@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="text-center ">
            <h1 class="yellow-text mt-4 bg-warning">Testimonials</h1>
            <p class="h2 text-warning">PS : testimonials are arranged in order of creation from new to old </p>
            <br>
            <br>
            <hr class="bg-warning">
            <a class="btn btn-lg btn-outline-warning text-warning" href="testimonial/create">
                <i class="fas fa-plus text-dark"> create</i>
            </a>
        </div>
        <div class="row bg-warning mt-5">
            @foreach ($testimonials->sortBy('created_at') as $testimonial)
            <div class="col-4 mb-3">
                <div class="card bg-warning text-white" style="width: 18rem;">
                    @if (Storage::disk('public')->has($testimonial->img))
                        <img class="card-img-top" src={{asset('storage/'.$testimonial->img)}} alt="">
                    @else 
                        <img class="card-img-top" src="{{$testimonial->img}}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$testimonial->name}} {{$testimonial->prename}}</h5>
                    <h6 class="card-title">{{$testimonial->fonction}}</h6>
                    <p class="card-text text-white">{{$testimonial->description}}</p>
                    <div class="row">
                        <div class="col-6 text-center">
                            <form action='testimonial/{{$testimonial->id}}/edit' method="get">
                                <button type="submit" class="btn-lg btn btn-outline-warning   text-white">
                                    <i class="fas fa-edit text-dark"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-6 text-center">
                            <form action='testimonial/{{$testimonial->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-lg btn btn-outline-warning text-white"><i
                                        class="fas fa-trash-alt text-dark"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection