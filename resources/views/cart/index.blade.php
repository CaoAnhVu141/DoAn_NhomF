@extends('LayOut.admin-dashboard.admin_shopping')

@section('content')
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('haha') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            {{-- <th>Sizes</th> --}}
                            <th>Total</th>
                            <th>Remove</th>
                           
                        </tr>
                    </thead>
                    @php
                        $count = 0;
                    @endphp
                    <tbody class="align-middle">
                        @foreach (Cart::content() as $item)
                            @php
                                $count++;
                            @endphp
                            <tr>
                                {{-- <td>{{ $count }}</td> --}}
                                <td class="align-middle"><img src="{{ asset($item->options->image) }}" alt=""
                                    style="width: 100px;"></td>
                                <td class="align-middle">{{ $item->name }}</td>
                                <td class="align-middle">{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text"
                                            class="form-control form-control-sm bg-secondary border-0 text-center" name="amount[{{ $item->rowId }}]"
                                            value="{{ $item->qty }}">
                                            
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                            {{-- <td class="align-middle">{{ $item->size }}</td> --}}

                                    </div>
                                </td>
                                {{-- <td class="align-middle">{{ $item->total }}</td> --}}
                                <td class="align-middle">{{ number_format($item->total, 0, ',', '.') }} VND</td>

                                <td class="align-middle">         
                                   <a href="{{ route('cart.remove', $item->rowId) }}">Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                        Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                       
                        
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>{{ number_format(str_replace(',', '', Cart::total()), 0, ',', '.') }} VND</h5>
                        </div>
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
