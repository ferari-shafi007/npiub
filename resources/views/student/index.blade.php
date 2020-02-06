@extends('layouts.user')

@section('content')


    <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Students</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <div class="search">
            <form action="/student/select" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <label for="validationTooltip02">Institute</label>
                        <select class="form-control required" name="institute" id="institute" >
                            <option>NPIUB</option>
                            <option>OTHER</option>
                        </select>

                    </div>


                    <div class="col-md-3">
                        <label for="validationTooltip02">Department</label>
                        <select type="search" data-table="studentTable" class="form-control required select-table-filter" name="Department" id="department">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
    </select>

                    </div>

                     <div class="col-md-3">
                        <label for="validationTooltip02">Bach</label>

                        <select class="form-control required" name="bach" id="bach" >

                                     <% bach.forEach((bach) => { %>

                                     <option><%=bach.name%></option>
                                     <%  }); %>
                        </select>

                    </div>


                    <div class="col-md-3">
                        <label for="validationTooltip02">Status</label>
                        <select class="form-control required" name="status" id="status">
                            <option>ALL</option>
                            <option>Active</option>
                            <option>Passed</option>
                        </select>

                    </div>



                </div>
            </form>
        </div>



        <table class="table table-hover student-table">
            <thead>
                <tr>
                    <th scope="col">Status</th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <% students.forEach((students) => { %>
                    <tr>
                    <td>
                            <%= students.status %>
                        </td>
                        <td>
                            <%= students.id %>
                        </td>
                        <td>
                            <%= students.firstName +' '+ students.lastName %>
                        </td>
                        <td>
                            <%= students.department +' '+students.bach%>
                        </td>

                        <td>
                            <%= students.email %>
                        </td>
                        <td>
                            <%= students.phone %>
                        </td>
                        <td>
                            <img src="../public/uploads/<%= students.img %>" alt="" width="50" height="50">
                        </td>
                        <td>
                            <a href="/student/<%= students._id%>">View</a>
                        </td>
                    </tr>
                    <%  }); %>


            </tbody>
        </table>


    </main>

@endsection
