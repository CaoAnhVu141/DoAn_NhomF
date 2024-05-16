
@extends('LayOut.admin-dashboard.admin_shopping')
@section('content')
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Checkout Start -->
<div class="container-fluid">
    <form action="{{ route('checkoutnow') }}" method="POST">
        @csrf
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label> Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label> District</label>
                        <input class="form-control" type="text" name="district">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" name="saigon">
                    </div>                 
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" name="phone" placeholder="+84...">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Transportation Method</label>
                        <select class="custom-select" name="id_transport">
                            @foreach ($transprort as $item)
                            <option value="{{ $item->id_transport }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="col-md-6 form-group">
                        <label>Note</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <h6 class="mb-3">Products</h6>
                    @foreach (Cart::content() as $item)
                    <div class="d-flex justify-content-between">
                        <p>{{ $item->name }}</p>
                        <p>{{ $item->price }}</p>
                    </div>
                    @endforeach
                    
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Amount</h6>
                        <h6 class="font-weight-medium">{{ Cart::count() }}</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>{{ Cart::total() }}</h5>
                        <h5>$160</h5>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30">
                    <div class="form-group">
                        @foreach ($payoftype as $item)
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="id_pay" id="paypal-{{ $item->id_pay }}" value="{{ $item->id_pay }}">
                            <label class="custom-control-label" for="paypal-{{ $item->id_pay }}">{{ $item->name }}</label>
                        </div>
                        @endforeach
                    </div>                    
                                   
                    <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>   
@endsection