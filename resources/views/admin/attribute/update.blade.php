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
        <form action="{{ route('updateattribute',$attribute->id_attribute) }}" method="POST">
            @csrf
            <div class="box-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="attributename" value="{{ $attribute->name }}" placeholder="Name ......">
                     
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="attributedescription" rows="3" placeholder="Enter ...">{{ $attribute->discription }}</textarea>
                        </div>
                    </div>
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
