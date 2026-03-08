<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    <div class="halaman">
        <div class="section">
            <h2>Hubungi Saya</h2>
            <p>Punya pertanyaan atau ingin berkolaborasi? Kirim pesan yuk!</p>
            <br>

            <form action="#" method="POST">
                @csrf
                <input type="text"  name="nama"  placeholder="Nama kamu"   required>
                <input type="email" name="email" placeholder="Email kamu"   required>
                <textarea name="pesan" placeholder="Pesan kamu..." rows="4" required></textarea>
                <button type="submit">Kirim Pesan 💌</button>
            </form>
        </div>
    </div>

</body>
</html>