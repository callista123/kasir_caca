<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		th, td {
			padding: 3px;
		}
	</style>
</head>
<body>
<center>
    <h3>Laporan penjualan <?= date_format(date_create($tanggal1)," D M Y"); ?> sampai <?= date_format(date_create($tanggal2)," D M Y");?></h3>
        <table border=1>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>No Nota</th>
                    <th>Nominal</th>
                    <th>Pelanggan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $total=0; $no=1; foreach($penjualan as $row){ ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td><?= $row['kode_penjualan'] ?></td>
                    <td style="text-align: right;">Rp. <?= number_format($row['total_harga']) ?></td>
                    <td><?= $row['nama'] ?></td>
                </tr>
                <?php $total=$total+$row['total_harga']; $no++; } ?>
                <tr>
                    <td colspan=3>Total</td>
                    <td>Rp. <?= number_format($total);?></td>
                </tr>
            </tbody>
        </table>
        </center>
    <script>
        window.print()
    </script>   
</body>
</html>