<?= $this->extend('base1'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\landingpage.css">
</head>

<body>
    <div class="content-1">
        <p>Amankan <br>
            masa depan Keuangan <br>
            keluarga Anda.
        </p>
        <p style="margin-top: 10px; font-size: 20px;">
            Belajar Investasi dan Keuangan Pribadi paling mudah untuk anak muda.
        </p>

        <div class="sign-in-button">
            <input type="submit" value="Selengkapnya">
        </div>
    </div>

    <div class="content-2">
        <p style="font-size: 25px; padding-left: 60px;">Keuntungan Belajar dengan KambeFinance</p>
        <div class="flex-container">
            <div class="flex-item">
                <p style="display: inline-block; padding: 0 0; text-align:left;">Keuntungan 1</p>
                <p style="text-align: justify; padding-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum officia nam nisi pariatur dolore temporibus, vel rem beatae sapiente laboriosam asperiores quibusdam velit debitis repudiandae placeat? Quas laboriosam illum sed.</p>
            </div>
            <div class="flex-item">
                <p style="width: fit-content; display: inline-block; padding: 0 0;">Keuntungan 2</p>
                <p style="text-align: justify; padding-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum officia nam nisi pariatur dolore temporibus, vel rem beatae sapiente laboriosam asperiores quibusdam velit debitis repudiandae placeat? Quas laboriosam illum sed.</p>
            </div>
            <div class="flex-item">
                <p style="width: fit-content; display: inline-block; padding: 0 0;">Keuntungan 3</p>
                <p style="text-align: justify; padding-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum officia nam nisi pariatur dolore temporibus, vel rem beatae sapiente laboriosam asperiores quibusdam velit debitis repudiandae placeat? Quas laboriosam illum sed.</p>
            </div>
            <div class="flex-item">
                <p style="width: fit-content; display: inline-block; padding: 0 0;">Keuntungan 4</p>
                <p style="text-align: justify; padding-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum officia nam nisi pariatur dolore temporibus, vel rem beatae sapiente laboriosam asperiores quibusdam velit debitis repudiandae placeat? Quas laboriosam illum sed.</p>
            </div>
        </div>
    </div>

</html>

<?= $this->endSection('content'); ?>