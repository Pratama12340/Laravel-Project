<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    <div class="halaman">
        <div class="section">
            <h2>Tentang Saya</h2>

            <!-- GANTI: cerita tentang kamu -->
            <p>
                Halo! Perkenalkan saya <strong>Nama Kamu</strong>, seorang mahasiswa
                yang sedang belajar membuat website menggunakan Laravel.
                Saya suka belajar hal-hal baru terutama di bidang teknologi.
            </p>
            <br>
            <p>📍 Lokasi: Kota, Indonesia</p>
            <p>📧 Email: email@kamu.com</p>
            <br>

            <!-- Skill list -->
            <h2>Kemampuan Saya</h2>
            <ul class="skill-list">
                <!-- GANTI: skill kamu -->
                <li>HTML & CSS</li>
                <li>PHP & Laravel</li>
                <li>MySQL</li>
                <li>JavaScript (masih belajar)</li>
            </ul>
        </div>
    </div>

</body>
</html>