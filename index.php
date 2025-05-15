<?php
$config = [
    'groom' => [
        'name' => '강태일',
        'phone' => '010-3652-5609',
        'father' => ['name' => '강공현', 'phone' => '010-2499-5609', 'bank' => '우리은행', 'number' => '1002-809-433276'],
        'mother' => ['name' => '김진주', 'phone' => '010-2267-5609', 'bank' => '제일은행', 'number' => '160-20-120948'],
        'accounts' => [
            ['bank' => '우리은행', 'number' => '1002-809-433276', 'holder' => '강공현'],
            ['bank' => '제일은행', 'number' => '160-20-120948', 'holder' => '김진주']
        ]
    ],
    'bride' => [
        'name' => '오다솔',
        'phone' => '010-9948-6265',
        'father' => ['name' => '오학만', 'phone' => '010-6822-7117', 'bank' => '신한은행', 'number' => '110-002-690637'],
        'mother' => ['name' => '이인자', 'phone' => '010-4713-6265', 'bank' => '광주은행', 'number' => '609-122-202811'],
        'accounts' => [
            ['bank' => '신한은행', 'number' => '110-002-690637', 'holder' => '오학만'],
            ['bank' => '광주은행', 'number' => '609-122-202811', 'holder' => '이인자']
        ]
    ],
    'wedding' => [
        'date' => "2025-06-06",
        'date_eng' => "fri. pm 1:00",
        'datetime' => '2025년 6월 6일 금요일 오후 1시',
        'venue' => '그린컨벤션 웨딩홀 1F',
        'address' => '서울 도봉구 도봉1동 도봉산길 10',
        'phone' => '02-955-2233'
    ],
    'gallery' => [
        'images' => [
            './images/1.webp',
            './images/2.webp',
            './images/3.webp',
            './images/4.webp',
            './images/5.webp',
            './images/6.webp',
            './images/7.webp',
            './images/8.webp',
            './images/9.webp',
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type = "text/css" href="./css/main.css">
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="main-image">
                <img src="./images/main.webp" alt="Wedding Photo">
            </div>
            
            <div class="wedding-title">
                <h2>Wedding</h2>
            </div>
            
            <div class="wedding-date">
                <p><?php echo $config['wedding']['datetime']; ?></p>
                <p><?php echo $config['wedding']['venue']; ?></p>
            </div>
        </header>
        
        <!-- Poem Section -->
        <section class="poem">
            <h3>" 이제 서로, 평생 함께 "</h3>
            <p><?php echo $config['poem']; ?></p>
        </section>
        
        <!-- Contact Section -->
        <section class="contact">
            <div class="parents">
                <div class="parent-group">
                    <p><?php echo $config['groom']['father']['name']; ?> · <?php echo $config['groom']['mother']['name']; ?> 의 장남 <b><?php echo $config['groom']['name']; ?></b></p>
                </div>
                <div class="parent-group">
                    <p><?php echo $config['bride']['father']['name']; ?> · <?php echo $config['bride']['mother']['name']; ?> 의 장녀 <b><?php echo $config['bride']['name']; ?></b></p>
                </div>
            </div>
            
            <div class="contact-buttons">
                <div class="contact-row">
                    <span class="label">신랑에게 연락하기</span>
                    <div class="buttons">
                        <a href="tel:<?php echo $config['groom']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="sms:<?php echo $config['groom']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-comment"></i>
                        </a>
                    </div>
                </div>
                
                <div class="contact-row">
                    <span class="label">신부에게 연락하기</span>
                    <div class="buttons">
                        <a href="tel:<?php echo $config['bride']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="sms:<?php echo $config['bride']['phone']; ?>" class="btn-circle">
                            <i class="fas fa-comment"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="family-contacts">
              <div class="family-row">
                <span class="side">신랑 측 혼주</span>
                <div class="family-member">
                  <span class="relation">아버지</span>
                  <span class="name"><?php echo $config['groom']['father']['name']; ?></span>
                  <div class="contact-icons">
                    <a href="tel:<?php echo $config['groom']['father']['phone']; ?>" class="btn-circle"><i class="fas fa-phone"></i></a>
                    <a href="sms:<?php echo $config['groom']['father']['phone']; ?>" class="btn-circle"><i class="fas fa-comment"></i></a>
                  </div>
                </div>
                <div class="family-member">
                  <span class="relation">어머니</span>
                  <span class="name"><?php echo $config['groom']['mother']['name']; ?></span>
                  <div class="contact-icons">
                    <a href="tel:<?php echo $config['groom']['mother']['phone']; ?>" class="btn-circle"><i class="fas fa-phone"></i></a>
                    <a href="sms:<?php echo $config['groom']['mother']['phone']; ?>" class="btn-circle"><i class="fas fa-comment"></i></a>
                  </div>
                </div>
              </div>

              <div class="family-row">
                <span class="side">신부 측 혼주</span>
                <div class="family-member">
                  <span class="relation">아버지</span>
                  <span class="name"><?php echo $config['bride']['father']['name']; ?></span>
                  <div class="contact-icons">
                    <a href="tel:<?php echo $config['bride']['father']['phone']; ?>" class="btn-circle"><i class="fas fa-phone"></i></a>
                    <a href="sms:<?php echo $config['bride']['father']['phone']; ?>" class="btn-circle"><i class="fas fa-comment"></i></a>
                  </div>
                </div>
                <div class="family-member">
                  <span class="relation">어머니</span>
                  <span class="name"><?php echo $config['bride']['mother']['name']; ?></span>
                  <div class="contact-icons">
                    <a href="tel:<?php echo $config['bride']['mother']['phone']; ?>" class="btn-circle"><i class="fas fa-phone"></i></a>
                    <a href="sms:<?php echo $config['bride']['mother']['phone']; ?>" class="btn-circle"><i class="fas fa-comment"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </section>
        
        <!-- Calendar Section -->
        <section class="calendar-section">
            <div class="calendar" id="calendar">
                <!-- Calendar will be generated by JavaScript -->
            </div>
        </section>
        
        <!-- Gallery Section -->
        <section class="gallery-section">
            <h3>" 하나되는 날 "</h3>
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
            <h3>" 오시는 길 "</h3>
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
        </section>
        
        <!-- Account Section -->
        <section class="account-section">
            <h3>" 마음 전하실 곳 "</h3>
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
    
    <script src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=7s46ead8h2"></script>
    <script>
        const config = <?= json_encode($config, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>;

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
                    { bank: config.groom.father.bank, number: config.groom.father.number, holder: config.groom.father.name },
                    { bank: config.groom.mother.bank, number: config.groom.mother.number, holder: config.groom.mother.name }
                ]);
            });
            
            btnBrideAccount.addEventListener('click', function() {
                showAccountModal('신부측 계좌번호', [
                    { bank: config.bride.father.bank, number: config.bride.father.number, holder: config.bride.father.name },
                    { bank: config.bride.mother.bank, number: config.bride.mother.number, holder: config.bride.mother.name }
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

            // 모달 바깥 클릭 시 닫기
            galleryModal.addEventListener('click', function(event) {
                if (!event.target.closest('.gallery-modal-content')) {
                    galleryModal.style.display = 'none';
                }
            });

            // 계좌 모달도 동일하게 적용
            accountModal.addEventListener('click', function(event) {
                if (!event.target.closest('.modal-content')) {
                    accountModal.style.display = 'none';
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
                
                // Set wedding date
                const weddingDate = new Date(config.wedding.date); // Month is 0-indexed
                const currentMonth = weddingDate.getMonth();
                const currentYear = weddingDate.getFullYear();
                
                // Create calendar header
                const calendarHeader = document.createElement('div');
                calendarHeader.className = 'calendar-header';
                calendarHeader.innerHTML = `
                    <div class="calendar-month">
                      <span class="month-number">6</span>
                      <span class="month-name">June</span>
                    </div>
                    <div class="calendar-time">
                      <span>${config.wedding.date_eng}</span>
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

    <!-- Naver Map -->
    <script>
      var map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(37.6894, 127.0464), // 예시 좌표
        zoom: 16
      });

      var marker = new naver.maps.Marker({
        position: new naver.maps.LatLng(37.6894, 127.0464),
        map: map
      });
    </script>
</body>
</html>
