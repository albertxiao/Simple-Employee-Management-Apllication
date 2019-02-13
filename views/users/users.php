<div class="col-md-12">
	<h4>User / </h4>
	<hr>
	<a href="?content=users&action=new_user" class="btn btn-outline-primary">Buat User</a>
	<br>
	<br>
	<?php
		session_start();
		if(@$_SESSION['alert'])
		{
			echo "<div class='alert alert-info'>".$_SESSION['alert']."</div>";
			unset($_SESSION['alert']);
		}
	?>
</div>

<div class="col-md-12">
	<div class="table-responsive-lg">
	  <table class="table table-striped table-hover table-bordered" id="dt">
	  	<thead class="thead-dark">
		    <tr>
		      <th scope="col" width="15">#</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		      <th scope="col">Action</th>
		    </tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				$views = $model->get_order_asc("users", "created_at");
				while ($data = $views->fetch(PDO::FETCH_OBJ)) {
			?>
		    <tr>
		      <th scope="row"><?= $no++; ?></th>
		      <td><?= $data->email; ?></td>
		      <td><?= $data->password; ?></td>
		      <td width="280" align="center">
		      	<a href="?content=employees&action=show_employee&id=<?= $data->id; ?>" class="btn btn-sm btn-xs btn-success">Edit Data Pegawai</a>
		      	<a onclick="confirm('Yakin Akan Menghapus Data...?')" href="controllers/auth_controller.php?post=delete&id=<?= $data->id; ?>" class="btn btn-sm btn-xs btn-danger">Hapus</a>
		      </td>
		    </tr>
			<?php } ?>
		  </tbody>
	  </table>
	</div>
</div>