@extends('layouts.user')

@section('content')
<div class="mt-10 createLecture">

<h1>Add Semester</h1>

<hr>

{!! Form::open(['action' => 'semesterController@store', 'method' => 'POST', 'class'=>'row']) !!}


    <div class="col-md-12">
      <label for="validationServer01">Semester name</label>
      <input type="text" class="form-control was-valid" placeholder="semester name" name="name" required>
    </div>





            <button class="btn btn-lg bg-success">Submit</button>
{!! Form::close() !!}
</div>

@endsection
