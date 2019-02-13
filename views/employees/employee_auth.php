<br>
<div class="card">
  <div class="card-header bg-primary text-white">Informasi Akun Pegawai</div>
  <div class="card-body">
    <form action="controllers/employee_controller.php?post=update_auth" method="POST">
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="hidden" name="user_id" value="<?= $id; ?>">
	    <input type="email" class="form-control" value="<?= $data_auth->email; ?>" id="email" placeholder="Masukan Email Pegawai" required="required">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" placeholder="Masukan Password Pegawai" required="required">
	    <small id="foto" class="form-text text-muted">Masukan Ulang Password</small>
	  </div>

	  <div class="form-group">
	    <button type="submit" class="btn btn-success">Edit Informasi Akun</button>
	  </div>
	</form>
  </div>
</div>