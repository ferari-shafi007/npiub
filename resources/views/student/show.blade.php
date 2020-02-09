@extends('layouts.user')

@section('content')


<main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">

    <div class="bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="user-name">
                    {{$student->firstName}} {{$student->lastName}}

                </h1>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->


                <div class="text-center">
                <img src="/storage/student_images/{{$student->img}}" class="avatar img-circle img-thumbnail" alt="/storage/student_images/avatar.jpg">

                </div>
                <hr/><br>





                <ul class="list-group">
                    <li class="list-group-item text-muted">Status <span class="status statusActive">
                            {{$student->status}} </span></i>
                    </li>

                    <li class="list-group-item"><span class="pull-left"><strong>Name: </strong></span>
                        {{$student->firstName}}  {{$student->lastName}}
                    </li>
                    <li class="list-group-item"><span class="pull-left"><strong>Department: </strong></span>
                        {{$student->department}}
                    </li>
                    <li class="list-group-item"><span class="pull-left"><strong>ID: </strong></span>
                        {{$student->stdId}}
                    </li>
                </ul>

                <div class="panel panel-default">
                    <a class="panel-heading" href="{{$student->url}} ">Social Media</a>

                </div>

            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <!--/tab-pane-->
                <div class="tab-pane" id="settings">


                    <hr>

                    <h3 class="text-center">Student Detail</h3>
                    <!-- resume here -->

                    <div>
                        <div class=" text-center">
                            Hello there! i'm
                            {{$student->firstName}} {{$student->lastName}}. I am studend of NPIUB. Here is my short descroption.
                        </div>
                        <div class="mt-10 student-data">
                            <table>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                       {{$student->email}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone
                                    </td>
                                    <td>
                                        {{$student->phone}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gender
                                    </td>
                                    <td>
                                        {{$student->gender}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Occupation
                                    </td>
                                    <td>
                                        {{$student->job}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Address
                                    </td>
                                    <td>
                                        {{$student->city}}, {{$student->state}}, {{$student->zip}}.
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Skills
                                    </td>
                                    <td>
                                        {{$student->skill1}}
                                   </td>
                                    <td>
                                        {{$student->skill2}}
                                    </td>
                                </tr>
                            </table>

                            <a href="{{$student->url}}"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                        </div>

                    </div>

                </div>

            </div>
            <!--/tab-pane-->
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->

    </div>
    <!--/row-->
</main>

@endsection
