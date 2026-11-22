<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการการสหกิจศึกษา | TLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./index.css">
    <style>
        .card-news, .card-activities {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-news:hover, .card-activities:hover {
            transform: translateY(-8px); 
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); 
        }
    </style>
</head>
<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-swu sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="./img/swulogo_en.png" 
                 alt="SWU Logo" 
                 width="70" 
                 height="70" 
                 class="d-inline-block align-top me-2 bg-white rounded-circle p-1">
            <div>
                    <h5 class="mb-0 font-serif fw-bold" style="color: #931e1e; font-size: 24px; line-height: 0.7;">ระบบบริหารจัดการสหกิจศึกษา</h5>
                    <small class="text-muted" style="font-size: 0.8rem; letter-spacing: 1px;">INTERNSHIP MANAGEMENT SYSTEM</small>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="#">หน้าแรก</a></li>
                <li class="nav-item"><a class="nav-link" href="#showcase">รายละเอียด</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">ประชาสัมพันธ์</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">อาจารย์นิเทศ / ผู้ประสานงาน</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-menu-item nav-link text-dark px-3" href="staff_1.php" target="_self">อาจารย์นิเทศ</a></li>
                        <li><a class="dropdown-menu-item nav-link text-dark px-3" href="staff_2.php">ผู้ประสานงาน</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php">ติดต่อเรา</a></li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-swu rounded-pill" href="login.php" style="padding: 8px 25px;">เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    
<!-- สไลด์หน้าหลัก -->
    <header id="swuCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#swuCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#swuCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#swuCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#swuCarousel" data-bs-slide-to="3"></button>
    </div>
    <!-- slide 1 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="hero-section slide-1" style="height: 550px; padding: 0; display: flex; align-items: center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10 col-lg-8 text-start">
                            <div class="title-bar p-3 p-md-4 mb-4" style="background-color: rgba(73, 73, 73, 0.2);">
                                
                                <h1 class="display-3 fw-bold text-white mb-1 animate__animated animate__fadeInUp" style="font-size: calc(1.4rem + 1vw);">
                                ระบบบริหารจัดการสหกิจศึกษา<br>และการฝึกประสบการณ์วิชาชีพ
                                </h1>
                                
                                <h2 class="h2 fw-bold text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s" style="font-size: calc(1.1rem + 0.6vw);">
                                Cooperative Education & Internship Management System
                                </h2>
                                
                            </div>
                            
                            <div class="subtitle text-white ps-3 ps-md-4 animate__animated animate__fadeIn animate__delay-2s" style="line-height: 1.2;">
                                <p class="mb-0 fs-5">ยกระดับการเรียนรู้เชิงบูรณาการกับการทำงานสำหรับนักศึกษา / นิสิต</p>
                                <p class="mb-0 fs-5">Work-Integrated Education Portal</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 2 -->
        <div class="carousel-item">
            <div class="hero-section slide-2" style="height: 550px; padding: 0;">
            </div>
        </div>
        <!-- slide 3 -->
        <div class="carousel-item">
            <div class="hero-section slide-3" style="height: 550px; padding: 0; display: flex; align-items: center; justify-content: center;">
                <div class="container text-white text-center">
                    <h1 class="display-4 fw-bold animate__animated animate__fadeInUp slide-title-custom-3">- ข่าวประชาสัมพันธ์ -</h1>
                    <p class="fs-5 animate__animated animate__fadeInUp animate__delay-1s">ติดตามปฏิทินกำหนดการยื่นคำร้องและประกาศสำคัญ</p>
                    <a href="#news" class="btn btn-custom-2 rounded-pill px-4 animate__animated animate__fadeInUp animate__delay-2s">อ่านข่าวทั้งหมด</a>
                </div>
            </div>
        </div>
        <!-- slide 4 -->
        <div class="carousel-item">
            <div class="hero-section slide-4" style="height: 550px; padding: 0; display: flex; align-items: center; justify-content: center;">
                <div class="container text-white text-center">
                    <h1 class="display-4 fw-bold animate__animated animate__fadeInUp slide-title-custom-4">- กิจกรรมเตรียมความพร้อม -</h1>
                    <p class="fs-5 animate__animated animate__fadeInUp animate__delay-1s">ภาพบรรยากาศโครงการปฐมนิเทศและอบรมก่อนออกสหกิจศึกษา</p>
                    <a href="#activities" class="btn btn-custom-3 rounded-pill px-4 animate__animated animate__fadeInUp animate__delay-2s">ดูกิจกรรมทั้งหมด</a>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev custom-control" type="button" data-bs-target="#swuCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next custom-control" type="button" data-bs-target="#swuCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </header>

