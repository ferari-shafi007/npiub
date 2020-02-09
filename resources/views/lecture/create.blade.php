@extends('layouts.user')

@section('content')
<div class="mt-10 createLecture">

<h1>Add Lecture</h1>

<hr>

{!! Form::open(['action' => 'lectureController@store', 'method' => 'POST', 'class'=>'row']) !!}

    <div class="col-md-4">
                        <label for="validationTooltip02">Lectyure Type</label>
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="catagory" id="department">
                            <option value="Academic">Academic</option>
                            <option value="Training">Training</option>
                        </select>

                    </div>


     <div class="col-md-4">
                        <label for="validationTooltip02">Subject</label>
                        <select class="form-control required" name="subject" id="Subject">
                         @foreach ($subject as $subject)

                            <option value="{{$subject->code}} | {{$subject->name}}">{{$subject->code}} | {{$subject->name}}</option>

                        @endforeach
                        </select>

                    </div>

      <div class="col-md-4">
                        <label for="validationTooltip02">semester</label>
                        <select class="form-control required" name="semester" id="semester">
                         @foreach ($semester as $semester)

                            <option value="{{$semester->name}}">{{$semester->name}}</option>

                        @endforeach
                        </select>

                    </div>

    <div class="col-md-12">
      <label for="validationServer01">Lecture name</label>
      <input type="text" class="form-control was-valid" placeholder="Lecture name" name="lecture" required>
    </div>



    <div class="col-md-12">
      <label for="validationServer02">Lecture file URL</label>
      <input type="text" class="form-control was-valid" placeholder="Lecture file URL" name="url" required>
    </div>

            <button class="btn btn-lg bg-success">Submit</button>
{!! Form::close() !!}
</div>

@endsection
