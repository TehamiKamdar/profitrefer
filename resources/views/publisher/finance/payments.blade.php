@extends('layouts.publisher.layout')

@section('main-content')
  <h5 class="text-end text-sm">Total Results: <span class="text-sm">0</span></h5>


  <div class="card">
    <div class="card-header">
    <h6 class="mb-0">Payments</h6>
    </div>
    <div class="card-body p-3">
    <div class="table-responsive">
      <table class="table table-hover">
      <thead>
        <tr>
        <th><small class="text-muted d-block text-xs fw-bold">Invoice#</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Date</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Payment ID</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Method</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Amount</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">LC Revshare</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Paid Amount</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Paid Date</small></th>
        <th><small class="text-muted d-block text-xs fw-bold">Status</small></th>
        </tr>
      </thead>
      <tbody>
        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1001</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">01-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-778899</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Bank Transfer</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,000</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$100</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$900</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">03-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1002</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">02-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-223344</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PayPal</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$2,500</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$250</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$2,250</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">04-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1003</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">04-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-112233</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Stripe</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$850</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$85</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$765</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">05-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1004</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">06-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-998877</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Cash</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,750</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$175</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,575</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">07-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1005</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">08-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-334455</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">UPI</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$600</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$60</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$540</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">09-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1006</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">10-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-556677</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Bank Transfer</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$3,200</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$320</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$2,880</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">11-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1007</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">12-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-121212</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PayPal</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$950</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$95</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$855</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">13-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1008</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">14-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-445566</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Stripe</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,300</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$130</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,170</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">15-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1009</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">16-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-667788</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">Cash</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$700</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$70</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$630</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">17-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

        <tr class="align-middle border-bottom">
        <td>
          <h6 class="fw-semibold text-dark mt-2">INV-1010</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">18-05-2025</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">PAY-889900</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">UPI</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$2,150</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$215</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">$1,935</h6>
        </td>
        <td>
          <h6 class="fw-semibold text-dark mt-2">19-05-2025</h6>
        </td>
        <td>
          <div class="d-flex align-items-center">
          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
          <h6 class="fw-semibold text-dark mt-2">Paid</h6>
          </div>
        </td>
        </tr>

      </tbody>
      </table>
    </div>
    </div>
  </div>
@endsection

@section('partial-scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
    $('.table').DataTable({
      paging: true,
      searching: true,
      lengthChange: true,
      info: true,
      ordering: false,
      dom: '<"d-flex justify-content-between align-items-center mb-3"f>t<"d-flex justify-content-between align-items-center mt-2"<\'length-wrapper\'l><\'info-wrapper\'i><\'pagination-wrapper\'p>>',
      language: {
      paginate: {
        previous: '<i class="ri-arrow-left-double-line"></i>',
        next: '<i class="ri-arrow-right-double-line"></i>'
      },
      lengthMenu: "_MENU_"
      },
      pageLength: 25
      // t = table body only
      // <"class"ip> = info + pagination inside div left aligned, with margin-top
    });
    $('.dataTables_info').addClass('text-xs')
    $('.dataTables_length label select').removeClass('form-select')
    });


  </script>
@endsection