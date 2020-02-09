@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">supervisor_account</i>
              </div>
              <p class="card-category">Total Students</p>
              <h3 class="card-title">
                  {{$student->count()}}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">add_circle_outline</i>
                <a href="{{route('student.create')}}">Add More</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="fa fa-flag-checkered"></i>
              </div>
              <p class="card-category">Notice</p>
              <h3 class="card-title">
                    {{$notice->count()}}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">add_circle_outline</i>
                <a href="{{route('notice.create')}}">Add More</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="fa fa-clipboard"></i>
              </div>
              <p class="card-category">Lectures</p>
              <h3 class="card-title">
                    {{$lecture->count()}}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">add_circle_outline</i>
                <a href="{{route('lecture.create')}}">Add More</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-book"></i>
              </div>
              <p class="card-category">Subject</p>
              <h3 class="card-title">
                    {{$subject->count()}}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">add_circle_outline</i>
                <a href="{{route('subject.create')}}">Add More</a>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="row">

        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Admins Status</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($user as $user)

                  <tr>
                  <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                  </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
