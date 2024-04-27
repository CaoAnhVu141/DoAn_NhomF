@extends('LayOut.admin-dashboard.master_admin')
@section('content')
<section class="content-header">
    <h1>
      Attribute
      <small>Carete</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="">Attribute</a></li>
      <li class="active">Create</li>

    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

    <div class="box box-primary">
        <form action="" method="POST">
            @csrf
            <div class="box-body">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="name">Names <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" value="" name="atb_name" placeholder="Name ......">
                       
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label> Nhóm Thuộc Tính <span class="text-danger">(*)</span></label>
                        <select name="atb_type" class="form-control">
                            {{--  <option value="">-- Chọn Nhóm Thuộc Tính --</option>  --}}
                            {{-- @foreach ($arrType->getType() as $key =>$item)
                                <option value="{{ $key }}" {{ $attribute->atb_type==$key ? 'selected' : '' }}>{{ $item['name'] }}</option>
                            @endforeach --}}
                        </select>
                        
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Danh Mục <span class="text-danger">(*)</span></label>
                        <select name="atb_category_id" class="form-control">
                            {{--  <option value="">_ Danh Mục _</option>  --}}
                            {{-- @foreach ($category as $item)
                                <option value="{{ $item->id }}"
                                @if ($item->id==$attribute->atb_category_id)
                                    selected='selected'
                                @endif>{{ $item->c_name }}</option>
                            @endforeach --}}
                        </select>
                       
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
            <div class="box-footer" >
                <a href="{{ route('indexattribute') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở Lại</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
            </div>
            </div>
        </form>
    </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
  </section>
  <!-- /.content -->
@endsection
