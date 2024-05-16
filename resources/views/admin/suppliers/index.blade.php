@extends('LayOut.admin-dashboard.master_admin')
@section('content')
<section class="content-header">
    <h1>
      Suppliers
      <small>index</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="">Attribute</a></li>
      <li class="active">list</li>

    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
     @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><a href="{{ route('addsupplier') }}" class="btn btn-primary">Thêm mới </a></h3>
                <div class="box-tools">
                  <form action="#">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="key" value="{{ request()->input('key') }}" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>

                    @if($suppliers->total() > 0)
                    @php
                    $count = 0;
                  @endphp
                  @if(isset($suppliers))
                      @foreach ($suppliers as $item)
                      @php
                      $count ++;
                    @endphp
                          <tr>
                              <td>{{ $count }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->description }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->phone }}</td>
                              <td>{{ $item->address }}</td>
                              
                              <td>{{ $item->created_at }}</td>
                              <td>
                                  <a href="{{ route('updatesupplier',['id'=>$item->id_supplier]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn chắc chắn là sửa chứ')"><i class="fa fa-pencil"></i> Edit</a>
                                  <a  href="{{ route('deletesupllers',['id'=>$item->id_supplier]) }}"  class="btn btn-xs btn-danger js-delete-confirm" onclick="return confirm('Bạn chắc chắn là xoá chứ')"><i class="fa fa-trash"></i> Delete</a>
                              </td>
                          </tr>
                      @endforeach
                  @endif
                    @else
                     <h3>Rất tiêc, dữ liệu không tìm thấy</h3>
                    @endif
                  </tbody>
                </table>
                  <!-- Phân trang bắt đầu -->
                  <div id="pageNavPosition" class="text-right">
                      <ul class="pagination">
                          @if ($item->onFirstPage())
                              <li class="disabled"><span>&laquo;</span></li>
                          @else
                              <li><a href="{{ $item->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                          @endif

                          @for ($i = 1; $i <= $item->lastPage(); $i++)
                              <li class="{{ $i == $item->currentPage() ? 'active' : '' }}">
                                  <a href="{{ $item->url($i) }}">{{ $i }}</a>
                              </li>
                          @endfor

                          @if ($item->hasMorePages())
                              <li><a href="{{ $item->nextPageUrl() }}" rel="next">&raquo;</a></li>
                          @else
                              <li class="disabled"><span>&raquo;</span></li>
                          @endif
                      </ul>
                  </div>
                  <!-- Phân trang kết thúc -->
              </div>
              <!-- /.box-body -->
              {{--  {!! $attribute->links() !!}  --}}
              <div></div>
            </div>
            <!-- /.box -->
          </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
  </section>
  <!-- /.content -->
@endsection
