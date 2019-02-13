<br>
<div class="card">
  <div class="card-header bg-primary text-white">Informasi Pendidikan Pegawai</div>
  <div class="card-body">
    <form action="controllers/employee_controller.php?post=update_edu" method="POST">

	  <div class="form-group">
	    <label for="primary_school">Sekolah Dasar</label>
	    <input type="hidden" name="id" value="<?= $employee_id; ?>">
	    <input type="hidden" name="user_id" value="<?= $id; ?>">
	    <input type="text" class="form-control" value="<?= $data_education->primary_school; ?>" name="primary_school" id="primary_school" placeholder="Masukan Sekolah Dasar Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="junior_high_school">Sekolah Menengah Pertama</label>
	    <input type="text" class="form-control" value="<?= $data_education->junior_high_school; ?>" name="junior_high_school" id="junior_high_school" placeholder="Masukan Sekolah Menengah Pertama Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="senior_high_school">Sekolah Menengah Atas / Kejuruan</label>
	    <input type="text" class="form-control" value="<?= $data_education->senior_high_school; ?>" name="senior_high_school" id="senior_high_school" placeholder="Masukan Sekolah Menengah Atas / Kejuruan Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="college">Perguruan Tinggi</label>
	    <textarea class="form-control" id="college" name="college" placeholder="Masukan Perguruan Tinggi Anda" rows="5" required="required"><?= $data_education->college; ?></textarea>
	  </div>

	  <div class="form-group">
	    <button type="submit" class="btn btn-success">Edit Informasi Pendidikan</button>
	  </div>
	</form>
  </div>
</div>