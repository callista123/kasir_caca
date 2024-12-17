<?= $this->session->flashdata('notifikasi'); ?>
<div class="row">
	<div class="col-md-4">
		<!-- Bagian pemilihan produk -->
		<div class="card mb-4">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Pilih produk yang akan di pilih</h5>
				<small class="text-muted float-end">(Pastikan produk yang dipilih benar)</small>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<label class="form-label" for="basic-default-fullname">Nota</label>
					<input type="text" class="form-control" name="kode_penjualan" value="<?= $nota ?>" readonly>
				</div>
				<div class="mb-3">
					<label class="form-label" for="basic-default-fullname">Nama pelanggan</label>
					<input type="text" class="form-control" name="kode_penjualan" value="<?= $namapelanggan ?>" readonly>
				</div>
				<form action="<?= base_url('penjualan/addtemp') ?>" method="post">
					<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
					<div class="mb-3">
						<label class="form-label" for="basic-default-fullname">Produk</label>
						<input type="hidden" name="id_penjualan" value="<?= $nota ?>">
						<select name="id_produk" class="form-control">
							<?php foreach ($produk as $aa) { ?>
								<option value="<?= $aa['id_produk'] ?>">
									<?= $aa['nama'] ?> <?= $aa['kode_produk'] ?> (<?= $aa['stok'] ?>)
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-company">Jumlah</label>
						<input type="number" class="form-control" name="jumlah" placeholder="Jumlah yang dijual" required>
					</div>
					<button type="submit" class="btn btn-primary">Tambah Keranjang</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<!-- Bagian tabel detail penjualan/produk -->
		<div class="card mb-4">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Daftar Produk yang Dipilih</h5>
				<small class="text-muted float-end">(Pastikan produk yang dipilih benar)</small>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Total</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php 
						$cek = 0; 
						$total = 0; 
						$no = 1; 
						foreach ($temp as $row) { ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $row['kode_produk'] ?></td>
								<td><?= $row['nama'] ?></td>
								<td>
									<?= $row['jumlah'] ?>
									<?php
									if ($row['jumlah'] > $row['stok']) {
										echo "<span class='badge bg-danger'>Stok tidak mencukupi</span>";
										$cek = 1;
									}
									?>
								</td>
								<td>Rp. <?= number_format($row['harga']) ?></td>
								<td>Rp. <?= number_format($row['jumlah'] * $row['harga']) ?></td>
								<td>
									<a onClick="return confirm('Apakah anda yakin menghapus produk ini dari keranjang?')"
										href="<?= base_url('penjualan/hapus_temp/' . $row['id_temp']) ?>"
										class="btn-sm btn-danger">Hapus</a>
								</td>
							</tr>
							<?php 
							$total = $total + ($row['jumlah'] * $row['harga']); 
							$no++; 
						} ?>
						<tr>
							<td colspan="4"><strong>Total Harga</strong></td>
							<td><strong>Rp. <?= number_format($total); ?></strong></td>
							<td colspan="2"></td>
						</tr>
					</tbody>
				</table>
				<div class="card-body">
					<form action="<?= base_url('penjualan/bayarv2') ?>" method="post">
						<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan; ?>">
						<?php if (!empty($temp) && $cek == 0) { ?>
							<button type="submit" class="btn btn-primary">Bayar</button>
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
