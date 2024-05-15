<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>SL - còn</th>
                <th>Category</th>
                <th>Avatar</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Times</th>
                <th>Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @if (isset($products))
                @foreach ($products as $item)
                    @php
                        $i ++;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->name }}</td>
                        {{-- <td>{{ $item->amount }} - {{ ($item->pro_number-$item->pro_pay) }}</td> --}}
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->category->name }}</td>
                        {{-- <td><span class="label label-warning">{{ $item->category->c_name ?? "[N\A]" }}</span></td> --}}
                        <td><img src="{{ asset($item->image) }}" alt="" width="150px" height="100px"> </td>
                        <td>{{ $item->price }}</td>
                        <td>
                            @if ($item->discount)
                                <span class="label label-default"
                                    style="text-decoration: line-through;">{{ number_format($item->price, 0, ',', '.') }}
                                    VND</span><br>
                                @php
                                    $price = $item->price * (1 - $item->discount / 100);
                                @endphp
                                <span class="label label-success">{{ number_format($price, 0, ',', '.') }} VND</span><br>
                                <span>Giảm {{ $item->discount }}%</span>
                            @else
                                <span class="label label-success">{{ number_format($item->price, 0, ',', '.') }}
                                    VND</span>
                            @endif
                        </td>


                        <td>
                            @if ($item->checkactive == 1)
                                <a href="#" class="label label-info status-actives">Active</a>
                            @else
                                <a href="#" class="label label-default status-actives">Hide</a>
                            @endif
                        </td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ url('edit-product',['id' => $item->id_product])}}"
                                class="btn btn-xs btn-primary" onclick="return confirm('Bạn có chắc xoá không nè')"><i
                                    class="fa fa-pencil"></i> Edit</a>
                            <a href="{{ route('deleteproducts', ['id' => $item->id_product]) }}"
                                class="btn btn-xs btn-danger js-delete-confirm"
                                onclick="return confirm('Bạn có chắc xoá không nè')"><i class="fa fa-trash"></i>
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</div>
