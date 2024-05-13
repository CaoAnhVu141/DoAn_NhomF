@extends('LayOut.admin-dashboard.master_admin')
@section('content')
<section class="content-header">
    <h1>
       Suppliers
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
        <form action="{{ route('adddatasupplier') }}" method="POST">
            @csrf
            <div class="box-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Name ......">
                     
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Email <span class="text-danger">(*)</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email ......">
                     
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Phone <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone ......">
                     
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Address <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Address ......">
                     
                    </div>
                </div>
            </div>
            <div class="box-footer" >
                <a href="{{ route('indexsupplier') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở Lại</a>
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
