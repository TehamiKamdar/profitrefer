@extends('layouts.publisher.layout')

@section('main-content')
	<div class="alert border-warning"
		style="background-color: #fff0c2;border-style: dashed; padding: 15px; border-width: 2px;">
		<h6 class="">Warning!</h6>
		<p class="text-sm">Exported files older than one week will be automatically deleted.</p>
	</div>

	<div class="row justify-content-center my-4">
		<div class="col-6">
			<div class="card shadow-sm">
				<div class="card-header pb-2">
					<h5 class="text-md text-center mb-0">No Download Export Files</h5>
				</div>
				<div class="card-body pt-2">
					<div class="mb-3">
						<p class="text-center text-sm text-muted">Currently, there are no files available for download in the export
							files section. Please use the export options in various sections to generate files. Files will remain
							in this section for up to 3 months.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection