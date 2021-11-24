<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\nav.css">
    <title>Home</title>
</head>

<body>
    <?php $isActivePage = fn ($x) => uri_string() == $x ? 'active' : '' ?>
    <nav style="box-shadow: red">
        <div class="container-mui nav-container">
            <div class="nav-kiri">
                <img src="\img\logo.png" alt="" class="nav-log">

                <div class="main-nav">
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a <?= $isActivePage('/'); ?> href="/landingpage2" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Beranda</a></div>
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a <?= $isActivePage('/'); ?> href="/konsultasi" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Konsultasi</a></div>
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a <?= $isActivePage('/'); ?> href="/kelas" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Kelas</a></div>
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Tentang Kami</a></div>
                </div>

                <div class="main-nav-second">
                    <div style="display: inline-block; padding: 60px 40px 10px;"><a <?= $isActivePage('/'); ?> href="/login" value="Masuk" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Masuk</a></div>
                    <div style="display: inline-block; padding: 25px 40px 10px;"><a <?= $isActivePage('/'); ?> href="/" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Beranda</a></div>
                    <div style="display: inline-block; padding: 25px 40px 10px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Konsultasi</a></div>
                    <div style="display: inline-block; padding: 25px 40px 10px;"><a <?= $isActivePage('/'); ?>href="/kelas" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Kelas</a></div>
                    <div style="display: inline-block; padding: 25px 40px 10px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Tentang Kami</a></div>
                </div>
            </div>
            <div class="nav-kanan">
                <div class="nav-profil">
                    <ul>
                        <li><a href="#">Hello, <?= $users['nama']; ?> !</a>
                            <ul>
                                <li><a href="/profil">Profil</a></li>
                                <li><a href="/keranjang">Keranjang</a></li>
                                <li><a href="/logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>

            <script lang="javascript" type="text/javascript">
                const menuToggle = document.querySelector('.menu-toggle input');
                const section = document.querySelector('.main-nav-second');

                menuToggle.addEventListener('click', function() {
                    section.classList.toggle('slide');
                });
            </script>
        </div>
    </nav>
</body>

</html>