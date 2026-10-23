<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTO GARAGE - Spesialis Garasi Motor 100cc - 1000cc</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --brand-yellow: #ffc107;
            --brand-yellow-hover: #e0a800;
            --brand-dark: #121212;
            --brand-card-bg: #1e1e1e;
        }

        html {
            scroll-behavior: smooth;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            padding-top: 70px;
            background-color: #0f0f11;
            color: #f0f0f0;
            overflow-x: hidden;
        }

        section {
            padding: 80px 0;
        }

        .text-muted {
            color: #d0d0d0 !important;
        }
        
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #121212;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--brand-yellow);
            border-radius: 5px;
        }

        .navbar {
            background-color: rgba(18, 18, 18, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s ease;
        }

        .brand-logo {
            color: var(--brand-yellow) !important;
            font-weight: 800;
            letter-spacing: 1.5px;
            font-size: 1.4rem;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #e8e8e8;
            font-weight: 600;
            margin: 0 5px;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #121212 !important;
            background-color: var(--brand-yellow);
            font-weight: 700;
            box-shadow: 0 0 15px rgba(255, 193, 7, 0.4);
        }

        #home {
            min-height: 90vh;
            background: linear-gradient(90deg, rgba(15, 15, 17, 0.85) 0%, rgba(15, 15, 17, 0.75) 50%, rgba(0, 0, 0, 0.3) 100%), 
                        url('bg-garasi.jpg') right center / cover no-repeat fixed;
            display: flex;
            align-items: center;
        }

        .hero-badge {
            background: rgba(255, 193, 7, 0.2);
            border: 1px solid var(--brand-yellow);
            color: var(--brand-yellow);
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .stat-card {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 193, 7, 0.3);
            border-radius: 12px;
            padding: 20px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--brand-yellow);
        }

        .service-card {
            background-color: var(--brand-card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(255, 193, 7, 0.2);
            border-color: rgba(255, 193, 7, 0.4);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 193, 7, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-yellow);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .calc-card {
            background: linear-gradient(145deg, #1a1a1e, #24242b);
            border: 1px solid rgba(255, 193, 7, 0.4);
            border-radius: 16px;
        }

        .section-subtitle {
            color: var(--brand-yellow);
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
            font-size: 0.95rem;
        }

        .section-title {
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .chart-container {
            position: relative;
            margin: auto;
            height: 380px;
            width: 100%;
        }

        .form-control, .form-select {
            background-color: #141417;
            border: 1px solid #44444c;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
        }

        .form-control:focus, .form-select:focus {
            background-color: #1a1a1e;
            border-color: var(--brand-yellow);
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.3);
        }

        .btn-yellow {
            background-color: var(--brand-yellow);
            color: #121212;
            font-weight: 700;
            border-radius: 8px;
            padding: 12px 28px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        }

        .btn-yellow:hover {
            background-color: var(--brand-yellow-hover);
            color: #000000;
            transform: translateY(-2px);
        }

        .btn-outline-yellow {
            border: 2px solid var(--brand-yellow);
            color: var(--brand-yellow);
            font-weight: 700;
            border-radius: 8px;
            padding: 10px 26px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-yellow:hover {
            background-color: var(--brand-yellow);
            color: #121212;
        }

        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 240px;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.85), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="100">

    <!-- NAVBAR HEADER -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand brand-logo d-flex align-items-center gap-2" href="#home">
                <span>🏍️</span> MOTO GARAGE
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeri & Ulasan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="#contact" class="btn btn-yellow btn-sm py-2 px-3">Booking Servis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SECTION 1: HOME (HERO) -->
    <section id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center min-vh-75 py-5">
                <div class="col-lg-10 text-center">
                    <div class="hero-content-box">
                        <div class="hero-badge mb-3">
                            <i class="fa-solid fa-gauge-high me-1"></i> Workshop Performance & Maintenance Presisi
                        </div>
                        <h1 class="display-3 fw-bold mb-3 text-white">
                            Spesialis Garasi Motor <span class="text-warning">100cc - 1000cc</span>
                        </h1>
                        <p class="lead text-light opacity-90 mb-4 mx-auto">
                            Layanan perawatan berkala, modifikasi balap, hingga tuning performa profesional menggunakan mesin Dyno terkalibrasi untuk semua kelas sepeda motor Anda.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
                            <a href="#contact" class="btn btn-yellow btn-lg"><i class="fa-solid fa-calendar-check me-2"></i>Konsultasi Gratis</a>
                            <a href="#services" class="btn btn-outline-yellow btn-lg"><i class="fa-solid fa-wrench me-2"></i>Lihat Layanan</a>
                        </div>
                        <div class="row g-3 justify-content-center">
                            <div class="col-md-4 col-4">
                                <div class="stat-card text-center">
                                    <h3 class="fw-bold text-warning mb-0">5,000+</h3>
                                    <small class="text-muted fw-semibold">Motor Terlayani</small>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="stat-card text-center">
                                    <h3 class="fw-bold text-warning mb-0">100%</h3>
                                    <small class="text-muted fw-semibold">Presisi Dyno</small>
                                </div>
                            </div>
                            <div class="col-md-4 col-4">
                                <div class="stat-card text-center">
                                    <h3 class="fw-bold text-warning mb-0">15+</h3>
                                    <small class="text-muted fw-semibold">Mekanik Pro</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: SERVICES (CONTAINER DATA DINAMIS) -->
    <section id="services" class="bg-dark">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">Layanan Unggulan</span>
                <h2 class="section-title display-5">Solusi Servis Berdasarkan Kelas Engine</h2>
                <p class="text-muted mx-auto fs-6">Pilihan paket perawatan presisi yang disesuaikan dengan kapasitas mesin motor Anda.</p>
            </div>

            <!-- Kontainer untuk data layanan yang akan di-render via JavaScript -->
            <div class="row g-4 mb-5" id="servicesContainer">
                <div class="col-12 text-center text-muted">
                    <p>Memuat data layanan...</p>
                </div>
            </div>

            <!-- Kalkulator Estimasi -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="calc-card p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4 class="fw-bold text-warning mb-2"><i class="fa-solid fa-calculator me-2"></i>Kalkulator Estimasi Biaya Servis</h4>
                                <p class="text-muted small mb-0 fs-6">Hitung estimasi awal biaya perawatan motor Anda secara transparan.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <label class="form-label small text-light fw-bold">Kategori Motor</label>
                                        <select class="form-select form-select-sm" id="calcCC" onchange="calculateEstimate()">
                                            <option value="100">100cc - 150cc</option>
                                            <option value="250">250cc - 500cc</option>
                                            <option value="600">600cc - 1000cc</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label small text-light fw-bold">Jenis Layanan</label>
                                        <select class="form-select form-select-sm" id="calcType" onchange="calculateEstimate()">
                                            <option value="tuneup">Tune-up Rutin</option>
                                            <option value="dyno">Dyno Tuning</option>
                                            <option value="full">Servis Besar / Overhaul</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3 text-center bg-dark p-3 rounded-3 border border-secondary">
                                        <small class="text-light d-block fw-semibold fs-6">Estimasi Biaya Transparan:</small>
                                        <span class="fs-3 fw-bold text-warning" id="calcResult">Rp 75.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION 3: ABOUT & DYNO CHART -->
    <section id="about" class="bg-black">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="section-subtitle">Tentang Moto Garage</span>
                    <h2 class="section-title display-6">Presisi Tanpa Kompromi Untuk Mesin Anda</h2>
                    <p class="text-muted fs-6">
                        MOTO GARAGE berdiri sejak 2018 dengan komitmen menghadirkan standar perawatan sirkuit balap ke jalan raya. Grafik di samping menampilkan pengukuran performa aktual dari Dyno Test kami.
                    </p>
                    
                    <div class="d-flex align-items-start gap-3 my-4">
                        <div class="fs-2 text-warning"><i class="fa-solid fa-microchip"></i></div>
                        <div>
                            <h5 class="fw-bold text-white mb-1">Diagnostik Komputer Terkini</h5>
                            <p class="text-muted small mb-0 fs-6">Mendeteksi gangguan sistem injeksi dan sensor elektronik secara cepat.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 my-4">
                        <div class="fs-2 text-warning"><i class="fa-solid fa-chart-line"></i></div>
                        <div>
                            <h5 class="fw-bold text-white mb-1">Dyno Test Terkalibrasi</h5>
                            <p class="text-muted small mb-0 fs-6">Mengukur Horsepower (HP) & Torsi nyata kendaraan sebelum dan sesudah tuning.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card bg-dark text-white p-4 rounded-4 shadow-lg border border-secondary">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                            <div>
                                <h5 class="m-0 text-warning fw-bold d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-chart-column"></i> Realtime Dyno Test Result
                                </h5>
                                <small class="text-muted fw-semibold">Grafik Perbandingan Tenaga Mesin (Horsepower)</small>
                            </div>
                            <span class="badge bg-success" id="realtimeBadge">● Live System</span>
                        </div>

                        <div class="chart-container">
                            <canvas id="dynoChart"></canvas>
                        </div>
                        <div class="text-center mt-3">
                            <small class="text-muted opacity-90"><i class="fa-solid fa-sync fa-spin me-1"></i> Data live tersinkronisasi database MySQL</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: GALLERY & TESTIMONIALS -->
    <section id="gallery" class="bg-dark">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">Galeri & Ulasan</span>
                <h2 class="section-title display-5">Kepuasan Komunitas Motovlog & Rider</h2>
            </div>

            <div class="row g-3 mb-5">
                <div class="col-md-4 col-6">
                    <div class="gallery-item">
                        <img src="Bmw_1000RR.jpg" alt="Superbike Servis BMW S1000RR" onerror="this.src='https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=800&q=80'">
                        <div class="gallery-overlay">
                            <div>
                                <h6 class="fw-bold text-white mb-0">Superbike Tuning</h6>
                                <small class="text-warning fw-bold">BMW S1000RR</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="gallery-item">
                        <img src="Zx25rr.jpg" alt="Dyno Test ZX-25R" onerror="this.src='https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?auto=format&fit=crop&w=800&q=80'">
                        <div class="gallery-overlay">
                            <div>
                                <h6 class="fw-bold text-white mb-0">Dyno Test Session</h6>
                                <small class="text-warning fw-bold">ZX-25R Performance</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80" alt="Engine Overhaul">
                        <div class="gallery-overlay">
                            <div>
                                <h6 class="fw-bold text-white mb-0">Precision Overhaul</h6>
                                <small class="text-warning fw-bold">Commuter & Sport</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-light small italic fs-6">"Dyno tuning ZX25R saya berasa beda banget! Tarikan makin enteng dan naiknya napas mesin panjang."</p>
                        <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="bg-warning text-dark fw-bold rounded-circle p-2 fs-6">RD</div>
                            <div>
                                <h6 class="fw-bold text-white mb-0">Rian Dimas</h6>
                                <small class="text-muted fw-semibold">Rider ZX-25R</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-light small italic fs-6">"Servis harian Vario 150 di sini sangat transparan. Dikasih tau bagian yang harus diganti tanpa asal vonis."</p>
                        <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="bg-warning text-dark fw-bold rounded-circle p-2 fs-6">AP</div>
                            <div>
                                <h6 class="fw-bold text-white mb-0">Aditya Pratama</h6>
                                <small class="text-muted fw-semibold">Commuter User</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-light small italic fs-6">"Penanganan MOGE BMW S1000RR sangat presisi! Diagnostic scanner akurat dan hasil Dyno tuning terasa maksimal."</p>
                        <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="bg-warning text-dark fw-bold rounded-circle p-2 fs-6">BW</div>
                            <div>
                                <h6 class="fw-bold text-white mb-0">Bagas Wijaya</h6>
                                <small class="text-muted fw-semibold">Rider BMW S1000RR</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: CONTACT & BOOKING -->
    <section id="contact" class="bg-black">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-subtitle">Hubungi Kami</span>
                <h2 class="section-title display-5">Booking Servis & Konsultasi</h2>
                <p class="text-muted mx-auto fs-6">Isi formulir di bawah untuk mendaftarkan jadwal antrean servis Anda.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Alert Notifikasi -->
                    <div id="bookingAlert" class="alert alert-success alert-dismissible fade d-none mb-4" role="alert">
                        <i class="fa-solid fa-circle-check me-2"></i> <span id="alertMsg">Booking berhasil disimpan ke database!</span>
                        <button type="button" class="btn-close" onclick="hideAlert()"></button>
                    </div>

                    <div class="card bg-dark p-4 p-md-5 rounded-4 border border-secondary shadow-lg">
                        <form id="bookingForm" onsubmit="handleBooking(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Nama Lengkap *</label>
                                    <input type="text" id="nama_lengkap" class="form-control" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Nomor WhatsApp *</label>
                                    <input type="text" id="nomor_whatsapp" class="form-control" placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Tipe Motor *</label>
                                    <input type="text" id="tipe_motor" class="form-control" placeholder="Contoh: ZX-25R / Vario 150" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Kategori CC *</label>
                                    <select id="kategori_cc" class="form-select" required>
                                        <option value="100cc - 150cc">100cc - 150cc</option>
                                        <option value="250cc - 500cc">250cc - 500cc</option>
                                        <option value="600cc - 1000cc">600cc - 1000cc</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Jenis Layanan *</label>
                                    <select id="jenis_layanan" class="form-select" required>
                                        <option value="Tune-up Rutin">Tune-up Rutin</option>
                                        <option value="Dyno Tuning">Dyno Tuning</option>
                                        <option value="Servis Besar / Overhaul">Servis Besar / Overhaul</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-bold">Tanggal Booking</label>
                                    <input type="date" id="tanggal_booking" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-white fw-bold">Catatan Tambahan</label>
                                    <textarea id="catatan" class="form-control" rows="3" placeholder="Keluhan motor atau permintaan khusus..."></textarea>
                                </div>
                                <div class="col-12 mt-4 text-center">
                                    <button type="submit" class="btn btn-yellow w-100 py-3 fw-bold">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Kirim Booking & Simpan Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Fetch Data Layanan dari Backend PHP
        async function loadServices() {
            try {
                const response = await fetch('get_services.php');
                const services = await response.json();
                
                const container = document.getElementById('servicesContainer');
                container.innerHTML = ''; // Clear loading text

                if (services.length === 0) {
                    container.innerHTML = '<div class="col-12 text-center text-muted"><p>Tidak ada layanan tersedia.</p></div>';
                    return;
                }

                services.forEach(item => {
                    const iconClass = item.icon_class || 'fa-wrench';
                    const badgeClass = item.badge_class || 'bg-warning';
                    const ccRange = item.cc_range || '';
                    const title = item.title || '';
                    const description = item.description || '';
                    const price = item.price ? parseInt(item.price).toLocaleString('id-ID') : '0';
                    
                    // Format fitur
                    let featuresHTML = '';
                    if (item.features) {
                        const featuresList = item.features.split(',');
                        featuresList.forEach(ft => {
                            if (ft.trim() !== '') {
                                featuresHTML += `<li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i>${ft.trim()}</li>`;
                            }
                        });
                    }

                    const cardHTML = `
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="service-icon">
                                        <i class="fa-solid ${iconClass}"></i>
                                    </div>
                                    <span class="badge ${badgeClass} mb-2 fs-6">
                                        ${ccRange}
                                    </span>
                                    <h4 class="fw-bold text-white mb-3">${title}</h4>
                                    <p class="text-muted small fs-6">${description}</p>
                                    
                                    <ul class="list-unstyled text-light small my-4 fs-6">
                                        ${featuresHTML}
                                    </ul>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center pt-3 border-top border-secondary">
                                        <span class="text-warning fw-bold fs-5">Mulai Rp ${price}</span>
                                        <a href="#contact" class="btn btn-outline-yellow btn-sm">Pilih Servis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    container.innerHTML += cardHTML;
                });
            } catch (error) {
                console.error("Gagal memuat layanan:", error);
                document.getElementById('servicesContainer').innerHTML = '<div class="col-12 text-center text-danger"><p>Gagal memuat data layanan.</p></div>';
            }
        }

        // Jalankan fetch services saat dokumen siap
        document.addEventListener('DOMContentLoaded', loadServices);

        // Kalkulator Estimasi Biaya
        function calculateEstimate() {
            const cc = document.getElementById('calcCC').value;
            const type = document.getElementById('calcType').value;
            let price = 0;

            if (cc === '100') {
                if (type === 'tuneup') price = 75000;
                else if (type === 'dyno') price = 150000;
                else if (type === 'full') price = 300000;
            } else if (cc === '250') {
                if (type === 'tuneup') price = 150000;
                else if (type === 'dyno') price = 250000;
                else if (type === 'full') price = 600000;
            } else if (cc === '600') {
                if (type === 'tuneup') price = 300000;
                else if (type === 'dyno') price = 500000;
                else if (type === 'full') price = 1200000;
            }

            document.getElementById('calcResult').innerText = 'Rp ' + price.toLocaleString('id-ID');
        }

        // Realtime Dyno Chart via AJAX & MySQL
        let myDynoChart = null;

        async function loadDynoChart() {
            try {
                const response = await fetch('get_dyno_data.php');
                const data = await response.json();

                const ctx = document.getElementById('dynoChart').getContext('2d');
                
                if (myDynoChart) {
                    myDynoChart.destroy();
                }

                myDynoChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.labels,
                        datasets: [
                            {
                                label: 'Sebelum Tuning (HP)',
                                data: data.before,
                                borderColor: '#dc3545',
                                backgroundColor: 'rgba(220, 35, 69, 0.1)',
                                fill: true,
                                tension: 0.4
                            },
                            {
                                label: 'Sesudah Tuning (HP)',
                                data: data.after,
                                borderColor: '#ffc107',
                                backgroundColor: 'rgba(255, 193, 7, 0.2)',
                                fill: true,
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { labels: { color: '#ffffff' } } },
                        scales: {
                            x: { ticks: { color: '#aaaaaa' }, grid: { color: '#333333' } },
                            y: { ticks: { color: '#aaaaaa' }, grid: { color: '#333333' } }
                        }
                    }
                });
            } catch (err) {
                console.error("Gagal memuat data chart:", err);
            }
        }

        loadDynoChart();
        setInterval(loadDynoChart, 5000);

        // Submit Form via AJAX
        async function handleBooking(e) {
            e.preventDefault();
            const formData = new FormData();
            formData.append('nama_lengkap', document.getElementById('nama_lengkap').value);
            formData.append('nomor_whatsapp', document.getElementById('nomor_whatsapp').value);
            formData.append('tipe_motor', document.getElementById('tipe_motor').value);
            formData.append('kategori_cc', document.getElementById('kategori_cc').value);
            formData.append('jenis_layanan', document.getElementById('jenis_layanan').value);
            formData.append('tanggal_booking', document.getElementById('tanggal_booking').value);
            formData.append('catatan', document.getElementById('catatan').value);

            const response = await fetch('simpan_booking.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();
            const alertBox = document.getElementById('bookingAlert');
            const alertMsg = document.getElementById('alertMsg');

            alertMsg.innerText = result.message;
            alertBox.classList.remove('d-none');
            alertBox.classList.add('show');

            if(result.status === 'success') {
                document.getElementById('bookingForm').reset();
            }
        }

        function hideAlert() {
            document.getElementById('bookingAlert').classList.add('d-none');
        }
    </script>
</body>
</html>