<br>
<div class="card">
  <div class="card-header bg-primary text-white">Informasi Umum Tentang Karyawan</div>
  <div class="card-body">
    <form action="controllers/employee_controller.php?post=update_general" enctype="multipart/form-data" method="POST">

      <div class="form-group text-center">
	  	<?php
	  		if($data_general->pict == "-") {
	  			echo "<img src='assets/img/default.png' value='".$data_general->pict."' width='150'>";
	  		} else {
	  			echo "<img src='assets/img/employee/".$data_general->pict."' value='".$data_general->pict."' width='150'>";
	  		}
	  	?>
	  </div>

	  <div class="form-group">
	    <label for="name">Nama</label>
	    <input type="hidden" name="id" value="<?= $employee_id; ?>">
	    <input type="hidden" name="user_id" value="<?= $id; ?>">
	    <input type="text" class="form-control" value="<?= $data_general->name; ?>" id="name" name="name" placeholder="Masukan Nama Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="address">Alamat</label>
	    <textarea class="form-control" id="address" name="address" placeholder="Masukan Alamat Anda" rows="5" required="required"><?= $data_general->address; ?></textarea>
	  </div>

	  <div class="form-group">
	    <label for="date_of_birth">Tanggal Lahir</label>
	    <input type="date" class="form-control" name="date_of_birth" value="<?= $data_general->date_of_birth; ?>" id="date_of_birth" placeholder="Masukan Nama Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="phone">Nomor Handphone</label>
	    <input type="number" class="form-control" name="phone" value="<?= $data_general->phone; ?>" id="phone" placeholder="Masukan Nomor Handphone Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="status">Status</label>
	    <select class="form-control" id="status" name="status" required="required">
	    	<option value="">-- Pilih Status --</option>
	    	<option <?php if($data_general->status == "lajang") { echo "selected"; } ?> value="lajang">Lajang</option>
	    	<option <?php if($data_general->status == "menikah") { echo "selected"; } ?> value="menikah">Menikah</option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="gender">Jenis Kelamin</label>
	    <select class="form-control" id="gender" name="gender" required="required">
	    	<option value="">-- Pilih Jenis Kelamin --</option>
	    	<option <?php if($data_general->gender == "Laki - Laki") { echo "selected"; } ?> value="Laki - Laki">Laki - Laki</option>
	    	<option <?php if($data_general->gender == "Perempuan") { echo "selected"; } ?> value="Perempuan">Perempuan</option>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" value="<?= $data_general->email; ?>" name="email" id="email" placeholder="Masukan Email Anda" required="required">
	  </div>

	  <div class="form-group">
	    <label for="pict">Foto</label>
	    <input type="file" class="form-control" name="pict" id="pict" aria-describedby="foto" required="required"><br>
	    <small id="foto" class="form-text text-muted">Foto Optional Untuk Diganti</small>
	  </div>
	  <br>
	  <div class="form-group">
	    <button type="submit" class="btn btn-success">Edit Informasi Umum</button>
	  </div>
	</form>
  </div>
</div>