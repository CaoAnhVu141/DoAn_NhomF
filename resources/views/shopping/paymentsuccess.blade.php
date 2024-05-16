<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Code html thanh toan thanh cong</title>
  <link rel="stylesheet" href="./style.css">
  <link href="{{ asset('admin/dashboard/css/payment.css') }}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<section class="pay-done">
 
  <h1 class="pay-done__head reddish">Thanh toán thành công!</h1>
  <div class="pay-done__icon"> <i class="fa fa-check reddish"></i></div>
   <p class="pay-done__thank">Thanh toán đã thực hiện thành công. Trong vòng 30 phút Shopdunk sẽ liên hệ xác nhận thông tin giao hàng cho quý khách.</p>
   
   <ul class="pay-done__info">
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name">Khách hàng </p> 
      <p class="pay-done__info__row__detail">{{$order->name}}</p>
    </li>
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name">Tên sản phẩm </p> 
      <p class="pay-done__info__row__detail">{{$order->product->name}}</p>
    </li>
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name">Hình thức thanh toán </p> 
      <p class="pay-done__info__row__detail">{{ $order->payoftype->name }}</p>
    </li>
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name">Quận </p> 
      <p class="pay-done__info__row__detail"></p>
      <p>{{ $order->district }}</p>
    </li>
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name"> Số điện thoại </p> 
      <p class="pay-done__info__row__detail">{{ $order->phone }}</p>
    </li>
     <li class="pay-done__info__row cash">
      <p class="pay-done__info__row__name  "> Số tiền</p> 
      <p class="pay-done__info__row__detail">{{ $order->intomoney }}</p>
    </li>
    <li class="pay-done__info__row">
      <p class="pay-done__info__row__name">Vận chuyển </p> 
      <p class="pay-done__info__row__detail">{{ $order->transport->name }}</p>
    </li>
     <li class="pay-done__info__row">
      <p class="pay-done__info__row__name"> Mã giao dịch </p> 
      <p class="pay-done__info__row__detail">0123456789ABCD</p>
    </li>
  </ul>
  
  
  <div class="pay-done__button">
    <a href="{{route('haha')}}"><button>Tiếp tục Mua sắm</button></a></div>
 
  <p>Mọi thắc mắc, hỗ trợ vui lòng gọi  <span class="pay-done__num">0981.166.642</span> hoặc <span class="pay-done__num">1900.6626 </span> (7h30 - 22h). Cám ơn quý khách đã cho Shopdunk cơ hội phục vụ!</p>
</section>
<!-- partial -->
  
</body>
</html>
