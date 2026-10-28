<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Bidan Okta Imtizil Iffa, S. Keb, Bdn.',
            'short_name' => 'Bidan Okta',
            'title' => 'Bidan Praktisi Gentle Birth & Konselor Laktasi Tersertifikasi',
            'clinic_name' => 'PMB Bidan Okta Care & Maternity Sanctuary',
            'sipb' => '503/446/SIPB/DPMPTSP/2023',
            'str' => '140272120-3948271',
            'phone' => '+6285330609002',
            'whatsapp' => '6281234567890',
            'email' => 'halo@bidanokta.id',
            'address' => 'Jl. Melati Sejahtera No. 18, Gandaria Selatan, Cilandak, Jakarta Selatan',
            'experience_years' => '10+',
            'babies_delivered' => '1.500+',
            'happy_moms' => '99.4%',
            'rating' => '4.9/5.0',
            'emergency_hours' => 'Siaga 24 Jam Nonstop',
            'clinic_hours' => 'Senin - Sabtu: 08.00 - 20.00 WIB | Minggu: Sesuai Perjanjian',
        ];

        $services = [
            [
                'id' => 'gentle-birth',
                'category' => 'persalinan',
                'title' => 'Persalinan Gentle Birth & Hypnobirthing',
                'tagline' => 'Siaga 24 Jam • Minim Trauma • Penuh Cinta',
                'desc' => 'Metode persalinan alami yang tenang, minim intervensi medis, mengedepankan ketenangan batin ibu dengan teknik relaksasi, birth ball, hydrotherapy/water birth, dan aromaterapi.',
                'icon' => 'heart-pulse',
                'features' => ['Pendampingan suami 100%', 'Metode Hypnobirthing & Napas Tiup', 'Inisiasi Menyusu Dini (IMD) minimal 1 jam', 'Lotus birth / delayed cord clamping opsional'],
                'highlight' => true,
            ],
            [
                'id' => 'anc-usg',
                'category' => 'kehamilan',
                'title' => 'Pemeriksaan Kehamilan (ANC) & USG Dasar',
                'tagline' => 'Buku KIA Resmi • Deteksi Dini Risiko',
                'desc' => 'Pemeriksaan antenatal care holistik dan terstandar Kemenkes RI, monitoring detak jantung janin (Doppler Digital), tensi, lingkar lengan, laboratorium sederhana, dan edukasi nutrisi kehamilan.',
                'icon' => 'stethoscope',
                'features' => ['Pemantauan Fetal Doppler akurat', 'Pencatatan Buku KIA & Rekam Medis', 'Skrining risiko preeklamsia dini', 'Konsultasi trimester komprehensif'],
                'highlight' => false,
            ],
            [
                'id' => 'laktasi',
                'category' => 'nifas',
                'title' => 'Konseling Laktasi & Pijat Oksitosin',
                'tagline' => 'Solusi ASI Mampet • Pelekatan Tepat',
                'desc' => 'Bimbingan intensif laktasi untuk ibu baru, manajemen payudara bengkak, puting lecet, bingung puting, serta pijat oksitosin untuk merangsang produksi ASI berlimpah dan rileks.',
                'icon' => 'droplet',
                'features' => ['Teknik pelekatan latch-on sempurna', 'Pijat stimulasi hormon oksitosin & endorfin', 'Manajemen pompa ASI & penyimpanan ASIP', 'Edukasi nutrisi pelancar ASI alami'],
                'highlight' => false,
            ],
            [
                'id' => 'baby-spa',
                'category' => 'bayi',
                'title' => 'Mom & Baby Spa Holistic Care',
                'tagline' => 'Pijat Bayi Nyaman • Relaksasi Bunda',
                'desc' => 'Perawatan relaksasi untuk si kecil dan bunda pasca persalinan. Termasuk baby hydrotherapy (renang bayi), pijat bayi kembung/kolik, pijat nifas, dan perawatan lulur tradisional aman menyusui.',
                'icon' => 'sparkles',
                'features' => ['Baby Massage untuk stimulasi motorik', 'Baby Swim dengan pelampung leher aman ber-SNI', 'Pijat nifas anti pegal untuk bunda', 'Aromaterapi organik ramah bayi'],
                'highlight' => true,
            ],
            [
                'id' => 'imunisasi',
                'category' => 'bayi',
                'title' => 'Imunisasi Dasar & Booster Anak',
                'tagline' => 'Vaksin Resmi Bio Farma • Pantau KMS',
                'desc' => 'Layanan imunisasi lengkap dari bayi baru lahir hingga balita (Hepatitis B, BCG, Polio, DPT-HB-Hib, PCV, Rotavirus, MR) dengan jarum halus dan teknik distraksi minim tangis.',
                'icon' => 'shield-check',
                'features' => ['Vaksin asli terdistribusi rantai dingin resmi', 'Pencatatan kurva pertumbuhan KMS WHO', 'Konsultasi penanganan KIPI (demam pasca vaksin)', 'Pengingat jadwal vaksin via WhatsApp'],
                'highlight' => false,
            ],
            [
                'id' => 'kb-modern',
                'category' => 'kb',
                'title' => 'Pelayanan Keluarga Berencana (KB)',
                'tagline' => 'Nyaman • Aman Menyusui • Konseling Privasi',
                'desc' => 'Konsultasi dan pemasangan kontrasepsi modern: IUD (spiral tembaga/hormonal), Implan/Susuk 3 tahun, Suntik KB 1 & 3 bulan, serta pil KB yang aman untuk ibu menyusui.',
                'icon' => 'shield',
                'features' => ['Pemasangan IUD dengan teknik lembut', 'Implan steril dengan anestesi lokal nyaman', 'Konseling kesesuaian hormonal pasutri', 'Kontrol berkala & USG posisi IUD'],
                'highlight' => false,
            ],
            [
                'id' => 'prenatal-yoga',
                'category' => 'kehamilan',
                'title' => 'Prenatal Yoga & Kelas Edukasi Ibu Hamil',
                'tagline' => 'Optimalisasi Posisi Janin • Nafas Persalinan',
                'desc' => 'Latihan gerakan terarah untuk membuka panggul, memperkuat otot dasar panggul, memperbaiki posisi janin sungsang/lintang, serta latihan pernapasan melahirkan bersama pasangan.',
                'icon' => 'activity',
                'features' => ['Instruktur Bidan bersertifikat Prenatal Yoga', 'Latihan posisi panggul (Spinning Babies basics)', 'Koneksi batin bunda dan janin', 'Kelas tatap muka terbatas / privat'],
                'highlight' => false,
            ],
            [
                'id' => 'home-care',
                'category' => 'nifas',
                'title' => 'Home Care Pasca Salin (Kunjungan Rumah)',
                'tagline' => 'Bidan Datang ke Rumah Bunda',
                'desc' => 'Bunda tidak perlu repot keluar rumah. Bidan Okta hadir langsung untuk perawatan tali pusat bayi baru lahir, memandikan bayi, kontrol jahitan perineum nifas, dan pemeriksaan vital ibu & bayi.',
                'icon' => 'home',
                'features' => ['Perawatan tali pusat steril & kering', 'Pemeriksaan lokia nifas & tensi bunda', 'Bantuan mandikan bayi pertama kali', 'Konsultasi langsung di rumah yang nyaman'],
                'highlight' => false,
            ],
        ];

        $packages = [
            [
                'name' => 'Paket Melati',
                'badge' => 'Persalinan Alami Standar',
                'price' => 'Rp 2.800.000',
                'popular' => false,
                'desc' => 'Pilihan persalinan normal alami dengan pendampingan penuh kasih dalam suasana klinik yang tenang dan privat.',
                'items' => [
                    'Pertolongan persalinan normal oleh Bidan Okta',
                    'Kamar rawat inap standar ber-AC 24 jam',
                    'Observasi Doppler Digital & pemantauan partograf',
                    'Inisiasi Menyusu Dini (IMD) intensif',
                    'Obat-obatan & vitamin standar bersalin',
                    'Perawatan bayi baru lahir & mandi perdana',
                    'Surat Keterangan Kelahiran resmi untuk Akta',
                ],
            ],
            [
                'name' => 'Paket Mawar (Gentle Birth)',
                'badge' => 'Paling Favorit Bunda',
                'price' => 'Rp 4.200.000',
                'popular' => true,
                'desc' => 'Pengalaman persalinan holistik minim rasa takut dengan metode hypnobirthing, birth ball, dan sentuhan aromaterapi menenangkan.',
                'items' => [
                    'Seluruh fasilitas Paket Melati',
                    'Kamar VIP Privat (1 pasien 1 ruangan)',
                    'Fasilitas Birth Ball & Pelvic Rocking Chair',
                    'Pendampingan suami tanpa batasan waktu',
                    'Terapi relaksasi Aromaterapi Lavender & essential oil',
                    'Pijat Punggung Oksitosin saat masa nifas 1x',
                    'Foto & video dokumentasi kelahiran eksklusif',
                    'Baby Footprint souvenir cetak kaki mungil',
                ],
            ],
            [
                'name' => 'Paket Anggrek (Royal Sanctuary)',
                'badge' => 'All-Inclusive Luxury Care',
                'price' => 'Rp 6.500.000',
                'popular' => false,
                'desc' => 'Paket komprehensif lengkap dari persalinan hingga pendampingan homecare di rumah dan sesi baby spa mewah.',
                'items' => [
                    'Seluruh fasilitas Paket Mawar Gentle Birth',
                    'Kamar VVIP Suite (Sofa bed keluarga, kulkas mini, smart TV)',
                    'Opsi Warm Water Immersion (berendam air hangat persalinan)',
                    '1x Baby Spa & Baby Swim lengkap pasca pulang',
                    '2x Kunjungan Home Care Bidan langsung ke rumah Anda',
                    'Paket Maternity Gift Box & perlengkapan bayi organik',
                    'Konseling Laktasi privat tanpa batas waktu',
                ],
            ],
        ];

        $facilities = [
            [
                'title' => 'Ruang Persalinan Gentle Birth',
                'subtitle' => 'Privat, Hangat, & Tenang',
                'desc' => 'Didesain menyerupai kenyamanan kamar rumah sendiri dengan pencahayaan hangat, birth ball, diffuser aromaterapi, dan fasilitas relaksasi alami.',
                'image' => '/images/gentle-birth-room.jpg',
                'icon' => 'home',
            ],
            [
                'title' => 'Mom & Baby Spa Sanctuary',
                'subtitle' => 'Higienis, Nyaman, & Ramah Bayi',
                'desc' => 'Ruangan khusus spa bayi dan relaksasi ibu pasca melahirkan dengan air hangat bersuhu presisi dan matras lembut bersertifikasi aman.',
                'image' => '/images/baby-spa.jpg',
                'icon' => 'sparkles',
            ],
            [
                'title' => 'Ruang Konsultasi & ANC Terpadu',
                'subtitle' => 'Edukatif & Ramah Pasangan',
                'desc' => 'Tempat berdiskusi santai mengenai perkembangan janin, dilengkapi fetal doppler jernih, bagan perkembangan bayi, dan privasi penuh.',
                'image' => '/images/prenatal-care.jpg',
                'icon' => 'heart',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Bunda Amanda S. & Ayah Dimas',
                'baby' => 'Ibunda dari Baby Kalandra (Lahir 3.4 kg)',
                'date' => 'Oktober 2026',
                'text' => 'Awalnya sangat takut menghadapi persalinan anak pertama. Tapi berkat bimbingan Bidan Okta dari prenatal yoga hingga teknik napas saat pembukaan 8, proses lahiran terasa begitu damai dan minim rasa sakit. Tanpa robekan sama sekali! Suami juga sangat dilibatkan.',
                'stars' => 5,
                'package' => 'Paket Mawar Gentle Birth',
            ],
            [
                'name' => 'Bunda Rina Wardhani',
                'baby' => 'Ibunda dari Baby Naura (Lahir 3.1 kg)',
                'date' => 'September 2026',
                'text' => 'Klinik Bidan Okta sangat bersih, wangi aromaterapi dan tidak seperti rumah sakit yang menegangkan. Pijat laktasi Bidan Okta luar biasa, hari kedua ASI yang tadinya seret langsung mancur deras. Terima kasih Bidan Okta!',
                'stars' => 5,
                'package' => 'Paket Anggrek Royal',
            ],
            [
                'name' => 'Bunda Dita Kusuma, M.Psi',
                'baby' => 'Ibunda dari Baby Arka (Lahir 3.3 kg)',
                'date' => 'Agustus 2026',
                'text' => 'Bidan Okta sangat sabar menjawab ratusan pertanyaan ibu hamil overthinking seperti saya. Penjelasan medisnya mudah dipahami, humanis, dan selalu menghargai pilihan persalinan ibu. Sangat saya rekomendasikan untuk bunda yang mencari gentle birth di Jakarta.',
                'stars' => 5,
                'package' => 'Paket Mawar Gentle Birth',
            ],
            [
                'name' => 'Bunda Felicia & Ayah Kevin',
                'baby' => 'Ibunda dari Baby Zoe',
                'date' => 'Juli 2026',
                'text' => 'Layanan Home Care-nya penyelamat banget bagi kami yang masih bingung urus tali pusat dan mandikan newborn. Bidan Okta telaten sekali mengajari kami step-by-step sampai percaya diri. Baby spa-nya juga bikin bayi anteng tidur nyenyak.',
                'stars' => 5,
                'package' => 'Home Care & Baby Spa',
            ],
        ];

        $articles = [
            [
                'title' => '5 Kunci Sukses Menghadapi Persalinan Alami Tanpa Rasa Panik',
                'summary' => 'Pelajari bagaimana teknik pernapasan perut dan afirmasi positif hypnobirthing dapat mengurangi persepsi nyeri kontraksi hingga 70%.',
                'date' => '24 Okt 2026',
                'category' => 'Persalinan',
                'read_time' => '4 menit baca',
            ],
            [
                'title' => 'Panduan Lengkap Merawat Tali Pusat Bayi Baru Lahir (Metode Kering & Terbuka)',
                'summary' => 'Hindari penggunaan alkohol dan ramuan tradisional. Kenali tanda-tanda infeksi dan cara benar menjaga tali pusat tetap kering hingga puput sendiri.',
                'date' => '18 Okt 2026',
                'category' => 'Kesehatan Bayi',
                'read_time' => '3 menit baca',
            ],
            [
                'title' => 'Tips Mengatasi Payudara Bengkak & Merangsang ASI Deras di Hari Pertama',
                'summary' => 'Kenapa ASI belum keluar banyak saat hari ke-1? Temukan rahasia pijat oksitosin dan pelekatan mulut bayi yang benar agar puting tidak lecet.',
                'date' => '12 Okt 2026',
                'category' => 'Laktasi',
                'read_time' => '5 menit baca',
            ],
        ];

        $faqs = [
            [
                'q' => 'Apakah di PMB Bidan Okta suami boleh mendampingi selama proses persalinan?',
                'a' => 'Tentu saja! Kami sangat menganjurkan dan mendukung kehadiran suami atau orang terkasih di samping bunda selama seluruh fase pembukaan hingga proses kelahiran bayi, demi memberikan kenyamanan emosional dan dukungan moral maksimal.',
            ],
            [
                'q' => 'Apa itu metode Gentle Birth yang diterapkan oleh Bidan Okta?',
                'a' => 'Gentle birth adalah filosofi persalinan yang tenang, penuh kasih, santun, dan minim intervensi medis invasif jika kehamilan berlangsung sehat dan berisiko rendah. Kami mengutamakan posisi melahirkan yang nyaman untuk bunda (tidak harus telentang), teknik napas lembut, pemotongan tali pusat tidak terburu-buru, serta sentuhan skin-to-skin langsung.',
            ],
            [
                'q' => 'Apakah PMB Bidan Okta melayani persalinan dan kondisi darurat 24 Jam?',
                'a' => 'Ya, untuk tindakan persalinan aktif dan kegawatdaruratan kebidanan, klinik kami siaga 24 jam sehari, 7 hari seminggu. Kami memiliki tim bidan jaga dan nomor hotline darurat khusus.',
            ],
            [
                'q' => 'Kapan waktu terbaik untuk melakukan reservasi atau konsultasi pertama?',
                'a' => 'Bunda dapat berkonsultasi kapan saja sejak trimester pertama atau saat mulai terkonfirmasi positif hamil. Untuk paket persalinan, disarankan melakukan pendaftaran atau konsultasi minimal pada usia kehamilan 28-32 minggu agar rencana persalinan (birth plan) dapat disesuaikan.',
            ],
            [
                'q' => 'Bagaimana jika saat proses persalinan terjadi komplikasi yang membutuhkan rujukan?',
                'a' => 'Keselamatan ibu dan bayi adalah prioritas nomor satu. PMB Bidan Okta terhubung langsung dengan sistem rujukan terpadu rumah sakit rujukan PONEK (Rumah Sakit Ibu & Anak / RSUD) terdekat dengan ambulans siaga, sehingga jika terdapat indikasi medis darurat, proses transfer dapat dilakukan secara cepat dan aman.',
            ],
            [
                'q' => 'Apakah melayani klaim asuransi kesehatan atau BPJS?',
                'a' => 'Kami melayani pasien umum dan menyediakan kuitansi resmi, diagnosis medis, serta berkas penunjang klaim asuransi swasta sistem reimbursement. Untuk informasi kerjasama faskes terkini, silakan hubungi tim administrasi kami.',
            ],
        ];

        return view('landing', compact('profile', 'services', 'packages', 'facilities', 'testimonials', 'articles', 'faqs'));
    }

    public function bookAppointment(Request $request)
    {
        $validated = $request->validate([
            'nama_ibu' => 'required|string|max:100',
            'no_whatsapp' => 'required|string|max:20',
            'usia_kehamilan' => 'nullable|string|max:50',
            'layanan' => 'required|string|max:150',
            'tanggal_kunjungan' => 'required|date|after_or_equal:today',
            'waktu_kunjungan' => 'required|string',
            'keluhan_catatan' => 'nullable|string|max:1000',
        ]);

        $appointment = Appointment::create($validated);

        // Build WhatsApp direct message link
        $waNumber = '6281234567890';
        $tglFormat = Carbon::parse($validated['tanggal_kunjungan'])->translatedFormat('d F Y');
        
        $msgText = "Halo Bidan Okta, saya ingin konfirmasi pendaftaran janji temu:\n\n"
                 . "🌸 *Nama Ibu:* {$validated['nama_ibu']}\n"
                 . "📱 *No. WhatsApp:* {$validated['no_whatsapp']}\n"
                 . "🤰 *Usia Kehamilan:* " . ($validated['usia_kehamilan'] ?: '-') . "\n"
                 . "🩺 *Layanan:* {$validated['layanan']}\n"
                 . "📅 *Tanggal:* {$tglFormat}\n"
                 . "⏰ *Waktu:* {$validated['waktu_kunjungan']}\n"
                 . "📝 *Catatan / Keluhan:* " . ($validated['keluhan_catatan'] ?: 'Tidak ada') . "\n\n"
                 . "Mohon info ketersediaan jadwalnya ya Bidan Okta. Terima kasih banyak!";

        $waUrl = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($msgText);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Janji temu berhasil dicatat! Menghubungkan ke WhatsApp Bidan Okta...',
                'appointment_id' => $appointment->id,
                'wa_url' => $waUrl,
            ]);
        }

        return redirect()->away($waUrl);
    }

    public function calculateHpl(Request $request)
    {
        $request->validate([
            'hpht' => 'required|date|before_or_equal:today',
            'cycle' => 'nullable|integer|min:21|max:35',
        ]);

        $hpht = Carbon::parse($request->hpht);
        $cycle = (int) ($request->cycle ?? 28);
        $adjustment = $cycle - 28;

        // Naegele's rule adjusted for cycle length: +280 days + adjustment
        $hpl = $hpht->copy()->addDays(280 + $adjustment);

        $today = Carbon::today();
        $daysPregnant = $hpht->diffInDays($today);
        $weeksPregnant = floor($daysPregnant / 7);
        $extraDays = $daysPregnant % 7;

        $trimester = 1;
        $trimesterName = 'Trimester 1 (Awal Kehamilan)';
        $fetalSize = 'Sebesar Biji Apel / Jeruk Nipis';
        $advice = 'Fokus pada asupan asam folat, perbanyak istirahat untuk meredakan morning sickness, dan jadwalkan pemeriksaan ANC perdana.';

        if ($weeksPregnant >= 13 && $weeksPregnant <= 27) {
            $trimester = 2;
            $trimesterName = 'Trimester 2 (Masa Keemasan)';
            $fetalSize = 'Sebesar Buah Mangga / Jagung Manis';
            $advice = 'Energi mulai kembali, waktu ideal memulai Prenatal Gentle Yoga, pantau gerakan pertama janin (quickening), dan penuhi nutrisi zat besi & kalsium.';
        } elseif ($weeksPregnant >= 28) {
            $trimester = 3;
            $trimesterName = 'Trimester 3 (Persiapan Persalinan)';
            $fetalSize = 'Sebesar Labu Kuning / Semangka Manis';
            $advice = 'Latih teknik napas persalinan, siapkan tas bersalin (hospital bag), diskusikan birth plan bersama Bidan Okta, dan rutin pemantauan posisi kepala janin.';
        }

        return response()->json([
            'success' => true,
            'hpht' => $hpht->translatedFormat('d F Y'),
            'hpl' => $hpl->translatedFormat('l, d F Y'),
            'hpl_raw' => $hpl->format('Y-m-d'),
            'days_remaining' => max(0, $today->diffInDays($hpl, false)),
            'weeks' => $weeksPregnant,
            'days' => $extraDays,
            'trimester' => $trimester,
            'trimester_name' => $trimesterName,
            'fetal_size' => $fetalSize,
            'advice' => $advice,
        ]);
    }
}

