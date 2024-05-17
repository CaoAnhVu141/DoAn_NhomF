@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Check</th>
          <th>Time</th>
          <th>Action</th>
        </tr>
        @if(isset($producttypes))
            @foreach ($producttypes as $item)
                <tr>
                    <td>{{ $item->id_producttype }}</td>
                    <td>{{ $item->name }}</td>       
                    <td>{{ $item->description  }}</td>

                    <td>
                        @if ($item->checktype==1)
                            <a href="" class="label label-info status-active">Show</a>
                        @else
                             <a href="" class="label label-default status-active">Hide</a>
                        @endif
                    </td>
                   
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ url('editProductType', ['id' => $item->id_producttype]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có chắc muốn sửa không')"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="{{ url('deleteproducttype', ['id' => $item->id_producttype]) }}" class="btn btn-xs btn-danger js-delete-confirm" onclick="return confirm('Bạn có chắc muốn xoá không')"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
    {{-- {!! $type_products->appends($query ?? [])->links() !!} --}}
  </div>
