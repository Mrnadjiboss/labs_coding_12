@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="text-outline-warning">Articles</h1>
            <h6 class="h3 text-warning">to publish an article you have to check as webmaster</h6>
            <a class="btn btn-outline-warning text-white" href='article/create'>
                <i class="fas fa-plus text-dark">create</i>
            </a>
        </div>
        <div class="row bg-warning">

            @foreach ($articles->sortByDesc('created_at') as $article)



            <div class="col-md-4 mb-4">
                <!-- Card -->
                <div class="card profile-card">
                  <!-- Avatar -->
                  <div class="bg-warning  d-block justify-content-center align-items-center border border-warning p-5 mb-4">
                    @if (Storage::disk('public')->has($article->img_article))
                        <img src={{asset('storage/'.$article->img_article)}} alt="">
                    @else
                        <img src="{{$article->img_article}}"  class="img-fluid" alt="">
                    @endif
                  </div>
        
                  <div class="card-body pt-0 mt-0">
        
                    <!-- Name -->
                    @if ($article->accept == "unchecked")
                        <h6 class="text-danger">not published yet</h6>
                    @else
                        <h6 class="text-success">the article has been published</h6>
                    @endif
                    <h3 class="mb-3 font-weight-bold text-info text-warning"><strong>{{$article->titre}}</strong></h3>
                    <div class="d-flex">
                        <h6>{{date('d M Y', strtotime($article->date)) }} &nbsp; </h6>
                        <h6> {{$article->user->name}}</h6>
                    </div>
                    <h6 class="bg-warning"> Catégories:
                        @foreach ($article->categories as $cate)
                        {{$cate->name}}  
                        @endforeach
                    </h6>
                    <h6 class="bg-warning"> Tags :
                        @foreach ($article->tags as $tag)
                        {{$tag->name}}  
                        @endforeach
                    </h6>
                    <p class="mt-4 text-muted">{{\Str::limit($article->text, 70, $end='...') }}</p>
                    <div class="row">
                        <div class="col-12 text-center ">
                            <form action='article/{{$article->id}}/edit' method="get" class="text-center mb-3">
                                @csrf
                                <button type="submit" class="btn btn-outline-warning text-dark">edit<i
                                    class="fas fa-edit-alt text-dark"></i>
                            </button>
                            </form>
                        </div>
                        <div class="col-12 text-center">
                            <form action='article/{{$article->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-warning text-white"><i
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
        {{-- <div class="page-pagination">
            {{$articles->links()}}
        </div> --}}
    </div>
@endsection