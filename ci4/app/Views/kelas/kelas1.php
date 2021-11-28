<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\kelas.css">
</head>

<body>
    <div class="content-1">
        <p>Belajar Keuangan Pribadi, Investasi, dan<br>
            Proteksi Keuangan, kapan dan di mana saja !
        </p>
        <p style="margin-top: 10px; font-size: 20px;">
            Pilih kelas Kambefinance sesuai kebutuhanmu.
        </p>

        <div class="sign-in-button">
            <input type="submit" value="Selengkapnya">
        </div>
    </div>

    <div class="content-2">
        <p style="margin-left: 25px;">Kelas Tersedia</p>
        <!-- <div class="dropdown-class"> -->
        <!-- <div class="haha">
            <select name="cars" id="cars">
                <option value="kelas1">Kelas 1</option>
                <option value="kelas2">Kelas 2</option>
                <option value="kelas3">Kelas 3</option>
            </select>
        </div> -->

        <div class="flex-container">
            <?php foreach ($kelas as $row) : ?>
                <div class="flex-item">
                    <div class="class">
                        <div class="asset-img"></div>
                        <div class="ket">
                            <p style="text-align: left;"><?= $row['nama']; ?></p>
                            <p style="text-align: justify; padding-top: 10px; font-size: 13px;">Lorem ipsum iqno iwai</p>
                        </div>
                        <div class="box-meet">
                            <input type="submit" style="color: white;" value="<?= $row['jumlah_materi']; ?> Materi">
                        </div>
                        <div class="line-break">
                            <hr>
                        </div>
                        <div class="harga">
                            <p><?= $row['harga']; ?></p>
                        </div>
                        <br>
                        <div class="detail-class">
                            <a href="\kelas\detailkelas" style="color: white; font-size: 13px;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>

<?= $this->endSection('content'); ?>