<?= $this->extend('base3'); ?>

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
        <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
        <form action="/login" method="post">
            <div class="sign-in">
                <a href="/"><img src="img/KambeFinance.PNG" alt="" href> </a>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?= set_value('email') ?>">


                <label for="password">Password</label>
                <input type="password" name="password" id="password" required value="">
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert" role="alert">
                           <p><?= $validation->getError('password') ?></p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <div class="auth-regist">
                <p>Tidak punya akun?<span> <a <?= $isActivePage('/'); ?> href="/register"><b>Buat Akun</b></a> </span> </p>
            </div>

            <div class="sign-in-button">
                <input type="submit" value="Masuk" style="border-bottom: none;">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

<?= $this->endSection('content'); ?>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
                <div class="container">
                    <h3>Login</h3>
                    <hr>
               
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a href="/register">Don't have an account yet?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html> -->