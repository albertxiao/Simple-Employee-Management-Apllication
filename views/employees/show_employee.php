<div class="col-md-12">
  <h4>Pegawai / <b class="text-primary">Informasi Pegawai</b></h4>
  <hr>
</div>
<div class="col-md-12">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="employee-tab" data-toggle="tab" href="#employee" role="tab" aria-controls="employee" aria-selected="true">Info Umum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Info Pendidikan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="job-tab" data-toggle="tab" href="#job" role="tab" aria-controls="job" aria-selected="false">Info Pekerjaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="auth-tab" data-toggle="tab" href="#auth" role="tab" aria-controls="auth" aria-selected="false">Info Akun</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <?php
      $id = @$_GET['id'];
      
      $views_auth = $model->show("users", "id", $id);
      $data_auth = $views_auth->fetch(PDO::FETCH_OBJ);

      $views_general = $model->show("employee", "user_id", $id);
      $data_general = $views_general->fetch(PDO::FETCH_OBJ);
      $employee_id = $data_general->id;

      $views_education = $model->show("employee_edu", "employee_id", $employee_id);
      $data_education = $views_education->fetch(PDO::FETCH_OBJ);

      $views_job = $model->show("employee_job", "employee_id", $employee_id);
      $data_job = $views_job->fetch(PDO::FETCH_OBJ);
    ?>
    <!-- General Information -->
    <div class="tab-pane fade show active" id="employee" role="tabpanel" aria-labelledby="employee-tab">
      <?php include 'views/employees/employee_general.php'; ?>
    </div>
    <!-- Education Information -->
    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
      <?php include 'views/employees/employee_edu.php'; ?>
    </div>
    <!-- Job Information -->
    <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="job-tab">
      <?php include 'views/employees/employee_job.php'; ?>
    </div>
    <!-- Auth Information -->
    <div class="tab-pane fade" id="auth" role="tabpanel" aria-labelledby="auth-tab">
      <?php include 'views/employees/employee_auth.php'; ?>
    </div>
  </div>
</div>