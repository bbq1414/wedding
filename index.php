<?php
// Configuration for editable content - you can modify these values directly
$config = [
    'groom' => [
        'name' => '이지훈',
        'father' => '이대영',
        'mother' => '서지원',
        'accounts' => [
            ['bank' => '신한은행', 'number' => '110-123-456789', 'holder' => '이대영'],
            ['bank' => '국민은행', 'number' => '123-12-1234567', 'holder' => '이지훈']
        ],
        'phone' => '010-1234-5678',
        'message' => '010-1234-5678'
    ],
    'bride' => [
        'name' => '유수연',
        'father' => '유창환',
        'mother' => '박은정',
        'accounts' => [
            ['bank' => '우리은행', 'number' => '1002-123-456789', 'holder' => '유창환'],
            ['bank' => '하나은행', 'number' => '123-456789-01234', 'holder' => '유수연']
        ],
        'phone' => '010-9876-5432',
        'message' => '010-9876-5432'
    ],
    'wedding' => [
        'date' => '2023년 10월 25일 토요일 오후 1시 30분',
        'venue' => '더케이호텔 컨벤션홀',
        'address' => '서울특별시 양재동 엘타워 6층',
        'phone' => '02-123-4567',
        'message' => '축하해주셔서 감사합니다.'
    ],
    'gallery' => [
        'images' => [
            'images/gallery1.jpg',
            'images/gallery2.jpg',
            'images/gallery3.jpg',
            'images/gallery4.jpg',
            'images/gallery5.jpg',
            'images/gallery6.jpg',
            'images/gallery7.jpg',
            'images/gallery8.jpg',
            'images/gallery9.jpg',
            'images/gallery10.jpg',
            'images/gallery11.jpg',
            'images/gallery12.jpg',
        ]
    ],
    'poem' => '사랑은 기다림의 미학이며<br>
        두 사람이 함께 걸어가는 여정입니다<br>
        함께 손을 잡고 걸어갈 수 있어<br>
        행복합니다.<br><br>
        
        저희 두 사람이<br>
        사랑과 믿음으로 만나<br>
        하나의 가정을 이루게 되었습니다<br>
        귀한 걸음 하시어<br>
        축복해 주시면 감사하겠습니다.'
];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans KR', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: normal;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .names {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .main-image {
            margin: 20px 0;
        }

        .main-image img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }

        .wedding-title {
            font-size: 36px;
            color: #f8a4c1;
            margin: 20px 0;
            font-family: 'Dancing Script', cursive;
        }

        .wedding-date {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        /* Poem Section */
        .poem {
            text-align: center;
            margin: 40px 0;
            padding: 20px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .poem h3 {
            color: #f8a4c1;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .poem p {
            font-size: 14px;
            line-height: 1.8;
            color: #666;
        }

        /* Contact Section */
        .contact {
            margin: 40px 0;
        }

        .parents {
            text-align: center;
            margin-bottom: 30px;
        }

        .parent-group {
            margin: 10px 0;
            font-size: 14px;
        }

        .contact-buttons {
            margin: 30px 0;
        }

        .contact-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-size: 14px;
            color: #666;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .btn-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-decoration: none;
        }

        .btn-circle.small {
            width: 30px;
            height: 30px;
            font-size: 12px;
        }

        .contact-row:nth-child(1) .btn-circle {
            background-color: #6ab7ff;
        }

        .contact-row:nth-child(2) .btn-circle {
            background-color: #f8a4c1;
        }

        .family-contacts {
            margin: 30px 0;
        }

        .family-row {
            margin: 20px 0;
        }

        .side {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .family-member {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
            padding: 5px 0;
        }

        .relation {
            width: 60px;
            font-size: 14px;
            color: #666;
        }

        .name {
            flex-grow: 1;
            font-size: 14px;
        }

        .contact-icons {
            display: flex;
            gap: 5px;
        }

        .family-row:nth-child(1) .btn-circle {
            background-color: #6ab7ff;
        }

        .family-row:nth-child(2) .btn-circle {
            background-color: #f8a4c1;
        }

        /* Calendar Section */
        .calendar-section {
            margin: 40px 0;
            text-align: center;
        }

        .calendar-section h3 {
            color: #f8a4c1;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .calendar {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .calendar th, .calendar td {
            width: 14.28%;
            padding: 10px;
            text-align: center;
            font-size: 14px;
        }

        .calendar th {
            color: #666;
        }

        .calendar .today {
            background-color: #f8a4c1;
            color: white;
            border-radius: 50%;
        }

        /* Gallery Section */
        .gallery-section {
            margin: 40px 0;
            text-align: center;
        }

        .gallery-section h3 {
            color: #f8a4c1;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .gallery-item {
            cursor: pointer;
            border-radius: 50%;
            overflow: hidden;
            aspect-ratio: 1/1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-caption {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }

        /* Location Section */
        .location-section {
            margin: 40px 0;
            text-align: center;
        }

        .location-section h3 {
            color: #f8a4c1;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .venue-info {
            margin: 20px 0;
        }

        .venue-name {
            font-size: 16px;
            font-weight: bold;
        }

        .venue-address {
            font-size: 14px;
            color: #666;
            margin: 5px 0;
        }

        .venue-phone {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f8a4c1;
            color: white;
            text-decoration: none;
            line-height: 40px;
            margin-top: 10px;
        }

        .map {
            width: 100%;
            height: 200px;
            background-color: #f5f5f5;
            margin: 20px 0;
            border-radius: 10px;
        }

        .transport-options {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .transport-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
            color: #666;
        }

        .transport-option i {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
        }

        /* Account Section */
        .account-section {
            margin: 40px 0;
            text-align: center;
        }

        .account-section h3 {
            color: #f8a4c1;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .account-section p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .account-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn-account {
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-account.groom {
            background-color: #6ab7ff;
        }

        .btn-account.bride {
            background-color: #f8a4c1;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gallery-modal-content {
            width: 90%;
            max-width: 800px;
            padding: 10px;
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        #modalTitle {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .account-item {
            margin: 15px 0;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .account-bank {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .account-number-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .account-number {
            font-size: 14px;
            color: #666;
        }

        .btn-copy {
            padding: 5px 10px;
            background-color: #f5f5f5;
            border: none;
            border-radius: 5px;
            font-size: 12px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-copy:hover {
            background-color: #e0e0e0;
        }

        #galleryModalImage {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            
            .gallery {
                grid-template-columns: repeat(3, 1fr);
                gap: 5px;
            }
            
            .account-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn-account {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="names">
                <h1><?php echo $config['groom']['name']; ?></h1>
                <h1>&</h1>
                <h1><?php echo $config['bride']['name']; ?></h1>
            </div>
            
            <div class="main-image">
                <img src="images/main.jpg" alt="Wedding Photo">
            </div>
            
            <div class="wedding-title">
                <h2>Wedding</h2>
            </div>
            
            <div class="wedding-date">
                <p><?php echo $config['wedding']['date']; ?></p>
                <p><?php echo $config['wedding']['venue']; ?></p>
            </div>
        </header>
        
        <!-- Poem Section -->
        <section class="poem">
            <h3>"하나 되는 날"</h3>
            <p><?php echo $config['poem']; ?></p>
        </section>
        
        <!-- Contact Section -->
        <section class="contact">
            <div class="parents">
                <div class="parent-group">
                    <p><?php echo $config['groom']['father']; ?> · <?php echo $config['groom']['mother']; ?> 의 아들 <?php echo $config['groom']['name']; ?></p>
                </div>
                <div class="parent-group">
                    <p><?php echo $config['bride']['father']; ?> · <?php echo $config['bride']['mother']; ?> 의 딸 <?php echo $config['bride']['name']; ?></p>
                </div>
            </div>
            
            <div class="contact-buttons">
                <div class="contact-row">
                    <span class="label">신랑측에게 연락하기</span>
                    <div class="buttons">
                        <a href="tel:<?php echo $config['groom']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="sms:<?php echo $config['groom']['message']; ?>" class="btn-circle">
                            <i class="fas fa-comment"></i>
                        </a>
                    </div>
                </div>
                
                <div class="contact-row">
                    <span class="label">신부측에게 연락하기</span>
                    <div class="buttons">
                        <a href="tel:<?php echo $config['bride']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="sms:<?php echo $config['bride']['message']; ?>" class="btn-circle">
                            <i class="fas fa-comment"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="family-contacts">
                <div class="family-row">
                    <span class="side">신랑측</span>
                    <div class="family-member">
                        <span class="relation">아버지</span>
                        <span class="name"><?php echo $config['groom']['father']; ?></span>
                        <div class="contact-icons">
                            <a href="tel:<?php echo $config['groom']['phone']; ?>" class="btn-circle small">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="sms:<?php echo $config['groom']['message']; ?>" class="btn-circle small">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="family-member">
                        <span class="relation">어머니</span>
                        <span class="name"><?php echo $config['groom']['mother']; ?></span>
                        <div class="contact-icons">
                            <a href="tel:<?php echo $config['groom']['phone']; ?>" class="btn-circle small">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="sms:<?php echo $config['groom']['message']; ?>" class="btn-circle small">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="family-row">
                    <span class="side">신부측</span>
                    <div class="family-member">
                        <span class="relation">아버지</span>
                        <span class="name"><?php echo $config['bride']['father']; ?></span>
                        <div class="contact-icons">
                            <a href="tel:<?php echo $config['bride']['phone']; ?>" class="btn-circle small">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="sms:<?php echo $config['bride']['message']; ?>" class="btn-circle small">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="family-member">
                        <span class="relation">어머니</span>
                        <span class="name"><?php echo $config['bride']['mother']; ?></span>
                        <div class="contact-icons">
                            <a href="tel:<?php echo $config['bride']['phone']; ?>" class="btn-circle small">
                                <i class="fas fa-phone"></i>
                            </a>
                            <a href="sms:<?php echo $config['bride']['message']; ?>" class="btn-circle small">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Calendar Section -->
        <section class="calendar-section">
            <h3>우리의 날</h3>
            <div class="calendar" id="calendar">
                <!-- Calendar will be generated by JavaScript -->
            </div>
        </section>
        
        <!-- Gallery Section -->
        <section class="gallery-section">
            <h3>하나되는 날</h3>
            <div class="gallery">
                <?php foreach ($config['gallery']['images'] as $index => $image): ?>
                <div class="gallery-item" data-index="<?php echo $index; ?>">
                    <img src="<?php echo $image; ?>" alt="Wedding Gallery Image">
                </div>
                <?php endforeach; ?>
            </div>
            <p class="gallery-caption">소중한 순간들을 함께해주셔서 감사합니다</p>
        </section>
        
        <!-- Location Section -->
        <section class="location-section">
            <h3>오시는 길</h3>
            <div class="venue-info">
                <p class="venue-name"><?php echo $config['wedding']['venue']; ?></p>
                <p class="venue-address"><?php echo $config['wedding']['address']; ?></p>
                <a href="tel:<?php echo $config['wedding']['phone']; ?>" class="venue-phone">
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            
            <div class="map" id="map">
                <!-- Naver Map will be inserted here -->
            </div>
            
            <div class="transport-options">
                <div class="transport-option">
                    <i class="fas fa-subway"></i>
                    <span>지하철</span>
                </div>
                <div class="transport-option">
                    <i class="fas fa-bus"></i>
                    <span>버스</span>
                </div>
                <div class="transport-option">
                    <i class="fas fa-car"></i>
                    <span>자가용</span>
                </div>
                <div class="transport-option">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>카카오맵</span>
                </div>
            </div>
        </section>
        
        <!-- Account Section -->
        <section class="account-section">
            <h3>마음 전하실 곳</h3>
            <p>축하의 마음을 전달해 주시면 감사하겠습니다.</p>
            
            <div class="account-buttons">
                <button class="btn-account groom" id="btnGroomAccount">신랑측 계좌보기</button>
                <button class="btn-account bride" id="btnBrideAccount">신부측 계좌보기</button>
            </div>
        </section>
    </div>
    
    <!-- Modal for Account Numbers -->
    <div class="modal" id="accountModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3 id="modalTitle">계좌번호</h3>
            <div id="accountList">
                <!-- Account numbers will be inserted here -->
            </div>
        </div>
    </div>
    
    <!-- Modal for Gallery Images -->
    <div class="modal" id="galleryModal">
        <div class="modal-content gallery-modal-content">
            <span class="close-modal">&times;</span>
            <img id="galleryModalImage" src="/placeholder.svg" alt="Gallery Image">
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Calendar Generation
            generateCalendar();
            
            // Account Modal
            const accountModal = document.getElementById('accountModal');
            const btnGroomAccount = document.getElementById('btnGroomAccount');
            const btnBrideAccount = document.getElementById('btnBrideAccount');
            const closeModal = document.getElementsByClassName('close-modal');
            const accountList = document.getElementById('accountList');
            const modalTitle = document.getElementById('modalTitle');
            
            // Gallery Modal
            const galleryModal = document.getElementById('galleryModal');
            const galleryItems = document.querySelectorAll('.gallery-item');
            const galleryModalImage = document.getElementById('galleryModalImage');
            
            // Account Modal Events
            btnGroomAccount.addEventListener('click', function() {
                showAccountModal('신랑측 계좌번호', [
                    { bank: '신한은행', number: '110-123-456789', holder: '이대영' },
                    { bank: '국민은행', number: '123-12-1234567', holder: '이지훈' }
                ]);
            });
            
            btnBrideAccount.addEventListener('click', function() {
                showAccountModal('신부측 계좌번호', [
                    { bank: '우리은행', number: '1002-123-456789', holder: '유창환' },
                    { bank: '하나은행', number: '123-456789-01234', holder: '유수연' }
                ]);
            });
            
            // Close Modals
            for (let i = 0; i < closeModal.length; i++) {
                closeModal[i].addEventListener('click', function() {
                    accountModal.style.display = 'none';
                    galleryModal.style.display = 'none';
                });
            }
            
            // Gallery Modal Events
            galleryItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    const imgSrc = this.querySelector('img').src;
                    galleryModalImage.src = imgSrc;
                    galleryModal.style.display = 'block';
                });
            });
            
            // Close Modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target == accountModal) {
                    accountModal.style.display = 'none';
                }
                if (event.target == galleryModal) {
                    galleryModal.style.display = 'none';
                }
            });
            
            // Function to show account modal
            function showAccountModal(title, accounts) {
                modalTitle.textContent = title;
                accountList.innerHTML = '';
                
                accounts.forEach(function(account) {
                    const accountItem = document.createElement('div');
                    accountItem.className = 'account-item';
                    
                    const bankName = document.createElement('div');
                    bankName.className = 'account-bank';
                    bankName.textContent = account.bank + ' (' + account.holder + ')';
                    
                    const accountNumberContainer = document.createElement('div');
                    accountNumberContainer.className = 'account-number-container';
                    
                    const accountNumber = document.createElement('div');
                    accountNumber.className = 'account-number';
                    accountNumber.textContent = account.number;
                    
                    const copyButton = document.createElement('button');
                    copyButton.className = 'btn-copy';
                    copyButton.textContent = '복사';
                    copyButton.addEventListener('click', function() {
                        copyToClipboard(account.number);
                        this.textContent = '복사됨';
                        setTimeout(() => {
                            this.textContent = '복사';
                        }, 2000);
                    });
                    
                    accountNumberContainer.appendChild(accountNumber);
                    accountNumberContainer.appendChild(copyButton);
                    
                    accountItem.appendChild(bankName);
                    accountItem.appendChild(accountNumberContainer);
                    
                    accountList.appendChild(accountItem);
                });
                
                accountModal.style.display = 'block';
            }
            
            // Function to copy text to clipboard
            function copyToClipboard(text) {
                const textarea = document.createElement('textarea');
                textarea.value = text;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
            }
            
            // Function to generate calendar
            function generateCalendar() {
                const calendarElement = document.getElementById('calendar');
                if (!calendarElement) return;
                
                // Set wedding date (example: October 25, 2023)
                const weddingDate = new Date(2023, 9, 25); // Month is 0-indexed
                const currentMonth = weddingDate.getMonth();
                const currentYear = weddingDate.getFullYear();
                
                // Create calendar header
                const calendarHeader = document.createElement('div');
                calendarHeader.className = 'calendar-header';
                calendarHeader.innerHTML = `
                    <div class="month-year">${getMonthName(currentMonth)} ${currentYear}</div>
                    <div class="calendar-nav">
                        <span>sat. pm 1:30</span>
                    </div>
                `;
                
                // Create table for calendar
                const table = document.createElement('table');
                table.className = 'calendar';
                
                // Create header row with day names
                const headerRow = document.createElement('tr');
                const days = ['일', '월', '화', '수', '목', '금', '토'];
                
                days.forEach(day => {
                    const th = document.createElement('th');
                    th.textContent = day;
                    if (day === '일') th.style.color = '#f8a4c1';
                    if (day === '토') th.style.color = '#6ab7ff';
                    headerRow.appendChild(th);
                });
                
                table.appendChild(headerRow);
                
                // Get first day of month and number of days
                const firstDay = new Date(currentYear, currentMonth, 1).getDay();
                const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
                
                // Create calendar days
                let date = 1;
                for (let i = 0; i < 6; i++) {
                    // Create a table row
                    const row = document.createElement('tr');
                    
                    // Create cells for each day of the week
                    for (let j = 0; j < 7; j++) {
                        const cell = document.createElement('td');
                        
                        if (i === 0 && j < firstDay) {
                            // Empty cells before the first day of the month
                            cell.textContent = '';
                        } else if (date > daysInMonth) {
                            // Empty cells after the last day of the month
                            cell.textContent = '';
                        } else {
                            // Regular day cells
                            cell.textContent = date;
                            
                            // Highlight wedding date
                            if (date === weddingDate.getDate()) {
                                cell.className = 'today';
                            }
                            
                            // Color Sundays and Saturdays
                            if (j === 0) cell.style.color = '#f8a4c1';
                            if (j === 6) cell.style.color = '#6ab7ff';
                            
                            date++;
                        }
                        
                        row.appendChild(cell);
                    }
                    
                    table.appendChild(row);
                    
                    // Stop creating rows if we've used all the days
                    if (date > daysInMonth) {
                        break;
                    }
                }
                
                calendarElement.appendChild(calendarHeader);
                calendarElement.appendChild(table);
            }
            
            // Helper function to get month name
            function getMonthName(monthIndex) {
                const months = [
                    '1월', '2월', '3월', '4월', '5월', '6월',
                    '7월', '8월', '9월', '10월', '11월', '12월'
                ];
                return months[monthIndex];
            }
        });
    </script>
</body>
</html>
