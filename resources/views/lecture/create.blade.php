@extends('layouts.user')

@section('content')
<div class="mt-10 createLecture">

<h1>Add Lecture</h1>

{!! Form::open(['action' => 'lectureController@store', 'method' => 'POST']) !!}

    <div class="col">
      <label for="validationServer01">Lecture Catagory</label>
      <input type="text" class="form-control was-valid" placeholder="Lecture catagory" name="catagory" required>
    </div>


    <div class="col">
      <label for="validationServer01">Subject</label>
      <input type="text" class="form-control was-valid" placeholder="Subject" name="subject" required>
    </div>

     <div class="col">
      <label for="validationServer01">semester</label>
      <input type="text" class="form-control was-valid" placeholder="semester" name="semester" required>
    </div>

    <div class="col">
      <label for="validationServer01">Lecture name</label>
      <input type="text" class="form-control was-valid" placeholder="Lecture name" name="lecture" required>
    </div>



    <div class="col">
      <label for="validationServer02">Lecture file URL</label>
      <input type="text" class="form-control was-valid" placeholder="Lecture file URL" name="url" required>
    </div>

            <button class="btn btn-lg bg-success">Submit</button>
{!! Form::close() !!}
</div>

@endsection
