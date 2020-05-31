@extends('templates.dashboard')
@section('content')
    <div class="container-fluid">
        <section class="section card mb-5">
            <h2 class="h1-responsive font-weight-bold yellow-text text-center my-4">Edit Footer</h2>
            <div class="row">
                <div class="col-md-12 mb-md-0 mb-5">
                    <form id="contact-form" class="container" action='{{ route('footer.update',$footer) }}' method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" value="{{$footer->footer}}" id="email" name="footer"
                                        class="form-control">
                                    <label for="email" class=""> footer Text </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning text-center">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection