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
        <table>
            <tr>
                <td>Nama</td>
                <td><?= $users['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $pembayaran['nama_kelas']; ?></td>
            </tr>
            <tr>
                <td>Metode Pembayaran</td>
                <td><?= $pembayaran['jenis_pembayaran']; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?= $pembayaran['keterangan']; ?></td>
            </tr>
        </table>
            <a href="/pembayaran/delete/<?= $pembayaran['email']; ?>" class="btn">Cancel</a>        
    </div>

</body>
<script>
    
</script>

</html>

<?= $this->endSection('content'); ?>