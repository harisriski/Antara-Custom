@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="category">
          <h2 id="category-label">Categories</h2>
          <ul class="list-group">
            <li class="list-group-item active">All</li>
            <li class="list-group-item"> <a href="">Pria</a></li>
            <li class="list-group-item"> <a href="">Wanita</a></li>
          </ul>
        </div>
        <h2 id="category-label" class="text-center mt-5">Search Product</h2>
        <form action="" class="form-inline ml-5">
          <input type="text" class="form-control" name="search">
          <button class="btn btn-primary">Search</button>
        </form>
      </div>
        <div class="col-lg-8">
          <div class="item-list">
          <h2>Our Products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            <div class="col-lg-4 item">
              <a href="/shop/detail">
              <img src="{{asset('storage/images/product.jpg')}}" alt="nopic" height="180" width="180">
              </a>
              <p class="product-name mt-3 font-weight-bold"><a href="">Nama Produk</a></p>
              <p class="product-price">Rp20000</p>
            </div>
            <div class="col-lg-4 item">
              <a href="/shop/detail">
              <img src="{{asset('storage/images/product.jpg')}}" alt="nopic" height="180" width="180">
              </a>
              <p class="product-name mt-3"><a href="">Nama Produk</a></p>
              <p class="product-price">Rp20000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Pagination Link -->
  {{-- {{$items->links()}} --}}
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

