@extends('layouts.user')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="container">

        <h1>Subjects</h1>
        <table class="table table-hover student-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>
                           {{$subject->name}}
                        </td>
                        <td>
                            {{$subject->code}}
                        </td>
                        <td>
                             @if(!Auth::guest())
            <td>
                <div class="d-flex">
                    {{-- <a href="/subject/{{$subject->id}}/edit" class="m-1"><i class="fa fa-edit fa-2x bg-warning rounded p-2"></i></a> --}}

            {!!Form::open(['action' => ['subjectController@destroy', $subject->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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




@endsection
