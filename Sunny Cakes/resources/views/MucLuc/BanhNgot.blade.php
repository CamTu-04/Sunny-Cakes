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
            background-color: white;
            color: #333;
        }

        /*Tiêu đề*/
        .logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: rgba(252, 204, 204, 0.9); 
            margin: 0px 0;
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
            text-shadow: 4px 4px 8px rgba(90, 73, 73, 0.6); /* Thêm hiệu ứng đổ bóng */
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

        /*Phông bạt*/
        .promotions {
            background: #f8f9fa;
            padding: 0; /* Bỏ padding để hình ảnh chiếm toàn bộ chiều cao */
            margin: 0px auto; /* Tự động căn giữa */
            width: 100%; 
            height: 450px;
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

        /*Chạy chữ*/
        .scrolling-text {
            white-space: nowrap; /* Đảm bảo văn bản không xuống dòng */
            overflow: hidden; /* Ẩn phần thừa của văn bản */
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

        /*Khung bán chạy*/
        .container{
            width: 100%;
            margin-top: 40px;
            background-image: url("https://png.pngtree.com/background/20210710/original/pngtree-rose-petals-gradient-pink-banner-background-picture-image_1024194.jpg");
            background-size: contain; /* Thay 'contain' bằng 'cover' để hình nền bao phủ */
            background-position: center; /* Căn giữa hình nền */
            display: flex; /* Kích hoạt Flexbox */
            flex-direction: column; /* Căn theo chiều dọc */
            align-items: center; /* Căn giữa nội dung theo chiều ngang */
        }

        .main-container{
            display: flex;
            width: 80%; 
            justify-content: center; /* Căn giữa nội dung */
            margin-top: 10px; /* Khoảng cách giữa các phần */
        }
        .product-intro {
            display: flex;
            flex-wrap: wrap; /* Cho phép nhiều hàng */
            justify-content: space-between; /* Căn đều không gian giữa các cột */
            width: 100%; 
            padding: 10px; /* Một chút padding cho khung */
            margin: 0; /* Margin = 0 */
            background-color: none; /* Màu nền trắng */
        }
        .product-box {
            width: 20%; /* Chiếm 30% chiều rộng khung cho mỗi cột */
            margin-bottom: 20px; /* Khoảng cách giữa các hàng */
            background: none;
            padding: 10px; /* Padding bên trong */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng cho sản phẩm */
            border-radius: 5px; /* Bo góc cho sản phẩm */
            display: flex;
            flex-direction: column; /* Để nội dung xếp chồng lên nhau */
            align-items: center; /* Căn giữa nội dung */
        }
        .product-box img {
            width: 100%; /* Ảnh chiếm toàn bộ chiều rộng khung sản phẩm */
            height: auto; /* Giữ tỷ lệ hình ảnh */
            object-fit: cover; /* Giữ tỷ lệ hình ảnh mà không bị kéo méo */
        }
        .product-description {
            text-align: center; /* Căn giữa mô tả */
            margin-top: 10px; /* Khoảng cách giữa ảnh và mô tả */
            background: linear-gradient(to right, red, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /*Khung niềm tin*/
        .body5 {
            margin-top: 0px;
            padding: 0px;
            background-color: white;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background-color: none;
        }

        .child_B5 {
            margin-left: 20px;
            padding-left: 40px;
            border-left: 1px solid  #0e5e0e; 
            font-family: lato;
            color: #0e5e0e;
            font-size: 19px;
            justify-content: center; 
            align-items: center; 
        }

        /*Khung sp cuộn*/
        .scrolling-products {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            background-color: white;
            padding: 20px 0;
        }
        .products-container {
            display: flex;
            gap: 100px;
            animation: scroll-left 17s linear infinite;
        }
        @keyframes scroll-left {
            from {
                transform: translateX(0%);
            }
            to {
                transform: translateX(-100%);
            }
        }
        .product-item {
            flex: 0 0 auto;
            width: 200px;
            text-align: center;
        }
        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .scrolling-products:hover .products-container {
            animation-play-state: paused;
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
        Các sản phẩm bánh ngọt của chúng tôi
    </div>
    <div class="container">
        <h2>Các sản phẩm bán chạy</h2>
        <div class="main-container">
            <div class="product-intro">
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/hawaii_mousse_0b7634f35012441cacaf833c24b4a793_grande.png" alt="Bánh 1">
                    <div class="product-description">Hawaii mousse</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/dd525367-1d09-4c51-9e38-d8625bbadd0a_a9424dae1a8e46859efdbf10dc8b20e2_grande.jpg" alt="Bánh 2">
                    <div class="product-description">Passion fruit mousse</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/tiramisu_cake_16a01603c84a4217826a59da6c6f6cfd_grande.jpg" alt="Bánh 3">
                    <div class="product-description">Tiramisu Cake</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/seasonal_fruit_cake_2e127af76a234fe9b261d154309456ed_grande.png" alt="Bánh 4">
                    <div class="product-description">Seasonal fruit Cake</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/red_velvet_cake_04dccd0577264305bf1b9a6b59f25a39_grande.jpg" alt="Bánh 5">
                    <div class="product-description">Red velvet Cake</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/mango_fruit_cake_031fc926091b4698a1a7099521ad8764_grande.jpg" alt="Bánh 6">
                    <div class="product-description">Mango fruit Cake</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/chocolate___strawberry_charlotte_b8e54856d0704deeb93f9d09ffa125e4_grande.png" alt="Bánh 7">
                    <div class="product-description">Chocolate&Strawberry charlotte</div>
                </div>
                <div class="product-box">
                    <img src="https://product.hstatic.net/1000104153/product/socola_cake_dd9dfa9425e846c0950d6978d7a2981d_grande.jpg" alt="Bánh 8">
                    <div class="product-description">Socola Cake</div>
                </div>
            </div>
        </div>
    </div>
    <div class = "body5">
        <div class = "child_B5" style="border-left: none;"8>
            <p><ul><li>🍃Sáng tạo</li></ul></p>
            <p>Luôn thay đổi và hiện đại</p>
        </div>
        <div class = "child_B5">
            <p><ul><li>🌿Thực hiện bởi những nghệ nhân</li></ul></p>
            <p>Tạo ra những sản phẩm xinh xắn </p>
        </div>
        <div class = "child_B5">
            <p><ul><li>💚Tận tâm phục vụ</li></ul></p>
            <p>Chỉ cần bạn nhớ đến chúng tôi</p>
        </div>
        <div class = "child_B5">
            <p><ul><li>🕙Vận chuyển 24h</li></ul></p>
            <p>Giao đúng nơi, tới đúng hẹn</p>
        </div>
    </div>
    <div class="scrolling-products">
        <div class="products-container" id="products"></div>
    </div>
    <script>
        const products = [
            { src: "https://product.hstatic.net/1000104153/product/060b4193-9b9c-45db-9d42-aaca342699ad_eaebe617eb7e4039992a2fccc3457d76_grande.jpg", name: "Black Forest cake" },
            { src: "https://product.hstatic.net/1000104153/product/green_tea_cheese_cake_2fcf366c3e214cfeb6c44e847059e273_grande.png", name: "Green tea cheese cake" },
            { src: "https://product.hstatic.net/1000104153/product/vanilla_cheese_cake_6_pax_cdee19e640b645378df936cef0281fc2_grande.jpg", name: "Vanilla Cheese Cake" },
            { src: "https://product.hstatic.net/1000104153/product/apple_crepe_dbdd671a3ead429a8aad22c0b6201d07_grande.jpg", name: "Apple Crepe" },
            { src: "https://product.hstatic.net/1000104153/product/banh_custard_bun_6cb7c796ffe8413e86a318f4c10ed386_grande.jpg", name: "Custard Bun Cake" },
            { src: "https://product.hstatic.net/1000104153/product/banh_donut_chocolate_den_05fa3ff0e45d428d80374c2014958fe1_grande.jpg", name: "Donut Chocolate" },
            { src: "https://product.hstatic.net/1000104153/product/banh_donut_xoai_9d3e624a625d471b82ee4f2d1d967440_grande.jpg", name: "Donut Mango" },
            { src: "https://product.hstatic.net/1000104153/product/cake-chuoi_1d9d7eae669d4cd0a1f3f2facd1da4c6_grande.png", name: "Banana Cake" },
            { src: "https://product.hstatic.net/1000104153/product/madeleine-vani_327175c128034aed885e376f621a3fc3_grande.png", name: "Madeleine Cake" },
            { src: "https://product.hstatic.net/1000104153/product/caramel_0009b29de5c049f0bc60b64592d03ffd_grande.jpg", name: "Creme Caramel" }
        ];
        
        function renderProducts() {
            const container = document.getElementById("products");
            container.innerHTML = "";
            for (let i = 0; i < 10; i++) { // Nhân bản sản phẩm nhiều lần để tạo hiệu ứng lặp mượt
                products.forEach(product => {
                    let div = document.createElement("div");
                    div.className = "product-item";
                    div.innerHTML = `<img src="${product.src}" alt="${product.name}"><p>${product.name}</p>`;
                    container.appendChild(div);
                });
            }
        }
        renderProducts();
    </script>
</body>
</html>