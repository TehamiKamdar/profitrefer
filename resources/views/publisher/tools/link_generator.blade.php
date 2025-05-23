@extends('layouts.publisher.layout')

@section('main-content')
  <div class="row my-4">
    <div class="col-12">
    <div class="card shadow-sm">
      <div class="card-header pb-2">
      <h5 class="text-sm mb-0">Create A Link</h5>
      <p class="text-xs text-secondary">Promote any brand with simple link</p>
      </div>
      <div class="card-body pt-2">
      <form action="" method="get">
        <div class="mb-3">
        <select name="" id="brands-select" class="form-select text-sm rounded-2">
          <option value="">Brand 1</option>
          <option value="">Brand 2</option>
          <option value="">Brand 3</option>
          <option value="">Brand 4</option>
        </select>
        </div>
        <div class="mb-3">
        <input type="text" name="" placeholder="Enter a Landing Page Link" class="form-control text-sm rounded-2">
        </div>
        <div class="mb-3">
        <input type="text" name="" placeholder="Enter a Sub ID (Optional)" class="form-control text-sm rounded-2">
        </div>
        <button class="btn btn-sm btn-primary">Create</button>
      </form>
      </div>
    </div>

    </div>
  </div>
@endsection