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
                        <a class="btn btn-warning" href='/subject/edit/{{$subject->id}}'><i
                                    class="fas fa-edit    "></i> </a>
                            <a class="btn btn-danger" href='/users/delete-bach/<%= bach._id%>'><i
                                            class="fas fa-trash"></i> </a>
                            </form>
                        </td>

                @endforeach




            </tbody>
        </table>




@endsection
