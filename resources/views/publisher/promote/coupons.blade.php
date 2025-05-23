@extends('layouts.publisher.layout')

@section('partial-styles')
  <style>
    .coupon-card {
    transition: transform 0.3s ease;
    margin-bottom: 20px;
    overflow: hidden;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .coupon-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }


    .coupon-value {
    font-size: 1.75rem;
    font-weight: bold;
    }

    .coupon-details {
    color: #6c757d;
    font-size: 0.9rem;
    }


    .ribbon {
    position: absolute;
    top: 2px;
    right: -30px;
    background-color: #dc3545;
    color: white;
    padding: 5px 35px;
    transform: rotate(45deg);
    font-size: 0.75rem;
    font-weight: bold;
    }

    .ribbon-limited {
    position: absolute;
    top: 10px;
    right: -30px;
    background-color: #dc3545;
    color: white;
    padding: 5px 30px;
    transform: rotate(45deg);
    font-size: 0.75rem;
    font-weight: bold;
    }
  </style>
@endsection

@section('main-content')
  <div class="row">
    <!-- Coupon 1 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card">
      <div class="bg-primary p-3">
      <div class="ribbon">HOT</div>
      <h5 class="coupon-code mb-1">SUMMER25</h5>
      <p class="coupon-desc mb-0">Summer Special Discount</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">25% OFF</h3>
      <p class="coupon-details">
        Get 25% off on all summer collection items. Minimum purchase of $50 required.
      </p>
      <div class="d-flex">
        <p class="text-success text-sm me-3">
        <i class="fas fa-clock me-1"></i> Starts: 01/04/2023
        </p>
        <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expires: 31/08/2023
        </p>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>

    <!-- Coupon 2 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card ">
      <div class="bg-primary p-3">
      <h5 class="coupon-code mb-1">FREESHIP</h5>
      <p class="coupon-desc mb-0">Free Shipping Offer</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">FREE SHIPPING</h3>
      <p class="coupon-details">
        Free shipping on all orders. No minimum purchase required.
      </p>
      <div class="d-flex">
        <p class="text-success text-sm me-3">
        <i class="fas fa-clock me-1"></i> Starts: 01/07/2023
        </p>
        <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expires: 15/07/2023
        </p>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>  
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>

    <!-- Coupon 3 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card ">
      <div class="bg-primary p-3">
      <div class="ribbon">NEW</div>
      <h5 class="coupon-code mb-1">WELCOME10</h5>
      <p class="coupon-desc mb-0">New Customer Offer</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">$10 OFF</h3>
      <p class="coupon-details">
        $10 off your first order. Valid for new customers only.
      </p>
      <div class="d-flex">
        <p class="text-success text-sm me-3">
        <i class="fas fa-clock me-1"></i> Starts: 21/08/2023
        </p>
        <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expires: 31/08/2023
        </p>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>

    <!-- Coupon 4 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card ">
      <div class="bg-primary p-3">
      <div class="ribbon-limited">EXPIRED</div>
      <h5 class="coupon-code mb-1">BIGSALE50</h5>
      <p class="coupon-desc mb-0">Half Yearly Sale</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">50% OFF</h3>
      <p class="coupon-details">
        50% off on selected items. Limited stock available.
      </p>
      <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expired
      </p>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>

    <!-- Coupon 5 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card ">
      <div class="bg-primary p-3">
      <h5 class="coupon-code mb-1">LOYAL15</h5>
      <p class="coupon-desc mb-0">Loyalty Discount</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">15% OFF</h3>
      <p class="coupon-details">
        15% off for our loyal customers. Valid on all products.
      </p>
      <div class="d-flex">
        <p class="text-success text-sm me-3">
        <i class="fas fa-clock me-1"></i> Starts: 01/01/2023
        </p>
        <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expires: 31/12/2023
        </p>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>

    <!-- Coupon 6 -->
    <div class="col-md-6 col-lg-4 mb-4">
    <div class="card coupon-card ">
      <div class="bg-primary p-3">
      <div class="ribbon-limited">LIMITED</div>
      <h5 class="coupon-code mb-1">FLASH20</h5>
      <p class="coupon-desc mb-0">Flash Sale</p>
      </div>
      <div class="card-body">
      <h3 class="coupon-value text-primary">20% OFF</h3>
      <p class="coupon-details">
        Flash sale! 20% off for the next 24 hours only. Limited Time
      </p>
      <div class="d-flex">
        <p class="text-success text-sm me-3">
        <i class="fas fa-clock me-1"></i> Starts: Tomorrow
        </p>
        <p class="text-danger text-sm">
        <i class="fas fa-clock me-1"></i> Expires: 31/08/2023
        </p>
      </div>
      <div class="d-flex justify-content-between mt-3">
        <button class="btn btn-primary btn-sm">
        <i class="fas fa-copy me-1"></i> Copy Code
        </button>

      </div>
      <div class="d-flex justify-content-end align-items-center">
        <p class="text-xs">Created By:</p>
        <h6 class="mb-1">Falana Falana</h6>
      </div>
      </div>
    </div>
    </div>
  </div>
@endsection