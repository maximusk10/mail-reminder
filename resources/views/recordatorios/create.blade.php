@extends('template')

@section('content')
    
    <div class="col-md-12 h_topMarger">
        <div class="card card-default">
          <div class="card-header">
            Add Reminder
          </div>
          <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="txtShopId">Shop Id</label>
                    <input type="text" class="form-control" id="txtShopId" />
                </div>
                <div class="form-group">
                    <label for="chkStatus">Status</label>
                    <input type="checkbox" class="form-control" id="chkStatus" />
                </div>
                <div class="form-group">
                    <label for="txtName">Name</label>
                    <input type="text" class="form-control" id="txtName" />
                </div>
                <div class="form-group">
                    <label for="txtTemplate">Template</label>
                    <textarea class="form-control" id="txtTemplate"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtSubject">Subject</label>
                    <input type="text" class="form-control" id="txtSubject" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          
        </div>
    </div>
@endsection