@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style='margin-top:100px;'>
            <h1 class="h2">Create Students</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

{!! Form::open(['action' => 'StudentController@store', 'method' => 'POST', 'class'=>'row', 'class'=>'was-validation', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-row">
                    <div class="col-md-5">
                        <label for="validationTooltip01">First name</label>
                        <input type="text" class="form-control" placeholder="First name" name="firstName" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="validationTooltip02">Last name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lastName" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="validationTooltip02">Institute</label>
                    <select class="form-control required" name="institute">
                        <option value="NPIUB">NPIUB</option>
                        <option value="Others">Others</option>
                    </select>

                    </div>

                    <div class="col-md-4">
                        <label for="validationTooltip02">Department</label>
                    <select class="form-control required" name="department">
                        <option>CSE</option>
                        <option>EEE</option>
                    </select>

                    </div>
                    <div class="col-md-4">
                        <label for="validationTooltip02">Bach</label>
                        <select class="form-control required" name="bach">

                    @foreach ($bach as $bach)

                        <option value="{{$bach->bach}}">{{$bach->bach}}</option>
                    @endforeach
                    </select>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>


                    <div class="col-md-4">
                        <label for="validationTooltip02">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationTooltip02">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationTooltipUsername">ID</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">#</span>
                            </div>
                            <input type="text" class="form-control" placeholder="ID" name="stdId" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique ID
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <label for="validationTooltip02">gender</label>
                        <select class="form-control required" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>



                    <div class="col-md-4">
                        <label for="validationTooltip01">Skill</label>
                        <input type="text" class="form-control" placeholder="Skill1" name="skill1">
                    </div>

                    <div class="col-md-4">
                        <label for="validationTooltip01">Skill</label>
                        <input type="text" class="form-control" placeholder="Skill2" name="skill2">
                    </div>

                    <div class="col-md-4">
                        <label for="validationTooltip01">Occupation</label>
                        <input type="text" class="form-control" placeholder="Occupation" name="occupation">
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip03">City</label>
                        <input type="text" class="form-control" placeholder="City" name="city">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">State</label>
                        <input type="text" class="form-control" placeholder="State" name="state">
                        <div class="invalid-tooltip">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Zip</label>
                        <input type="text" class="form-control" placeholder="Zip" name="zip">
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationTooltip02">Status</label>
                        <select class="form-control required" name="status">
                        <option>Active</option>
                        <option>Passed</option>
                    </select>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-12 mb-12">
                        <label for="validationTooltip05">Facebool Profile</label>
                        <input type="text" class="form-control" placeholder="FB Link" name="url">
                        <div class="invalid-tooltip">

                        </div>
                    </div>
                </div>
                    <div class="">
                        <label for="exampleFormControlFile1">Image</label>
                        {!! Form::file('img') !!}
                    </div>

                    <button class="btn btn-primary" type="submit">Submit form</button>
{!! Form::close() !!}

    </main>

@endsection
