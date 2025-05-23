@extends('layouts.publisher.layout')

@section('main-content')
  <div class="card">
    <div class="row my-4 justify-content-center">
    <div class="col-8">
      <div class="card-header pb-2">
      <h5 class="text-md mb-0">API Token </h5>
      <p class="text-xs text-secondary">(This will be used for API documentation.)</p>
      </div>
      <div class="card-body pt-2">
      <form action="" method="get">
        <div class="mb-3 col-9">
        <input type="text" name="" placeholder="API KEY: 1234abcd-56ef-7890-gh12-ijklmnopqrst"
          class="form-control form-control-sm text-sm rounded-2">
        </div>
        <button class="btn btn-sm btn-success">Copy</button>
        <button class="btn btn-sm btn-danger">Regenerate Token</button>
        <button class="btn btn-sm btn-warning">View Documentation</button>
      </form>
      </div>

    </div>
    </div>
  </div>
@endsection