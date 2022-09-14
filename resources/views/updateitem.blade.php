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
<form action="{{ route ('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card mb-10">
        <img src="{{asset('/storage/images/'.$item->image)}}" alt="." >
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>
        </div>
        <div class="card-body">

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="staticEmail" name="name" value="{{ $item->name }}">
                      </span>

                  </div>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticEmail" name="quantity" value="{{ $item->quantity }}">
                      </span>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="staticEmail" name="price" value="{{ $item->price }}">
                      </span>

                    </div>
                  </div>

                  <button type="submit" name="update" class="btn btn-light"><i class="fas fa-check text-success me-3"></i>Update</button>
                <a href="{{ route ('item.delete', $item->id) }}" data-mdb-toggle="tooltip" title="Remove" class="btn btn-light"><i class="fas fa-trash-alt text-danger" onClick="return confirm('Are you sure you want to delete the task ?')"></i> Delete</a>
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
