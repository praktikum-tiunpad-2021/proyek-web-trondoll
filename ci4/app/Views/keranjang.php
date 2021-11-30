<?= $this->extend('base2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\pembayaran.css">
</head>

<body>
    <div class="card">
        <h2>Keranjang</h2>
        <form action="" id="form" name="form" method="POST">
            <label>Nama Lengkap</label>
            <p><?= $users['nama']; ?></p>

            <label>Email</label>
            <p><?= $users['email']; ?></p>

            <label>Kelas</label>
            <p><?= $pembayaran['nama_kelas']; ?> </p>

            <label>Harga Kelas</label>
            <p><?= $kelas['harga']; ?> </p>

            <label>Jenis Pembayaran</label>
            <p><?= $pembayaran['jenis_pembayaran']; ?></p>

            <a href="/pembayaran/delete/<?= $pembayaran['email']; ?>" class="btn">Cancel</a>        </form>
    </div>

</body>
<script>
    function tampilkanHarga() {
        var nama_kelas = document.getElementById("form").kelas.value;
        if (nama_kelas == "Saham") {
            document.getElementById("harga").innerHTML = "Rp.300.000,00";
        } else if (nama_kelas == "Technical Analysis") {
            document.getElementById("harga").innerHTML = "Rp.250.000,00";
        }
    }
</script>

</html>

<?= $this->endSection('content'); ?>