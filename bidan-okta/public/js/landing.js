/**
 * Bidan Okta Care & Maternity Portfolio - Interactive JS
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Scroll Shadow
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 2. Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('open');
            const isOpen = navMenu.classList.contains('open');
            mobileToggle.setAttribute('aria-expanded', isOpen);
        });

        // Close menu when clicking outside or clicking any nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
            });
        });
    }

    // 3. Services Filter Tabs
    const tabBtns = document.querySelectorAll('.tab-btn');
    const serviceCards = document.querySelectorAll('.service-card');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const category = btn.getAttribute('data-filter');

            serviceCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeIn 0.4s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 4. Interactive HPL Calculator
    const hplForm = document.getElementById('hplCalculatorForm');
    const hplResultBox = document.getElementById('hplResultBox');
    const resHplDate = document.getElementById('resHplDate');
    const resWeeks = document.getElementById('resWeeks');
    const resDays = document.getElementById('resDays');
    const resTrimester = document.getElementById('resTrimester');
    const resFetalSize = document.getElementById('resFetalSize');
    const resAdvice = document.getElementById('resAdvice');
    const resWaConsultBtn = document.getElementById('resWaConsultBtn');

    if (hplForm) {
        hplForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const hphtInput = document.getElementById('hphtDate').value;
            const cycleInput = parseInt(document.getElementById('cycleLength').value || 28);

            if (!hphtInput) return;

            const hpht = new Date(hphtInput);
            const cycleAdj = cycleInput - 28;
            
            // Naegele's rule calculation: +280 days + cycle adjustment
            const hplDate = new Date(hpht.getTime() + (280 + cycleAdj) * 24 * 60 * 60 * 1000);
            
            const today = new Date();
            today.setHours(0,0,0,0);
            const diffTime = today.getTime() - hpht.getTime();
            const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
            const weeks = Math.floor(diffDays / 7);
            const days = diffDays % 7;

            // Date formatting in Indonesian
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedHpl = hplDate.toLocaleDateString('id-ID', options);

            let trimesterName = 'Trimester 1';
            let fetalSize = 'Sebesar Biji Apel / Jeruk Nipis';
            let advice = 'Fokus pada asupan asam folat, perbanyak istirahat untuk meredakan mual, dan jadwalkan pemeriksaan ANC perdana.';
            let badgeClass = 'pill-primary';

            if (weeks >= 13 && weeks <= 27) {
                trimesterName = 'Trimester 2';
                fetalSize = 'Sebesar Buah Mangga / Jagung Manis';
                advice = 'Masa keemasan! Waktu ideal memulai Prenatal Yoga bersama Bidan Okta, pantau tendangan janin, dan cukupi asupan zat besi & kalsium.';
                badgeClass = 'pill-secondary';
            } else if (weeks >= 28) {
                trimesterName = 'Trimester 3';
                fetalSize = 'Sebesar Buah Semangka Manis';
                advice = 'Persiapkan birth plan gentle birth, latih teknik napas tiup, dan siapkan perlengkapan persalinan (hospital bag).';
                badgeClass = 'pill-gold';
            }

            resHplDate.textContent = formattedHpl;
            resWeeks.textContent = Math.max(0, weeks);
            resDays.textContent = Math.max(0, days);
            resTrimester.textContent = trimesterName;
            resTrimester.className = `pill-badge ${badgeClass}`;
            resFetalSize.textContent = fetalSize;
            resAdvice.textContent = advice;

            // Generate WhatsApp Consultation Link
            const waMsg = `Halo Bidan Okta, saya baru saja menghitung HPL di website:\n\n` +
                          `• HPHT: ${hphtInput}\n` +
                          `• Perkiraan Lahir (HPL): ${formattedHpl}\n` +
                          `• Usia Kehamilan: ${weeks} Minggu ${days} Hari (${trimesterName})\n\n` +
                          `Saya ingin berkonsultasi seputar kehamilan dan paket persalinan dengan Bidan Okta. Terima kasih!`;
            resWaConsultBtn.href = `https://wa.me/6281234567890?text=${encodeURIComponent(waMsg)}`;

            hplResultBox.style.display = 'flex';
            hplResultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    }

    // 5. Booking Modal Handlers
    const bookingModal = document.getElementById('bookingModal');
    const modalCloseBtn = document.getElementById('modalCloseBtn');
    const openBookingBtns = document.querySelectorAll('.btn-open-booking');
    const selectServiceDropdown = document.getElementById('modalServiceSelect');
    const appointmentForm = document.getElementById('appointmentForm');

    function openModal(preselectedService = '') {
        if (bookingModal) {
            bookingModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            if (preselectedService && selectServiceDropdown) {
                selectServiceDropdown.value = preselectedService;
            }
        }
    }

    function closeModal() {
        if (bookingModal) {
            bookingModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    openBookingBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const serviceName = btn.getAttribute('data-service') || '';
            openModal(serviceName);
        });
    });

    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', closeModal);
    }

    if (bookingModal) {
        bookingModal.addEventListener('click', (e) => {
            if (e.target === bookingModal) closeModal();
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });

    // Form Submission Handling
    if (appointmentForm) {
        appointmentForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = appointmentForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Memproses & Menghubungkan ke WA...</span>';

            const formData = new FormData(appointmentForm);
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch('/janji-temu', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': token,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const data = await response.json();

                if (data.success && data.wa_url) {
                    alert('Pendaftaran Berhasil! Kami akan mengarahkan Bunda ke WhatsApp Bidan Okta untuk konfirmasi jadwal.');
                    window.open(data.wa_url, '_blank');
                    closeModal();
                    appointmentForm.reset();
                } else {
                    alert('Mohon periksa kembali isian formulir Anda.');
                }
            } catch (err) {
                // Fallback direct WhatsApp submit
                const nama = document.getElementById('bookNama').value;
                const hp = document.getElementById('bookPhone').value;
                const layanan = document.getElementById('modalServiceSelect').value;
                const tanggal = document.getElementById('bookDate').value;
                const waktu = document.getElementById('bookTime').value;
                const catatan = document.getElementById('bookNotes').value;

                const msg = `Halo Bidan Okta, saya ingin membuat janji temu:\n\nNama: ${nama}\nNo WA: ${hp}\nLayanan: ${layanan}\nTanggal: ${tanggal}\nWaktu: ${waktu}\nCatatan: ${catatan}`;
                window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(msg)}`, '_blank');
                closeModal();
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
    }

    // 6. FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        questionBtn.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Set today as min date for appointment booking and HPHT max date
    const todayStr = new Date().toISOString().split('T')[0];
    const bookDateInput = document.getElementById('bookDate');
    const hphtDateInput = document.getElementById('hphtDate');
    if (bookDateInput) bookDateInput.min = todayStr;
    if (hphtDateInput) hphtDateInput.max = todayStr;
});
