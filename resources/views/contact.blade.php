@extends('layouts.app')

@section('content')

<main class="main" id="top">
   @include('layouts.navbar')
    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row align-items-center py-lg-8 py-1">
            <div class="col-lg-12 text-center text-lg-start">

                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div class="col-10 offset-1 ">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h3 class="text-white text-center">Contact US</h3>
                                </div>
                                <div class="card-body">

                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <strong>Email:</strong>
                                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <strong>Phone:</strong>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                                    @if ($errors->has('phone'))
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <strong>Subject:</strong>
                                                    <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                                    @if ($errors->has('subject'))
                                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <strong>Message:</strong>
                                                    <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                                    @if ($errors->has('message'))
                                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-submit mt-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            {{-- <div class="col-lg-5">
                <div class="col-lg-12"><img class="img-fluid" src="assets/img/img.png" alt="" /></div>
            </div> --}}

          </div>

        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </div>
  </main>
  <!-- ============================================-->
  @include('layouts.footer')
  <!-- ============================================-->

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/prism/prism.js"></script>
  <script src="vendors/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/theme.js"></script>

  {{-- form validation --}}
  <script src="assets/js/form.validation.js"></script>

@endsection
