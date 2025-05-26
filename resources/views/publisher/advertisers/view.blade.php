@extends('layouts.publisher.layout')

@section('main-content')
  <div class="col-12 mb-4">
    <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-end mb-4 ">
      <span class="badge bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
      </div>
      <div class="row align-items-center">
      <!-- Company Details -->
      <div class="col-6">
        <h4 class="mb-1">Amazon Inc.</h4>
        <p class="mb-1 text-muted text-sm">Commission Rate: <strong>5%</strong></p>
        <p class="mb-1 text-muted text-sm">Avg Payout: <strong>30 Days</strong></p>
        <p class="mb-1 text-muted text-sm">Region: <img src="https://flagsapi.com/CA/flat/24.png" title="Canada"
          class="img-fluid cursor-pointer" alt=""><img src="https://flagsapi.com/BR/flat/24.png" title="Brazil"
          class="img-fluid cursor-pointer" alt=""><img src="https://flagsapi.com/PK/flat/24.png" title="Pakistan"
          class="img-fluid cursor-pointer" alt=""><img src="https://flagsapi.com/US/flat/24.png"
          title="United States" class="img-fluid cursor-pointer" alt=""><img
          src="https://flagsapi.com/CZ/flat/24.png" title="Czech Republic" class="img-fluid cursor-pointer" alt="">
        </p>
        <a href="https://amazon.com" target="_blank" class="text-primary text-xs d-inline-flex align-items-center">
        <i class="ri-link-m me-1"></i> Visit Website
        </a>
      </div>

      <!-- Company Logo -->
      <div class="col-6 text-end">
        <img src="https://logo.clearbit.com/amazon.com" alt="Amazon Logo" class="img-fluid"
        style="max-height: 20 0px;">
      </div>
      </div>
    </div>
    </div>
  </div>


  <div class="col-12 mb-4">
    <ul class="nav" id="mainTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="btn btn-outline-primary mb-0 btn-sm active" id="description-tab" data-bs-toggle="tab"
      data-bs-target="#description" type="button" role="tab" aria-controls="description"
      aria-selected="false">Description</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="btn btn-outline-primary mx-1 btn-sm" id="transactions-tab" data-bs-toggle="tab"
      data-bs-target="#transactions" type="button" role="tab" aria-controls="transactions"
      aria-selected="true">Transactions</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="btn btn-outline-primary mb-0 btn-sm" id="links-tab" data-bs-toggle="tab" data-bs-target="#links"
      type="button" role="tab" aria-controls="links" aria-selected="true">Links</button>
    </li>
    </ul>

    <div class="tab-content mt-3" id="mainTabContent">

    <!-- Description Tab -->
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <div class="col-12">
      <div class="row">
        <div class="col-6">
        <div class="card">
          <div class="card-header">
          <h6>Description</h6>
          </div>
          <div class="card-body">
          <p class="text-sm text-center">
            Amazon is a global leader in e-commerce, cloud computing, and digital streaming.
            Founded in 1994
            by Jeff Bezos, the company has revolutionized the way the world shops online. With a
            commitment
            to customer satisfaction, fast delivery, and a vast selection of products, Amazon
            empowers
            millions of customers and businesses worldwide. Whether it’s through Prime
            membership, Alexa
            smart devices, or AWS cloud solutions, Amazon continues to innovate and shape the
            future of
            digital commerce and technology.
          </p>
          </div>
        </div>
        </div>
        <div class="col-6">
        <div class="card">
          <div class="card-header">
          <h6>Terms & Condition</h6>
          </div>
          <div class="card-body">
          <p class="text-sm text-center">
            By using Amazon services, customers agree to comply with its terms and policies,
            including
            responsible use of accounts, adherence to return and refund policies, and respect
            for content
            and intellectual property rights. Product availability, pricing, and promotions may
            change
            without notice. All users are encouraged to read the full Terms of Service and
            Privacy Policy to
            understand their rights and obligations. Misuse of the platform may result in
            account suspension
            or other corrective action.
          </p>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>



    <!-- Transactions Tab -->
    <div class="tab-pane fade" id="transactions" role="tabpanel" aria-labelledby="transactions-tab">
      <div class="col-12">
      <div class="card">
        <div class="card-body">
        <table class="table table-responsive table-hover">
          <thead>
          <tr>
            <th><small class="text-muted d-block text-xs fw-bold">Transaction ID</small></th>
            <th><small class="text-muted d-block text-xs fw-bold">Date</small></th>
            <th><small class="text-muted d-block text-xs fw-bold">Sales Amount</small></th>
            <th><small class="text-muted d-block text-xs fw-bold">Comm. Amount</small></th>
            <th><small class="text-muted d-block text-xs fw-bold">Status</small></th>
          </tr>
          </thead>
          <tbody>
          <tr class="align-middle border-bottom">
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

          </tr>

          <tr class="align-middle border-bottom">
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

          </tr>

          <tr class="align-middle border-bottom">
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

          </tr>

          <tr class="align-middle border-bottom">
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

          </tr>

          <tr class="align-middle border-bottom">
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

          </tr>

          </tbody>
        </table>
        <div id="custom-length-container" class="mb-3"></div>
        </div>
      </div>
      </div>
    </div>



    <!-- Links Tab -->
    <div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
      <div class="col-12 mt-4">
      <!-- Tabs -->
      <ul class="nav" id="mainTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="btn btn-outline-primary mb-0 btn-sm active" id="trackinglink-tab" data-bs-toggle="tab"
          data-bs-target="#trackinglink" type="button" role="tab" aria-controls="trackinglink" aria-selected="true">
          Tracking Links
        </button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="btn btn-outline-primary mb-0 mx-1 btn-sm" id="deeplink-tab" data-bs-toggle="tab"
          data-bs-target="#deeplink" type="button" role="tab" aria-controls="deeplink" aria-selected="false">
          Create Deep Link
        </button>
        </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content mt-3" id="mainTabContent">
        <!-- Information Tab -->
        <div class="tab-pane fade show active" id="trackinglink" role="tabpanel" aria-labelledby="trackinglink-tab">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
          <div style="width: 25%;">
            <h6 class="text-sm">Tracking Links</h6>
            <p class="text-sm text-secondary mb-0">Promote a Brand with a simple link.</p>
          </div>
          <div>
            <ul class="nav" id="mainTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary mb-0 btn-sm active" id="trackingLink-tab"
              data-bs-toggle="tab" data-bs-target="#trackingLink" type="button" role="tab"
              aria-controls="trackingLink" aria-selected="true">
              Tracking Link
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary mb-0 mx-1 btn-sm" id="shorttrackingLink-tab"
              data-bs-toggle="tab" data-bs-target="#shorttrackingLink" type="button" role="tab"
              aria-controls="shorttrackingLink" aria-selected="false">
              Short Tracking Link
              </button>
            </li>
            </ul>
          </div>
          </div>
          <div class="card-body px-4 py-0">
          <div class="tab-content mt-3" id="linkTabContent">
            <div class="tab-pane fade active show" id="trackingLink" role="tabpanel"
            aria-labelledby="trackingLink-tab">
            <!-- Tracking Link -->
            <div class="card mb-4">
              <div class="card-header">
              <h6 class="text-sm">Tracking Link</h6>
              </div>
              <div class="card-body border-top">
              <div class="d-flex flex-column">
                <a class="text-sm text-primary"
                href="https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583" target="_blank"
                style="word-break: break-all;">
                https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583
                </a>
                <input type="text" id="copyText"
                value="https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583" hidden>
                <button id="copyBtn" class="btn btn-primary mt-3 w-auto">Copy
                Link</button>
              </div>
              </div>
            </div>
            </div>
            <div class="tab-pane fade" id="shorttrackingLink" role="tabpanel"
            aria-labelledby="shorttrackingLink-tab">

            <!-- Short Tracking Link -->
            <div class="card mb-4">
              <div class="card-header">
              <h6 class="text-sm">Short Tracking Link</h6>
              </div>
              <div class="card-body border-top">
              <div class="d-flex flex-column">
                <a class="text-sm text-primary" href="https://app.theaffilo.com/short/pdqKVMGnF1"
                target="_blank" style="word-break: break-all;">
                https://app.theaffilo.com/short/pdqKVMGnF1
                </a>
                <input type="text" id="copyText2" value="https://app.theaffilo.com/short/pdqKVMGnF1" hidden>
                <button id="copyBtn2" class="btn btn-primary mt-3 w-auto">Copy
                Link</button>
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>

        <!-- Company Tab -->
        <div class="tab-pane fade" id="deeplink" role="tabpanel" aria-labelledby="deeplink-tab">
        <div class="card">

          <div class="card">
          <div class="card-header">
            <h6 class="text-sm">Create A Link</h6>
            <p class="text-sm text-secondary">Promote a Brand with a simple link.</p>
          </div>
          <div class="card-body px-4 py-0">
            <form>
            <div class="row mb-4">
              <div>
              <input type="text" class="form-control" placeholder="Brand Name" required>
              </div>
              <p class="text-success text-sm mt-2"><i class="fa fa-check"></i> Deep Link
              </p>
              <div class="mb-3">
              <input type="text" class="form-control" placeholder="Enter Landing Page (Optional)">
              </div>
              <div>
              <input type="text" class="form-control" placeholder="Enter Sub ID (Optional)">
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Create</button>
            </form>
          </div>
          </div>
        </div>
        </div>
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
    const copyBtn = document.getElementById('copyBtn');
    const copyText = document.getElementById('copyText');

    copyBtn.addEventListener('click', () => {
    // Copy to clipboard
    navigator.clipboard.writeText(copyText.value).then(() => {
      // Change button style and text
      copyBtn.classList.remove('btn-primary');
      copyBtn.classList.add('btn-success');
      copyBtn.textContent = 'Copied!';

      // Optional: revert after a delay
      setTimeout(() => {
      copyBtn.classList.remove('btn-success');
      copyBtn.classList.add('btn-primary');
      copyBtn.textContent = 'Copy Link';
      }, 2000);
    });
    });

    const copyBtn2 = document.getElementById('copyBtn2');
    const copyText2 = document.getElementById('copyText2');

    copyBtn2.addEventListener('click', () => {
    // Copy to clipboard
    navigator.clipboard.writeText(copyText2.value).then(() => {
      // Change button style and text
      copyBtn2.classList.remove('btn-primary');
      copyBtn2.classList.add('btn-success');
      copyBtn2.textContent = 'Copied!';

      // Optional: revert after a delay
      setTimeout(() => {
      copyBtn.classList.remove('btn-success');
      copyBtn.classList.add('btn-primary');
      copyBtn.textContent = 'Copy Link';
      }, 2000);
    });
    });
  </script>

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