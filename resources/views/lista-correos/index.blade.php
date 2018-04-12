@extends('template')

@section('content')
    
    <div class="col-md-12 h_topMarger">
        <div class="card card-default">
          <div class="card-header">
            Sent Emails
            </div>
          <div class="card-body">
            
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td>Id</td>
                        <td>Order</td>
                        <td>Reminder</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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