@extends('layouts.app')

@section('content')

<main class="main" id="top">
   @include('layouts.navbar')
    <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

        <section class="pb-0">
            <div class="container">
              <p class="text-center text-gray fs-1">Blog</p>
              <h2 class="mx-auto text-center fs-lg-6 fs-md-5 w-lg-75">Value proposition accelerator product management venture</h2>
              <div class="row mt-7 gx-xl-7">

                @foreach ($posts as $post)
                <div class="col-md-4 text-center text-md-start h-auto mb-5">
                    <div class="d-flex justify-content-between flex-column h-100"><img src="{{asset('/storage/images/'.$post->image)}}" alt="." >
                      <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mt-3">
                          <p class="fw-bold mb-0 text-gray">{{ $post->title }}</p>
                        <p class="mb-0 text-black">{{date('Y-m-d', strtotime($post->updated_at))}}</p>
                      </div>
                        <h5 class="mt-1 mb-3 fs-0 fs-md-1 text-light">{{ $post->description }}</h5>
                    </div>
                  </div>
                @endforeach



              </div>
              <div class="text-center mb-3"><button class="btn btn-outline-dark">Load More</button></div>
            </div><!-- end of .container-->
          </section>

    </div>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

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

@endsection
