<div class="col-md-12">
	<h4>User / <b class="text-primary">Buat User Baru</b></h4>
	<hr>
</div>

<div class="col-md-12">

	<div class="card">
	  <h5 class="card-header bg-primary text-white">Profile Anda</h5>
	  <div class="card-body">
	    <form action="controllers/auth_controller.php?post=create" method="POST">
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required="required">
		  </div>

		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required="required">
		  </div>
		  
		  <br>
		  <div class="form-group">
		    <button type="submit" class="btn btn-outline-primary">Buat User Baru</button>
		    <button type="reset" class="btn btn-outline-danger">Reset</button>
		  </div>
		</form>
	  </div>
	</div>

</div>