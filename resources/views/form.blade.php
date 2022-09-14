@extends('layouts.app')

@section('content')

<main class="main" id="top">
   @include('layouts.navbar')
    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row align-items-center py-lg-8 py-1">
            <div class="container"><h3 class="text-light">Add Item</h3></div>
            <div class="col-lg-6 text-center text-lg-start">

                {{-- succsess alert --}}
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

{{-- form --}}
<form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card mb-10">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
        </div>
        <div class="card-body">

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="staticEmail" name="name">

                    <span class="text-danger">
                        @if ( $errors->has('name') )
                            {{ $errors->first('name') }}
                        @endif
                      </span>

                  </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticEmail" name="quantity">

                      <span class="text-danger">
                        @if ( $errors->has('quantity') )
                            {{ $errors->first('quantity') }}
                        @endif
                      </span>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticEmail" name="price">

                      <span class="text-danger">
                        @if ( $errors->has('price') )
                            {{ $errors->first('price') }}
                        @endif
                      </span>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="image">

                        <span class="text-danger">
                            @if ( $errors->has('image') )
                                {{ $errors->first('image') }}
                            @endif
                          </span>

                    </div>
                  </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <a class="btn btn-success" href="{{ route('item.view') }}">View All Items</a>
        </div>
    </div>
</form>


            </div>

            <div class="col-lg-5">
                <div class="col-lg-12"><img class="img-fluid" src="assets/img/img.png" alt="" /></div>
            </div>

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
