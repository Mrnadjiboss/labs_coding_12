@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h2  text-warning">Edit  Navbar Menu</h2>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('menu.update',$menus->id) }}' method="post">
                        @csrf
                        @method('put')
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$menus->lien1}}" id="email" name="lien1"
                                        class="form-control">
                                    <label for="email" class="">Link 1 </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$menus->lien2}}" id="email" name="lien2"
                                        class="form-control">
                                    <label for="email" class="">Link 2 </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$menus->lien3}}" id="email" name="lien3"
                                        class="form-control">
                                    <label for="email" class="">Link 3 </label>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$menus->lien4}}" id="email" name="lien4"
                                        class="form-control">
                                    <label for="email" class="">Link 4 </label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->


                        <!--Grid row-->

                        <!-- Grid column -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-outline-warning text-center">Edit</button>
                        </div>
                        <div class="status"></div>
                    </form>
                </div>
            </div>
        </section>
        <section class="section card mb-5">
            <h2 class="h1-responsive text-warning">Edit Logo Navbar (& carousel banner)</h2>
            <div class="row text-center">
                <div class="col-md-12 text-center">
                    <form action='{{ route('logo.update',$logo->id) }}' class="text-center" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                            <div class="form-group text-center">
                                <input type="file" name="logo" class="form-control-file yellow-text" id="exampleFormControlFile1">
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