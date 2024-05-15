<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Người Dùng | Quản Lý Bán Hàng</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin/manager/css/style.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <style>
        .avatar-container {
            position: relative;
            width: 150px;
        }

        .avatar-preview {
            width: 150px;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 2px;
            margin-bottom: 10px;
        }

        input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Đăng Ký Người Dùng</h2>
    <form action="{{ route('registerUser') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Tên Người Dùng:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="avatar">Ảnh:</label>
            <div class="avatar-container">
                <img src="#" alt="Avatar Preview" class="avatar-preview" id="avatarPreview" style="display: none;">
                <label for="newAvatar" class="btn btn-primary">Chọn ảnh</label>
                <input type="file" class="form-control-file" id="newAvatar" name="avatar" accept="image/*" style="display: none;" onchange="previewNewAvatar()">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
</div>

<script type="text/javascript">
    function previewNewAvatar() {
        var newAvatarInput = document.getElementById('newAvatar');
        var avatarPreview = document.getElementById('avatarPreview');

        if (newAvatarInput.files && newAvatarInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                avatarPreview.src = e.target.result;
            }

            reader.readAsDataURL(newAvatarInput.files[0]);
        }
    }
</script>

</body>

</html>
