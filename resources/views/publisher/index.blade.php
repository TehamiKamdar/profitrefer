@extends('layouts.publisher.main')

@section('main-content')
<div class="row">

        <!-- Commission Summary Card -->
        <div class="col-lg-6 col-4 mb-md-4 mb-sm-4 mb-xs-4">
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
                  <span class="text-light text-md fw-bold ">Approved Amount</span>
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
        <div class="col-lg-6 col-4 mb-md-4 mb-sm-4 mb-xs-4">
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
                    357
                  </h5>
                  <span class="text-light text-md fw-bold ">Pending Amount</span>
                </div>
                <div class="col-4">
                  <div class="dropdown text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
                      class="ri-lg ri-arrow-left-up-box-line"></i>124%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-4 mb-md-4 mb-sm-4 mb-xs-4">
          <div class="card">
            <span class="mask bg-white opacity-10"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="bg-orange-light border-radius-2xl d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px;">
                    <i class="ri-money-dollar-circle-fill text-orange ri-2x"></i>
                  </div>
                  <h5 class="text-dark font-weight-bolder mb-0 mt-3">
                    2300
                  </h5>
                  <span class="text-light text-md fw-bold ">Rejected Amount</span>
                </div>
                <div class="col-4">
                  <div class="dropdown text-end mb-6">
                    <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-h text-white"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                  <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
                      class="ri-lg ri-arrow-left-up-box-line"></i>15%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-4 mb-md-4 mb-sm-4 mb-xs-4">
          <div class="card">
            <span class="mask bg-white opacity-10"></span>
            <div class="card-body p-3 position-relative">
              <div class="row">
                <div class="col-8 text-start">
                  <div class="bg-purple-light border-radius-2xl d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px;">
                    <i class="ri-money-dollar-circle-fill text-purple ri-2x"></i>
                  </div>
                  <h5 class="text-dark font-weight-bolder mb-0 mt-3">
                    1600
                  </h5>
                  <span class="text-light text-md fw-bold">Tracked Amount</span>
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

      </div>



      <!-- Graph Chart Start -->
      <div class="row my-4">

        <div class="col-12 col-lg-9">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                  <h6 class="text-sm text-center">Sales Graph <span class="text-xs">(Current Month)</span></h6>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart position-relative" style="height:250px; overflow-x: auto; overflow-y: hidden;">
                <div id="chart-bar" style="height: 250px;"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <div class="card-header">
              <h6 class="text-sm">Sales Overview <span class="text-xs">(Current Month)</span></h6>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Approved Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-danger me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Rejected Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-warning me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Pending Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-purple me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Total Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>
            </div>


          </div>
        </div>


      </div>
      <div class="row my-4">
        <div class="col-3">
          <div class="card">
            <div class="card-header">
              <h6 class="text-sm">Sales Overview <span class="text-xs">(Current Month)</span></h6>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Approved Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-danger me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Rejected Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-warning me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Pending Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                <div class="d-flex align-items-center">
                  <span class="rounded-circle bg-purple me-2" style="width:10px; height:10px;"></span>
                  <h6 class="text-xs mb-0">Total Sales</h6>
                </div>
                <p class="mb-0">$1509.98</p>
              </div>
            </div>


          </div>
        </div>
        <div class="col-12 col-lg-9">
          <div class="card h-100">
            <div class="card-header">
              <h6 class="text-sm">Line Chart 2</h6>
            </div>
            <div class="card-body p-2">
              <div class="chart position-relative" style="height: 250px; overflow-x: auto; overflow-y: hidden;">
                <div id="chart-area" style="height: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-4">

        <div class="col-12 mb-4">
          <div class="card ">
            <div class="card-header bg-white text-white">
              <div class="d-flex justify-content-between">
                <h6 class="text-sm">Transactions</h6>
              </div>
            </div>


            <div class="card-body">
              <table class="table table-responsive table-hover">
                <tbody>
                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Transaction ID</small>
                        <h6 class="fw-semibold text-dark mt-2">TXN10234</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Date</small>
                        <h6 class="fw-semibold text-dark mt-2">20-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Amount</small>
                        <h6 class="fw-semibold text-dark mt-2">$1,250</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
                        <div class="d-flex align-items-center">
                          <span class="rounded-circle bg-success me-2" style="width:10px; height:10px;"></span>
                          <h6 class="fw-semibold text-dark mt-2">Approved</h6>
                        </div>
                      </div>
                    </td>
                    <td style="width: 30px;">
                      <div class="dropdown">
                        <button class="bg-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Transaction ID</small>
                        <h6 class="fw-semibold text-dark mt-2">TXN10235</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Date</small>
                        <h6 class="fw-semibold text-dark mt-2">21-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Amount</small>
                        <h6 class="fw-semibold text-dark mt-2">$980</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
                        <div class="d-flex align-items-center">
                          <span class="rounded-circle bg-warning me-2" style="width:10px; height:10px;"></span>
                          <h6 class="fw-semibold text-dark mt-2">Pending</h6>
                        </div>
                      </div>
                    </td>
                    <td style="width: 30px;">
                      <div class="dropdown">
                        <button class="bg-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Transaction ID</small>
                        <h6 class="fw-semibold text-dark mt-2">TXN10236</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Date</small>
                        <h6 class="fw-semibold text-dark mt-2">22-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Amount</small>
                        <h6 class="fw-semibold text-dark mt-2">$2,135</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
                        <div class="d-flex align-items-center">
                          <span class="rounded-circle bg-danger me-2" style="width:10px; height:10px;"></span>
                          <h6 class="fw-semibold text-dark mt-2">Rejected</h6>
                        </div>
                      </div>
                    </td>
                    <td style="width: 30px;">
                      <div class="dropdown">
                        <button class="bg-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Transaction ID</small>
                        <h6 class="fw-semibold text-dark mt-2">TXN10237</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Date</small>
                        <h6 class="fw-semibold text-dark mt-2">23-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Amount</small>
                        <h6 class="fw-semibold text-dark mt-2">$3,410</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
                        <div class="d-flex align-items-center">
                          <span class="rounded-circle bg-primary me-2" style="width:10px; height:10px;"></span>
                          <h6 class="fw-semibold text-dark mt-2">Processing</h6>
                        </div>
                      </div>
                    </td>
                    <td style="width: 30px;">
                      <div class="dropdown">
                        <button class="bg-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Transaction ID</small>
                        <h6 class="fw-semibold text-dark mt-2">TXN10238</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Date</small>
                        <h6 class="fw-semibold text-dark mt-2">24-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Amount</small>
                        <h6 class="fw-semibold text-dark mt-2">$890</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
                        <div class="d-flex align-items-center">
                          <span class="rounded-circle bg-secondary me-2" style="width:10px; height:10px;"></span>
                          <h6 class="fw-semibold text-dark mt-2">Failed</h6>
                        </div>
                      </div>
                    </td>
                    <td style="width: 30px;">
                      <div class="dropdown">
                        <button class="bg-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">View</a></li>
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>





          </div>
        </div>


      </div>

      <div class="row g-4">
        <div class="col-12">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12">
              <div class="card mb-4">
                <div class="card-header">
                  <h6 class="mb-0 text-center">Users Record</h6>
                </div>
                <div class="card-body">
                  <div id="chart1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-12 mb-4">
          <div class="card ">
            <div class="card-header bg-white text-white">
              <div class="d-flex justify-content-between">
                <h6 class="text-sm">Advertisers</h6>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-responsive table-hover">
                <tbody>
                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
                        <h6 class="fw-semibold text-dark mt-2">Allegra K.</h6>
                        <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Joining Date</small>
                        <h6 class="fw-semibold text-dark mt-2">20-05-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Region</small>
                        <img src="https://flagsapi.com/PK/flat/24.png" title="PK" class="img-fluid cursor-pointer"
                          alt="">
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
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
                        <a href="#" title="Edit">
                          <i class="ri-lg ri-file-edit-line text-green bg-green-light border-radius-2xl p-2"></i>
                        </a>
                        <a href="#" title="Delete">
                          <i class="ri-lg ri-delete-bin-line text-danger bg-orange-light border-radius-2xl p-2"></i>
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
                        <h6 class="fw-semibold text-dark mt-2">TechNova</h6>
                        <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Joining Date</small>
                        <h6 class="fw-semibold text-dark mt-2">12-04-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Region</small>
                        <img src="https://flagsapi.com/US/flat/24.png" title="US" class="img-fluid cursor-pointer"
                          alt="">
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
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
                        <a href="#" title="Edit">
                          <i class="ri-lg ri-file-edit-line text-green bg-green-light border-radius-2xl p-2"></i>
                        </a>
                        <a href="#" title="Delete">
                          <i class="ri-lg ri-delete-bin-line text-danger bg-orange-light border-radius-2xl p-2"></i>
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
                        <h6 class="fw-semibold text-dark mt-2">Digital Hive</h6>
                        <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Joining Date</small>
                        <h6 class="fw-semibold text-dark mt-2">01-01-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Region</small>
                        <img src="https://flagsapi.com/IN/flat/24.png" title="IN" class="img-fluid cursor-pointer"
                          alt="">
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
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
                        <a href="#" title="Edit">
                          <i class="ri-lg ri-file-edit-line text-green bg-green-light border-radius-2xl p-2"></i>
                        </a>
                        <a href="#" title="Delete">
                          <i class="ri-lg ri-delete-bin-line text-danger bg-orange-light border-radius-2xl p-2"></i>
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
                        <h6 class="fw-semibold text-dark mt-2">GlowAds</h6>
                        <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Joining Date</small>
                        <h6 class="fw-semibold text-dark mt-2">15-02-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Region</small>
                        <img src="https://flagsapi.com/GB/flat/24.png" title="GB" class="img-fluid cursor-pointer"
                          alt="">
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
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
                        <a href="#" title="Edit">
                          <i class="ri-lg ri-file-edit-line text-green bg-green-light border-radius-2xl p-2"></i>
                        </a>
                        <a href="#" title="Delete">
                          <i class="ri-lg ri-delete-bin-line text-danger bg-orange-light border-radius-2xl p-2"></i>
                        </a>
                      </div>
                    </td>
                  </tr>

                  <tr class="align-middle border-bottom">
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
                        <h6 class="fw-semibold text-dark mt-2">AdSmart</h6>
                        <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Joining Date</small>
                        <h6 class="fw-semibold text-dark mt-2">07-03-2025</h6>
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Region</small>
                        <img src="https://flagsapi.com/CA/flat/24.png" title="CA" class="img-fluid cursor-pointer"
                          alt="">
                      </div>
                    </td>
                    <td>
                      <div>
                        <small class="text-muted d-block text-xs fw-bold">Status</small>
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
                        <a href="#" title="Edit">
                          <i class="ri-lg ri-file-edit-line text-green bg-green-light border-radius-2xl p-2"></i>
                        </a>
                        <a href="#" title="Delete">
                          <i class="ri-lg ri-delete-bin-line text-danger bg-orange-light border-radius-2xl p-2"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>

              </table>

            </div>





          </div>
        </div>


      </div>
      <!-- Graph Chart End -->


      <div class="row g-4">
        <!-- Chart Line 2 -->


        <div class="col-12 mt-4">
          <!-- Tabs -->
          <ul class="nav" id="mainTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary mb-0 btn-sm active" id="trackinglink-tab" data-bs-toggle="tab"
                data-bs-target="#trackinglink" type="button" role="tab" aria-controls="trackinglink"
                aria-selected="true">
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
                              href="https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583"
                              target="_blank" style="word-break: break-all;">
                              https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583
                            </a>
                            <input type="text" id="copyText"
                              value="https://app.theaffilo.com/track?linkmid=386129147&linkaffid=79526583" hidden>
                            <button id="copyBtn" class="btn btn-primary mt-3 w-auto">Copy Link</button>
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
                            <button id="copyBtn2" class="btn btn-primary mt-3 w-auto">Copy Link</button>
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
                        <p class="text-success text-sm mt-2"><i class="fa fa-check"></i> Deep Link</p>
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
@endsection
@section('partial-scripts')
<script>
    // ✅ Helper function to get current month dates and dummy data
    function generateCurrentMonthData() {
      const now = new Date();
      const year = now.getFullYear();
      const month = now.getMonth(); // 0-based
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      const labels = [];
      const barData = [];
      const areaData = [];

      for (let i = 1; i <= daysInMonth; i++) {
        const dateLabel = `${i} ${now.toLocaleString('default', { month: 'short' })}`;
        labels.push(dateLabel);
        barData.push(Math.floor(Math.random() * 100)); // Random bar value
        areaData.push(Math.floor(Math.random() * 80));  // Random area value
      }

      return { labels, barData, areaData };
    }

    const { labels, barData, areaData } = generateCurrentMonthData();

    const previousBarData = barData.map(val => Math.floor(val * (0.7 + Math.random() * 0.4)));

    // ✅ Bar Chart
    var barOptions = {
      chart: {
        type: 'bar',
        height: 250,
        toolbar: { show: false }
      },
      colors: ['#02c0ce', '#ad6beb'], // You can define multiple colors here
      series: [
        {
          name: 'Current Year',
          data: barData // Example: [100, 200, 300]
        },
        {
          name: 'Previous Year',
          data: previousBarData // Example: [80, 150, 250]
        }
      ],
      xaxis: {
        categories: labels, // Example: ['Jan', 'Feb', 'Mar']
        labels: { rotate: -45 }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        position: 'bottom', // 👇 legend below chart
        markers: {
          radius: 12 // optional: makes legend dots rounder
        }
      },
      plotOptions: {
        bar: {
          columnWidth: '60%',
          borderRadius: 8 // Optional: adjust width for clarity
        }
      }
    };


    var barChart = new ApexCharts(document.querySelector("#chart-bar"), barOptions);
    barChart.render();
    const secondAreaData = areaData.map(val => Math.floor(val * 0.7)); // or any other values

    // ✅ Area Chart
    var areaOptions = {
      chart: {
        type: 'area',
        height: 250,
        toolbar: { show: false }
      },
      series: [
        {
          name: 'Revenue',
          data: areaData
        },
        {
          name: 'Profit',
          data: secondAreaData // ✅ Define this array like areaData
        }
      ],
      colors: ['#00c6ff', '#22c55e'], // 💙 Revenue (blue), 💚 Profit (green)
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      xaxis: {
        categories: labels,
        labels: {
          rotate: -45,
          formatter: function (value, index) {
            return index % 2 === 0 ? value : '';
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'vertical',
          shadeIntensity: 0.4,
          gradientToColors: ['#00c6ff', '#28a745'], // match the series colors
          inverseColors: false,
          opacityFrom: 0.85,
          opacityTo: 0.6,
          stops: [0, 100]
        }
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        position: 'bottom', // 👇 legend below chart
        markers: {
          radius: 10 // optional: makes legend dots rounder
        }
      }
    };

    var areaChart = new ApexCharts(document.querySelector("#chart-area"), areaOptions);
    areaChart.render();
  </script>

  <script>
    function renderDonutChart(selector, seriesData, labelsData) {
      var options = {
        chart: {
          type: 'donut',
          height: 260
        },
        series: seriesData,
        labels: labelsData,
        colors: ['#60ccc3', '#02c0ce', '#00aebb'],
        legend: {
          show: true,           // ✅ Enable legend
          position: 'bottom',   // 'top', 'bottom', 'left', 'right'
          markers: {
            radius: 12          // Optional: round legend markers
          },
          labels: {
            useSeriesColors: false // Optional: keeps the colors from `colors` array
          }
        },
        plotOptions: {
          pie: {
            donut: {
              labels: {
                show: true,
                total: {
                  show: true,
                  label: 'Total',
                  formatter: function (w) {
                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0) + '%';
                  }
                }
              }
            }
          }
        }
      };

      new ApexCharts(document.querySelector(selector), options).render();
    }

    // Render all three charts
    renderDonutChart("#chart1", [60, 25, 15], ["Completed", "Pending", "Rejected"]);
    // renderDonutChart("#chart2", [40, 35, 25], ["Completed", "Pending", "Rejected"]);
    // renderDonutChart("#chart3", [80, 10, 10], ["Completed", "Pending", "Rejected"]);
  </script>
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
@endsection
