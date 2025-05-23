@extends('layouts.publisher.layout')

@section('main-content')
  <div class="page-header mb-4 d-flex flex-column justify-content-end">
    <span class="mask bg-dark opacity-9"></span>
    <div class="w-100 position-relative p-3">
    <div class="d-flex justify-content-between align-items-end">
      <div class="d-flex align-items-center">
      <div class="avatar avatar-xl position-relative me-3">
        <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-md shadow-sm">
      </div>
      <div>
        <h5 class="mb-1 text-white font-weight-bolder">
        John Doe
        </h5>
        <p class="mb-0 text-white text-sm">
        CEO / Co-Founder
        </p>
      </div>
      </div>
    </div>
    </div>
  </div>
  <ul class="nav" id="mainTab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="btn btn-outline-primary mb-0 btn-sm active" id="information-tab" data-bs-toggle="tab"
      data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="false">Basic
      Information</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="btn btn-outline-primary mb-0 mx-1 btn-sm" id="company-tab" data-bs-toggle="tab"
      data-bs-target="#company" type="button" role="tab" aria-controls="company" aria-selected="false">Company</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="btn btn-outline-primary mb-0 btn-sm" id="websites-tab" data-bs-toggle="tab"
      data-bs-target="#websites" type="button" role="tab" aria-controls="websites"
      aria-selected="true">Websites</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="btn btn-outline-primary mb-0  mx-1 btn-sm" id="billing-tab" data-bs-toggle="tab"
      data-bs-target="#billing" type="button" role="tab" aria-controls="billing" aria-selected="false">Billing &
      Payments</button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="btn btn-outline-primary mb-0 btn-sm" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
      type="button" role="tab" aria-controls="login" aria-selected="false">Login
      Info</button>
    </li>
  </ul>

  <!-- Tabs Content -->
  <div class="tab-content mt-3" id="mainTabContent">


    <!-- Basic Information Tab -->
    <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
    <div class="card">
      <div class="card-header">
      <h6>Basic Information</h6>
      <hr>
      </div>
      <div class="card-body">
      <div class="col-12">
        <form action="#" method="post">
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Name</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Bio</label>
          </div>
          <div class="col-6">
          <textarea name="" id="" class="form-control" required placeholder="Write your bio here.."></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Target Region</label>
          </div>
          <div class="col-6">
          <select name="" id="" class="form-select" required>
            <option value="" selected disabled>Select Country..</option>
          </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Language</label>
          </div>
          <div class="col-6">
          <select name="" id="" class="form-select" required>
            <option value="" selected disabled>Select Language..</option>
          </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Username</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="u.s.e.r.n.a.m.e" class="form-control" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Gender</label>
          </div>
          <div class="col-6">
          <select name="" id="" class="form-select" required>
            <option value="" selected disabled>Select Gender..</option>
          </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Date Of Birth</label>
          </div>
          <div class="col-6">
          <input type="date" name="" id="" class="form-control" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Address</label>
          </div>
          <div class="col-6">
          <textarea name="" id="" placeholder="Write Your Address Here.." class="form-control"
            required></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Country/State/City</label>
          </div>
          <div class="col-6">
          <div class="row">
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select Country..</option>
            </select>
            </div>
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select State..</option>
            </select>
            </div>
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select City..</option>
            </select>
            </div>
          </div>
          </div>
        </div>


        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Media Kit</label>
          </div>
          <div class="col-6">
          <input type="file" name="" id="" class="form-control" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
          </div>
          <div class="col-6">
          <table class="table table-responsive">
            <thead class="bg-dark">
            <tr>
              <th class="text-center text-xs">Name</th>
              <th class="text-center text-xs">Size</th>
              <th class="text-center text-xs"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td colspan="3" class="text-center text-xs">No Media Kits Found</td>
            </tr>
            </tbody>
          </table>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-6">
          <label for="" class="form-label text-sm">Upload Image</label>
          </div>
          <div class="col-6">
          <input type="file" name="" accept="image/*" id="" class="form-control" required>
          </div>
        </div>

        <div class="col-12">
          <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary btn-sm mb-3">Update Profile</button>
          </div>
        </div>
        </form>
      </div>

      </div>

    </div>
    </div>


    <!-- Company Tab -->
    <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
    <div class="card">
      <div class="card-header">
      <h6>Company</h6>
      <p>This is your company tab content.</p>
      </div>
      <hr>
      <div class="card-body">


      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Company Name</label>
        </div>
        <div class="col-6">
        <input type="text" name="name" id="name" placeholder="Company Name Here." class="form-control" required>
        </div>
      </div>


      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Legal Entity Type</label>
        </div>
        <div class="col-6">
        <select name="" id="" class="form-select" required>
          <option value="" selected disabled>Select Legal Entity Type..</option>
        </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Country/State/City</label>
        </div>
        <div class="col-6">
        <div class="row">
          <div class="col-4">
          <select name="" class="form-select" required id="">
            <option disabled selected value="">Select Country..</option>
          </select>
          </div>
          <div class="col-4">
          <select name="" class="form-select" required id="">
            <option disabled selected value="">Select State..</option>
          </select>
          </div>
          <div class="col-4">
          <select name="" class="form-select" required id="">
            <option disabled selected value="">Select City..</option>
          </select>
          </div>
        </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Address Line 1</label>
        </div>
        <div class="col-6">
        <textarea name="" id="" placeholder="Write Your Address Here.." class="form-control" required></textarea>
        </div>
      </div>


      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Company Contact</label>
        </div>
        <div class="col-6">
        <input type="text" name="name" id="name" placeholder="(555) 123-4567" class="form-control" required>
        </div>
      </div>


      <div class="row mb-3">
        <div class="col-6">
        <label for="name" class="form-label text-sm">Address Line 2</label>
        </div>
        <div class="col-6">
        <textarea name="" id="" placeholder="Write Your Address Here.." class="form-control" required></textarea>
        </div>
      </div>

      <div class="col-12">
        <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-sm mb-3">Update</button>
        </div>
      </div>
      </div>
    </div>
    </div>


    <!-- Websites Tab -->
    <div class="tab-pane fade" id="websites" role="tabpanel" aria-labelledby="websites-tab">
    <div class="card">
      <div class="card-header">
      <div class="d-flex justify-content-between">
        <h6>Website</h6>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newWebsiteModal"><i
          class="fa fa-plus me-2"></i>Website</button>
        <div class="modal fade" id="newWebsiteModal" tabindex="-1" aria-labelledby="newWebsiteModal"
        aria-hidden="true">
        <div class="modal-dialog modal-xl"> <!-- modal-sm for small size -->
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">New Website Details</h5>
            <button type="button" class="btn bg-danger btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
            <div class="row mb-4">
              <div class="col-6">
              <label for="" class="form-label text-sm">Name</label>
              <input type="text" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="col-6">
              <label for="" class="form-label text-sm">URL</label>
              <input type="text" class="form-control" placeholder="Enter URL" required>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-4">
              <label for="" class="form-label text-sm">Monthly Traffic</label>
              <input type="text" name="" id="" class="form-control" placeholder="Enter Monthly Traffic"
                required>
              </div>
              <div class="col-4">
              <label for="" class="form-label text-sm">Monthly Page Views</label>
              <input type="text" name="" id="" class="form-control" placeholder="Enter Monthly Page Views"
                required>
              </div>
              <div class="col-4">
              <label for="" class="form-label text-sm">Country</label>
              <select name="" id="" class="form-select">
                <option value="" disabled selected>Select Country</option>
              </select>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-12">

              <label for="">Website Type</label>
              <select name="" id="" class="form-control" multiple="multiple">
                <option value="">Website Type</option>
                <option value="">Website Type</option>
                <option value="">Website Type</option>
                <option value="">Website Type</option>
              </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-12">

              <label for="">Category (Max 4)</label>
              <select name="" id="" class="form-control" multiple="multiple">
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
                <option value="">Category</option>
              </select>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-12"><textarea name="" id="" placeholder="Website Introduction Here" required
                class="form-control"></textarea></div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm w-100">Save Changes</button>
            </form>
          </div>
          </div>
        </div>
        </div>
        <!-- <p>This is your projects tab content.</p> -->
      </div>
      </div>
      <div class="card-body">
      <table class="table table-responsive table-hover">
        <tbody>
        <tr class="align-middle border-bottom">
          <td>
          <div>
            <small class="text-muted d-block text-xs fw-bold">Name</small>
            <h6 class="fw-semibold text-dark mt-2">Baji Deals</h6>
            <a href="#" class="fw-semibold nav-link text-xs mt-2"><i class="ri-link-m"></i>Visit Website</a>
          </div>
          </td>
          <td>
          <div>
            <small class="text-muted d-block text-xs fw-bold mb-1">Type</small>
            <span class="badge bg-primary me-2">Coupon / Deals</span>
            <span class="badge bg-primary me-2">Content / Blogs / Reviews</span>
          </div>
          </td>
          <td>
          <div>
            <small class="text-muted d-block text-xs fw-bold">Category</small>
            <h6 class="fw-semibold text-dark mt-2">Others</h6>
          </div>
          </td>
          <td>
          <div>
            <small class="text-muted d-block text-xs fw-bold">Last Updated</small>
            <h6 class="fw-semibold text-dark mt-2">2/26/2023</h6>
          </div>
          </td>
          <td>
          <div>
            <small class="text-muted d-block text-xs fw-bold mb-1">Status</small>
            <span class="badge bg-success">Active</span>
          </div>
          </td>
          <td style="width: 30px;">
          <i class="ri-lg ri-file-edit-line bg-yellow-light text-golden rounded-circle p-3 cursor-pointer"></i>
          </td>
        </tr>
        </tbody>
      </table>
      </div>
    </div>
    </div>


    <!-- Billing Tab -->
    <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
    <div class="card mb-4">
      <div class="card-header">
      <h6>Billing Information</h6>
      </div>
      <hr>
      <form action="#" method="post">
      <div class="card-body border-top">
        <div class="col-12">

        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Billing Name</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="Enter Your Billing Name" class="form-control"
            required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Billing Phone</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="Enter Your Billing Phone" class="form-control"
            required>
          </div>
        </div>



        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Billing Address</label>
          </div>
          <div class="col-6">
          <textarea name="" id="" placeholder="Write Your Billing Address Here.." class="form-control"
            required></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Country/State/City</label>
          </div>
          <div class="col-6">
          <div class="row">
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select Country..</option>
            </select>
            </div>
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select State..</option>
            </select>
            </div>
            <div class="col-4">
            <select name="" class="form-select" required id="">
              <option disabled selected value="">Select City..</option>
            </select>
            </div>
          </div>
          </div>
        </div>


        </div>
      </div>

      <div class="card-body border-top">
        <div class="col-12">

        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">Company Registration Number</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="Enter Your Company Registration Number"
            class="form-control" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-6">
          <label for="name" class="form-label text-sm">TAX/VAT Number</label>
          </div>
          <div class="col-6">
          <input type="text" name="name" id="name" placeholder="Enter Your TAX/VAT Number" class="form-control"
            required>
          </div>
        </div>
        </div>
      </div>
      <div class="card-footer border-top">
        <div class="d-flex justify-content-end"><button type="submit"
          class="btn btn-primary btn-sm mb-3">Update</button></div>
      </div>
      </form>



    </div>

    <!-- Billing Content End -->

    <div class="card mb-4">
      <div class="card-header">
      <h6>Payment Information</h6>
      <!-- <p class="text-xs">Select your active payment method where you want to withdraw funds.</p> -->
      </div>
      <form action="" method="post">

      <div class="card-body border-top">
        <div class="col-12">
        <div class="row">
          <div class="col-6">
          <label for="Frequency" class="form-label">Payment Frequency</label>
          <select name="Frequency" id="" class="form-select">
            <option value="" disabled selected>Please Select</option>
            <option value="">Monthly</option>
            <option value="">Every 45 Days</option>
          </select>
          </div>
          <div class="col-6">
          <label for="Threshold" class="form-label">Payment Threshold</label>
          <select name="Threshold" id="" class="form-select">
            <option value="" disabled selected>Please Select</option>
            <option value="100">$100</option>
            <option value="500">$500</option>
            <option value="1000">$1000</option>
            <option value="2500">$2500</option>
            <option value="5000">$5000</option>
            <option value="10000">$10000</option>
          </select>
          </div>
        </div>
        </div>
      </div>


      <div class="card-body border-top">
        <h6>Payment Methods</h6>
        <p class="text-xs">Select your active payment method where you want to withdraw funds.</p>
        <div class="col-12 mt-4">
        <form>
          <div class="payment-option">
          <input type="radio" id="bank" name="payment" value="bank" hidden>
          <label for="bank" class="payment-label d-flex align-items-center">
            <i class="fas fa-university fa-2x me-3 text-primary"></i>
            <div>
            <strong>Bank Transfer</strong>
            <div class="text-muted">Transfer via your bank account</div>
            </div>
          </label>
          </div>

          <div class="payment-option">
          <input type="radio" id="paypal" name="payment" value="paypal" hidden>
          <label for="paypal" class="payment-label d-flex align-items-center">
            <i class="fab fa-paypal fa-2x me-3 text-info"></i>
            <div>
            <strong>PayPal</strong>
            <div class="text-muted">Secure online payments</div>
            </div>
          </label>
          </div>

          <div class="payment-option">
          <input type="radio" id="payoneer" name="payment" value="payoneer" hidden>
          <label for="payoneer" class="payment-label d-flex align-items-center">
            <i class="fas fa-money-check-alt fa-2x me-3 text-warning"></i>
            <div>
            <strong>Payoneer</strong>
            <div class="text-muted">Fast international transfers</div>
            </div>
          </label>
          </div>
        </form>
        </div>
      </div>
      <div class="card-footer ">
        <div class="d-flex justify-content-end"><button type="submit"
          class="btn btn-sm btn-primary mb-3">Save</button>
        </div>
      </div>
      </form>
    </div>
    </div>



    <!-- Login Info Tab -->
    <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
    <div class="card">
      <div class="card-header">
      <h6>Login Information</h6>
      </div>
      <hr>
      <div class="card-body">
      <ul class="nav" id="infoTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="btn btn-outline-primary mb-0 btn-sm active" id="email-tab" data-bs-toggle="tab"
          data-bs-target="#email" type="button" role="tab" aria-controls="email" aria-selected="false">User
          Email</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="btn btn-outline-primary mb-0 mx-1 btn-sm" id="password-tab" data-bs-toggle="tab"
          data-bs-target="#password" type="button" role="tab" aria-controls="password"
          aria-selected="false">Password</button>
        </li>
      </ul>
      <div class="tab-content mt-3" id="mainTabContent">
        <div class="tab-pane fade show active" id="email" role="tabpanel" aria-labelledby="email-tab">
        <div class="card-body">
          <div class="col-12">
          <div class="row">
            <div class="col-6"><label for="" class="form-label text-sm">User Email</label></div>
            <div class="col-6"><input type="text" name="" id="" placeholder="Default Email" class="form-control"
              required></div>
          </div>
          </div>
        </div>
        <div class="container">
          <div class="col-12">
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
          </div>
          </div>
        </div>
        </div>
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
        <form action="" method="post">

          <div class="card-body">
          <div class="col-12 mb-3">

            <div class="row">
            <div class="col-4">
              <label for="" class="form-label text-sm">Current Password</label>
            </div>
            <div class="col-8">
              <input type="password" name="" id="" placeholder="Enter Current Password" class="form-control"
              required>
            </div>
            </div>
          </div>
          <div class="col-12 mb-3">

            <div class="row">
            <div class="col-4">
              <label for="" class="form-label text-sm">New Password</label>
            </div>
            <div class="col-8">
              <input type="password" name="" id="" placeholder="Enter New Password" class="form-control"
              required>
            </div>
            </div>
          </div>
          <div class="col-12 mb-3">

            <div class="row">
            <div class="col-4">
              <label for="" class="form-label text-sm">Confirm New Password</label>
            </div>
            <div class="col-8">
              <input type="password" name="" id="" placeholder="Enter Confirm New Password" class="form-control"
              required>
            </div>
            </div>
          </div>

          <div class="col-12">
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
          </div>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>

@endsection