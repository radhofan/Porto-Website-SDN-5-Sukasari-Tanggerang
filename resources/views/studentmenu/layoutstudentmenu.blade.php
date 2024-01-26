<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/studentmenu/sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/studentmenu/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/studentmenu/layoutmenustudent.css') }}">
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/studentmenu/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body id="body-container">
    <nav id="navbar">
        <ul>
            <li>
                <i class="bi bi-three-dots"></i>
            </li>
            <li>
                <img src="{{ asset('picture/profile_photo.jpg') }}" alt="Profile Photo" class="profile_photo">
            </li>
        </ul>
    </nav>
    <div id="konten">
        <div id="sidebar">
        <ul>
                <li>
                    <a href="{{ route('studentmenu.dataprofil') }}">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <span class="text">Data Profil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('studentmenu.nilai') }}">
                        <span class="icon"><i class="bi bi-file-earmark-medical-fill"></i></span>
                        <span class="text">Nilai</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('studentmenu.absen') }}">
                        <span class="icon"><i class="bi bi-calendar2-week"></i></span>
                        <span class="text">Absen</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('studentmenu.rapor') }}">
                        <span class="icon"><i class="bi bi-book-fill"></i></span>
                        <span class="text">Rapor</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="opsi">
            @yield('opsi')
        </div>
    </div>
</body>
</html>



