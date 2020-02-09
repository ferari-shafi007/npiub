@extends('layouts.user')

@section('content')

<div class="container-fluid">

            <form action="/student/select">
                <div class="row">
                    <div class="col-md-3">
                        <label for="validationTooltip02">Institute</label>
                        <select class="form-control required" name="institute" id="institute" >
                            <option>NPIUB</option>
                            <option>OTHER</option>
                        </select>

                    </div>


                    <div class="col-md-3">
                        <label for="validationTooltip02">Department</label>
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="Department" id="department">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
    </select>

                    </div>

                     <div class="col-md-3">
                        <label for="validationTooltip02">Bach</label>

                        <select class="form-control required" name="bach" id="bach" >

                                     @foreach ($bach as $bach)
                        <option value="{{$bach->bach}}">{{$bach->bach}}</option>
                                     @endforeach


                        </select>

                    </div>


                    <div class="col-md-3">
                        <label for="validationTooltip02">Status</label>
                        <select class="form-control required" name="status" id="status">
                            <option>ALL</option>
                            <option>Active</option>
                            <option>Passed</option>
                        </select>

                    </div>



                </div>
            </form>
    </div>

<div class="container-fluid">
<div class="row">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Students</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                    <th>Status</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($student as $student)
                <tr>
                <td>{{$student->status}}</td>
                    <td>{{$student->stdId}}</td>
                    <td>{{$student->firstName}} {{$student->lastName}}</td>
                    <td>{{$student->department}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td><img src="/storage/student_images/{{$student->img}}" width="50"></td>
                    <td>
                    <a href="/student/{{$student->id}}" class="text-center btn  rounded bg-success text-bold">view</a>
                    <div class="d-flex">
                        @if(!Auth::guest())
                    <a href="/student/{{$student->id}}/edit" class="m-1"><i class="fa fa-edit fa-2x bg-warning rounded p-2"></i></a>

            {!!Form::open(['action' => ['StudentController@destroy', $student->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{-- {{Form::submit('  ', ['class' => 'fa fa-trash fa-2x bg-danger rounded p-2'])}} --}}
                <button type="submit" class="bg-danger rounded "><i class="fa fa-trash fa-2x p-2"></i></button>
                {{-- <i href="{{ route('student.destroy', $student->id) }}" class="m-1"><i class="fa fa-trash fa-2x bg-danger rounded p-2"></i></i> --}}
            {!!Form::close()!!}
    @endif
                        {{-- <a href="" class="m-1"><i class="fa fa-trash fa-2x bg-danger rounded p-2" aria-hidden="true"></i></a> --}}
                    </div>
                    </td>

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
