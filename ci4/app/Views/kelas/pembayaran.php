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
        <h2>Pembayaran Kelas</h2>
        <form action="/pembayaran/save" id="form" name="form" method="POST">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" autocomplete="off" value="<?= $users['nama']; ?>" disabled>

            <label>Email</label>
            <input type="email" name="email" autocomplete="off" value="<?= $users['email']; ?>">
            <label>Kelas</label>
            <!-- <input type="text" name="nama_kelas" id="date-input" value=""> -->
            <select name="nama_kelas" id="kelas"  required>
            <?php foreach($kelas as $row):?>
                <option value="<?php echo $row['nama']; ?>"><?php echo $row['nama'];?></option>
            <?php endforeach;?>
            </select>
            <label>Harga Kelas</label>
            <button class="h" id="harga" name="harga_kelas" value=""  ></button>
            <label>Jenis Pembayaran</label>
            <select name="jenis_pembayaran" required>
                <option value="" disabled selected>- Pilih -</option>
                <option value="DANA">DANA</option>
                <option value="Go-Pay">Go-Pay</option>
                <option value="Shopee-Pay">Shopee-Pay</option>
            </select>
            <button class="btn" type="submit">Check Out</button>
        </form>
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

    let y = <?php echo json_encode($kelas, JSON_HEX_TAG) ?>;
    document.getElementById("harga").innerHTML = y[0].harga;

    document.getElementById("kelas").addEventListener("change", () => {
        let x = (document.getElementById("kelas").value);
        console.log(y.find(y=>y.nama == x).harga);
        document.getElementById("harga").innerHTML = y.find(y=>y.nama == x).harga;
    })
    
</script>

</html>

<?= $this->endSection('content'); ?>