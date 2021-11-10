<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\login.css">
</head>

<body>
    <?php $isActivePage = fn ($x) => uri_string() == $x ? 'active' : '' ?>
    <div class="card">
        <form>
            <div class="sign-in">
                <img src="img/KambeFinance.PNG" alt="">
                <label for="email">Email</label>
                <input type="email" id="email-address">
                <label for="password">Password</label>
                <input type="password" id="password">
            </div>

            <div class="auth-regist">
                <p>Tidak punya akun?<span> <a <?= $isActivePage('/'); ?> href="/regis"><b>Buat Akun</b></a> </span> </p>
            </div>

            <div class="sign-in-button">
                <input type="submit" value="Masuk" style="border-bottom: none;">
            </div>
        </form>
    </div>
</body>

</html>

<?= $this->endSection('content'); ?>