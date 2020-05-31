@extends('templates.dashboard')

@section('content')
    <h2 class="text-center text-warning">carousel</h2>
    <div class="container">
        <div class="text-center mt-2 mb-5">
            <a class="btn btn-lg btn-outline-warning text-warning" href='banner/create'>
                <i class="fas fa-plus text-warning">create</i>
            </a>
        </div>
        <div class="row">
            @foreach($bannercars as $bannercar)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    @if (Storage::disk('public')->has($bannercar->img))
                    <img height="400px" class="card-img-top" src={{asset('storage/'.$bannercar->img)}} alt="Card image cap">
                    @else
                    <img height="200px" class="img-fluid bg-dark" src="{{$bannercar->img}}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <h6 class="card-title">Slogan :</h6>
                        <p class="card-text">{{$slogan->title}}</p>
                        <div class="row">
                            <div class="col-6 text-center">
                                <form action='banner/{{$bannercar->id}}/edit' method="get">
                                    <button type="submit" class="btn border-0  text-white">
                                        <i class="fas fa-edit text-dark"></i>
                                    </button>
                                </form>
                            </div>
{{-- delete method --}}
                            <div class="col-6 text-center">
                                <form action='banner/{{$bannercar->id}}' method='POST'>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn  text-white"><i
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
        <hr class="border border-success"><hr class="border border-success"><hr class="border border-success"><hr class="border border-success">
        <div class="row">
            <div class="col-7 border-right">
                <h2 class="text-left mb-2 text-warning">Logo :</h2>
                <form action='{{ route('logo.update',$logo->id) }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <input type="file" name="logo" class="form-control-file green-text" id="exampleFormControlFile1">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-lg btn-outline-warning text-center">Edit</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <h2 class="text-left mb-2 text-warning">Slogan :</h2>
                <form action='{{ route('slogan.update',$slogan->id) }}' method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <input size="auto" type="text" class="form-control" value="{{$slogan->title}}" name="title">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-lg btn-outline-warning  text-center">Edit</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>   
@endsection    


