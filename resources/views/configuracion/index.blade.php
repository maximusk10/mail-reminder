@extends('template')

@section('content')
    
    <div class="col-md-12 h_topMarger">
        <div class="card card-default">
          <div class="card-header">
            Settings
          </div>
          <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="txtPaymentGateways">Allowed Payment Gateways</label>
                    <select class="form-control" name="txtPaymentGateways" id="">
                        <option value="">Pago en OXXO con Efectivo</option>
                        <option value="">Pago en SPEI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtPendingsId">Max Pending Days</label>
                    <input type="text" class="form-control" id="txtPendingsId" />
                </div>
                <div class="form-group">
                    <label for="txtImportedOrder">Last Imported Order</label>
                    <input type="text" class="form-control" id="txtImportedOrder" />
                </div>
                <div class="form-group">
                    <label for="txtImportedOrderDate">Last Imported Order Date</label>
                    <input type="text" class="form-control" id="txtImportedOrderDate" />
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          
        </div>
    </div>
@endsection