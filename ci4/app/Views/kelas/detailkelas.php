<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\detailkelas.css">
    <title>Detail Kelas</title>
</head>

<body>
    <div class="img-content"></div>

    <div class="content">
        <p class="detail" style="font-size: 30px;">Tentang Kelas</p>
        <p class="detail" style="padding-top: 30px; padding-bottom: 80px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi</p>
    </div>

    <div class="content">
        <p class="detail" style="font-size: 30px;">Deskripsi</p>
        <p class="detail" style="padding-top: 30px; padding-bottom: 80px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem odit accusantium magnam in nisi</p>
    </div>

    <div class="sign-in-button">
        <a href="\kelas\detailkelas\pembayaran">Selengkapnya</a>
        <!-- <input type="submit" value="Selengkapnya"> -->
    </div>

    <script lang="javascript" type="text/javascript">
        const menuToggle = document.querySelector('.menu-toggle input');
        const section = document.querySelector('.main-nav-second');

        menuToggle.addEventListener('click', function() {
            section.classList.toggle('slide');
        });
    </script>
</body>

</html>
<?= $this->endSection('content'); ?>