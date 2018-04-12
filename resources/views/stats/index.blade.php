@extends('template')

@section('content')
    <div class="col-md-12 h_topMarger">
        <div class="card card-default">
          <div class="card-header">
            Stats
            </div>
          <div class="card-body">
            <div class="log-filters">
              <div class="log-filters__date-container">
                <div class="log-filters__date">
                  <label for="txtFirstDate">Begin</label>
                  <input type="text" id="txtFirstDate" name="txtFirstDate" class="form-control datepicker">
                </div>
                <div class="log-filters__date">
                  <label for="txtFirstDate">End</label>
                  <input type="text" id="txtFirstDate" name="txtFirstDate" class="form-control datepicker">
                </div>
              </div>
              <div class="log-filters__select">
                <label for="cboSelect">Select</label>
                <select name="cboSelect" class="form-control" id="cboSelect">
                  <option value="">Option 1</option>
                  <option value="">Option 2</option>
                  <option value="">Option 3</option>
                  <option value="">Option 4</option>
                </select>
              </div>
            </div>
            <div class="reminder-filters__button">
                    <button class="btn btn-info btn-filter">Filter</button>
                </div>
            <div class="log-table">
              <table class="table table-bordered">

                  <tbody>
                      <tr>
                        <tr>
                          <td>Day</td>
                          <td>01/04/2018</td>
                          <td>02/04/2018</td>
                          <td>03/04/2018</td>
                          <td>04/04/2018</td>
                          <td>05/04/2018</td>
                        </tr>
                        <tr>
                          <td>01/04/2018</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>02/04/2018</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>                          
                        </tr>
                      </tr>
                  </tbody>
              </table>
            </div>
           
          </div>
        </div>
    </div>
    <script>
      $(document).ready(function(){
          $('.datepicker').datepicker();
      });
    </script>
@endsection