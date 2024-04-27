@extends('LayOut.admin-dashboard.master_admin')
@section('content')
<section class="content-header">
    <h1>
      Product
      <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="">Product</a></li>
      <li class="active">Edit</li>

    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Thông tin cơ bản</h3>
                        </div>
                          <div class="box-body">
                            <div class="form-group">
                              <label for="pro_name">Name</label>
                              <input type="text" name="pro_name" class="form-control" value=""  placeholder="Name ....">
                               
                            </div>

                            <div class="form-group col-sm-6" >
                                <label for="pro_price">Giá Bán Ra</label>
                                <div class="input-group ">
                                    <span class="input-group-addon">$</span>
                                        <input type="number" name="pro_price" value="" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                                  </div>
                                 
                            </div>
                            <div class="form-group">
                                <label for="pro_sale">% Giảm Giá</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                        <input type="number" value="" name="pro_sale" class="form-control">
                                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                  </div>
                               
                            </div>
                            <div>

                            </div>
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" value="" name="pro_description" rows="3" placeholder="Enter ..."></textarea>
                               
                            </div>
                            <div class="form-group ">
                                <label>Danh Mục (*)</label>
                                <select name="pro_category_id" class="form-control js-check-type" data-url="" data-idProduct="">
                                  <option value="">_Click_</option>
                                  {{-- @todo --}}
                                    {{-- @if (isset($categorys))
                                    @php
                                        get_category_parent($categorys,0,'',$product->pro_category_id)
                                    @endphp
                                    @endif --}}
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label>Type Product (*)</label>
                                <select name="pro_type_product_id" class="form-control js-type-product">
                                    <option value="">__Click__</option>
                                  {{-- @todo --}}
                                    {{-- @if (isset($typeproducts))
                                        @foreach ($typeproducts as $item)
                                            <option value="{{ $item->id }}" {{ $item->id==$product->pro_type_product_id ? 'selected' :''}}>{{ $item->tp_name }}</option>
                                        @endforeach
                                    @endif --}}
                                </select>
                              
                            </div>

                          </div>
                      </div>

                        <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title">Attribute</h3>
                            </div>
                            <div class="box-body js-attribute">
                                {{-- @todo --}}
                                {{-- @foreach ($attributes as $key => $value)
                                    <div class="form-group col-sm-3">
                                        <h4 style="border-bottom: 1px solid #dedede;padding-bottom:10px">{{ $key }}</h4>
                                        @foreach ($value as $item)
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="attribute[]" value="{{ $item['id'] }}" {{ in_array($item['id'],$attributeOld) ? 'checked' : '' }}> {{ $item['atb_name'] }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>

                </div>
                <div class="col-md-5">
                   
                      <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Content</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea class="form-control" value="" name="pro_content" rows="3" placeholder="Enter ..."></textarea>
                                
                            </div>
                        </div>
                      </div>
                      <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Ảnh Đại Diện</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Textarea</label>
                                <div style="margin-bottom:10px" >
                                    <img src="" class="img-thumbnail" style="width: 170px;height:170px" alt="">
                                    <img id="image_preview_container" src="{{ asset('admin/product.jpg') }}"class="img-thumbnail" style="width: 170px;height:170px" alt="">
                                </div>
                                <input type="file" name="pro_avatar" id="image" class="js-upload">
                            </div>
                          
                        </div>
                      </div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Album ảnh</h3>
                            </div>
                            <div class="box-body">
                                {{-- @todo --}}
                                {{-- @if ($product)
                                    <div class="row" style="margin-bottom: 10px">
                                        @foreach ($product->images as $item)
                                            <div class="col-sm-3">
                                                <a href="{{ route('admin.product.delete_image',$item->id) }}" style="display: block">
                                                    <img src="{{ pare_url_file($item->img_slug) }}" alt="" width="100%" height="auto">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif --}}
                                {{-- @todo --}}
                                {{-- <div class="form-group">
                                    <div class="file-loading">
                                        <input type="file" name="file[]" id="images" multiple class="file" data-overwrite-initial="false" data-min-file-count="0">
                                    </div>
                                </div>
                                @if ($errors->first('file.*'))
                                    <span class="text-danger">{{ $errors->first('file.*') }}</span>
                                @endif --}}
                            </div>
                        </div>

                </div>
                <div class="col-md-7">



                </div>
                <div class="col-md-5">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">Thuộc Tính</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group col-sm-6">
                                <label>Xuất sứ</label>
                                <select name="pro_country" class="form-control">
                                    <option value="0" >_Click_</option>
                                    <option value="1" {{ ($product->pro_country ?? '') ==1 ? 'selected' : ''}}>Việt Nam</option>
                                    <option value="2" {{ ($product->pro_country ?? '') ==2 ? 'selected' : ''}}>Anh</option>
                                    <option value="3" {{ ($product->pro_country ?? '') ==3 ? 'selected' : ''}}>Thụy Sỹ</option>
                                    <option value="4" {{ ($product->pro_country ?? '') ==4 ? 'selected' : ''}}>Mỹ</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Năng Lượng</label>
                                <input type="text" name="pro_energy" value="" class="form-control" placeholder="Năng lượng">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Độ chịu nước</label>
                                <input type="text" name="pro_resistant" value="" class="form-control" placeholder="Độ chịu nước">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Số Lượng</label>
                                <input type="number" value="" name="pro_number" class="form-control" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box-footer" style="text-align: center;">
                        <a href="{{ route('showproduct') }}" class="btn btn-danger"><i class="fa fa-undo"></i> Trở Lại</a>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css"  />
  <script src="https://code.jquery.com/jquery-3.2.1.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" ></script>
@endsection
@section('script')
    <script>
        $(function(){
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
            //run js-select2-keyword
            // if($('.js-select2-keyword').length >0){
            //     $('.js-select2-keyword').select2({
            //         placeholder :'Chọn Keyword',
            //         maximumSelectionLength : 3
            //     });

            // }

            $('.js-check-type').change(function(){
                let $this = $(this);
                let idCategory = this.value;
                let idProduct = $this.attr('data-idProduct');
                let URL = $this.attr('data-url') + '/' + idCategory;
                if(URL){
                    $.ajax({
                        url:URL,
                        data:{
                            idProduct:idProduct
                        },
                        success:function(results){
                            $('.js-type-product').html(results.type_product)
                            $('.js-attribute').html(results.attribute)
                        },
                        error:function(error){
                            console.log(error.messages);
                        }
                    });
                }
            });
        });

    </script>
@endsection
