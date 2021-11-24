<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\editprofil.css">
    <title>Edit Profile</title>
</head>

<body>
    <div class="card">
        <h2>Edit Profile</h2>
        <form action="/profil/update" method="post">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" autocomplete="off" value="<?= $users['nama']; ?>">

            <label>Email</label>
            <input type="email" name="email" autocomplete="off" value="<?= $users['email'] ?>">

            <label>Tanggal Lahir</label>
            <input type="date" id="date-input" value="<?= $users['tanggal_lahir'] ?>">

            <label>Nomor Telepon</label>
            <input type="text" name="no_telp" id="no-telp" autocomplete="off" value="<?= $users['no_telp'] ?>">

            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" value="<?= $users['pekerjaan'] ?>">

            <button class="btn" type="submit">Update</button>
        </form>
    </div>
</body>

</html>
<?= $this->endSection('content'); ?>