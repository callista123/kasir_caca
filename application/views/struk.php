<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ===========================================  <br>
    TOKO IMAH MOLEN<br>
    Jln.jendral sudirman 1122 <br>
    Telp. 08895225066 <br>
    ===========================================  <br>
    <table>
        <tr>
            <td>No. Nota</td>
            <td> : #<?= $nota ?></td>
        </tr>
        <tr>
        <td>Pelanggan</td>
        <td> : <?= $penjualan->nama; ?></td>
        </tr>
    </table>
    =========================================== <br>
    <table>
    <?php 
    $item = 0; 
    $total = 0; $no = 1; 
    foreach ($detail as $row) { 
    ?>
    <tr>
        <td colspan=3><?= $row['nama'] ?></td>
    </tr>
    <tr>
        <td><?= $row['jumlah'] ?> PCS</td>
        <td style="text-align: right;">Rp. <?= number_format($row['harga']) ?></td>
        <td style="text-align: right;">Rp. <?= number_format($row['jumlah'] * $row['harga']) ?></td>
    </tr>
    <?php 
        $total = $total + $row['jumlah'] * $row['harga']; 
        $no++; 
        $item = $item + $row['jumlah']; 
    } 
    ?>
    </table>
    =========================================== <br>
        <table>
            <tr>
                <td>Total Tagihan :</td>
                <td style="text-align: right;">Rp. <?= number_format($total); ?></td>
            </tr>
        </table>
        Jumlah Item = <?= $item ?> PCS<br>
        ===========================================<br>
        --------------TERIMA KASIH--------------

</body>
<script>
    window.print();
</script>
</html>