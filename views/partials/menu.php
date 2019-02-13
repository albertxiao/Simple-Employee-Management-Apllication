<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">SIMPEG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a data-toggle="tooltip" data-placement="bottom" title="Beranda" class="nav-link" href="?content=home">Beranda <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a data-toggle="tooltip" data-placement="bottom" title="Pegawai" class="nav-link" href="?content=employees">Pegawai <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a data-toggle="tooltip" data-placement="bottom" title="User" class="nav-link" href="?content=users">User <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a data-toggle="tooltip" data-placement="bottom" title="Profile" class="nav-link" href="?content=profile&id=<?= $_SESSION['user'] ?>">Profile <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a data-toggle="tooltip" data-placement="bottom" title="Keluar" class="nav-link" href="controllers/auth_controller.php?post=logout">Keluar <span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="?content=employees&action=search_employee" method="POST">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Cari Pegawai" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Cari Pegawai</button>
    </form>
  </div>
</nav>