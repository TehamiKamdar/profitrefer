@extends('layouts.publisher.layout')

@section('main-content')
<h5 class="text-end text-sm">Total Results: <span class="text-sm">2957</span></h5>


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th><input type="checkbox" name="" id="selectAll" class=""></th>
                    <th><small class="text-muted d-block text-xs fw-bold">Advertiser</small></th>
                    <th><small class="text-muted d-block text-xs fw-bold">Website Url</small></th>
                    <th><small class="text-muted d-block text-xs fw-bold">Deep Link</small></th>
                    <th><small class="text-muted d-block text-xs fw-bold">Deep Short Link</small></th>
                    <th><small class="text-muted d-block text-xs fw-bold">Sub ID</small></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Advertiser 1 -->
                  <tr>
                    <td>
                      <input type="checkbox" class=" multi-select">
                    </td>
                    <td>
                      <div class="d-flex align-items-center">

                        <div>
                          <div class="fw-bold">Amazon</div>
                          <small class="text-muted">ID: AMZ-001</small>
                        </div>
                      </div>
                    </td>
                    <td class="link-cell">
                      <a href="https://www.amazon.com" target="_blank" class="nav-link text-sm">amazon.com</a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://track.mysite.com/amz?ref=12345 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://mysite.link/amz123 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td>-</td>
                  </tr>

                  <!-- Advertiser 2 -->
                  <tr>
                    <td>
                      <input type="checkbox" class=" multi-select">
                    </td>
                    <td>
                      <div class="d-flex align-items-center">

                        <div>
                          <div class="fw-bold">eBay</div>
                          <small class="text-muted">ID: EBY-002</small>
                        </div>
                      </div>
                    </td>
                    <td class="link-cell">
                      <a href="https://www.ebay.com" target="_blank" class="nav-link text-sm">ebay.com</a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://track.mysite.com/eby?ref=54321 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://mysite.link/eby543 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td>-</td>
                  </tr>
                  <!-- Advertiser 3 -->
                  <tr>
                    <td>
                      <input type="checkbox" class=" multi-select">
                    </td>
                    <td>
                      <div class="d-flex align-items-center">

                        <div>
                          <div class="fw-bold">Best Buy</div>
                          <small class="text-muted">ID: BBY-003</small>
                        </div>
                      </div>
                    </td>
                    <td class="link-cell">
                      <a href="https://www.bestbuy.com" target="_blank" class="nav-link text-sm">bestbuy.com</a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://track.mysite.com/bby?ref=98765 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://mysite.link/bby987 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td>-</td>
                  </tr>

                  <!-- Advertiser 4 -->
                  <tr>
                    <td>
                      <input type="checkbox" class=" multi-select">
                    </td>
                    <td>
                      <div class="d-flex align-items-center">

                        <div>
                          <div class="fw-bold">Walmart</div>
                          <small class="text-muted">ID: WMT-004</small>
                        </div>
                      </div>
                    </td>
                    <td class="link-cell">
                      <a href="https://www.walmart.com" target="_blank" class="nav-link text-sm">walmart.com</a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://track.mysite.com/wmt?ref=45678 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td class="link-cell">
                      <a href="#" class="nav-link text-sm">https://mysite.link/wmt456 <i
                          class="fas fa-copy copy-btn ms-2 cursor-pointer" title="Copy link"></i></a>
                    </td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
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

  <script>
    const selectAll = document.getElementById("selectAll");
    const checkboxes = document.querySelectorAll(".multi-select");

    selectAll.addEventListener("change", function () {
      checkboxes.forEach(checkbox => {
        checkbox.checked = this.checked;
      });
    });

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener("change", function () {
        if (!this.checked) {
          selectAll.checked = false;
        } else if (document.querySelectorAll(".multi-select:checked").length === checkboxes.length) {
          selectAll.checked = true;
        }
      });
    });
    // Copy link functionality
    document.querySelectorAll('.copy-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        const link = this.closest('a').textContent.trim(); // Get full link text
        navigator.clipboard.writeText(link);

        // Initialize tooltip if not already
        const tooltip = bootstrap.Tooltip.getInstance(this) || new bootstrap.Tooltip(this, {
          title: 'Copied!',
          trigger: 'manual'
        });

        tooltip.show();

        setTimeout(() => {
          tooltip.hide();
        }, 1000);
      });
    });


    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
@endsection