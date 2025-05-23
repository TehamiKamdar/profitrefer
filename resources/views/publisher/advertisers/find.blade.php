@extends('layouts.publisher.main')

@section('main-content')
	<div class="card mb-3">
		<div class="card-header pb-0">
			<h5 class="text-lg">My Advertisers</h5>
		</div>
		<div class="col-12 my-3 px-4">
			<div class="row">
				<div class="col-6"><input type="search" name="" id="" class="form-control-sm" placeholder="Search Advertiser">
				</div>
				<div class="col-6 d-flex justify-content-end align-items-center">
					<button class="btn btn-sm  btn-outline-primary mx-3 dropdown-toggle" data-bs-toggle="dropdown"
						aria-expanded="false"><i class="fa fa-filter me-2"></i>Filter</button>
					<div class="dropdown-menu p-3" style="min-width: 250px;">
						<label for="countryFilter" class="form-label mb-1">Select Country</label>
						<select class="form-select" id="countryFilter">
							<option selected disabled>Choose Country</option>
							<option value="usa">United States</option>
							<option value="uk">United Kingdom</option>
							<option value="pakistan">Pakistan</option>
							<option value="india">India</option>
							<option value="uae">UAE</option>
						</select>
						<label for="countryFilter" class="form-label mb-1">Advertiser Type:</label>
						<select class="form-select" id="countryFilter">
							<option selected disabled>Choose Type</option>
							<option value="usa">Activated</option>
						</select>

						<div class="d-flex justify-content-end align-items-center mt-4">
							<button class="btn btn-sm btn-outline-primary me-3">Clear</button>
							<button class="btn btn-sm btn-primary me-3">Apply</button>
						</div>
					</div>
					<!-- Export Button -->
					<button class="btn btn-sm btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#exportModal">
						<i class="fa fa-file-export me-2"></i>Export
					</button>

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
										download in the <strong>Tools &gt; Download Export Files</strong> section.
									</p>
									<h6>Select the format in which you want to export the data:</h6>
									<div class="d-grid gap-2">
										<button class="btn btn-outline-success"><i class="fa fa-file-csv me-2"></i>Export as
											CSV</button>
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
		</div>

	</div>
	<div class="row">

		<!-- Amazon -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Amazon Inc.</h5>
						<a href="https://amazon.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">30 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">5.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/CA/flat/24.png" title="Canada" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- eBay -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>eBay</h5>
						<a href="https://ebay.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">14 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">4.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/US/flat/24.png" title="United States" class="img-fluid cursor-pointer"
								alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Shopify -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Shopify</h5>
						<a href="https://shopify.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">30 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">20.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/CA/flat/24.png" title="Canada" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- ClickBank -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>ClickBank</h5>
						<a href="https://clickbank.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">60 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">75.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/US/flat/24.png" title="United States" class="img-fluid cursor-pointer"
								alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Hostinger -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Hostinger</h5>
						<a href="https://hostinger.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">30 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">60.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/LT/flat/24.png" title="Lithuania" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Bluehost -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Bluehost</h5>
						<a href="https://bluehost.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">45 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">$65/Sale</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/US/flat/24.png" title="United States" class="img-fluid cursor-pointer"
								alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Fiverr -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Fiverr</h5>
						<a href="https://fiverr.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">30 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">$15-$50</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/IL/flat/24.png" title="Israel" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Netflix -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Netflix</h5>
						<a href="https://netflix.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">7 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">$10</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-success text-white text-xs cursor-pointer" title="Status">JOINED</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/US/flat/24.png" title="United States" class="img-fluid cursor-pointer"
								alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 1 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Shopify Inc.</h5>
						<a href="https://shopify.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">15 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">4.50%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/US/flat/24.png" title="USA" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 2 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Slack Technologies</h5>
						<a href="https://slack.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">12 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">6.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/GB/flat/24.png" title="UK" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 3 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Zoom Video</h5>
						<a href="https://zoom.us" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">10 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">3.50%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/AU/flat/24.png" title="Australia" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 4 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Airbnb Inc.</h5>
						<a href="https://airbnb.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">20 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">4.00%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/FR/flat/24.png" title="France" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 5 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Spotify AB</h5>
						<a href="https://spotify.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">18 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">5.25%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/SE/flat/24.png" title="Sweden" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 6 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Uber Technologies</h5>
						<a href="https://uber.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">14 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">3.75%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/BR/flat/24.png" title="Brazil" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 7 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Intel Corp.</h5>
						<a href="https://intel.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">17 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">4.10%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/IN/flat/24.png" title="India" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Card 8 -->
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card">
				<div class="card-body text-center">
					<div class="mb-3">
						<h5>Oracle Corp.</h5>
						<a href="https://oracle.com" target="_blank" class="fw-semibold nav-link text-xs mt-2">
							<i class="ri-link-m" title="Visit Website"></i> Visit Website
						</a>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<i class="ri-lg ri-wallet-3-line text-green cursor-pointer" title="Avg Payout Time"></i>
							<h6 class="text-xs">16 Days</h6>
						</div>
						<div class="col-6">
							<i class="ri-lg ri-coins-line text-golden cursor-pointer" title="Commission Rate"></i>
							<h6 class="text-xs">5.75%</h6>
						</div>
					</div>
					<div class="row justify-content-center mb-3">
						<div class="col-6">
							<span class="badge badge-sm bg-warning text-white text-xs cursor-pointer" title="Status">PENDING</span>
						</div>
						<div class="col-6 d-flex flex-column justify-content-center align-items-center">
							<img src="https://flagsapi.com/DE/flat/24.png" title="Germany" class="img-fluid cursor-pointer" alt="">
						</div>
					</div>
					<div class="col-12">
						<a href="./view-advertiser.html"
							class="btn btn-hover btn-sm btn-primary border border-primary border-radius-xl text-primary"
							style="background-color: rgb(219, 248, 255);">
							<i class="ri-xs ri-eye-line text-primary me-2" title="View Details"></i>View Details
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection

@section('partial-scripts')
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

	</script>
@endsection