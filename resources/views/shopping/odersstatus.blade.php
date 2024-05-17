<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử mua hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lịch sử mua hàng</h2>
        <table>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Trạng thái<i></i></th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Ngày đặt hàng</th>
            </tr>
            @php
                $count =0;
            @endphp
            @foreach ($orders as $item)
            @php
            $count ++;
            @endphp
            <tr>
                <td>{{ $count }}</td>
                <td>{{ $item->product->name }}</td>
                <td>{{$item->status  }}</td>
                <td>{{ $item->intomoney }}</td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->created_at }}</td>

            </tr>
            @endforeach
            
            
            <!-- Thêm các dòng khác tương ứng với đơn hàng khác nếu cần -->
        </table>
    </div>
</body>
</html>
