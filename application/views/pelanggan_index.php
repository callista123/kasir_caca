<div class="mt-1 mb-3">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
		Tambah Pelanggan
	</button>
    <?= $this->session->flashdata('notifikasi'); ?>
	<!-- Modal -->
	<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Tambah Pelanggan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="<?= base_url('pelanggan/simpan')?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="nama Pelanggan" required>
						</div>
					</div>
					<div class="row g-2">
					<div class="col mb-0">
							<label class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" placeholder="alamat" required>
						</div>
						<div class="col mb-0">
							<label class="form-label">No. Telp (WA)</label>
							<input type="text" class="form-control" name="telp" placeholder="telp" required>
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
	<h5 class="card-header">Pelanggan</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
                <th>Telp</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1; foreach($user as $row){ ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['alamat'] ?></td>
				<td><?= $row['telp'] ?></td>
				<td>
				<a onClick="return confirm('Apakah anda yakin menghapus data ini')"
				 href="<?= base_url('pelanggan/hapus/'.$row['id_pelanggan']) ?>" class="btn-sm btn-danger">hapus</a>
				<a href="<?= base_url('pelanggan/edit/'.$row['id_pelanggan']) ?>" class="btn-sm btn-warning">edit</a>
			    </td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</div>
