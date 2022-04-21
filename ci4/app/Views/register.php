<?= $this->extend('base3'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\register.css">
</head>

<body>
    <div class="main">
        <div class="border">
            <form action="/register" method="post">
                <div class="logo">
                    <a href="/"><img src="\img\KambeFinance.PNG" alt=""></a>
                </div>
                <div>
                    <p>Nama</p>
                    <input type="text" name="nama" id="nama" required style="
                background-color: transparent;" value="<?= set_value('nama') ?>">
                </div>
                <div>
                    <p>Tanggal Lahir</p>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required style="
                background-color: transparent;" value="<?= set_value('tanggal_lahir') ?>">
                </div>
                <div>
                    <p>Pekerjaan</p><input type="text" name="pekerjaan" required style="
                background-color: transparent;" id="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                </div>
                <div>
                    <p>Email</p>
                    <input type="text" name="email" id="nama" required style="
                background-color: transparent;" value="<?= set_value('email') ?>">
                </div>
                <div>
                    <p>Password</p>
                    <input type="password" name="password" id="password" values="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>Konfirmasi Password</p>
                    <input type="password" name="password_confirm" id="password_confirm" values="" style="
                background-color: transparent;">
                </div>
                <div>
                    <p>No Telp.</p>
                    <input type="number" name="no_telp" id="no_telp" value="<? set_value('no_telp') ?>" style="
                background-color: transparent;">
                </div>
                <!-- Validation -->
                <?php if (isset($validation)) : ?>
                    <div class="col-10">
                        <div class="alert" role="alert">
                           <p> <?= $validation->getError('password_confirm') ?></p>
                           <p> <?= $validation->getError('email') ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="sign-in-button">
                    <input type="submit" name="" value="Registrasi">
                </div>
            </form>
        </div>
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
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
                <div class="container">
                    <h3>Register</h3>
                    <hr>
                    <form action="/register" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" values="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="password_confirm">Confirm Password</label>
                                    <input type="password" name="password_confirm" id="password_confirm" class="form-control" values="">
                                </div>
                            </div>
                      
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="no_telp">Nomer Telepon</label>
                                    <input type="number" name="no_telp" id="no_telp" class="form-control" value="<? set_value('no_telp') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a href="/">Already Have an Account</a>
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