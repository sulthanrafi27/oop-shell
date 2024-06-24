<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga dengan Konsep OOP</title>
</head>

<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="liter">Masukkan jumlah Liter Pembelian : </label>
            <input type="number" name="liter" id="liter" required>
        </div>
        <div style="display: flex;">
            <label for="jenis">Pilih Jenis Bahan Bakar</label>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell SVPower</option>
                <option value="SSuper">Shell SVPowerDiesel</option>
                <option value="SSuper">Shell SVPowerNitro</option>
            </select>
        </div>
        <button type="submit" name="beli">Beli</button>
    </form>

    <?php
    //panggil filenya
    require 'bahanbakar.php';
    //baru dibuka, langsung set harganya
    $logic = new Pembelian();
    $logic ->setharga(10000, 15000, 18000, 20000);
    //kalau ada piks beli jalanin
    if (isset($_POST['beli'])) {
        //isi atribut public pd class sesuai dengan isian formnya
        $logic -> jenisYangDipilih = $_POST['jenis'];
        $logic ->totalLiter = $_POST['liter'];
        //abis kirim nilai form. proses harganya
        $logic ->totalharga();
        //cetak hasilnya
        $logic->cetakbukti();
    }
    
    ?>



</body>

</html>