@extends('layouts.app')

@section('content')

<main class="main" id="top">
   @include('layouts.navbar')
    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row align-items-center py-lg-8 py-1">
            <div class="container"><h3 class="text-light">Add Blog Post</h3></div>
            <div class="col-lg-6 text-center text-lg-start">

                {{-- succsess alert --}}
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif


{{-- form --}}
  <form class="row g-3 needs-validation" novalidate action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
      <label for="validationCustom01" class="form-label text text-light">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title" id="validationCustom01" required>
      <div class="invalid-feedback">
        Please enter title.
      </div>



    </div>

    <div class="col-md-6">
      <label for="validationCustom05" class="form-label text text-light">Image</label>
      <input type="file" class="form-control" name="image" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please select image.
      </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom02" class="form-label text text-light">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description" id="validationCustom02" required>
        <div class="invalid-feedback">
          Please enter description.
        </div>
      </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" name="submit" type="submit">Add Post</button>
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
