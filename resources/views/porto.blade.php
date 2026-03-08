<!-- resources/views/porto.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    <div class="halaman">
        <div class="section">
            <h2>Portfolio Saya</h2>

            <div class="porto-grid">
                <!-- GANTI: isi dengan project kamu -->
                <!-- Simpan gambar project di public/images/ -->

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
        </div>
    </div>

</body>
</html>