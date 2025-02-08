<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background: #e9ecef;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo img {
            height: 50px; /* Thay đổi kích thước logo */
            width: 20%; /* Chiếm 1/5 chiều ngang */
        }
        .store-name {
            width: 50%; /* Chiếm 2.5/5 chiều ngang */
            text-align: center;
            font-size: 3.55em;
            font-style: italic;
            background: linear-gradient(to right, red, black); /* Gradient từ đỏ sang đen */
            -webkit-background-clip: text; /* Cắt nền theo hình dạng chữ */
            -webkit-text-fill-color: transparent; /* Làm cho màu chữ trở thành trong suốt */
        }
        .contact-info {
            width: 30%; /* Chiếm 1.5/5 chiều ngang */
            text-align: right;
            font-size: 1em;
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }
        .promotions {
            background: #f8f9fa;
            padding: 0; /* Bỏ padding để hình ảnh chiếm toàn bộ chiều cao */
            margin: 20px auto; /* Tự động căn giữa */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%; 
            height: 500px;
            max-width: 100%; /* Giới hạn chiều rộng tối đa */
            display: flex; /* Sử dụng flexbox để căn chỉnh hình ảnh */
            justify-content: center; /* Căn giữa hình ảnh */
            align-items: center; /* Căn giữa theo chiều dọc */
            overflow: hidden; /* Ẩn phần thừa của hình ảnh nếu cần */
        }
        .promotion-image {
            width: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều rộng khung */
            height: auto; /* Giữ tỷ lệ hình ảnh */
            max-height: 100%; /* Đảm bảo hình ảnh không vượt quá chiều cao khung */
        }
        .products {
            display: flex; /* Sử dụng flexbox để căn chỉnh các mục sản phẩm */
            justify-content: center; /* Căn giữa các mục */
            margin: 0px auto; /* Tự động căn giữa */
            width: 100%;
            max-width: 100%; /* Giới hạn chiều rộng tối đa */
        }
        .product {
            width: calc(33.33%); /* Mỗi mục chiếm 1/3 chiều rộng khung */
            margin: 2px; /* Khoảng cách giữa các mục */
            padding: 0px; /* Padding bên trong mỗi mục */
            background: #e9ecef; /* Màu nền cho mỗi mục */
            text-align: center; /* Căn giữa nội dung trong mỗi mục */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng cho mỗi mục */
            border-radius: 3px; /* Bo góc cho mỗi mục */
            height: 300px;
            overflow: hidden;
        }
        .product-image {
            width: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều rộng khung */
            height: auto; /* Giữ tỷ lệ hình ảnh */
            max-height: 100%; /* Đảm bảo hình ảnh không vượt quá chiều cao khung */
            transition: transform 3s ease;
        }
        .product:hover .product-image {
            transform: scale(1.1); /* Phóng to hình ảnh khi di chuột */
        }
        a {
            text-decoration: none; /* Bỏ gạch chân cho liên kết */
        }
        a:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: #343a40;
            color: #fff;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 5px 0; /* Giảm khoảng cách giữa các dòng trong footer */
        }
    </style>
</head>
<body>

    <div class="logo">
        <img src="SunnyCake.png" alt="Logo"> 
        <div class="store-name">Sunny Cakes</div>
        <div class="contact-info">SĐT: 0123 456 789</div>
    </div>

    <div class="promotions">
        <img class="promotion-image" src="https://theme.hstatic.net/1000104153/1001164818/14/slideshow_1.jpg?v=168" alt="Ưu đãi">
    </div>

    <div class="products">
        <div class="product">
            <a href="/banh-ngot"><img class="product-image" src="https://theme.hstatic.net/1000104153/1001164818/14/home_category_2_banner.jpg?v=168"></a>
        </div>
        <div class="product">
            <a href="/banh-man"> <img class="product-image" src="https://anhquanbakery.com/uploads/product_menu/full_banh-man-1729587127.jpg" ></a>
        </div>
        <div class="product">
            <a href="/sua"><img class="product-image" src="https://thuytinhluminarc.com/wp-content/uploads/2022/08/Anh-tra-sua-6-1.jpg"></a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Sunny Cakes. Tất cả quyền được bảo lưu.</p>
        <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ</p> <!-- Thêm thông tin địa chỉ nếu cần -->
    </footer>
</body>
</html>