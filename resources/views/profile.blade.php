<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Profil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar">
        <!-- GANTI: nama/logo kamu -->
        <div class="logo">⚡ MyWebsite</div>

        <ul class="menu">
            <li><a href="#profile">Profile</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#porto">Porto</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- ===== SECTION 1: PROFILE ===== -->
    <section id="profile" class="hero">
        <div class="lingkaran lingkaran1"></div>
        <div class="lingkaran lingkaran2"></div>

        

        <div class="hero-teks">
            <!-- GANTI: nama kamu -->
            <!-- Hapus h1 lama, pindahkan ke dalam efek mengetik -->
            <h1 class="mengetik-besar">
                <span id="teks-ketik"></span><span class="kursor">|</span>
                </h1>

            <!-- Ini langsung muncul, TIDAK diketik -->
            <p class="subjudul">Junior Web Developer</p>

            <div class="badge-group">
                <!-- GANTI: label kamu -->
            
            </div>

            <a href="#about" class="tombol">Kenali Saya ↓</a>
        </div>
    </section>

    <!-- ===== SECTION 2: ABOUT ===== -->
    <section id="about" class="section">
        <h2>About</h2>

        <!-- GANTI: cerita tentang kamu -->
        <p>
            Halo! Perkenalkan saya <strong>Khairul Pratama</strong>, seorang mahasiswa
            yang sedang belajar membuat website menggunakan Laravel.
            Saya suka belajar hal-hal baru terutama di bidang teknologi.
        </p>
        <br>
        <p>📍 Lokasi: Kota, Indonesia</p>
        <p>📧 Email: pratammakahirul@gmail.com</p>
        <br>

        <h3>Kemampuan Saya</h3>
        <ul class="skill-list">
            <!-- GANTI: skill kamu -->
            <li>HTML & CSS</li>
            <li>PHP & Laravel</li>
            <li>MySQL</li>
            <li>JavaScript (masih belajar)</li>
        </ul>
    </section>

    <!-- ===== SECTION 3: PORTO ===== -->
    <section id="porto" class="section section-gelap">
        <h2>Porto</h2>

        <div class="porto-grid">
            <!-- GANTI: isi dengan project kamu -->
            <!-- Simpan gambar di public/images/ -->
            <div class="porto-card">
                <img src="{{ asset('images/project1.jpg') }}" alt="Project 1">
                <h3>Nama Project 1</h3>
                <p>Deskripsi singkat project ini...</p>
            </div>

            <div class="porto-card">
                <img src="{{ asset('images/project2.jpg') }}" alt="Project 2">
                <h3>Nama Project 2</h3>
                <p>Deskripsi singkat project ini...</p>
            </div>

            <div class="porto-card">
                <img src="{{ asset('images/project3.jpg') }}" alt="Project 3">
                <h3>Nama Project 3</h3>
                <p>Deskripsi singkat project ini...</p>
            </div>
        </div>
    </section>

    <!-- ===== SECTION 4: CONTACT ===== -->
    <section id="contact" class="section">
        <h2>Contact</h2>
        <p>Punya pertanyaan atau ingin berkolaborasi? Kirim pesan yuk!</p>
        <br>

        <form action="#" method="POST">
            @csrf
            <input type="text"  name="nama"  placeholder="Nama kamu"    required>
            <input type="email" name="email" placeholder="Email kamu"   required>
            <textarea name="pesan" placeholder="Pesan kamu..." rows="4" required></textarea>
            <button type="submit">Kirim Pesan 💌</button>
        </form>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer>
        <!-- GANTI: nama kamu -->
        <p>Made with ⚡ by Nama Kamu · {{ date('Y') }}</p>
    </footer>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        // --- EFEK MENGETIK ---
        // GANTI: teks sesuai profesi kamu
        const kalimat = [
            "Hello, I'm Khairul",
        ];

        let i = 0, huruf = 0, hapus = false;

        function efekKetik() {
            const el = document.getElementById("teks-ketik");
            const teks = kalimat[i];

            if (!hapus) {
                el.textContent = teks.substring(0, huruf + 1);
                huruf++;
                if (huruf === teks.length) {
                    hapus = true;
                    setTimeout(efekKetik, 1500);
                    return;
                }
            } else {
                el.textContent = teks.substring(0, huruf - 1);
                huruf--;
                if (huruf === 0) {
                    hapus = false;
                    i = (i + 1) % kalimat.length;
                }
            }
            setTimeout(efekKetik, hapus ? 50 : 100);
        }
        efekKetik();

        // --- NAVBAR AKTIF SAAT SCROLL ---
        // Menu akan highlight sesuai section yang sedang dilihat
        const sections = document.querySelectorAll('section');
        const menuLinks = document.querySelectorAll('.menu a');

        window.addEventListener('scroll', () => {
            let posisiSekarang = window.scrollY + 100;

            sections.forEach(sec => {
                if (posisiSekarang >= sec.offsetTop) {
                    menuLinks.forEach(a => a.classList.remove('aktif'));
                    const link = document.querySelector('.menu a[href="#' + sec.id + '"]');
                    if (link) link.classList.add('aktif');
                }
            });
        });
    </script>

</body>
</html>