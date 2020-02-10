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
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="Department" id="departmentInput" onchange="departmentFunction()">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                        </select>

                    </div>

                     <div class="col-md-3">
                        <label for="validationTooltip02">Bach</label>

                        <select class="form-control required" name="bach" id="bachInput" onchange="bachFunction()">

                                     @foreach ($bach as $bach)
                        <option value="{{$bach->bach}}">{{$bach->bach}}</option>
                                     @endforeach


                        </select>

                    </div>


                    <div class="col-md-3">
                        <label for="validationTooltip02">Status</label>
                        <select class="form-control required" name="status" id="status" onchange="myFunction()">
                            <option value="Active">Active</option>
                            <option value="passed">Passed</option>
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
              <table class="table" id="myTable">
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
                    <td>{{$student->department}}  {{$student->bach}}</td>
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


{{-- search adaption --}}

<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("status");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function departmentFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("departmentInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function bachFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("bachInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
