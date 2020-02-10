@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center" style='margin-top:100px;'>
<h1>Class Lecture</h1>

<hr>
</div>
    <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">


        {{-- search form  --}}

        <form action="" method="POST">
                <div class="row text-bold text-center lectureType">

                    <div class="col-md-4">
                        <label for="validationTooltip02">Lectyure Type</label>
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="caragory" id="type" onchange="typeFunction()">
                            <option value="Academic">Academic</option>
                            <option value="Training">Training</option>
                        </select>

                    </div>

                     <div class="col-md-4">
                        <label for="validationTooltip02">Semester</label>

                        <select class="form-control" name="semester" id="semester" onchange="semFunction()">
                                @foreach ($semester as $semester)

                            <option value="{{$semester->name}}">{{$semester->name}}</option>

                            @endforeach

                        </select>

                    </div>


                    <div class="col-md-4">
                        <label for="validationTooltip02">Subject</label>
                        <select class="form-control required" name="subject" id="subject" onchange="subFunction()">
                                    @foreach ($subject as $subject)

                        <option>{{$subject->code}} | {{$subject->name}}</option>
                            @endforeach
                        </select>

                    </div>



                </div>
            </form>

            {{-- end search form  --}}

    <table class="notice-table" id="myTable">
        <thead class="text-center bg-success table-dark p-3 border">
            <th>SL.</th>
            <th>Semester</th>
            <th>Lecture</th>
            <th>File</th>
        @if(!Auth::guest())
            <th></th>
        @endif
            <th>Catagory</th>
        </thead>

        @foreach ($lecture as $lecture)

            <tr>
                <td>
                        {{$lecture->id}}

                </td>
                <td>
                        {{$lecture->semester}}

                </td>
                <td>
                        {{$lecture->lecture}}
                </td>
                <td>
                <a href="{{$lecture->url}}"><img class="notice-icon" src="/images/pdf.png"></a>
                </td>

        @if(!Auth::guest())
            <td>
                <div class="d-flex">
                    <a href="/lecture/{{$lecture->id}}/edit" class="m-1"><i class="fa fa-edit fa-2x bg-warning rounded p-2"></i></a>

            {!!Form::open(['action' => ['lectureController@destroy', $lecture->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                <button type="submit" class="bg-danger rounded "><i class="fa fa-trash fa-2x p-2"></i></button>
            {!!Form::close()!!}
                </div>
            </td>
        @endif
        <td>
            {{$lecture->catagory}} <br> {{$lecture->subject}}
        </td>
            </tr>
        @endforeach

    </table>



</main>

@endsection



{{-- search adaption --}}

<script>
function typeFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("type");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
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

function semFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("semester");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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

function subFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("subject");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
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
