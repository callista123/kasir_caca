<div class="col-md-12">
     <div class="card mb-4">
         <h5 class="card-header">Edit Data Pengguna</h5>
         <div class="card-body demo-vertical-spacing demo-only-element">
            <form action="<?= base_url('pengguna/update')?>" method="post">
            <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
             <div class="input-group">
                 <span class="input-group-text">Username</span>
                 <input type="text" class="form-control" value="<?= $user->username ?>"  readonly>
             </div>
             <div class="input-group">
                 <span class="input-group-text">Nama</span>
                 <input type="text" class="form-control" value="<?= $user->nama ?>" name="nama">
             </div>

             <div class="input-group">
                <span class="input-group-text">Level</span>
                <select name="level" class="form-control">
                    <option value="Admin" <?php if($user->level=='Admin'){ echo "selectedf";} ?>>Admin</option>
                    <option value="kasir" <?php if($user->level=='kasir'){ echo "selectedf";} ?>>kasir</option>
                </select>
             </div>
                <button type="submit" class="btn-sm btn-primary">Simpan</button>	
             </div>
             </form>
        </div>
    </div>
    