<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về XSShop</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .noidung {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #FF5F6D, #FFC371);
            color: #fff;
            text-align: center;
            padding: 50px 20px;
            /* bo goc duoi */
            border-radius: 0 0 20% 20% ;
        }
        .noidung2 {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #FF5F6D, #FFC371);
            color: #fff;
            text-align: center;
            padding: 50px 20px;
            /* bo goc tren */
            border-radius: 20% 20% 0 0;
            
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 24px;
            margin: 20px 0;
        }
        .stats {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .stat {
            margin: 0 20px;
        }
        .stat-number {
            font-size: 36px;
            font-weight: bold;
        }
        .story {
            margin-top: 30px;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 8px;
        }
        .story-container {
            display: flex; /* Sử dụng Flexbox để chia thành cột */
            align-items: center; /* Căn giữa theo chiều dọc */
            margin: 20px; /* Tạo khoảng cách xung quanh container */
        }

        .story-image {
            flex: 1; /* Chiếm 1 cột */
            margin-right: 20px; /* Khoảng cách giữa hình và nội dung */
        }

        .story-image img {
            max-width: 100%; /* Đảm bảo hình ảnh không vượt quá chiều rộng của cột */
            height: auto; /* Giữ tỷ lệ hình ảnh */
        }

        .story {
            flex: 2; /* Chiếm 2 cột */
        }

        /* Optional: Định dạng cho tiêu đề và đoạn văn */
        .story h2 {
            margin-bottom: 10px; /* Khoảng cách giữa tiêu đề và nội dung */
        }

        .story p {
            margin-bottom: 10px; /* Khoảng cách giữa các đoạn văn */
        }
        img {
            /* bo goc */
            border-radius: 50% 50% 50% 50%;
            
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="noidung">
            <h1>Về Running 2023</h1>
            <hr>
            <div class="stats">
                <div class="stat">
                    <div class="stat-number">1,349,029</div>
                    <h2>Số sản phẩm đã bán</h2>
                </div>
                <div class="stat">
                    <div class="stat-number">898,403</div>
                    <h2>Số khách hàng</h2>
                </div>
            </div>
        </div>
        <div class="story-container">
            <div class="story-image">
                <!-- <img src="path_to_your_image.jpg" alt="Hình ảnh câu chuyện" /> -->
                <!-- https://file.hstatic.net/200000323897/file/img_2976_13eb45042bb94a19b10b6332723b8eaa_grande.jpg -->
                <img src="https://file.hstatic.net/200000323897/file/img_2976_13eb45042bb94a19b10b6332723b8eaa_grande.jpg" alt="Hình ảnh câu chuyện" />
            </div>
            <div class="story">
                <h2>Câu Chuyện</h2>
                <p>
                    Được thành lập từ năm 2023, Running tự hào là đơn vị tiên phong chuyên cung cấp các mẫu giày thể thao với mẫu mã đa dạng và giá cả hợp lý.
                </p>
                <p>
                    Trong 6 năm phát triển, Running luôn cố gắng mang đến những giá trị tốt nhất đến tay người tiêu dùng.
                </p>
            </div>
        </div>

        <div class="noidung2">
            <h1>Về Running 2023</h1>
            <hr>
            <div class="stats">
                <div class="stat">
                    <div class="stat-number">1,349,029</div>
                    <h2>Số sản phẩm đã bán</h2>
                </div>
                <div class="stat">
                    <div class="stat-number">898,403</div>
                    <h2>Số khách hàng</h2>
                </div>
            </div>

            <div class="story">
                <h2>Câu Chuyện</h2>
                <p>
                    Được thành lập từ năm 2023, Running tự hào là đơn vị tiên phong chuyên cung cấp các mẫu giày thể thao với mẫu mã đa dạng và giá cả hợp lý.
                </p>
                <p>
                    Trong 6 năm phát triển, Running luôn cố gắng mang đến những giá trị tốt nhất đến tay người tiêu dùng.
                </p>
            </div>
        </div>



    </div>


</body>
</html>
