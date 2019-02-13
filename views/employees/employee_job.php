<br>
<div class="card">
  <div class="card-header bg-primary text-white">Informasi Pekerjaan Pegawai</div>
  <div class="card-body">
    <form action="controllers/employee_controller.php?post=update_job" method="POST">

	  <div class="form-group">
	    <input type="hidden" name="id" value="<?= $employee_id; ?>">
	    <input type="hidden" name="user_id" value="<?= $id; ?>">
	    <label for="number_id">Nomor Induk Pegawai</label>
	    <input type="number" class="form-control" value="<?= $data_job->number_id; ?>" name="number_id" id="number_id" placeholder="Masukan Nomor Induk Pegawai" required="required">
	  </div>

	  <div class="form-group">
	    <label for="date_of_entry">Tanggal Masuk</label>
	    <input type="date" class="form-control" value="<?= $data_job->date_of_entry; ?>" name="date_of_entry" id="date_of_entry" placeholder="Masukan Tanggal Masuk Pegawai" required="required">
	  </div>

	  <div class="form-group">
	    <label for="position">Jabatan</label>
	    <input type="text" class="form-control" value="<?= $data_job->position; ?>" name="position" id="position" placeholder="Masukan Jabatan Pegawai" required="required">
	  </div>

	  <div class="form-group">
	    <label for="salary">Gaji</label>
	    <input type="number" class="form-control" value="<?= $data_job->salary; ?>" name="salary" id="salary" placeholder="Masukan  Gaji Pegawai" required="required">
	  </div>

	  <div class="form-group">
	    <label for="team_unit">Team Unit</label>
	    <input type="text" class="form-control" value="<?= $data_job->team_unit; ?>" name="team_unit" id="team_unit" placeholder="Masukan Team Unit Pegawai" required="required">
	  </div>

	  <div class="form-group">
	    <button type="submit" class="btn btn-success">Edit Informasi Pekerjaan</button>
	  </div>
	</form>
  </div>
</div>