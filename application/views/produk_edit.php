<from action="<?= base_url('produk/update') ?>" method="post">
<input type="hidden" name="id_produk" value="<?= $user->id_produk ?>">
<div class="col-md-12">
	<div class="card mb-4">
		<h5 class="card-header">Edit Data Pengguna</h5>
		<div class="card-body demo-vertical-spacing demo-only-element">
			<form action="<?= base_url('produk/update')?>" method="post">
				<input type="hidden" name="id_produk" value="<?= $user->id_produk ?>">
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Nama</label>
						<input type="text" name="nama" class="form-control" value="<?= $user->nama ?>">
					</div>
				</div>
				<div class="row g-2">
					<div class="col mb-0">
						<label class="form-label">Harga</label>
						<input type="number" class="form-control" name="harga" value="<?= $user->harga ?>">
					</div>
					<div class="col mb-0">
						<label class="form-label">Stok</label>
						<input type="number" class="form-control" name="stok" value="<?= $user->stok ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">kode produk</label>
						<input type="text" name="kode_produk" class="form-control" value="<?= $user->kode_produk ?>">
					</div>
				</div>
				<button type="submit" class="btn-sm btn-primary">Simpan</button>
		</div>
		</form>
	</div>
</div>
