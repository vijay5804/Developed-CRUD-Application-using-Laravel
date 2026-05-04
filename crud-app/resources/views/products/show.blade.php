@extends('layouts.app')

@section('main')

<div class="row">
  <div class="col-md-8">

    <h5>
      <i class="bi bi-pencil-square"></i> Product Details
    </h5>

    <nav class="my-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">
          View Product
        </li>
      </ol>
    </nav>

    <!-- Card -->
    <div class="card">

      <img src="/products/{{ $product->image }}" 
           alt="{{ $product->name }}" 
           class="card-img-top">

      <div class="card-body">

        <h5 class="card-title fw-bold">
          {{ $product->name }}
        </h5>

        <p class="card-text text-secondary">
          {{ $product->description }}
        </p>

        <p class="fw-semibold">
          M.R.P 
          <small class="text-danger text-decoration-line-through">
            {{ $product->mrp }}
          </small>
        </p>

        <p class="fw-semibold">
          Selling Price 
          <small class="text-success">
            {{ $product->price }} 
          </small>
        </p>

      </div>
    </div>

  </div>
</div>

@endsection