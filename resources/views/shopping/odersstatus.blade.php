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
                <th>Ngày đặt hàng</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Áo thun</td>
                <td>$10</td>
                <td>Ok nè</td>
                <td>2024-05-14</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Quần jeans</td>
                <td>$20</td>
                <td>2024-05-12</td>
            </tr>
            <!-- Thêm các dòng khác tương ứng với đơn hàng khác nếu cần -->
        </table>
    </div>
</body>
</html>
