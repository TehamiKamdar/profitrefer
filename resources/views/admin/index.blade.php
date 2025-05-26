@extends('layouts.admin.layout')

@section('main-content')
  <div class="row">
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
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
        <span class="text-secondary text-sm">Total Sales</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-purple-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-purple ri-2x"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          357
        </h5>
        <span class="text-secondary text-sm">Total Commissions</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-green-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-green ri-2x"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          2300
        </h5>
        <span class="text-secondary text-sm">Approved Commission</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-danger-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-danger ri-2x"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          940
        </h5>
        <span class="text-secondary text-sm">Declined Commission</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-yellow-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-warning ri-2x"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          1600
        </h5>
        <span class="text-secondary text-sm">Pending Commission</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-lg-4 col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-info-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-money-dollar-circle-fill text-info ri-2x"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          357
        </h5>
        <span class="text-secondary text-sm">Latest Invoices</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
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


  <!-- Graph Chart Start -->
  <div class="row my-4">
    <div class="col-12">
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
  </div>
  <!-- Graph Chart End -->

  <div class="card mb-4">
    <div class="card-header pb-3">
    <h6>Advertisers Overview</h6>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-primary-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-user-line text-primary ri-xl"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          1600
        </h5>
        <span class="text-secondary text-sm">Total Advertisers</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-purple-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-user-line text-purple ri-xl"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          357
        </h5>
        <span class="text-secondary text-sm">New Advertisers</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-green-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-user-line text-green ri-xl"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          2300
        </h5>
        <span class="text-secondary text-sm">Active Advertisers</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="col-6 mb-md-4 mb-sm-4 mb-xs-4">
    <div class="card">
      <span class="mask bg-white opacity-10 "></span>
      <div class="card-body p-3 position-relative">
      <div class="row">
        <div class="col-8 text-start">
        <div class="bg-danger-light border-radius-2xl d-flex align-items-center justify-content-center"
          style="width: 50px; height: 50px;">
          <i class="ri-user-line text-danger ri-xl"></i>
        </div>
        <h5 class="text-dark font-weight-bolder mb-0 mt-3">
          940
        </h5>
        <span class="text-secondary text-sm">Inactive Advertisers</span>
        </div>
        <div class="col-4">
        <div class="dropdown text-end mb-6">
          <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa fa-ellipsis-h text-white"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        <p class="text-success text-md text-end font-weight-bolder mt-auto mb-0"><i
          class="ri-lg ri-arrow-left-up-box-line"></i>55%</p>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div> <!-- end row -->

  <div class="row g-4">
    <div class="col-12">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card mb-4">
        <div class="card-header">
        <h6 class="mb-0 text-center">Users Record</h6>
        </div>
        <div class="card-body">
        <div id="chart1"></div>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card mb-4">
        <div class="card-header">
        <h6 class="mb-0 text-center">Tracking Links (Monthly)</h6>
        </div>
        <div class="card-body">
        <div id="chart2"></div>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card mb-4">
        <div class="card-header">
        <h6 class="mb-0 text-center">Deep Links</h6>
        </div>
        <div class="card-body">
        <div id="chart3"></div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>

  <!-- Advertisers Table -->

  <div class="row my-4">
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
        <h6>Top 5 Advertisers of this month</h6>
        <p class="text-sm mb-0">
        </p>
        </div>
        <div class="col-lg-6 col-5 my-auto text-end">
        <div class="dropdown float-lg-end pe-4">
          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-ellipsis-v text-secondary"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        </div>
      </div>
      </div>
      <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
        <thead>
          <tr>
          <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
            Domain
          </th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
            Sales</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Commission
          </th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Transaction</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="team1">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-2.jpg')}}" alt="team2">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Alexander Smith">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="team3">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="team4">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $14,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">60%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-2.jpg')}}" alt="team5">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="team6">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $3,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">10%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="team8">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="team9">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> Not set </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">100%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user1">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="user2">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Alexander Smith">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user3">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="user4">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $20,500 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">100%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user5">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $500 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">25%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="25"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <h6 class="mb-0 text-center text-sm">Soft UI XD Version</h6>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="user6">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user7">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $2,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">40%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40"
              aria-valuemin="0" aria-valuemax="40"></div>
            </div>
            </div>
          </td>
          </tr>
        </tbody>
        </table>
      </div>
      </div>
    </div>
    </div>
  </div>


  <!-- Publishers Table -->

  <div class="row my-4">
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
        <h6>Top 5 Publishers of this month</h6>
        <p class="text-sm mb-0">
        </p>
        </div>
        <div class="col-lg-6 col-5 my-auto text-end">
        <div class="dropdown float-lg-end pe-4">
          <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-ellipsis-v text-secondary"></i>
          </a>
          <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
          </li>
          <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
            here</a></li>
          </ul>
        </div>
        </div>
      </div>
      </div>
      <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
        <thead>
          <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Companies</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
            Members</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Budget
          </th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
            Completion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-xd.svg')}}" class="avatar avatar-sm me-3"
              alt="xd">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Soft UI XD Version</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="team1">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-2.jpg')}}" alt="team2">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Alexander Smith">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="team3">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="team4">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $14,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">60%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-atlassian.svg')}}" class="avatar avatar-sm me-3"
              alt="atlassian">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Add Progress Track</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-2.jpg')}}" alt="team5">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="team6">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $3,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">10%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-slack.svg')}}" class="avatar avatar-sm me-3"
              alt="team7">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="team8">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="team9">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> Not set </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">100%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-spotify.svg')}}" class="avatar avatar-sm me-3"
              alt="spotify">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user1">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Romina Hadid">
              <img src="{{asset('adminDashboard/assets/img/team-3.jpg')}}" alt="user2">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Alexander Smith">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user3">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="user4">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $20,500 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">100%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-jira.svg')}}" class="avatar avatar-sm me-3"
              alt="jira">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user5">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $500 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">25%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="25"></div>
            </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="d-flex px-2 py-1">
            <div>
              <img src="{{asset('adminDashboard/assets/img/small-logos/logo-invision.svg')}}" class="avatar avatar-sm me-3"
              alt="invision">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
            </div>
            </div>
          </td>
          <td>
            <div class="avatar-group mt-2">
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Ryan Tompson">
              <img src="{{asset('adminDashboard/assets/img/team-1.jpg')}}" alt="user6">
            </a>
            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
              data-bs-placement="bottom" title="Jessica Doe">
              <img src="{{asset('adminDashboard/assets/img/team-4.jpg')}}" alt="user7">
            </a>
            </div>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="text-xs font-weight-bold"> $2,000 </span>
          </td>
          <td class="align-middle">
            <div class="progress-wrapper w-75 mx-auto">
            <div class="progress-info">
              <div class="progress-percentage">
              <span class="text-xs font-weight-bold">40%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40"
              aria-valuemin="0" aria-valuemax="40"></div>
            </div>
            </div>
          </td>
          </tr>
        </tbody>
        </table>
      </div>
      </div>
    </div>
    </div>
  </div>

  <!-- Combined Advertisers Table -->




  <div class="card">
    <div class="card-header bg-white text-white">
    <h6>Advertisers Information</h6>
    </div>
    <div class="card-body p-3">
    <table class="table table-responsive table-hover">
      <tbody>
      <tr class="align-middle border-bottom">
        <td>
        <div>
          <small class="text-muted d-block text-xs fw-bold">Advertiser Name</small>
          <h6 class="fw-semibold text-dark mt-2">Allegra K.</h6>
          <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
          Website</a>
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
          <img src="https://flagsapi.com/PK/flat/24.png" title="PK" class="img-fluid cursor-pointer" alt="">
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
          <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
          Website</a>
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
          <img src="https://flagsapi.com/US/flat/24.png" title="US" class="img-fluid cursor-pointer" alt="">
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
          <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
          Website</a>
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
          <img src="https://flagsapi.com/IN/flat/24.png" title="IN" class="img-fluid cursor-pointer" alt="">
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
          <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
          Website</a>
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
          <img src="https://flagsapi.com/GB/flat/24.png" title="GB" class="img-fluid cursor-pointer" alt="">
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
          <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit
          Website</a>
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
          <img src="https://flagsapi.com/CA/flat/24.png" title="CA" class="img-fluid cursor-pointer" alt="">
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
@endsection

@section('partial-scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/4.5.0/apexcharts.min.js"
    integrity="sha512-yMnvLee1a5S9nemgCoMth5YvOchnQMFMOSao/bH6SLAXZnauuHs1gd92DnE9+sVQ5aglei3LZDelg8LauSlWkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    colors: ['#f97316', '#eab308'], // You can define multiple colors here
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
    renderDonutChart("#chart2", [40, 35, 25], ["Completed", "Pending", "Rejected"]);
    renderDonutChart("#chart3", [80, 10, 10], ["Completed", "Pending", "Rejected"]);
  </script>
@endsection