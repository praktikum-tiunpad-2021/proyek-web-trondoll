<?= $this->extend('base'); ?>

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
        <p>Kelas Tersedia</p>
        <!-- <div class="dropdown-class"> -->
        <div class="haha">
            <select name="cars" id="cars">
                <option value="kelas1">Kelas 1</option>
                <option value="kelas2">Kelas 2</option>
                <option value="kelas3">Kelas 3</option>
            </select>
        </div>

        <div class="flex-container">
            <div class="flex-item">
                <div class="class">
                    <div class="asset-img"></div>
                    <div class="ket">
                        <p style="text-align: left;">Kelas 1</p>
                        <p style="text-align: justify; padding-top: 10px; font-size: 15px;">Lorem ipsum iqno iwai</p>
                    </div>
                    <div class="box-meet">
                        <input type="submit" value="13 Pertemuan">
                    </div>
                    <div class="line-break">
                        <hr>
                    </div>
                    <div class="box-disc">
                        <p>50%</p>
                    </div>
                    <div class="harga">
                        <p>Rp.200.000</p>
                    </div>
                    <br>
                    <div class="detail-class">
                        <input type="submit" value="Selengkapnya">
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <div class="class">
                    <div class="asset-img"></div>
                    <div class="ket">
                        <p style="text-align: left;">Kelas 2</p>
                        <p style="text-align: justify; padding-top: 10px; font-size: 15px;">Lorem ipsum iqno iwai</p>
                    </div>
                    <div class="box-meet">
                        <input type="submit" value="13 Pertemuan">
                    </div>
                    <div class="line-break">
                        <hr>
                    </div>
                    <div class="box-disc">
                        <p>50%</p>
                    </div>
                    <div class="harga">
                        <p>Rp.200.000</p>
                    </div>
                    <br>
                    <div class="detail-class">
                        <input type="submit" value="Selengkapnya">
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <div class="class">
                    <div class="asset-img"></div>
                    <div class="ket">
                        <p style="text-align: left;">Kelas 3</p>
                        <p style="text-align: justify; padding-top: 10px; font-size: 15px;">Lorem ipsum iqno iwai</p>
                    </div>
                    <div class="box-meet">
                        <input type="submit" value="13 Pertemuan">
                    </div>
                    <div class="line-break">
                        <hr>
                    </div>
                    <div class="box-disc">
                        <p>50%</p>
                    </div>
                    <div class="harga">
                        <p>Rp.200.000</p>
                    </div>
                    <br>
                    <div class="detail-class">
                        <input type="submit" value="Selengkapnya">
                    </div>
                </div>
            </div>
            <div class="flex-item">
                <div class="class">
                    <div class="asset-img"></div>
                    <div class="ket">
                        <p style="text-align: left;">Kelas 4</p>
                        <p style="text-align: justify; padding-top: 10px; font-size: 15px;">Lorem ipsum iqno iwai</p>
                    </div>
                    <div class="box-meet">
                        <input type="submit" value="13 Pertemuan">
                    </div>
                    <div class="line-break">
                        <hr>
                    </div>
                    <div class="box-disc">
                        <p>50%</p>
                    </div>
                    <div class="harga">
                        <p>Rp.200.000</p>
                    </div>
                    <br>
                    <div class="detail-class">
                        <input type="submit" value="Selengkapnya">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?= $this->endSection('content'); ?>