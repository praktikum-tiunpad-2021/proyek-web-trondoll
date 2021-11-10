<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\regis.css">
</head>

<body>
    <div class="main">
        <div class="border">
            <form action="/regis" method="post">
                <div class="logo">
                    <img src="\img\KambeFinance.PNG" alt="">
                </div>
                <div>
                    <p>Nama</p>
                    <input type="text" name="nama_user" required="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>Email</p>
                    <input type="text" name="email_user" required="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" id="password_user" name="password_user" required="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>Konfirmasi Password</p>
                    <input type="password" id="password_confirm" name="password_confirm" required="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>No Telp.</p>
                    <input type="number" name="telp_user" required="" style="
                background-color: transparent;">
                </div>
                <div class="sign-in-button">
                    <input type="submit" name="" value="Registrasi">
                </div>
                <!-- Validation -->

            </form>
        </div>
    </div>
</body>

</html>

<?= $this->endSection('content'); ?>