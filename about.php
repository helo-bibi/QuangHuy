<?php
$name = "Đoàn Quang Huy"; 
$student_id = "224001796"; 
$class = "Công nghệ thông tin";
$bio = "Đam mê lập trình web và phát triển phần mềm.";

$projects = [
    [
        "title" => "Website Dịch vụ Du lịch Đà Nẵng",
        "tech" => "HTML5, CSS3, JS, PHP",
        "desc" => "Trang đặt tour, thuê xe và tìm kiếm điểm đến tại Đà Nẵng."
    ],
    [
        "title" => "Ứng dụng Quản lý Kho Hàng",
        "tech" => "Java, JSP/Servlet, MVC",
        "desc" => "Hệ thống quản lý tồn kho, nhập/xuất và phân quyền."
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?= $name ?></title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef2f5; margin: 0; padding: 20px; color: #333; }
        .box { max-width: 700px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #1e3a8a; margin-top: 0; border-bottom: 2px solid #3b82f6; padding-bottom: 8px; }
        h2 { color: #2563eb; font-size: 1.2rem; margin-top: 20px; }
        p { margin: 6px 0; }
        .card { background: #f8fafc; border-left: 4px solid #3b82f6; padding: 12px 15px; margin-top: 10px; border-radius: 0 6px 6px 0; }
        .tech { color: #d97706; font-size: 0.9rem; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h1>Hồ sơ Cá nhân</h1>
    <p><strong>Họ và tên:</strong> <?= $name ?></p>
    <p><strong>Mã sinh viên:</strong> <?= $student_id ?></p>
    <p><strong>Lớp:</strong> <?= $class ?></p>
    <p><strong>Giới thiệu:</strong> <?= $bio ?></p>

    <h2>Dự án đã làm</h2>
    <?php foreach ($projects as $item): ?>
        <div class="card">
            <strong><?= $item['title'] ?></strong>
            <div class="tech">Công nghệ: <?= $item['tech'] ?></div>
            <p><?= $item['desc'] ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
