<?php
$profile = [
    'name' => 'Đoàn Quang Huy',
    'title' => 'Sinh viên Toán - Công nghệ thông tin | Định hướng Web Developer',
    'education' => 'Sinh viên năm 3',
    'major' => 'Toán - CNTT',
    'class' => 'CNTT D2024A',
    'school' => 'Đại học Thủ đô Hà Nội',
    'email' => 'quanghuyhq06@gmail.com',
    'github' => 'https://github.com/qhuyd-bee/QuangHuy',
    'hobbies' => [
    ['name' => 'Lập trình web', 'icon' => 'fa-laptop-code'],
    ['name' => 'Nghe nhạc', 'icon' => 'fa-headphones'],
    ['name' => 'Xem phim', 'icon' => 'fa-film'],
    ['name' => 'Chơi game', 'icon' => 'fa-gamepad'],
    ['name' => 'Cầu lông', 'icon' => 'fa-person-running']
]
];

$skills = [
    ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5'],
    ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt'],
    ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
    ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
    ['name' => 'MySQL', 'icon' => 'fa-solid fa-database'],
    ['name' => 'C++', 'icon' => 'fa-solid fa-code']
];

$projects = [
    [
        'id' => '01',
        'title' => 'Website Dịch vụ Du lịch Đà Nẵng',
        'description' => 'Trang web đặt tour du lịch, thuê xe tự lái và tìm kiếm các điểm đến nổi tiếng tại Đà Nẵng.',
        'tags' => ['HTML5', 'CSS3', 'JavaScript', 'PHP']
    ],
    [
        'id' => '02',
        'title' => 'Ứng dụng Quản lý Kho Hàng',
        'description' => 'Hệ thống quản lý hàng tồn kho, nhập/xuất kho và phân quyền người dùng.',
        'tags' => ['Java', 'MySQL', 'JSP/Servlet', 'MVC Architecture']
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio cá nhân - <?php echo htmlspecialchars($profile['name']); ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --bg-color: #0b1329;
            --card-bg: rgba(16, 28, 58, 0.75);
            --card-border: rgba(56, 189, 248, 0.15);
            --primary: #0284c7;
            --secondary: #06b6d4;
            --accent: #38bdf8;
            --text-main: #f0f9ff;
            --text-muted: #94a3b8;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        header {
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            background: radial-gradient(circle at 50% 20%, rgba(6, 182, 212, 0.18), transparent 70%);
        }

        header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #ffffff 30%, var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        header p {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: auto;
        }

        nav {
            background: rgba(11, 19, 41, 0.85);
            backdrop-filter: blur(12px);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--card-border);
        }

        .nav-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #fff;
            background: rgba(56, 189, 248, 0.1);
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            display: inline-block;
            position: relative;
        }

        .section-title h2::after {
            content: "";
            display: block;
            width: 50%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            margin: 8px auto 0;
            border-radius: 2px;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .about-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 35px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .about-info-item {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .about-info-item i {
            color: var(--secondary);
            width: 20px;
        }

        .about-info-item strong {
            color: #fff;
            min-width: 140px;
        }

        .hobbies {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .hobby {
            background: rgba(6, 182, 212, 0.1);
            color: var(--accent);
            border: 1px solid rgba(6, 182, 212, 0.25);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }

        .skill-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .skill-card i {
            font-size: 2.5rem;
            margin-bottom: 12px;
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .skill-card h4 {
            color: #fff;
            font-size: 1rem;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 10px 20px rgba(2, 132, 199, 0.25);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: var(--secondary);
            box-shadow: 0 15px 30px rgba(6, 182, 212, 0.2);
        }

        .project-card h3 {
            color: #fff;
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .project-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: rgba(56, 189, 248, 0.08);
            color: var(--secondary);
            border: 1px solid rgba(6, 182, 212, 0.25);
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .contact-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 25px;
        }

        .contact-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(2, 132, 199, 0.3);
        }

        .contact-btn:hover {
            opacity: 0.9;
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
        }

        footer {
            text-align: center;
            padding: 30px;
            border-top: 1px solid var(--card-border);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .about-grid {
                grid-template-columns: 1fr;
            }

            header h1 {
                font-size: 2rem;
            }

            .contact-links {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1><?php echo htmlspecialchars($profile['name']); ?></h1>
            <p><?php echo htmlspecialchars($profile['title']); ?></p>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <a href="#about">Giới thiệu</a>
            <a href="#skills">Kỹ năng</a>
            <a href="#projects">Dự án</a>
            <a href="#contact">Liên hệ</a>
        </div>
    </nav>

    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>Giới thiệu bản thân</h2>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <div class="about-info-item">
                        <i class="fa-solid fa-user"></i>
                        <strong>Họ và tên:</strong> <?php echo htmlspecialchars($profile['name']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <strong>Học vấn:</strong> <?php echo htmlspecialchars($profile['education']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <strong>Ngành học:</strong> <?php echo htmlspecialchars($profile['major']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-users"></i>
                        <strong>Lớp:</strong> <?php echo htmlspecialchars($profile['class']); ?>
                    </div>
                    <div class="about-info-item">
                        <i class="fa-solid fa-school"></i>
                        <strong>Trường:</strong> <?php echo htmlspecialchars($profile['school']); ?>
                    </div>
                </div>

                <div class="about-card">
                    <h3 style="color: #fff; margin-bottom: 15px;">Sở thích cá nhân</h3>
                    <div class="hobbies">
                        <?php foreach ($profile['hobbies'] as $hobby): ?>
                            <span class="hobby">
                                <i class="fa-solid <?php echo htmlspecialchars($hobby['icon']); ?>"></i> 
                                <?php echo htmlspecialchars($hobby['name']); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="section-title">
                <h2>Kỹ năng chuyên môn</h2>
            </div>

            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card">
                        <i class="<?php echo htmlspecialchars($skill['icon']); ?>"></i>
                        <h4><?php echo htmlspecialchars($skill['name']); ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="section-title">
                <h2>Dự án nổi bật</h2>
            </div>

            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <div>
                            <h3><?php echo htmlspecialchars($project['id'] . '. ' . $project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                        </div>
                        <div class="tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Liên hệ</h2>
            </div>

            <div class="contact-card">
                <p style="color: var(--text-muted); margin-bottom: 20px;">
                    Rất mong muốn được kết nối và hợp tác với bạn trong các dự án sắp tới!
                </p>

                <div class="contact-links">
                    <a href="mailto:<?php echo htmlspecialchars($profile['email']); ?>" class="contact-btn">
                        <i class="fa-regular fa-envelope"></i> Email
                    </a>
                    <a href="<?php echo htmlspecialchars($profile['github']); ?>" target="_blank" class="contact-btn" style="background: rgba(255,255,255,0.08); border: 1px solid var(--card-border);">
                        <i class="fa-brands fa-github"></i> GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>© <?php echo date('Y'); ?> <?php echo htmlspecialchars($profile['name']); ?>. hẹ hẹ hẹ.</p>
    </footer>

</body>

</html>
