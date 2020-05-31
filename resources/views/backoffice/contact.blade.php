@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive text-warning">Edit Contact info</h2>
            <div class="row">

                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('contactinfo.update',$contact->id) }}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class=" col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->subtitle}}" id="email" name="subtitle"
                                        class="form-control">
                                    <label for="email" class="">subtitle</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form">
                                    <i class="fas fa-pencil-alt text-warning prefix"></i>
                                    <br>
                                    <br>
                                    <textarea id="form10" class="md-textarea form-control" name="text" rows="3">{{$contact->text}}</textarea>
                                    <label for="form10">Description</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->adresse}}" id="email" name="adresse"
                                        class="form-control">
                                    <label for="email" class="">Adress</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->localite}}" id="email" name="localite"
                                        class="form-control">
                                    <label for="email" class="">Locality</label>
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->phone}}" id="email" name="phone"
                                        class="form-control">
                                    <label for="email" class="">Phone </label>
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->email}}" id="email" name="email"
                                        class="form-control">
                                    <label for="email" class="">Email </label>
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$contact->btn}}" id="email" name="btn"
                                        class="form-control">
                                    <label for="email" class=""> btn Text  </label>
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