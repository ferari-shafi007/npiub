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
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <a class="btn btn-warning" href='/users/edit-bach/<%= bach._id%>'><i
                                    class="fas fa-edit    "></i> </a>
                            <a class="btn btn-danger" href='/users/delete-bach/<%= bach._id%>'><i
                                            class="fas fa-trash"></i> </a>
                            </form>
                        </td>





            </tbody>
        </table>



        <div class="add-bach">

            <h2 class="messege-header">Add bach</h2>

            <form class="was-validated" action="/bach/store" method="post">


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

            </form>
        </div>
    </div>

</main>



@endsection
