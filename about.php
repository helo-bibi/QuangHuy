<?php
$name = "Đoàn Quang Huy"; 
$student_id = "224001796"; 
$class = "CNTT D2024A";
$projects = [
    [
        "title" => "Website Dịch vụ Du lịch Đà Nẵng",
        "tech" => "HTML5, CSS3, JavaScript, PHP",
        "description" => "Trang web đặt tour du lịch, thuê xe tự lái và tìm kiếm các điểm đến nổi tiếng tại Đà Nẵng."
    ],
    [
        "title" => "Ứng dụng Quản lý Kho Hàng (Inventory Management)",
        "tech" => "Java, JSP/Servlet, MVC Architecture",
        "description" => "Hệ thống quản lý hàng tồn kho, nhập/xuất kho và phân quyền người dùng."
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ - <?php echo $name; ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; 
            background: #f1f5f9; 
            color: #334155; 
            padding: 10px 20px; 
            line-height: 1.3;
        }
        .card { 
            max-width: 800px; 
            margin: 0 auto; 
            background: #ffffff; 
            padding: 40px; 
            border-radius: 16px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.06); 
        }
        .top-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            border: 1px solid #dbeafe;
        }
        .top-badge .dot {
            width: 6px;
            height: 6px;
            background-color: #2563eb;
            border-radius: 50%;
        }
        .profile {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 24px;
            border-bottom: 2px solid #f1f5f9;
            margin-bottom: 28px;
        }
        .avatar {
            width: 70px;
            height: 70px;
            background: #2563eb;
            color: #fff;
            font-weight: 700;
            font-size: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            flex-shrink: 0;
        }
        .profile h1 { font-size: 26px; color: #0f172a; margin-bottom: 4px; }
        .profile p { font-size: 16px; color: #64748b; }
        .info-boxes {
            display: flex;
            gap: 16px;
            margin-bottom: 32px;
        }
        .info-box {
            flex: 1;
            background: #f8fafc;
            padding: 14px 18px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }
        .info-box label { display: block; font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase; margin-bottom: 2px; }
        .info-box span { font-size: 16px; font-weight: 600; color: #1e293b; }
        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .projects-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .project-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 4px solid #2563eb;
            padding: 20px;
            border-radius: 8px;
        }
        .project-item h3 { font-size: 18px; color: #0f172a; margin-bottom: 6px; }
        .tech { font-size: 14px; font-weight: 600; color: #2563eb; margin-bottom: 8px; }
        .project-item p { font-size: 15px; color: #475569; }
    </style>
</head>
<body>

<div class="card">
    <div class="top-badge">
        <span class="dot"></span>
        Hồ sơ cá nhân
    </div>
    
    <div class="profile">
        <div class="avatar">QH</div>
        <div>
            <h1><?php echo $name; ?></h1>
        </div>
    </div>

    <div class="info-boxes">
        <div class="info-box">
            <label>Mã sinh viên</label>
            <span><?php echo $student_id; ?></span>
        </div>
        <div class="info-box">
            <label>Lớp / Chuyên ngành</label>
            <span><?php echo $class; ?></span>
        </div>
    </div>
    
    <div class="section-title">Dự án đã thực hiện</div>

    <div class="projects-list">
        <?php foreach ($projects as $project): ?>
            <div class="project-item">
                <h3><?php echo $project['title']; ?></h3>
                <div class="tech">Công nghệ: <?php echo $project['tech']; ?></div>
                <p><?php echo $project['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
