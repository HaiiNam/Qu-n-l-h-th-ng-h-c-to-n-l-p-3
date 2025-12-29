<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chương trình học - Toán Lớp 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS NHÚNG TRỰC TIẾP ĐỂ XỬ LÝ ẨN HIỆN TAB */
        .content-tab {
            display: none;
            animation: fadeIn 0.5s;
        }
        .content-tab.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .chapter-link { cursor: pointer; }
        
        /* CSS cho body với header mới */
        body {
            background-color: #f5f7fa;
            padding-top: 0;
        }
        
        /* Điều chỉnh learning-container để không bị che bởi sticky header */
        .learning-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- HEADER MỚI GIỐNG INDEX.PHP -->
    <header class="header-hoc10-wrapper">
        <div class="header-hoc10-container">
            
            <div class="header-left-section">
                <a href="index.php" class="brand-logo">
                    <div class="logo-text">HocToan<span>1</span></div>
                </a>

                <nav class="nav-menu">
                    <a href="index.php" class="nav-item">
                        <i class="fas fa-home"></i> Trang chủ
                    </a>
                    
                </nav>
            </div>

            <div class="header-right-section">
                <span style="color: #4a5568; font-size: 14px; font-weight: 500;">
                    <i class="fas fa-user-graduate" style="color: #F58220;"></i>
                    Xin chào, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>
                </span>

                
            </div>

        </div>
    </header>

    <div class="learning-container">
        
        <aside class="sidebar">
            <div class="sidebar-header"><i class="fas fa-list-ul"></i> Mục Lục</div>
            <ul class="chapter-list">
                <li class="active" onclick="openChapter(event, 'c1')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 1</span>
                        <span class="chapter-name">Các số từ 0 tới 10</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c2')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 2</span>
                        <span class="chapter-name">Làm quen với 1 số hình phẳng </span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c3')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 3</span>
                        <span class="chapter-name">Phép cộng phép trừ trong phạm vi 10</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c4')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 4</span>
                        <span class="chapter-name">Làm quen với 1 số hình khối </span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c5')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 5</span>
                        <span class="chapter-name">Ôn tập học kỳ 1</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c6')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 6</span>
                        <span class="chapter-name">Các số đến 100</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c7')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 7</span>
                        <span class="chapter-name">Độ dài và đo độ dài</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c8')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 8</span>
                        <span class="chapter-name">Phép cộng và trừ trong phạm vi 100</span>
                    </div>
                </li>
                <li onclick="openChapter(event, 'c9')">
                    <div class="chapter-link">
                        <span class="chapter-number">Chương 9</span>
                        <span class="chapter-name">Ôn tập cuối năm</span>
                    </div>
                </li>
            </ul>
        </aside>

        <main class="main-content">
            
            <div id="c1" class="content-card content-tab active">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-book-reader"></i></div>
                    <div>
                        <h3>Đang học:</h3>
                        <h2>Chương 1: Các số từ 0 tới 10</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="lesson-grid">
                        <div class="lesson-column">
                           <p><i class="fas fa-check-circle text-gray"></i> Bài 1:Các số từ 0 tới 10</p>
                            <p> <i class="fas fa-check-circle text-gray"></i> 
       <a href="game_bong_da.php?ten_bai=<?php echo urlencode('Bài 2: Nhiều hơn , ít hơn, bằng nhau'); ?>" 
   style="text-decoration: none; color: inherit; font-weight: 500; transition: color 0.2s;" 
   onmouseover="this.style.color='#F58220'" 
   onmouseout="this.style.color='inherit'">
   
    Bài 2: Nhiều hơn, ít hơn, bằng nhau
</a>
</p>
                        </div>
                        <div class="lesson-column">
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 3: So sánh số</p>
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 4: Luyện tập chung</p>
                        </div>
                    </div>
                 <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

            <div id="c2" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-calculator"></i></div>
                    <div>
                        <h3>Tiếp theo:</h3>
                        <h2>Chương 2: Làm quen với 1 số hình phẳng</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="lesson-grid">
                        <div class="lesson-column">
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 5: Hình vuông, hình tròn, hình tam giác, hình chữ nhật</p>
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 6: Thực hành lắp ghép xếp hình</p>
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 7: Luyện tập chung</p>
                        </div>
                
                    </div>
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

            <div id="c3" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-pizza-slice"></i></div>
                    <div>
                        <h3>Tiếp theo:</h3>
                        <h2>Chương 3: Phép cộng phép trừ trong phạm vi 10</h2>
                    </div>
                </div>
                <div class="card-body">
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 8: Phép cộng trong phạm vi 10</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 9: Phép trừ trong phạm vi 10</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 10: Luyện tập chung</p>
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

            <div id="c4" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-shapes"></i></div>
                    <div>
                        <h3>Tiếp theo:</h3>
                        <h2>Chương 4: Làm quen với một số hình khối</h2>
                    </div>
                </div>
                        <div class="card-body">
                    <div class="lesson-grid">
                        <div class="lesson-column">
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 11: Hình lập phương, hình hộp chữ nhật</p>
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 12: Vị trí hướng trong không gian</p>
                            <p><i class="fas fa-check-circle text-gray"></i> Bài 13: Luyện tập chung</p>
                        </div>
                
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>
            

            <div id="c5" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-ruler-combined"></i></div>
                    <div>
                        <h3>Tiếp theo:</h3>
                        <h2>Chương 5: Ôn tập học kỳ 1</h2>
                    </div>
                </div>
               <div class="card-body">
                
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

            <div id="c6" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-chart-pie"></i></div>
                    <div>
                        <h3>Tiếp theo:</h3>
                        <h2>Chương 6: Các số đến 100 </h2>
                    </div>
                </div>
                <div class="card-body">
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 14: Số có 2 chữ số</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 15: So sánh các số có 2 chữ số</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 16: Bảng các số từ 1 tới 100</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 17 : Luyện tập chung</p>
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

             <div id="c7" class="content-card content-tab">
                <div class="card-header-blue">
                    <div class="header-icon"><i class="fas fa-star"></i></div>
                    <div>
                        <h3>Mở rộng:</h3>
                        <h2>Chương 7: Độ dài và đo độ dài</h2>
                    </div>
                </div>
                <div class="card-body">
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 18: Dài hơn , ngắn hơn </p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 19: Đơn vị đo độ dài </p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 20: Thực hành ước lượng và đo độ dài</p>
                    <p><i class="fas fa-check-circle text-gray"></i> Bài 21: Luyện tập chung</p>
                    <button class="btn btn-kid-primary" style="margin-top:20px">Bấm vào bài để làm </button>
                </div>
            </div>

        </main>
    </div>

    <script>
        function openChapter(evt, chapterName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("content-tab");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].className = tabcontent[i].className.replace(" active", "");
            }

            tablinks = document.querySelectorAll(".chapter-list li");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("active", "");
            }

            document.getElementById(chapterName).className += " active";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>