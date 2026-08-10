<?php
    $hoTen = "Đoàn Quang Huy"; 
    $msv = "224001796";          
    $lop = "CNTT D2024A";              
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu cá nhân</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; }
        .box { background: #f0f4f8; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        h1, h2 { color: #1a5276; }
    </style>
</head>
<body>

    <h1>Hồ sơ cá nhân</h1>
    <div class="box">
        <p><strong>Họ và tên:</strong> <?php echo $hoTen; ?></p>
        <p><strong>Mã sinh viên:</strong> <?php echo $msv; ?></p>
        <p><strong>Lớp:</strong> <?php echo $lop; ?></p>
    </div>

    <h2>Dự án đã làm</h2>
    <ul>
        <li>Website bài tập cá nhân / Bài tập lớn môn học trước.</li>
    </ul>

    <h2>Dự án lập trình Web</h2>
    <p><strong>Tên dự án kiến nghị:</strong>.</p>
    <p><strong>Mô tả:</strong> Xây dựng các chức năng CRUD, đăng nhập, phân quyền và kết nối CSDL MySQL bằng PHP.</p>

</body>
</html>
