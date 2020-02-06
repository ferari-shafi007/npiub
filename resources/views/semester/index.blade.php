@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center">
<h1>Semester</h1>

<hr>
</div>
    <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">




    <table class="table table-hover student-table">
        <tr>
            <td>SL.</td>
            <td>Semester</td>
            <td>Action</td>

        </tr>

        @foreach ($semester as $semester)

            <tr>
                <td>
                        {{$semester->id}}

                </td>
                <td>
                        {{$semester->name}}

                </td>
                <td>
                       edit
                </td>


            </tr>
        @endforeach

    </table>



</main>

@endsection
