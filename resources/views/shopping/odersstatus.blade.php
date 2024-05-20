
@extends('LayOut.admin-dashboard.admin_shopping')
@section('content')
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Lịch sử mua hàng</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Số thứ tự</th>
                                    <th>Tên khách hàng</th>
                                    {{-- <th>Hình ảnh</th> --}}
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>
                            @php
                                $count = 0;
                            @endphp
                            <tbody>
                                @foreach ($orders as $item)
                                    @php
                                        $count ++;
                                    @endphp
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        {{-- <td><img src="{{asset($item->image) }}" alt="" width="150px" height="100px"> </td> --}}
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ $item->district }}</td>
                                        <td>{{ $item->intomoney }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
