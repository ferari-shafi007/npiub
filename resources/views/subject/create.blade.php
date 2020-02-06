@extends('layouts.user')

@section('content')
<main role="main" class=" m-sm-auto px-4">

    <h1 class="text-center">Subjects</h1>

    <hr>
{!! Form::open(['action' => 'subjectController@store', 'method' => 'POST', 'class'=>'form']) !!}

    <div class="form-group">
      <label for="noticeHeader">Subject name</label>
      <input type="text" class="form-control was-validated rounded" id="name" placeholder="Name" name="name" required>
    </div>

     <div class="form-group">
      <label for="noticeHeader">Subject Code</label>
      <input type="text" class="form-control was-validated rounded" id="code" placeholder="Subject Code" name="code" required>
    </div>

    <button type="submit" class="btn btn-primary btn-lg rounded text-bold">Save</button>
{!! Form::close() !!}
</main>

@endsection
