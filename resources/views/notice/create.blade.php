@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center" style='margin-top:100px;'>
<h1>Create Notice</h1>
</div>
<hr>

{!! Form::open(['action' => 'noticeController@store', 'method' => 'POST']) !!}

    <div class="form-group">
      <label for="noticeHeader">Notice Header</label>
      <input type="text" class="form-control was-validated" id="noticeHeader" placeholder="Notice Header" name="noticeHead" required>
    </div>
    <div class="form-group">
      <label for="noticeBody">Notice Body</label>
      <input type="text" class="form-control was-validated" id="noticeBody" placeholder="Notice Body" name="noticeBody" required>
    </div>
    <div class="form-group">
        <label for="url">Notice file url</label>
        <input type="text" class="form-control was-validated" id="url" placeholder="Notice file url" name="url" required>
      </div>
  <button class="btn btn-lg btn-success" type="submit">Submit</button>

{!! Form::close() !!}

@endsection
