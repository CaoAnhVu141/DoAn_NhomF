@extends('LayOut.admin-dashboard.master_admin')
@section('content')
<section class="content-header">
    <h1>
      Attribute
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
                <h3 class="box-title"><a href="{{ route('addattribute') }}" class="btn btn-primary">Thêm mới </a></h3>
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
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
                      <th>CheckActive</th>
                      <th>Time</th>
                      <th>Action</th>
                    </tr>
                    @php
                       $i = 0;
                    @endphp
                    @if(isset($attribute))
                        @foreach ($attribute as $item)
                            <tr>
                                {{-- <td>{{ ++$i . ' -- ' .  $item->id }}</td> --}}
                                <td>1</td>
                                <td>{{ $item->name }}</td>
                                {{-- <td><span class="{{ $item->getType($item->atb_type)['class'] }}"></span></td> --}}
                                <td>{{ $item->discription }}</td>
                                <td>
                                  @if ($item->checkactive == 1)
                                  <a href="{{ route('toggleattribute',['id'=>$item->id_attribute]) }}" class="label label-info status-active">Show</a>
                                  @else
                                   <a href="{{ route('toggleattribute',['id'=>$item->id_attribute]) }}" class="label label-default status-active">Hide</a>
                                   @endif
                                  </td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('editattribute',['id'=>$item->id_attribute]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn chắc chắn là sửa chứ')"><i class="fa fa-pencil"></i> Edit</a>
                                    <a  href="{{ route('deleteattribute',['id'=>$item->id_attribute]) }}"  class="btn btn-xs btn-danger js-delete-confirm" onclick="return confirm('Bạn chắc chắn là xoá chứ')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
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
