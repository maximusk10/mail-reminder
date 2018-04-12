@extends('template')

@section('content')
    
    <div class="col-md-12 h_topMarger">
        <div class="card card-default">
          <div class="card-header">
            Reminder List
            </div>
          <div class="card-body">
            <div class="d-flex justify-content-end">
                <div class="buttonCircleContainer">
                    <a href="./create">
                        <div class="buttonCircle">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="buttonCircleText">
                            Add New Reminder
                        </div>
                    </a>
                </div>
            </div>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td>Shop Id</td>
                        <td>Status</td>
                        <td>Send After</td>
                        <td>Name</td>
                        <td>Template</td>
                        <td>Subject</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hola</td>
                        <td>Hola</td>
                        <td>Hola</td>
                        <td>Hola</td>
                        <td>Hola</td>
                        <td>Hola</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
    </div>
@endsection