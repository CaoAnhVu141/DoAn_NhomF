@extends('LayOut.homepage')
@section('title')
@endsection
<br><br><br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
    .pagination {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        margin: 1em 0;
    }
    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        display: block;
        padding: 5px;
        background-color: #eee;
        text-decoration: none;
        color: #000;
        border: 1px solid #ddd;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .active a {
        background-color: #4CAF50;
        color: white;
        border-color: #4CAF50;
    }
    </style>
    <style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    @section('list')
    
    <h1 class=" bg-dark  h1 ">
        <hr style="height: 10px;">
    </h1>

    <div class="text-center h1 text-danger">
        <div>Thêm Sản Phẩm</div>
    </div>
    <h1 class=" bg-dark  h1 ">
        <hr style="height: 10px;">
    </h1>
     @if(Session::has('thongbao'))
    <div class="alert alert-success">
        {{Session::get('thongbao')}}
    </div>
    @endif
    @if(Session::has('thongbao2'))
    <div class="alert alert-success">
        {{Session::get('thongbao2')}}
    </div>
    @endif
    <header>
        <form action="{{url('addproduct/addrun')}}" method="GET" enctype="multipart/form-data">
            <label class="h5" for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" required>

            <label class="h5" for="product_image">Hình ảnh:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br>

            <label class="h5" for="product_price">Giá:</label>
            <input type="number" id="price" name="price" min="0" required>

            <label class="h5" for="product_quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity" min="0" required>

            <input type="submit" value="Thêm sản phẩm">
        </form>
    </header>

    <footer>
        <div class="container-fluid m-auto pt-5">
            <div class="row">
                <div class="col-lg-1 text-center border border-2 border-dark"> ID</div>
                <div class="col-lg-2 text-center border border-2 border-dark">NAME</div>
                <div class="col-lg-2 text-center border border-2 border-dark">IMAGE</div>
                <div class="col-lg-2 text-center border border-2 border-dark">PRICE</div>
                <div class="col-lg-2 text-center border border-2 border-dark">QUANTITY</div>
                <div class="col-lg-3 text-center border border-2 border-dark">FUNCTION</div>
            </div>
            <hr class=" h3 bg-dark " style="height: 5px;">
        @foreach($Product as $item)
            <div class="row text-center">
                <div class="col-lg-1 border border-2 border-primary">{{$item->id}}</div>
                <div class="col-lg-2 border border-2 border-primary"><a href="">{{ $item->name }}</a></div>
                <div class="col-lg-2 border border-2 border-primary"><img src="image/<?=$item->image?>" height="200px" width="200px" alt=""></div>
                <div class="col-lg-2 border border-2 border-primary">{{ $item->price }}</div>
                <div class="col-lg-2 border border-2 border-primary">{{ $item->quantity }}</div>
                <div class="col-lg-1 border border-1 border-primary p-3">
                    <a class="btn btn-primary" href="">Edit</a>
                </div>
                <div class="col-lg-2 border border-2 border-primary p-3">
                    <a class="btn btn-danger" href="">Remove</a>
                </div>
            </div>
        @endforeach
        </div>
    </footer>
    <body>
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#1">1</a></li>
            <li><a href="#2" class="active">2</a></li>
            <li><a href="#3">3</a></li>
            <li><a href="#4">4</a></li>
            <li><a href="#5">5</a></li>
            <li><a href="#6">&raquo;</a></li>
        </ul>
    </body>
</body>
</html>
