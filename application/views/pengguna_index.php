<div class="mt-1 mb-3">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
		Tambah pengguna
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
				<form action="<?= base_url('pengguna/simpan')?>" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
					</div>
					<div class="row g-2">
						<div class="col mb-0">
							<label class="form-label">password</label>
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="col mb-0">
							<label for="dobBasic" class="form-label">Level</label>
							<select name="level" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="kasir">kasir</option>
                            </select>
						</div>
					</div>
                    <div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama</label>
							<input type="text" name="nama" class="form-control" placeholder="nama" required>
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
	<h5 class="card-header">Data pengguna</h5>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody class="table-border-bottom-0">
			<?php $no=1; foreach($user as $row){ ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['username'] ?></td>
				<td><?= $row['level'] ?></td>
				<td>
				<a onClick="return confirm('Apakah anda yakin menghapus data ini')"
				 href="<?= base_url('pengguna/hapus/'.$row['id_user']) ?>" class="btn-sm btn-danger">hapus</a>
				<a href="<?= base_url('pengguna/edit/'.$row['id_user']) ?>" class="btn-sm btn-warning">edit</a>
				<a onClick="return confirm('Apakah anda yakin mereset password akun ini')"
				href="<?= base_url('pengguna/reset/'.$row['id_user']) ?>" class="btn-sm btn-primary">reset</a>
			    </td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</div>
