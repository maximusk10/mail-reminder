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
            <div class="reminder-filters">
                <div class="reminder-filters__element">
                    <label for="cboTipo">Type</label>
                    <select name="cboTipo" id="cboTipo" class="form-control">
                        <option value="">SMS</option>
                        <option value="">EMAIL</option>
                    </select>
                </div>
                <div class="reminder-filters__element">
                    <label for="cboStatus">Status</label>
                    <select name="cboStatus" id="cboStatus" class="form-control">
                        <option value="">Enabled</option>
                        <option value="">Disabled</option>
                    </select>
                </div>
            </div>
                <div class="reminder-filters__button">
                    <button class="btn btn-info btn-filter">Filter</button>
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