<!-- ภาพรวมและคุณสมบัติสหกิจศึกษา -->
<section id="showcase" class="py-5 bg-light anchor-section">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="font-serif text-swu-red fw-bold mb-3">รายละเอียดและเกณฑ์การสหกิจศึกษา</h2>
                <div class="text-muted mb-4 line-height-lg course-info-text">
                    <p>
                        เป็นการจัดการศึกษาเชิงบูรณาการกับการทำงาน (Work-Integrated Education) ที่มุ่งเน้นให้ <strong>นักศึกษา / นิสิต</strong> ได้เข้าปฏิบัติงานจริงในสถานประกอบการหรือหน่วยงานภายนอกอย่างต่อเนื่อง <strong>ไม่น้อยกว่า 1 ภาคการศึกษา (16 สัปดาห์ขึ้นไป)</strong> ในฐานะบุคลากรเต็มเวลาขององค์กร เพื่อประยุกต์ใช้องค์ความรู้ทางวิชาการควบคู่กับการทำโครงงานที่เป็นประโยชน์ต่อหน่วยงาน
                    </p>

                    <h6 class="fw-bold text-dark mt-4 mb-2">วัตถุประสงค์และประโยชน์ที่ได้รับ</h6>
                    <ul class="list-unstyled mb-3">
                        <li class="mb-2"><i class="bi bi-dot text-swu-red me-1 fs-5 align-middle"></i> เสริมสร้างทักษะวิชาชีพ (Hard Skills) และทักษะการทำงานร่วมกับผู้อื่น (Soft Skills) ในสภาพแวดล้อมจริง</li>
                        <li class="mb-2"><i class="bi bi-dot text-swu-red me-1 fs-5 align-middle"></i> พัฒนากระบวนการคิดวิเคราะห์และแก้ไขปัญหาผ่านการจัดทำโครงงานสหกิจศึกษา (Project)</li>
                        <li class="mb-2"><i class="bi bi-dot text-swu-red me-1 fs-5 align-middle"></i> เพิ่มโอกาสในการได้รับการคัดเลือกเข้าทำงานทันทีหลังสำเร็จการศึกษา</li>
                    </ul>

                    <h6 class="fw-bold text-dark mt-4 mb-2">คุณสมบัติของผู้สมัครสหกิจศึกษา</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check2-circle text-swu-red me-2"></i> มีสถานภาพเป็น <strong>นักศึกษา / นิสิต</strong> ระดับปริญญาตรี และสอบผ่านรายวิชาตามที่หลักสูตรกำหนดไม่ต่ำกว่า <strong>90 หน่วยกิต</strong></li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-swu-red me-2"></i> มีระดับคะแนนเฉลี่ยสะสม (GPAX) ไม่ต่ำกว่า <strong>2.00</strong></li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-swu-red me-2"></i> มีความประพฤติเรียบร้อย ไม่เคยต้องโทษทางวินัยขั้นร้ายแรง และมีสุขภาพพร้อมปฏิบัติงาน</li>
                    </ul>
                </div>

                <a class="btn btn-swu rounded-pill" href="about.php" style="padding: 8px 25px;">
                    อ่านรายละเอียดเพิ่มเติม <i class="bi bi-arrow-up-right ms-1"></i>
                </a>
            </div>

            <div class="col-lg-5 offset-lg-1 shadow rounded-4 p-0 overflow-hidden">
                <img src="./img/student1.jpg" class="w-100 h-100" style="min-height: 520px; object-fit: cover;" alt="Cooperative Education Overview">
            </div>
        </div>
    </div>
</section>

