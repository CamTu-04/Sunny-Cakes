<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh Ngọt</title>
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
            background: linear-gradient(to right, red, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .contact-info {
            width: 30%; /* Chiếm 1.5/5 chiều ngang */
            text-align: right;
            font-size: 1em;
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }
        a {
            text-decoration: none; /* Bỏ gạch chân cho liên kết */
        }
        .promotions {
            background: #f8f9fa;
            padding: 0; /* Bỏ padding để hình ảnh chiếm toàn bộ chiều cao */
            margin: 20px auto; /* Tự động căn giữa */
            width: 100%; 
            height: 400px;
            max-width: 100%; /* Giới hạn chiều rộng tối đa */
            display: flex; /* Sử dụng flexbox để căn chỉnh hình ảnh */
            justify-content: center; /* Căn giữa hình ảnh */
            align-items: center; /* Căn giữa theo chiều dọc */
            overflow: hidden; /* Ẩn phần thừa của hình ảnh nếu cần */
        }
        .promotion-image {
            width: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều rộng khung */
            height: 100%; /* Giữ tỷ lệ hình ảnh */
            max-height: 100%; /* Đảm bảo hình ảnh không vượt quá chiều cao khung */
        }
        .scrolling-text {
            white-space: nowrap; /* Đảm bảo văn bản không xuống dòng */
            overflow: hidden; /* Ẩn phần thừa của văn bản */
            box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước */
            position: relative; /* Cần thiết để đặt vị trí cho văn bản */
            height: 100px; /* Chiều cao cho khung văn bản */
            background: linear-gradient(to right, red, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; /* Màu nền cho khung văn bản */
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            font-size: 2.5em; /* Kích thước chữ */
            animation: scroll 25s linear infinite; /* Hiệu ứng chạy */
        }
        @keyframes scroll {
            0% {
                transform: translateX(100%); /* Bắt đầu từ bên phải */
            }
            100% {
                transform: translateX(-100%); /* Kết thúc ở bên trái */
            }
        }
        .main-container {
            display: flex;
            width: 100%; /* Chiếm toàn bộ chiều rộng màn hình */
            margin-top: 10px; /* Giảm khoảng cách giữa các khung */
        }
        .sidebar {
            width: 20%; 
            padding: 0; /* Padding = 0 */
            margin: 0; /* Margin = 0 */
            background-color: white; /* Màu nền cho khung bên trái */
        }
        .product-intro {
            width: 80%; 
            padding: 0; /* Padding = 0 */
            margin: 0; /* Margin = 0 */
            background-color: #ffffff; /* Màu nền trắng */
            display: flex;
            flex-direction: column;
        }
        .info-box {
            flex-grow: 1; /* Cho phép khung chiếm toàn bộ không gian còn lại */
            display: flex;
            align-items: stretch; /* Căn giữa nội dung theo chiều dọc */
            padding: 0; /* Bỏ padding */
            width: 100%; /* Chiếm toàn bộ chiều rộng */
        }
        .info-box.red {
            background: linear-gradient(to right, red, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; /* Màu nền cho khung văn bản */
        }
        .info-box.black {
            background: linear-gradient(to right, red, black);
            -webkit-background-clip: text;/* Màu nền cho khung văn bản */ 
            -webkit-text-fill-color: transparent; 
        }
        .red-content {
            display: flex;
            width: 100%; /* Chiếm toàn bộ chiều rộng */
        }
        .red-content img {
            width: 20%; /* Chiếm 20% chiều rộng khung */
            height: 100%; /* Chiều cao 100% */
            object-fit: cover; /* Giữ tỷ lệ hình ảnh mà không bị kéo méo */
        }
        .red-description {
            padding: 0 10px; /* Padding bên trái và bên phải */
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            width: 80%; /* Chiếm 80% chiều rộng khung */
        }
        .black-content {
            display: flex;
            width: 100%; /* Chiếm toàn bộ chiều rộng */
        }
        .black-content img {
            width: 20%; /* Chiếm 20% chiều rộng khung */
            height: 100%; /* Chiều cao 100% */
            object-fit: cover; /* Giữ tỷ lệ hình ảnh mà không bị kéo méo */
        }
        .black-description {
            padding: 0 10px; /* Padding bên trái và bên phải */
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            width: 80%; /* Chiếm 80% chiều rộng khung */
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="Sunny Cakes/SunnyCake.png" alt="logo">
        <div class="store-name">Sweet Cakes જ⁀➴ ♡</div>
        <div class="contact-info">SĐT: 0123 456 789</div>
    </div>
    <div class="promotions">
        <img class="promotion-image" src="https://theme.hstatic.net/200000179809/1001074516/14/collection_banner.jpg?v=98" alt="Ưu đãi">
    </div>
    <div class="scrolling-text">
        ´꒳` Các sản phẩm bánh ngọt của chúng tôi 𓍯𓂃𓏧♡
    </div>
    <div class="main-container">
        <div class="sidebar">
            <h3>Thông tin thêm</h3>
            <p>Các sản phẩm mới nhất, ưu đãi và nhiều hơn nữa.</p>
            <!-- Thêm thông tin bên trái ở đây -->
        </div>
        <div class="product-intro">
            <div class="info-box red">
                <div class="red-content">
                    <img src="https://product.hstatic.net/1000104153/product/tropical_forest_cake_748bf1e0840b49afa81a57b6a9aae165_grande.png" alt="Ảnh 1">
                    <div class="red-description">
                        <h2>Tropical Forest cake</h2>
                    </div>
                </div>
            </div>
            <div class="info-box black">
                <div class="black-content">
                    <div class="black-description">
                        <h2>Passion fruit & chocolate cake</h2>
                    </div>
                    <img src="https://product.hstatic.net/1000104153/product/passion_fruit___chocolate_cake_81a17ce02408407b8ac29d61cd7abd9b_master.png" alt="Ảnh 2">
                </div>
            </div>
            <div class="info-box red">
                <div class="red-content">
                    <img src="https://product.hstatic.net/1000104153/product/tiramisu_cake_16a01603c84a4217826a59da6c6f6cfd_grande.jpg" alt="Ảnh 3">
                    <div class="red-description">
                        <h2>Mango Plum - Entremet Thanh Trà</h2>
                    </div>
                </div>
            </div>
            <div class="info-box black">
                <div class="black-content">
                    <div class="black-description">Mô tả nội dung màu đen</div>
                    <img src="https://product.hstatic.net/200000179809/product/banh_da_sac_3cf87e6084654be2856e7bd7c2ffd3f1_70e5460aecc04fdabc87e2bc9f29b4ef_grande.png" alt="Ảnh 4">
                </div>
            </div>
            <!-- Thêm nhiều khung nếu cần -->
        </div>
    </div>
</body>
</html>