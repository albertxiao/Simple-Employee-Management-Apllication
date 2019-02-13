<div class="col-md-12">
	<h4>Pegawai / </h4>
	<hr>
</div>
<div class="card-deck col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <?php
    $views = $model->get_order_asc("employee", "created_at");
    while ($data = $views->fetch(PDO::FETCH_OBJ)) {
  ?>
  <div class="col-md-4">
    <div class="card">
      <a href="?content=employees&action=show_employee&id=<?= $data->user_id; ?>"><img src="assets/img/employee/<?= $data->pict; ?>" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <a href="?content=employees&action=show_employee&id=<?= $data->user_id; ?>">
          <h5 class="card-title"><?= $data->name; ?></h5>
        </a>
        <p class="card-text">
          <tr>
            <td>Email</td><td>: <?= $data->email; ?></td><br><br>
            <td>Nomor HP</td><td>: <?= $data->phone; ?></td>
          </tr>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Dibuat <?= $data->created_at; ?></small>
      </div>
    </div>
    <br>
  </div>
  <?php } ?>
</div>