<!-- ขั้นตอนและปฏิทินกำหนดการสหกิจศึกษา -->
<section id="internship-info" class="py-5 bg-white anchor-section">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 shadow rounded-4 p-0 overflow-hidden">
                <img src="./img/intern.jpg" class="w-100 h-100" style="min-height: 540px; object-fit: cover;" alt="Cooperative Education Process">
            </div>

            <div class="col-lg-6 offset-lg-1">
                <h2 class="font-serif text-swu-red fw-bold mb-3">ปฏิทินกำหนดการและขั้นตอนดำเนินการ</h2>
                <div class="text-muted mb-4 line-height-lg course-info-text">
                    <p>นักศึกษา / นิสิต ที่ประสงค์ออกปฏิบัติงานสหกิจศึกษา ต้องดำเนินการตามขั้นตอนและกรอบระยะเวลาที่งานบริการการศึกษากำหนดอย่างเคร่งครัด ดังนี้:</p>

                    <ul class="list-unstyled mb-3">
                        <li class="mb-3">
                            <i class="bi bi-1-circle-fill text-swu-red me-2"></i>
                            <strong class="text-dark">ยื่นคำร้องขอหนังสือขอความอนุเคราะห์ (ล่วงหน้าอย่างน้อย 1 เดือน):</strong><br>
                            นักศึกษา / นิสิต กรอกแบบฟอร์มคำร้อง เสนออาจารย์ที่ปรึกษาลงนาม และยื่นเอกสารต่อเจ้าหน้าที่เพื่อออกหนังสือขอความอนุเคราะห์ถึงสถานประกอบการ
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-2-circle-fill text-swu-red me-2"></i>
                            <strong class="text-dark">ส่งหนังสือตอบรับและรับหนังสือส่งตัว (ล่วงหน้า 1–2 สัปดาห์):</strong><br>
                            เมื่อหน่วยงานตอบรับ นักศึกษา / นิสิต นำส่งใบตอบรับให้เจ้าหน้าที่เพื่อออกหนังสือส่งตัวและแบบประเมินผลก่อนวันเริ่มปฏิบัติงาน
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-3-circle-fill text-swu-red me-2"></i>
                            <strong class="text-dark">ปฏิบัติงานจริงและรับการนิเทศงาน (ตลอด 1 ภาคการศึกษา):</strong><br>
                            ปฏิบัติงานประจำตามที่ได้รับมอบหมาย บันทึกผลการปฏิบัติงาน จัดทำโครงงานสหกิจศึกษา และรับการนิเทศติดตามผลจากอาจารย์นิเทศร่วมกับพนักงานพี่เลี้ยง
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-4-circle-fill text-swu-red me-2"></i>
                            <strong class="text-dark">ส่งรายงานฉบับสมบูรณ์และประเมินผล:</strong><br>
                            ส่งเล่มรายงานโครงงานฉบับสมบูรณ์ แบบประเมินผลจากสถานประกอบการ และตรวจสอบผลการนิเทศจากอาจารย์นิเทศผ่านระบบ
                        </li>
                    </ul>
                </div>

                <a class="btn btn-swu rounded-pill" 
                   href="https://hu.swu.ac.th/Portals/5/file/66/220366_2.pdf?ver=2tRHbI0xWf4133HCyAG-1Q%3D%3D" 
                   target="_blank" 
                   style="padding: 8px 25px;">
                    แนวปฏิบัติและเอกสารยื่นคำร้องฉบับเต็ม <i class="bi bi-file-earmark-pdf ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ประชาสัมพันธ์ -->
    <section id="news" class="bg-light py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">
                <span style="border-bottom: 2px solid #bb1c1a; padding-bottom: 2px;">ข่าวประชาสัมพันธ์</span>
            </h2>
            <div class="row">
                <!-- News Item 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-news h-100 p-3">
                        <img src="./img/news1.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 15 Nov 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> News</span>
                            </div>
                            <h5 class="card-title fw-bold">ปฏิทินกำหนดการยื่นคำร้องขอฝึกงานและสหกิจศึกษา ประจำภาคการศึกษา</h5>
                            <p class="card-text text-muted">แจ้งกำหนดการลงทะเบียนแจ้งความประสงค์ การยื่นขอหนังสือขอความอนุเคราะห์ และการส่งเอกสารตอบรับสำหรับนักศึกษา / นิสิต ทุกหลักสูตร ขอให้ดำเนินการตามกรอบระยะเวลาที่กำหนด</p>
                            <a href="/img/slide4.jpg" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Item 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-news h-100 p-3">
                        <img src="./img/news2.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 02 Nov 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> News</span>
                            </div>
                            <h5 class="card-title fw-bold">คู่มือเตรียมความพร้อมและแนวปฏิบัติก่อนออกสหกิจศึกษา</h5>
                            <p class="card-text text-muted">รวบรวมขั้นตอนการใช้งานระบบ การเตรียมเอกสารสำคัญ ข้อควรปฏิบัติในสถานประกอบการ รวมถึงแนวทางการเขียนโครงงานและการประเมินผลหลังการนิเทศงานสำหรับนักศึกษา / นิสิต</p>
                            <a href="https://www.facebook.com/share/p/14a3e3hLrZP/?mibextid=wwXIfr" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Item 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-news h-100 p-3">
                        <img src="./img/news3.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 20 Oct 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> News</span>
                            </div>
                            <h5 class="card-title fw-bold">รายชื่อสถานประกอบการเครือข่ายที่เปิดรับนักศึกษา / นิสิต สหกิจศึกษา</h5>
                            <p class="card-text text-muted">อัปเดตฐานข้อมูลหน่วยงานภาครัฐ รัฐวิสาหกิจ และบริษัทเอกชนชั้นนำที่เปิดรับสมัครตำแหน่งงานสหกิจศึกษาและฝึกงาน พร้อมรายละเอียดคุณสมบัติและสวัสดิการที่ได้รับ</p>
                            <a href="https://www.facebook.com/share/p/1J1cmqsnJ7/?mibextid=wwXIfr" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- กิจกรรม -->
    <section id="activities" class="bg-light py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">
                <span style="border-bottom: 2px solid #bb1c1a; padding-bottom: 2px;">กิจกรรม</span>
            </h2>
            <div class="row">
                <!-- activities Item 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-activities h-100 p-3">
                        <img src="./img/ativity1.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 10 Oct 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> Activity</span>
                            </div>
                            <h5 class="card-title fw-bold">โครงการปฐมนิเทศและเตรียมความพร้อมก่อนออกสหกิจศึกษา</h5>
                            <p class="card-text text-muted">กิจกรรมอบรมให้ความรู้แก่นักศึกษา / นิสิต เกี่ยวกับมารยาทในองค์กร การสื่อสารเชิงวิชาชีพ การจัดทำเรซูเม่ และการเตรียมตัวสัมภาษณ์งานกับสถานประกอบการ</p>
                            <a href="https://www.facebook.com/share/p/1BAda68hpM/?mibextid=wwXIfr" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- activities Item 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-activities h-100 p-3">
                        <img src="./img/ativity2.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 25 Sep 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> Activity</span>
                            </div>
                            <h5 class="card-title fw-bold">กิจกรรมเสวนาแลกเปลี่ยนประสบการณ์รุ่นพี่สหกิจศึกษา</h5>
                            <p class="card-text text-muted">เปิดเวทีให้นักศึกษา / นิสิต ที่ผ่านการปฏิบัติงานสหกิจศึกษามาถ่ายทอดประสบการณ์การทำงานจริง แนวทางการเลือกสถานประกอบการ และการแก้ไขปัญหาเฉพาะหน้าในที่ทำงาน</p>
                            <a href="https://www.facebook.com/share/p/1G16HYdNs4/?mibextid=wwXIfr" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- activities Item 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-activities h-100 p-3">
                        <img src="./img/ativity3.jpg" style="width: 100%; height: 250px; object-fit: cover;" class="card-img-top rounded-3 mb-3" alt="Event">
                        <div class="card-body p-0">
                            <div class="d-flex text-muted mb-2 small">
                                <span class="me-3"><i class="bi bi-calendar3 me-1"></i> 12 Aug 2026</span>
                                <span><i class="bi bi-folder2 me-1"></i> Activity</span>
                            </div>
                            <h5 class="card-title fw-bold">นิทรรศการนำเสนอผลงานและโครงงานสหกิจศึกษาดีเด่น</h5>
                            <p class="card-text text-muted">การจัดแสดงผลงานและโครงงานสหกิจศึกษาของนักศึกษา / นิสิต ร่วมกับสถานประกอบการเครือข่ายและอาจารย์นิเทศ เพื่อเผยแพร่องค์ความรู้และนวัตกรรมจากการปฏิบัติงานจริง</p>
                            <a href="https://www.facebook.com/share/p/1Gtwbui7uD/?mibextid=wwXIfr" class="text-danger text-decoration-none fw-bold" target="_blank">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // ระยะเวลาของอนิเมชั่น (มิลลิวินาที)
        once: true,     // ให้แสดงเอฟเฟกต์แค่ครั้งเดียวตอนเลื่อนผ่าน
        });
    </script>

<!-- Footer Section -->
    <footer class="py-5 text-white" style="background-color: #931e1e;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <h5 class="fw-bold">Internship Management System</h5>
                <p class="mb-2 small opacity-75">© 2026 ระบบบริหารจัดการสหกิจศึกษาและการฝึกประสบการณ์วิชาชีพ</p>
                
                <a href="./img/site_map.jpg" target="_blank" class="btn btn-sm btn-outline-light mt-2 rounded-pill px-3 transition-hover">
                    <i class="bi bi-diagram-3 me-1"></i> ผังเว็บไซต์ (Site Map)
                </a>
            </div>
            
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-2 small fw-bold text-uppercase">ช่องทางติดต่อเรา</p>
                <div class="d-flex justify-content-center justify-content-md-end gap-3">
                    <a href="https://www.facebook.com/isswuofficial/" target="_blank" class="text-white fs-4 transition-hover">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/is.hmswu/" target="_blank" class="text-white fs-4 transition-hover">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://x.com/IS_SWU" target="_blank" class="text-white fs-4 transition-hover">
                        <i class="bi bi-twitter-x"></i> 
                    </a>
                    <a href="mailto:is@g.swu.ac.th" class="text-white fs-4 transition-hover">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>