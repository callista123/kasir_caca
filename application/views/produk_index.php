<div class="mt-1 mb-3">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
		Tambah Produk
	</button>
	<button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#printmodal">
		Print
	</button>
    <?= $this->session->flashdata('notifikasi'); ?>
	<!-- Modal -->
	<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Tambah pengguna</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('produk/simpan')?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="nama produk" required>
						</div>
					</div>
					<div class="row g-2">
					<div class="col mb-0">
							<label class="form-label">Harga</label>
							<input type="number" class="form-control" name="harga" placeholder="harga" required>
						</div>
						<div class="col mb-0">
							<label class="form-label">Stok</label>
							<input type="number" class="form-control" name="stok" placeholder="stok" required>
						</div>
					</div>
                    <div class="row">
						<div class="col mb-3">
							<label class="form-label">kode produk</label>
							<input type="text" name="kode_produk" class="form-control" placeholder="kode_produk" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="table-responsive text-nowrap">
	<h5 class="card-header">Produk</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>kode produk</th>
				<th>Stok</th>
                <th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1; foreach($user as $row){ ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['kode_produk'] ?></td>
				<td><?= $row['stok'] ?></td>
                <td>Rp. <?= number_format($row['harga']) ?></td>
				<td>
				<a onClick="return confirm('Apakah anda yakin menghapus data ini')"
				 href="<?= base_url('produk/hapus/'.$row['id_produk']) ?>" class="btn-sm btn-danger">hapus</a>
				<a href="<?= base_url('produk/edit/'.$row['id_produk']) ?>" class="btn-sm btn-warning">edit</a>
			    </td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</div>



<div class="modal fade" id="printmodal" tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Laporan Produk</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('produk/print')?>" method="get" target="_blank">
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Stok</label>
							<select name="status" class="form-control">
								<option value="Ada">Ada</option>
								<option value="Habis">Habis</option>
								<option value="Semua">Semua</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Print</button>
				</div>
				</form>
			</div>
		</div>
	</div>
