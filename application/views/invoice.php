<section class="invoice">
    <div class="card">
        <div class="card-body">
            <!-- Title Row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-opencart"></i> caca
                        <small class="pull-right">cantike bapak</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- Info Row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Toko imah molen</strong><br>
                        Jl. Radjiman no 434 Laweyan, Bumi<br>
                        Phone: (0271) 7468864<br>
                        Email: calistanovanova@gmail.com
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?= $penjualan->nama; ?></strong><br>
						<?=$penjualan->alamat; ?> <br>
                        Contact Person: <?= $penjualan->telp; ?><br>
                    </address>
                </div>
                <!-- /.col -->
				<div class="col-sm-4 invoice-col">
					<b>Nomor Nota #<?= $nota ?></b><br>
				<!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Table Section -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
				<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>kode Barang</th>
								<th>jumlah</th>
								<th>Harga</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							<?php $total=0; $no=1; foreach($detail as $row){ ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $row['kode_produk'] ?></td>
								<td><?= $row['jumlah'] ?></td>
								<td>Rp. <?= number_format($row['harga']) ?></td>
								<td>Rp. <?= number_format($row['jumlah']*$row['harga']) ?></td>
							</tr>
							<?php $total=$total+$row['jumlah']*$row['harga']; $no++; }  ?>
							<tr>
								<td colspan=4>Total Harga</td>
								<td>Rp. <?= number_format($total) ; ?> </td>
						</tbody>
					</table>
                </div>
                <!-- /.col -->
            </div>
           <!-- this row will not appear when printing -->
           <div class="row no-print">
    <div class="col-xs-12">
        <a href="<?= base_url('penjualan/print/' . $nota); ?>"
           class="btn btn-danger pull-right" target="_blank">
           <i class="fa fa-credit-card"></i> Print
        </a>
    </div>
</div>

		</div>
	</div>
</section>
			

       