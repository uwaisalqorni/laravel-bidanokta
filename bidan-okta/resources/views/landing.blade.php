<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>Bidan Okta Imtizil Iffa, S.Keb, Bdn. | Praktik Mandiri Bidan & Gentle Birth Sanctuary</title>
    <meta name="description" content="Portofolio resmi Bidan Oktaviana Pratami (Bidan Okta). Layanan persalinan Gentle Birth 24 Jam, pemeriksaan kehamilan (ANC), USG dasar, Mom & Baby Spa, konseling laktasi, dan home care terpercaya di Jakarta.">
    <meta name="keywords" content="bidan okta, gentle birth jakarta, praktik bidan mandiri, baby spa, pijat laktasi, kalkulator hpl, melahirkan normal minim trauma, bidan 24 jam">
    <meta name="author" content="Bidan Okta Imtizil Iffa, S. Keb, Bdn.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Bidan Okta | Sahabat Penuh Kasih Ibu & Buah Hati">
    <meta property="og:description" content="Persalinan Gentle Birth yang nyaman, minim rasa takut, dan penuh cinta bersama Bidan Okta, S.Tr.Keb, Bdn.">
    <meta property="og:image" content="/images/midwife-okta.jpg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/landing.css?v=1.2">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {!! json_encode([
      '@@context' => 'https://schema.org',
      '@@type' => 'MedicalBusiness',
      'name' => $profile['clinic_name'],
      'image' => '/images/midwife-okta.jpg',
      'telephone' => $profile['phone'],
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $profile['address'],
        'addressLocality' => 'Jakarta Selatan',
        'addressRegion' => 'DKI Jakarta',
        'addressCountry' => 'ID',
      ],
      'medicalSpecialty' => 'Midwifery',
      'openingHours' => 'Mo-Sa 08:00-20:00',
      'priceRange' => '$$',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
</head>
<body>

    <!-- Ambient Gradient Blobs -->
    <div class="bg-ambient-decor">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        <div class="blob-3"></div>
    </div>

    <!-- Emergency Hotline Bar -->
    <div class="emergency-topbar" id="topEmergencyBar">
        🚨 <strong>Siaga Persalinan 24 Jam Nonstop:</strong> Mengalami kontraksi intens atau ketuban pecah? 
        <a href="tel:{{ str_replace([' ', '-', '+'], '', $profile['phone']) }}" id="topCallEmergency">Hubungi Hotline Bidan: {{ $profile['phone'] }}</a>
    </div>

    <!-- Sticky Header Navigation -->
    <header class="site-header" id="siteHeader">
        <div class="container nav-wrap">
            <a href="#hero" class="brand-logo" id="navBrandLogo">
                <div class="brand-icon">
                    <!-- Maternal Lotus Icon -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 21a9 9 0 0 0 9-9c0-4.97-4.03-9-9-9s-9 4.03-9 9a9 9 0 0 0 9 9Z"></path>
                        <path d="M12 7c-2.5 3-2.5 7 0 10 2.5-3 2.5-7 0-10Z"></path>
                        <path d="M7 12c3-2.5 7-2.5 10 0-3 2.5-7 2.5-10 0Z"></path>
                    </svg>
                </div>
                <div class="brand-text">
                    Bidan Okta
                    <span>Maternity & Baby Care</span>
                </div>
            </a>

            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#hero" class="nav-link active" id="navLinkHome">Beranda</a></li>
                    <li><a href="#tentang" class="nav-link" id="navLinkAbout">Profil Bidan</a></li>
                    <li><a href="#layanan" class="nav-link" id="navLinkServices">Layanan</a></li>
                    <li><a href="#kalkulator-hpl" class="nav-link" id="navLinkHpl">Kalkulator HPL</a></li>
                    <li><a href="#paket" class="nav-link" id="navLinkPackages">Paket Bersalin</a></li>
                    <li><a href="#fasilitas" class="nav-link" id="navLinkFacilities">Fasilitas</a></li>
                    <li><a href="#testimoni" class="nav-link" id="navLinkTestimonials">Testimoni</a></li>
                    <li><a href="#kontak" class="nav-link" id="navLinkContact">Kontak</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="tel:{{ str_replace([' ', '-', '+'], '', $profile['phone']) }}" class="btn btn-outline btn-sm" id="btnCallNav" title="Telepon Bidan">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Darurat</span>
                </a>
                <button class="btn btn-primary btn-sm btn-book-nav btn-open-booking" id="btnNavAppointment" data-service="Konsultasi Bidan Umum">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                    <span>Janji Temu</span>
                </button>
                <button class="mobile-toggle" id="mobileToggle" aria-label="Buka Menu Navigasi" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="section hero-section" id="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <div class="pill-badge pill-primary" id="heroVerificationBadge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span>SIPB Resmi Kemenkes RI • STR Kebidanan Aktif</span>
                </div>

                <h1 class="hero-title">
                    Pendampingan Penuh Cinta Menuju <span class="gradient-text font-serif">Persalinan Nyaman & Tenang</span>
                </h1>

                <p class="hero-desc">
                    Selamat datang di ruang bersalin hangat Bidan Okta. Kami mengedepankan pendekatan <strong>Gentle Birth</strong> yang ramah trauma, bimbingan laktasi berempati tinggi, hingga perawatan relaksasi Mom & Baby Spa di lingkungan asri dan privat.
                </p>

                <div class="hero-cta-group">
                    <button class="btn btn-primary btn-lg btn-open-booking" id="heroBtnBooking" data-service="Persalinan Gentle Birth">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                        <span>Jadwalkan Janji Temu</span>
                    </button>
                    <a href="#kalkulator-hpl" class="btn btn-outline btn-lg" id="heroBtnHplCalc">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span>Hitung HPL Bunda</span>
                    </a>
                </div>

                <div class="hero-trust-bar">
                    <div class="trust-item">
                        <h4>{{ $profile['experience_years'] }}</h4>
                        <p>Tahun Pengalaman Praktek Kebidanan</p>
                    </div>
                    <div class="trust-item">
                        <h4>{{ $profile['babies_delivered'] }}</h4>
                        <p>Bayi Sehat Lahir Penuh Senyuman</p>
                    </div>
                    <div class="trust-item">
                        <h4>{{ $profile['happy_moms'] }}</h4>
                        <p>Tingkat Kepuasan & Ulasan Positif</p>
                    </div>
                    <div class="trust-item">
                        <h4>24 Jam</h4>
                        <p>Siaga Tindakan Persalinan Aktif</p>
                    </div>
                </div>
            </div>

            <!-- Hero Visual Portrait -->
            <div class="hero-visual">
                <div class="hero-image-card">
                    <img src="/images/midwife-okta.jpg" alt="Foto Bidan Okta Imtizil Iffa, S. Keb, Bdn." id="heroMidwifePhoto" loading="eager">
                </div>

                <!-- Floating Glass Chips -->
                <div class="floating-chip chip-rating" id="chipRating">
                    <div class="chip-icon">★</div>
                    <div class="chip-text">
                        <h5>{{ $profile['rating'] }} Rating Bunda</h5>
                        <p>1.200+ Ulasan Puas & Terpercaya</p>
                    </div>
                </div>

                <div class="floating-chip chip-cert" id="chipCert">
                    <div class="chip-icon">🌿</div>
                    <div class="chip-text">
                        <h5>Certified Gentle Birth</h5>
                        <p>Hypnobirthing & Mom-Baby Spa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Midwife Section -->
    <section class="section about-section" id="tentang">
        <div class="container about-grid">
            <div class="about-visual">
                <div class="about-image-frame">
                    <img src="/images/prenatal-care.jpg" alt="Konsultasi Antenatal Care Bersama Bidan Okta">
                </div>
                <div class="about-stat-strip">
                    <div>
                        <h5>SIPB</h5>
                        <p>Terverifikasi DPMPTSP</p>
                    </div>
                    <div style="border-left: 1px solid var(--surface-border); padding-left: 1rem;">
                        <h5>IBI</h5>
                        <p>Anggota Resmi Seumur Hidup</p>
                    </div>
                    <div style="border-left: 1px solid var(--surface-border); padding-left: 1rem;">
                        <h5>Privat</h5>
                        <p>Kamar Bersalin 1 Pasien</p>
                    </div>
                </div>
            </div>

            <div class="about-content">
                <div class="pill-badge pill-secondary">Profil Profesional Kebidanan</div>
                <h2 class="font-serif">{{ $profile['name'] }}</h2>
                <div style="color: var(--primary); font-weight: 700; margin-bottom: 1.25rem;">{{ $profile['title'] }}</div>
                
                <p class="about-bio">
                    "Kelahiran adalah momen sakral dan fitrah terindah seorang perempuan. Misi saya adalah mendampingi setiap bunda agar dapat menyambut buah hatinya dengan tenang, berdaya, minim rasa takut, dan dipenuhi dukungan penuh kasih dari keluarga tercinta."
                </p>
                <p class="about-bio" style="font-size: 0.95rem; margin-top: -0.5rem;">
                    Bidan Okta menyelesaikan pendidikan Sarjana Terapan Kebidanan dan Pendidikan Profesi Bidan dengan predikat terbaik. Beliau memadukan ilmu medis kebidanan berbasis bukti (evidence-based practice) dengan pendekatan holistik alami seperti hypnobirthing, optimalisasi posisi janin (Spinning Babies), serta pijat stimulasi hormon bahagia.
                </p>

                <!-- Certification Badges Grid -->
                <div class="cert-grid">
                    <div class="cert-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div>
                            <h5>Asuhan Persalinan Normal (APN)</h5>
                            <p>Sertifikasi Kemenkes RI Terakreditasi</p>
                        </div>
                    </div>
                    <div class="cert-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div>
                            <h5>Hypnobirthing & Gentle Birth</h5>
                            <p>Praktisi Relaksasi Pikiran Melahirkan</p>
                        </div>
                    </div>
                    <div class="cert-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div>
                            <h5>Konselor Menyusui & Laktasi</h5>
                            <p>Pelatihan 40 Jam Standar WHO/UNICEF</p>
                        </div>
                    </div>
                    <div class="cert-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <div>
                            <h5>Mom & Baby Spa Specialist</h5>
                            <p>Perawatan Hydrotherapy & Pijat Bayi</p>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <button class="btn btn-primary btn-open-booking" data-service="Konsultasi Privat Bidan Okta">
                        <span>Konsultasi Privat Bersama Bidan Okta</span>
                    </button>
                    <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Bidan Okta, saya ingin bertanya mengenai konsultasi kehamilan...') }}" target="_blank" class="btn btn-outline">
                        <span>Chat WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services-section" id="layanan">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-primary">Layanan Kebidanan Komprehensif</div>
                <h2 class="section-title font-serif">Pelayanan Lengkap Ibu & Buah Hati</h2>
                <p class="section-subtitle">
                    Dari perencanaan kehamilan, pemeriksaan rutin trimester, persalinan gentle birth, bimbingan menyusui hingga relaksasi baby spa.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="services-tabs" id="servicesFilterTabs">
                <button class="tab-btn active" data-filter="all">Semua Layanan</button>
                <button class="tab-btn" data-filter="persalinan">Persalinan</button>
                <button class="tab-btn" data-filter="kehamilan">Kehamilan (ANC)</button>
                <button class="tab-btn" data-filter="nifas">Nifas & Laktasi</button>
                <button class="tab-btn" data-filter="bayi">Bayi & Anak</button>
                <button class="tab-btn" data-filter="kb">Keluarga Berencana (KB)</button>
            </div>

            <!-- Services Grid -->
            <div class="services-grid" id="servicesGrid">
                @foreach($services as $s)
                <div class="service-card {{ $s['highlight'] ? 'featured' : '' }}" data-category="{{ $s['category'] }}" id="service-{{ $s['id'] }}">
                    <div class="service-icon-box">
                        @if($s['icon'] == 'heart-pulse')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M12 5 9.04 11l6.92 3L12 21"></path></svg>
                        @elseif($s['icon'] == 'stethoscope')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"></path><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"></path><circle cx="20" cy="10" r="2"></circle></svg>
                        @elseif($s['icon'] == 'droplet')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path></svg>
                        @elseif($s['icon'] == 'sparkles')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path></svg>
                        @elseif($s['icon'] == 'shield-check')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
                        @elseif($s['icon'] == 'activity')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                        @elseif($s['icon'] == 'home')
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        @else
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        @endif
                    </div>
                    <h3>{{ $s['title'] }}</h3>
                    <div class="service-tagline">{{ $s['tagline'] }}</div>
                    <p>{{ $s['desc'] }}</p>

                    <ul class="service-features">
                        @foreach($s['features'] as $f)
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>{{ $f }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <button class="btn {{ $s['highlight'] ? 'btn-primary' : 'btn-outline' }} btn-sm btn-open-booking" data-service="{{ $s['title'] }}">
                        <span>Pilih Layanan Ini</span>
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Interactive HPL Calculator Section -->
    <section class="section calc-section" id="kalkulator-hpl">
        <div class="container">
            <div class="calc-card-container">
                <div class="calc-form-box">
                    <div class="pill-badge pill-gold" style="margin-bottom: 0.85rem;">Fitur Unggulan Ibu Hamil</div>
                    <h3 class="font-serif">Kalkulator Hari Perkiraan Lahir (HPL) & Usia Janin</h3>
                    <p>
                        Ketahui estimasi tanggal kelahiran buah hati dan pantau perkembangan janin minggu demi minggu menggunakan rumus medis Naegele terstandar.
                    </p>

                    <form id="hplCalculatorForm">
                        <div class="form-group">
                            <label for="hphtDate" class="form-label">Hari Pertama Haid Terakhir (HPHT):</label>
                            <input type="date" id="hphtDate" class="form-control" required>
                            <small style="color: var(--text-muted); font-size: 0.78rem;">Pilih tanggal hari pertama menstruasi terakhir bunda.</small>
                        </div>

                        <div class="form-group">
                            <label for="cycleLength" class="form-label">Siklus Menstruasi Rata-rata (Hari):</label>
                            <select id="cycleLength" class="form-control">
                                <option value="21">21 Hari</option>
                                <option value="25">25 Hari</option>
                                <option value="28" selected>28 Hari (Rata-rata Normal)</option>
                                <option value="30">30 Hari</option>
                                <option value="32">32 Hari</option>
                                <option value="35">35 Hari</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;" id="btnSubmitHpl">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <span>Hitung Sekarang</span>
                        </button>
                    </form>
                </div>

                <!-- Live Results Box -->
                <div class="calc-result-box" id="hplResultBox" style="display: flex;">
                    <div class="calc-result-head">
                        <div>
                            <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">Hari Perkiraan Lahir (HPL):</span>
                            <div class="hpl-date-display" id="resHplDate">Masukkan HPHT Bunda</div>
                        </div>
                        <span class="pill-badge pill-secondary" id="resTrimester">Trimester -</span>
                    </div>

                    <div>
                        <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600;">Usia Kehamilan Saat Ini:</span>
                        <div style="margin-top: 0.25rem;">
                            <span class="gestational-age-tag">
                                <strong id="resWeeks">0</strong> Minggu <strong id="resDays">0</strong> Hari
                            </span>
                        </div>
                    </div>

                    <!-- Fetal Size Analogy -->
                    <div class="fetal-analogy-card">
                        <div class="icon-wrap">🌱</div>
                        <div>
                            <span style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">Ukuran Janin Bunda:</span>
                            <h5 id="resFetalSize" style="font-size: 1.05rem; font-weight: 800; color: var(--text-main);">Silakan pilih tanggal HPHT</h5>
                        </div>
                    </div>

                    <!-- Advice & Next Step -->
                    <div style="background: rgba(255,255,255,0.8); border-radius: var(--radius-md); padding: 1.15rem; border: 1px solid var(--surface-border-subtle);">
                        <strong style="font-size: 0.85rem; color: var(--primary); display: block; margin-bottom: 0.25rem;">💡 Saran Bidan Okta:</strong>
                        <p id="resAdvice" style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.6;">
                            Kalkulator ini membantu bunda memantau hari demi hari kehamilan dengan bahagia dan tenang.
                        </p>
                    </div>

                    <a href="https://wa.me/{{ $profile['whatsapp'] }}" id="resWaConsultBtn" target="_blank" class="btn btn-secondary" style="width: 100%;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.073-2.122-.519-1.824-.757-3.003-2.607-3.094-2.727-.091-.122-.743-.988-.743-1.884 0-.896.469-1.338.636-1.519.167-.182.365-.228.487-.228.121 0 .243.002.349.006.111.006.26-.042.407.311.152.365.518 1.264.563 1.356.045.091.076.198.016.319-.061.122-.092.198-.182.304-.091.106-.192.237-.274.319-.092.091-.188.19-.081.373.106.183.473.78 1.015 1.263.697.621 1.285.814 1.468.905.182.091.289.076.395-.046.107-.121.457-.533.578-.716.122-.182.243-.152.408-.091.167.061 1.057.499 1.24.59.182.091.304.137.35.213.045.076.045.441-.099.846z"/></svg>
                        <span>Konsultasikan Hasil HPL via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="section packages-section" id="paket">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-secondary">Transparan & Penuh Kasih</div>
                <h2 class="section-title font-serif">Paket Persalinan Nyaman & Ramah Trauma</h2>
                <p class="section-subtitle">
                    Setiap persalinan di PMB Bidan Okta didampingi dengan penuh kesabaran, privasi kamar 1 pasien, dan fasilitas pendukung gentle birth.
                </p>
            </div>

            <div class="packages-grid">
                @foreach($packages as $pkg)
                <div class="package-card {{ $pkg['popular'] ? 'popular' : '' }}" id="package-{{ Str::slug($pkg['name']) }}">
                    @if($pkg['popular'])
                        <div class="popular-ribbon">⭐ Paling Direkomendasikan</div>
                    @endif

                    <div class="package-header">
                        <h3 class="package-name font-serif">{{ $pkg['name'] }}</h3>
                        <div class="package-badge-tag">{{ $pkg['badge'] }}</div>
                        <div class="package-price">{{ $pkg['price'] }} <span>/ persalinan</span></div>
                    </div>

                    <p class="package-desc">{{ $pkg['desc'] }}</p>

                    <ul class="package-inclusions">
                        @foreach($pkg['items'] as $item)
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <button class="btn {{ $pkg['popular'] ? 'btn-primary' : 'btn-outline' }} btn-lg btn-open-booking" data-service="Paket: {{ $pkg['name'] }}">
                        <span>Pilih {{ $pkg['name'] }}</span>
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Facilities & Tour Section -->
    <section class="section facilities-section" id="fasilitas">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-primary">Suasana Tenang Seperti di Rumah Sendiri</div>
                <h2 class="section-title font-serif">Fasilitas Klinik & Ruang Bersalin</h2>
                <p class="section-subtitle">
                    Kenyamanan dan ketenangan batin bunda adalah kunci pembukaan persalinan yang lancar.
                </p>
            </div>

            <div class="facilities-grid">
                @foreach($facilities as $f)
                <div class="facility-card">
                    <div class="facility-thumb">
                        <img src="{{ $f['image'] }}" alt="{{ $f['title'] }}" loading="lazy">
                    </div>
                    <div class="facility-body">
                        <h4>{{ $f['title'] }}</h4>
                        <span class="facility-tag">{{ $f['subtitle'] }}</span>
                        <p>{{ $f['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimoni">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-gold">Kisah Kasih & Pengalaman Melahirkan</div>
                <h2 class="section-title font-serif">Kata Para Bunda yang Telah Bersalin</h2>
                <p class="section-subtitle">
                    Rasa syukur dan kebahagiaan para orang tua yang telah mempercayakan momen kelahiran buah hati bersama Bidan Okta.
                </p>
            </div>

            <div class="testimonials-grid">
                @foreach($testimonials as $t)
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        @for($i = 0; $i < $t['stars']; $i++)
                            ★
                        @endfor
                    </div>
                    <p class="testimonial-quote">"{{ $t['text'] }}"</p>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h5>{{ $t['name'] }}</h5>
                            <p>{{ $t['baby'] }}</p>
                        </div>
                        <span class="pill-badge pill-secondary" style="font-size: 0.72rem;">{{ $t['package'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Midwifery Tips & Articles -->
    <section class="section articles-section" id="artikel">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-secondary">Edukasi & Tips Kebidanan</div>
                <h2 class="section-title font-serif">Bekal Sehat Bunda & Bayi</h2>
                <p class="section-subtitle">
                    Artikel singkat seputar kehamilan, persiapan bersalin, dan perawatan bayi baru lahir dari Bidan Okta.
                </p>
            </div>

            <div class="articles-grid">
                @foreach($articles as $a)
                <div class="article-card">
                    <div class="article-meta">
                        <span class="pill-badge pill-primary" style="font-size: 0.72rem;">{{ $a['category'] }}</span>
                        <span>{{ $a['read_time'] }}</span>
                    </div>
                    <h4 class="font-serif">{{ $a['title'] }}</h4>
                    <p>{{ $a['summary'] }}</p>
                    <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Bidan Okta, saya ingin bertanya tentang artikel: ' . $a['title']) }}" target="_blank" class="read-more-link">
                        <span>Diskusikan dengan Bidan</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-primary">Tanya Jawab Seputar Layanan</div>
                <h2 class="section-title font-serif">Pertanyaan yang Sering Diajukan (FAQ)</h2>
                <p class="section-subtitle">
                    Informasi penting yang perlu bunda ketahui sebelum merencanakan persalinan dan pemeriksaan.
                </p>
            </div>

            <div class="faq-wrap">
                @foreach($faqs as $index => $faq)
                <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                    <button class="faq-question">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="faq-answer">
                        <p>{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact & Location Section -->
    <section class="section contact-section" id="kontak">
        <div class="container">
            <div class="section-head">
                <div class="pill-badge pill-secondary">Kunjungi Ruang Bersalin Kami</div>
                <h2 class="section-title font-serif">Lokasi Praktik Mandiri Bidan Okta</h2>
                <p class="section-subtitle">
                    Klinik asri, tenang, dan privat dengan akses mudah di kawasan Jakarta Selatan.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-card">
                    <div>
                        <h3 class="font-serif" style="font-size: 1.5rem; margin-bottom: 0.5rem;">{{ $profile['clinic_name'] }}</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">
                            Kami menyambut bunda dan keluarga dengan suasana yang hangat dan menenangkan.
                        </p>

                        <div class="contact-info-list">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div class="contact-info-text">
                                    <h5>Alamat Klinik:</h5>
                                    <p>{{ $profile['address'] }}</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                                <div class="contact-info-text">
                                    <h5>Jam Operasional:</h5>
                                    <p>{{ $profile['clinic_hours'] }}</p>
                                    <p style="color: #dc2626; font-weight: 700; margin-top: 0.2rem;">🔴 Siaga Persalinan: 24 Jam Nonstop</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </div>
                                <div class="contact-info-text">
                                    <h5>Nomor Telepon & WhatsApp:</h5>
                                    <p>{{ $profile['phone'] }} (Call & WA)</p>
                                    <p style="color: var(--text-muted);">{{ $profile['email'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 0.85rem; flex-wrap: wrap;">
                        <button class="btn btn-primary btn-open-booking" data-service="Kunjungan Klinik">
                            <span>Buat Janji Temu</span>
                        </button>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
                            <span>Petunjuk Arah Google Maps</span>
                        </a>
                    </div>
                </div>

                <!-- Google Maps Embed Representation -->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.867963242023!2d106.790933!3d-6.281084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1bd48d5d4d3%3A0xb3e1e98d9c12345!2sGandaria%20Selatan%2C%20Cilandak%2C%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Lokasi Klinik Bidan Okta"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="brand-logo" style="color: white; margin-bottom: 1rem;">
                    <div class="brand-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21a9 9 0 0 0 9-9c0-4.97-4.03-9-9-9s-9 4.03-9 9a9 9 0 0 0 9 9Z"></path><path d="M12 7c-2.5 3-2.5 7 0 10 2.5-3 2.5-7 0-10Z"></path></svg>
                    </div>
                    <div>Bidan Okta Care</div>
                </div>
                <p>
                    Praktik Mandiri Bidan terakreditasi resmi Kemenkes RI. Pelayanan persalinan gentle birth 24 jam, antenatal care, konseling laktasi, dan baby spa dengan kasih sayang sepenuh hati.
                </p>
                <div style="font-size: 0.8rem; color: #94a3b8; line-height: 1.6;">
                    <strong>SIPB:</strong> {{ $profile['sipb'] }}<br>
                    <strong>STR:</strong> {{ $profile['str'] }}
                </div>
            </div>

            <div class="footer-col">
                <h4>Menu Navigasi</h4>
                <ul class="footer-links">
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#tentang">Tentang Bidan</a></li>
                    <li><a href="#layanan">Layanan Lengkap</a></li>
                    <li><a href="#kalkulator-hpl">Kalkulator HPL</a></li>
                    <li><a href="#paket">Paket Persalinan</a></li>
                    <li><a href="#fasilitas">Fasilitas Klinik</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Layanan Unggulan</h4>
                <ul class="footer-links">
                    <li><a href="#layanan">Persalinan Gentle Birth</a></li>
                    <li><a href="#layanan">Pemeriksaan ANC & USG</a></li>
                    <li><a href="#layanan">Konseling Laktasi & Pijat</a></li>
                    <li><a href="#layanan">Mom & Baby Spa Sanctuary</a></li>
                    <li><a href="#layanan">Home Care Pasca Salin</a></li>
                    <li><a href="#layanan">Imunisasi & Tumbuh Kembang</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Kontak & Bantuan</h4>
                <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 0.85rem;">
                    Pertanyaan seputar persalinan atau pendaftaran janji temu:
                </p>
                <a href="https://wa.me/{{ $profile['whatsapp'] }}" target="_blank" class="btn btn-secondary btn-sm" style="width: 100%; margin-bottom: 0.75rem;">
                    <span>Chat WhatsApp Bidan</span>
                </a>
                <a href="tel:{{ str_replace([' ', '-', '+'], '', $profile['phone']) }}" class="btn btn-outline btn-sm" style="width: 100%; color: white; border-color: rgba(255,255,255,0.2);">
                    <span>Hotline Darurat 24 Jam</span>
                </a>
            </div>
        </div>

        <div class="container footer-bottom">
            <div>
                &copy; {{ date('Y') }} {{ $profile['clinic_name'] }}. Hak Cipta Dilindungi Undang-Undang.
            </div>
            <div>
                Didukung oleh <strong>Laravel 12</strong> • Almusa Panel
            </div>
        </div>
    </footer>

    <!-- Interactive Appointment Booking Modal -->
    <div class="modal-overlay" id="bookingModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-card">
            <button class="modal-close-btn" id="modalCloseBtn" aria-label="Tutup Formulir">&times;</button>
            <div class="pill-badge pill-primary" style="margin-bottom: 0.5rem;">Reservasi Online Praktis</div>
            <h3 class="font-serif" id="modalTitle" style="font-size: 1.6rem; margin-bottom: 0.4rem;">Jadwalkan Janji Temu Bidan</h3>
            <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 1.5rem;">
                Isi formulir di bawah ini. Tim Bidan Okta akan segera memverifikasi ketersediaan jadwal Anda langsung via WhatsApp.
            </p>

            <form id="appointmentForm" method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div class="form-group">
                    <label for="bookNama" class="form-label">Nama Lengkap Bunda:</label>
                    <input type="text" id="bookNama" name="nama_ibu" class="form-control" placeholder="Contoh: Amanda Putri" required>
                </div>

                <div class="form-group">
                    <label for="bookPhone" class="form-label">Nomor WhatsApp Aktif:</label>
                    <input type="tel" id="bookPhone" name="no_whatsapp" class="form-control" placeholder="Contoh: 08123456789" required>
                </div>

                <div class="form-group">
                    <label for="bookAge" class="form-label">Usia Kehamilan (Jika Sedang Hamil):</label>
                    <input type="text" id="bookAge" name="usia_kehamilan" class="form-control" placeholder="Contoh: 32 Minggu / Belum Hamil">
                </div>

                <div class="form-group">
                    <label for="modalServiceSelect" class="form-label">Pilihan Layanan Kebidanan:</label>
                    <select id="modalServiceSelect" name="layanan" class="form-control" required>
                        <option value="">-- Pilih Layanan yang Bunda Butuhkan --</option>
                        <option value="Persalinan Gentle Birth & Hypnobirthing">Persalinan Gentle Birth & Hypnobirthing</option>
                        <option value="Paket Persalinan: Paket Melati">Paket Persalinan: Paket Melati (Standar)</option>
                        <option value="Paket Persalinan: Paket Mawar">Paket Persalinan: Paket Mawar (Gentle Birth Favorit)</option>
                        <option value="Paket Persalinan: Paket Anggrek">Paket Persalinan: Paket Anggrek (Luxury Suite)</option>
                        <option value="Pemeriksaan Kehamilan (ANC) & USG Dasar">Pemeriksaan Kehamilan (ANC) & USG Dasar</option>
                        <option value="Konseling Laktasi & Pijat Oksitosin">Konseling Laktasi & Pijat Oksitosin</option>
                        <option value="Mom & Baby Spa Sanctuary">Mom & Baby Spa Sanctuary</option>
                        <option value="Imunisasi Dasar Bayi & Booster">Imunisasi Dasar Bayi & Booster</option>
                        <option value="Pelayanan KB Modern (IUD/Implan/Suntik)">Pelayanan KB Modern (IUD/Implan/Suntik)</option>
                        <option value="Prenatal Yoga & Senam Hamil">Prenatal Yoga & Senam Hamil</option>
                        <option value="Home Care Kunjungan Pasca Salin ke Rumah">Home Care Kunjungan Pasca Salin ke Rumah</option>
                        <option value="Konsultasi Umum Bidan Okta">Konsultasi Umum Bidan Okta</option>
                    </select>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="bookDate" class="form-label">Rencana Tanggal Kunjungan:</label>
                        <input type="date" id="bookDate" name="tanggal_kunjungan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="bookTime" class="form-label">Pilihan Jam Kunjungan:</label>
                        <select id="bookTime" name="waktu_kunjungan" class="form-control" required>
                            <option value="Pagi (08.30 - 11.30 WIB)">Pagi (08.30 - 11.30 WIB)</option>
                            <option value="Siang (13.00 - 15.30 WIB)">Siang (13.00 - 15.30 WIB)</option>
                            <option value="Sore/Malam (16.00 - 19.30 WIB)">Sore/Malam (16.00 - 19.30 WIB)</option>
                            <option value="Darurat / Segera">Darurat / Segera Hari Ini</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bookNotes" class="form-label">Catatan Tambahan / Keluhan (Opsional):</label>
                    <textarea id="bookNotes" name="keluhan_catatan" class="form-control" rows="3" placeholder="Ceritakan keluhan atau kebutuhan khusus yang ingin bunda konsultasikan..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;" id="btnSubmitAppointment">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span>Kirim & Hubungkan ke WhatsApp</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Floating WhatsApp Button with Pulse Animation -->
    <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Bidan Okta, saya ingin bertanya tentang layanan kebidanan...') }}" class="floating-wa-btn" id="floatingWaBtn" target="_blank" title="Chat WhatsApp Bidan Okta">
        <div class="wa-pulse-beacon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.073-2.122-.519-1.824-.757-3.003-2.607-3.094-2.727-.091-.122-.743-.988-.743-1.884 0-.896.469-1.338.636-1.519.167-.182.365-.228.487-.228.121 0 .243.002.349.006.111.006.26-.042.407.311.152.365.518 1.264.563 1.356.045.091.076.198.016.319-.061.122-.092.198-.182.304-.091.106-.192.237-.274.319-.092.091-.188.19-.081.373.106.183.473.78 1.015 1.263.697.621 1.285.814 1.468.905.182.091.289.076.395-.046.107-.121.457-.533.578-.716.122-.182.243-.152.408-.091.167.061 1.057.499 1.24.59.182.091.304.137.35.213.045.076.045.441-.099.846z"/></svg>
        </div>
        <span>Bidan Siaga • Chat WA</span>
    </a>

    <!-- Scripts -->
    <script src="/js/landing.js?v=1.2"></script>
</body>
</html>
