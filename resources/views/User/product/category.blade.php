@extends('LayOut.homepage')
@section('title')
@endsection
<br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh Mục Sản Phẩm</title>
	<head>
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
</head>
</head>
<body>
@section('list')
<div class="text-center h3 pt-3 text-danger">Danh Mục Sản Phẩm</div>
<div class="container-fliud pt-4">
    <div class="row text-center">
        <div class="col-lg-1 border border-2 border-primary">ID</div>
        <div class="col-lg-3 border border-2 border-primary">Tên Sản Phẩm</div>
        <div class="col-lg-3 border border-2 border-primary">Image</div>
        <div class="col-lg-3 border border-2 border-primary">Price</div>
        <div class="col-lg-2 border border-2 border-primary">Quantity</div>
    </div>
    @foreach($Product as $Product)
    <div class="row text-center">
        <div class="col-lg-1 p-3 border border-2 border-primary">{{ $Product->id }}</div>
        <div class="col-lg-3 p-3 border border-2 border-primary"><a href="">{{ $Product->name }}</a></div>
        <div class="col-lg-3 p-3 border border-2 border-primary"><img src="image/<?=$Product->image?>" height="200px" width="200px" alt=""></div>
        <div class="col-lg-3 p-3 border border-2 border-primary">{{ $Product->price }}</div>
        <div class="col-lg-2 p-3 border border-2 border-primary">{{ $Product->quantity }}</div>
</div>
@endforeach
<br>
<div class="pagination-links">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</div>
</body>
</html>

