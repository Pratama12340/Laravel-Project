<!-- resources/views/partials/navbar.blade.php -->
<!-- File ini KHUSUS navbar saja -->

<nav class="navbar">
    <!-- GANTI: nama/logo kamu -->
    <div class="logo">⚡ MyWebsite</div>

    <ul class="menu">
        <li><a href="{{ url('/profile') }}">Profile</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/porto') }}">Porto</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>