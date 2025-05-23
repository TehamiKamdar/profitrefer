@extends('layouts.publisher.layout')

@section('main-content')
  <div class="row mt-4 mt-md-0 mt-sm-0">
    <div class="col-lg-4 col-4 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10"></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-primary-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-primary ri-2x"></i>
        </div>

        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          1600
        </h5>
        <span class="text-light text-md fw-bold ">Total Transactions</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-4 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10"></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-green-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-green ri-2x"></i>
        </div>

        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          1600
        </h5>
        <span class="text-light text-md fw-bold ">Total Sales</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
          </ul>
        </div>
        <p class="text-danger text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-right-down-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-4 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10"></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-yellow-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-golden ri-2x"></i>
        </div>

        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          1600
        </h5>
        <span class="text-light text-md fw-bold ">Total Commission Earned</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>



  <div class="row my-4">
    <div class="col-lg-12">
    <div class="card">
      <div class="card-header bg-white text-white">
      <h6>Transactions</h6>
      </div>
      <!-- Controls: Date Range + Export Button -->
      <div class="container">
      <div class="col-12">
        <div class="row mb-3">
        <div class="d-flex justify-content-end align-items-center flex-wrap gap-2">


          <!-- Filter + Export Buttons -->
          <div class="d-flex align-items-center gap-2">

          <!-- Filter Dropdown -->
          <div class="dropdown">
            <button class="btn btn-sm btn-outline-primary" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="ri-xs ri-equalizer-line me-1"></i> Filter
            </button>
            <div class="dropdown-menu p-3" style="min-width: 250px;">
            <div class="mb-2">
              <label for="date-range-1" class="form-label mb-1">Select Date Range</label>
              <select id="date-range-1" class="form-select form-select-sm">
              <option value="" selected>Select Date Range</option>
              <option value="today">Today</option>
              <option value="yesterday">Yesterday</option>
              <option value="last_7_days">Last 7 Days</option>
              <option value="last_30_days">Last 30 Days</option>
              <option value="this_month">This Month</option>
              <option value="last_month">Last Month</option>
              <option value="current_year">Current Year</option>
              <option value="previous_year">Previous Year</option>
              </select>
            </div>
            <div>
              <label for="status-range" class="form-label mb-1">Select Status</label>
              <select id="status-range" class="form-select form-select-sm">
              <option value="All" selected>All</option>
              <option value="Pending">Pending</option>
              <option value="Approved">Approved</option>
              <option value="Declined">Declined</option>
              <option value="Paid">Paid</option>
              </select>
            </div>
            </div>
          </div>

          <!-- Export Button -->
          <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exportModal">
            <i class="fa fa-file-export me-2"></i>Export
          </button>
          </div>
        </div>
        </div>

        <!-- Export Modal -->
        <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exportModalLabel">
            <i class="fa fa-file-export me-2 text-success"></i>Export Options
            </h5>
            <button type="button" class="btn bg-danger btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <p class="text-sm text-muted">
            After your request is completed, the formatted file you requested will be available for
            download in the
            <strong>Tools &gt; Download Export Files</strong> section.
            </p>
            <h6>Select the format in which you want to export the data:</h6>
            <div class="d-grid gap-2">
            <button class="btn btn-outline-success">
              <i class="fa fa-file-csv me-2"></i>Export as CSV
            </button>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>

          </div>
        </div>
        </div>

      </div>
      </div>

      <div class="col-12">
      <div class="card-body">
        <table class="table table-responsive table-hover">
        <thead>
          <tr>
          <th><small class="text-muted d-block text-xs fw-bold">Advertiser</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Transaction ID</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Date</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Sales Amount</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Comm. Amount</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Status</small></th>
          <th><small class="text-muted d-block text-xs fw-bold">Action</small></th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle border-bottom">
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">Allegra K.</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
              Website</a>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TXN10234</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">20-05-2025</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$1,250</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$37.5</h6>
            </div>
          </td>
          <td>
            <div>
            <div class="d-flex align-items-center">
              <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
              <h6 class="fw-semibold text-dark mt-2">Approved</h6>
            </div>
            </div>
          </td>
          <td class="text-nowrap" style="width: 1px;">
            <div class="d-flex gap-2">
            <a href="./view-advertiser.html" title="View">
              <i class="ri-lg ri-eye-line text-primary bg-primary-light border-radius-2xl p-2"></i>
            </a>
            </div>
          </td>
          </tr>

          <tr class="align-middle border-bottom">
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TechNova</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
              Website</a>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TXN10235</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">21-05-2025</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$980</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$37.5</h6>
            </div>
          </td>
          <td>
            <div>
            <div class="d-flex align-items-center">
              <span class="rounded-circle bg-warning me-2" style="width:10px; height:10px;"></span>
              <h6 class="fw-semibold text-dark mt-2">Pending</h6>
            </div>
            </div>
          </td>
          <td class="text-nowrap" style="width: 1px;">
            <div class="d-flex gap-2">
            <a href="./view-advertiser.html" title="View">
              <i class="ri-lg ri-eye-line text-primary bg-primary-light border-radius-2xl p-2"></i>
            </a>
            </div>
          </td>
          </tr>

          <tr class="align-middle border-bottom">
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">Digital Hive</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
              Website</a>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TXN10235</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">22-05-2025</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$2,135</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$37.5</h6>
            </div>
          </td>
          <td>
            <div>
            <div class="d-flex align-items-center">
              <span class="rounded-circle bg-danger me-2" style="width:10px; height:10px;"></span>
              <h6 class="fw-semibold text-dark mt-2">Rejected</h6>
            </div>
            </div>
          </td>
          <td class="text-nowrap" style="width: 1px;">
            <div class="d-flex gap-2">
            <a href="./view-advertiser.html" title="View">
              <i class="ri-lg ri-eye-line text-primary bg-primary-light border-radius-2xl p-2"></i>
            </a>
            </div>
          </td>
          </tr>

          <tr class="align-middle border-bottom">
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">GlowAds</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
              Website</a>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TXN10237</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">23-05-2025</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$3,410</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$37.5</h6>
            </div>
          </td>
          <td>
            <div>
            <div class="d-flex align-items-center">
              <span class="rounded-circle bg-primary me-2" style="width:10px; height:10px;"></span>
              <h6 class="fw-semibold text-dark mt-2">Processing</h6>
            </div>
            </div>
          </td>
          <td class="text-nowrap" style="width: 1px;">
            <div class="d-flex gap-2">
            <a href="./view-advertiser.html" title="View">
              <i class="ri-lg ri-eye-line text-primary bg-primary-light border-radius-2xl p-2"></i>
            </a>
            </div>
          </td>
          </tr>

          <tr class="align-middle border-bottom">
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">AdSmart</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
              Website</a>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">TXN10238</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">24-05-2025</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$890</h6>
            </div>
          </td>
          <td>
            <div>
            <h6 class="fw-semibold text-dark mt-2">$37.5</h6>
            </div>
          </td>
          <td>
            <div>
            <div class="d-flex align-items-center">
              <span class="rounded-circle bg-secondary me-2" style="width:10px; height:10px;"></span>
              <h6 class="fw-semibold text-dark mt-2">Failed</h6>
            </div>
            </div>
          </td>
          <td class="text-nowrap" style="width: 1px;">
            <div class="d-flex gap-2">
            <a href="./view-advertiser.html" title="View">
              <i class="ri-lg ri-eye-line text-primary bg-primary-light border-radius-2xl p-2"></i>
            </a>
            </div>
          </td>
          </tr>

        </tbody>
        </table>
        <div id="custom-length-container" class="mb-3"></div>
      </div>
      </div>
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