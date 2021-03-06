@extends('templates.dashboard')
@section('content')
    <div class="container-fluid bg-light">
        <section class="section card mb-5">
            <h2 class="h1-responsive text-warning">Edit article</h2>
            <p class="text-center text-warning">Auteur : {{$article->user->name}}</p>
            
            <div class="row">
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('article.update',$article) }}' method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if ($errors->any())
                        <div class='alert alert-danger'>
                        @foreach ($errors->all() as $error)
                            <p>{{  $error  }}</p>
                        @endforeach
                        </div>
                        @enderror
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$article->titre}}" id="email" name="titre"
                                        class="form-control">
                                    <label for="email">Titre </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="date" value="{{$article->date}}" id="email" name="date"
                                        class="form-control">
                                    <label for="email">Date </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <p>Tags</p>
                                    <select name='tags[]' multiple class="browser-default custom-select">
                                        @foreach ($tags as $tag)
                                        @if (isset($piv[6]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id || $tag->id == $piv[2]->tag_id || $tag->id == $piv[3]->tag_id || $tag->id == $piv[4]->tag_id || $tag->id == $piv[5]->tag_id || $tag->id == $piv[6]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>

                                        @elseif(isset($piv[5]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id || $tag->id == $piv[2]->tag_id || $tag->id == $piv[3]->tag_id || $tag->id == $piv[4]->tag_id || $tag->id == $piv[5]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>

                                        @elseif(isset($piv[4]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id || $tag->id == $piv[2]->tag_id  || $tag->id == $piv[3]->tag_id || $tag->id == $piv[4]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @elseif(isset($piv[3]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id || $tag->id == $piv[2]->tag_id  || $tag->id == $piv[3]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @elseif(isset($piv[2]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id || $tag->id == $piv[2]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @elseif(isset($piv[1]))
                                        <option {{$tag->id == $piv[0]->tag_id || $tag->id == $piv[1]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @elseif(isset($piv[0]))
                                        <option {{$tag->id == $pivot[0]->tag_id ? "selected" : ""}} value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @else 
                                        <option value='{{$tag->id}}'>
                                            {{$tag->name}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 mb-5">
                                <div class="md-form mb-0">
                                    <p>Catégories</p>
                                    <select name='cate[]' multiple class="browser-default custom-select">
                                        @foreach ($categories as $categorie)
                                        @if (isset($pivot[5]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id || $categorie->id == $pivot[1]->categorie_id || $categorie->id == $pivot[2]->categorie_id || $categorie->id == $pivot[3]->categorie_id || $categorie->id == $pivot[4]->categorie_id || $categorie->id == $pivot[5]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @elseif(isset($pivot[4]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id || $categorie->id == $pivot[1]->categorie_id || $categorie->id == $pivot[2]->categorie_id  || $categorie->id == $pivot[3]->categorie_id || $categorie->id == $pivot[4]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @elseif(isset($pivot[3]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id || $categorie->id == $pivot[1]->categorie_id || $categorie->id == $pivot[2]->categorie_id  || $categorie->id == $pivot[3]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @elseif(isset($pivot[2]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id || $categorie->id == $pivot[1]->categorie_id || $categorie->id == $pivot[2]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @elseif(isset($pivot[1]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id || $categorie->id == $pivot[1]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @elseif(isset($pivot[0]))
                                        <option {{$categorie->id == $pivot[0]->categorie_id ? "selected" : ""}} value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @else 
                                        <option value='{{$categorie->id}}'>
                                            {{$categorie->name}}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <textarea id="form10" class="md-textarea form-control" name="text" rows="3">{{$article->text}}</textarea>
                                    <label for="form10">Text</label>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form text-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="test" {{Auth::user()->role_id == 2 ? "" : "disabled"}}  {{$article->accept == "checked" ? 'checked' :""}} class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked">Publier l'article</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-lg btn-outline-warning " data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Click here if you wanna change the image
                                </a>
                            </div>
                            <!-- / Collapse buttons -->
                            
                            <!-- Collapsible element -->
                            <div class="collapse" id="collapseExample">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input  type="file" name="img" class="form-control-file green-text" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-outline-warning text-center">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection