<form action="<?= base_url('pelanggan/update') ?>" method="post">
<input type="hidden" name="id_pelanggan" value="<?= $user->id_pelanggan ?>">
<div class="col-md-12">
	<div class="card mb-4">
		<h5 class="card-header">Edit Data Pelanggan</h5>
		<div class="card-body demo-vertical-spacing demo-only-element">
			<form action="<?= base_url('pelanggan/update')?>" method="post">
			<input type="hidden" name="id_pelanggan" value="<?= $user->id_pelanggan ?>">
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Nama</label>
						<input type="text" name="nama" class="form-control" value="<?= $user->nama ?>">
					</div>
				</div>
				<div class="row g-2">
					<div class="col mb-0">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?= $user->alamat ?>">
					</div>
					<div class="col mb-0">
						<label class="form-label">telp</label>
						<input type="text" class="form-control" name="telp" value="<?= $user->telp ?>">
					</div>
				</div>
				</div>
				<button type="submit" class="btn-sm btn-primary">Simpan</button>
		</div>
		</form>
	</div>
</div>

