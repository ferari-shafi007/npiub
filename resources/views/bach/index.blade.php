@extends('layouts.user')

@section('content')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="container">

        <h1>Baches</h1>
        <table class="table table-hover student-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($baches as $bach)
                    <tr>
                        <td>
                           {{$bach->bach}}
                        </td>
                        <td>
                            {{$bach->department}}
                        </td>
                        <td>
                          @if(!Auth::guest())
            <td>
                <div class="d-flex">
                    {{-- <a href="/bach/{{$bach->id}}/edit" class="m-1"><i class="fa fa-edit fa-2x bg-warning rounded p-2"></i></a> --}}

            {!!Form::open(['action' => ['bachController@destroy', $bach->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                <button type="submit" class="bg-danger rounded "><i class="fa fa-trash fa-2x p-2"></i></button>
            {!!Form::close()!!}
                </div>
            </td>
        @endif
                        </td>

                @endforeach




            </tbody>
        </table>



        <div class="add-bach">

            <h2 class="messege-header">Add bach</h2>

{!! Form::open(['action' => 'bachController@store', 'method' => 'POST', 'class'=>'was-validet']) !!}


                <div class="form-group">
                    <label for="bachName">Bach name</label>
                    <input type="text" class="form-control " id="bachName" name="bach" required>

                </div>
                <div class="form-group">
                    <label for="bachName">Department</label>
                    <input type="text" class="form-control " id="department" name="department" required>

                </div>

                <div class="form-group">
                    <label for="session">Session</label>
                    <input type="text" class="form-control" id="session" name="session">
                </div>

                <div class="form-group">
                    <label for="fbLink">FB Group Link</label>
                    <input type="text" class="form-control" id="fbLink" name="url" required>
                </div>


                <button type="submit" class="btn btn-primary btn-lg bg-success">Submit</button>

{!! Form::close() !!}
            </div>
    </div>

</main>


@endsection
