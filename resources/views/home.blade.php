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
            <div class="col-lg-6 text-center text-lg-start">
                <h3 class="text text-light">Todo List</h3>

                <div class="card">
                    <div class="card-header p-3">
                      <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task</h5>
                    </div>

                    {{-- succsess alert --}}
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif



                {{-- validation alert --}}
                @if ( $errors->has('task') )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $errors->first('task') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                    {{-- form --}}
                    <div class="mt-2">
                        <form action="{{ route('todo.store') }}" method="POST">
                          @csrf
                            <div class="form-outline flex-fill">
                              <input type="text" id="form2" name="task" class="form-control" />
                              <label class="form-label" for="form2">New task...</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info ms-2">Add</button>
                          </form>
                    </div>

                    <form action="" method="POST">
                      <table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>

                        <tbody>

                        @foreach ($tasks as $task )
                        @if (Auth::user()->id == $task->user_id)
                          <tr class="fw-normal">

                            <td class="align-middle">
                                <span>{{ $task->id }}</span>
                              </td>

                            <td class="align-middle">
                              <span>{{ $task->task }}</span>
                            </td>

                            <td class="align-middle">
                                @if ($task->status == 0)
                                <h6 class="mb-0"><span class="badge bg-warning">Not Completed</span></h6>
                                @else
                                <h6 class="mb-0"><span class="badge bg-success">Completed</span></h6>
                                @endif

                            </td>
                            <td class="align-middle">
                              <a href="{{ route ('todo.update', $task->id) }}" data-mdb-toggle="tooltip" title="Done"><i
                                  class="fas fa-check text-success me-3"></i></a>
                              <a href="{{ route ('todo.delete', $task->id) }}" data-mdb-toggle="tooltip" title="Remove"><i
                                  class="fas fa-trash-alt text-danger" onClick="return confirm('Are you sure you want to delete the task ?')"></i></a>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                        </tbody>

                      </table>
                    </form>
                  </div>
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

@endsection
