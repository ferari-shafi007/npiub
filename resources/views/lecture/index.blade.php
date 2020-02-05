@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-11 m-sm-auto col-lg-11 px-4">
<div class="text-center" style='margin-top:100px;'>
<h1>Class Lecture</h1>

<hr>
</div>
    <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">


        {{-- search form  --}}

        <form action="" method="POST">
                <div class="row text-bold text-center lectureType">

                    <div class="col-md-4">
                        <label for="validationTooltip02">Lectyure Type</label>
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="Department" id="department">
                            <option value="Academic">Academic</option>
                            <option value="Training">Training</option>
                        </select>

                    </div>

                     <div class="col-md-4">
                        <label for="validationTooltip02">Semester</label>

                        <select class="form-control" name="semester" id="semester" >
                                <option value="Winter-2017">Winter 2017</option>
                                <option value="Summer-2017">Summer 2017</option>

                        </select>

                    </div>


                    <div class="col-md-4">
                        <label for="validationTooltip02">Subject</label>
                        <select class="form-control required" name="Subject" id="Subject">
                            <option>CSE-1101 | Structured Programming</option>
                            <option>CSE-2306 | Object Oriented Programming</option>
                        </select>

                    </div>



                </div>
            </form>

            {{-- end search form  --}}

    <table class="notice-table">
        <tr>
            <td>SL.</td>
            <td>Semester</td>
            <td>Lecture</td>
            <td>File</td>
        </tr>

        @foreach ($lectures as $lecture)

            <tr>
                <td>
                        {{$lecture->id}}

                </td>
                <td>
                        {{$lecture->semester}}

                </td>
                <td>
                        {{$lecture->lecture}}
                </td>
                <td>
                        <a href=""><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <a href=""><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <a href=""><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>
                        <a href=""><img class="notice-icon" src="/res/img/pdf.png" alt=""></a>


                </td>
            </tr>
        @endforeach

    </table>



</main>

@endsection
