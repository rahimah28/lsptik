<?php
    include './config/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Informasi</title>
  <link rel="stylesheet" href="./assets/vendors/bootsrap-4.6/css/bootstrap.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        Lembaga Sertifikasi Online
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="visi.php">Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="media.php">Media</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="informasi.php">Informasi</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#intro">
                <span data-feather="home"></span>
                LEMBAGA DIKLAT <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#visi">
                <span data-feather="file"></span>
                EVENT
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#misi">
                <span data-feather="shopping-cart"></span>
                FAQ
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-md-1">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Data Lembaga Diklat</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <!-- Tombol tambah data lembaga -->
            <button type="button" class="btn btn-outline-primary mr-2" data-toggle="modal"
              data-target="#tambahlembaga">Tambah Data</button>
            <!-- Baris akhir tombol tambah data lembaga -->
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary" onclick="printPDF()">
                <span data-feather="file-text"></span>
                PDF</button>
              <button class="btn btn-sm btn-outline-secondary" onclick="printExcel()">
                <span data-feather="file-text"></span>
                Excel</button>
            </div>
            <!-- <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button> -->
          </div>
        </div>

        <!-- Modal Tambah Data lembaga-->
        <div class="modal" id="tambahlembaga" tabindex="-1" role="dialog" aria-labelledby="tambahlembagaLabel"
          aria-hidden="true">
          <div class="container">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahlembagaLabel">Tambah Data lembaga</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="./process/input-lembaga.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="id-lembaga">ID lembaga</label>
                      <input type="text" class="form-control" name="id-lembaga">
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                      <label for="nama-lembaga">Nama lembaga</label>
                      <input type="text" class="form-control" name='nama-lembaga'>
                    </div>
                    <div class="form-group">
                      <label for="nama-lembaga">Jenis</label>
                      <input type="text" class="form-control" name='nama-lembaga'>
                    </div>
                    <div class="form-group">
                      <label for="alamat-lembaga">Alamat lembaga</label>
                      <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                      <label for="alamat-lembaga">Telp</label>
                      <input type="text" class="form-control" name="alamat">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Baris akhir tambah data lembaga -->

        </div>
        <div class="table-responsive">

          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
        $sql = 'SELECT * FROM lembaga ORDER BY idlembaga DESC';
        $q_tampil_lembaga = mysqli_query($db, $sql);
        $nomor = 1;

        while ($r_tampil_lembaga = mysqli_fetch_array($q_tampil_lembaga)) {
          // semua data yang ditampilkan alangkah mudahnya jika membentuk array 
        ?>
              <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $r_tampil_lembaga['idlembaga']; ?></td>
                <td><?php echo $r_tampil_lembaga['nama']; ?></td>
                <td><?php echo $r_tampil_lembaga['jenis']; ?></td>
                <td><?php echo $r_tampil_lembaga['alamat']; ?></td>
                <td><?php echo $r_tampil_lembaga['telp']; ?></td>
                <td><?php echo $r_tampil_lembaga['email']; ?></td>
                <td><a href="#" class="badge badge-warning" data-toggle="modal"
                    data-target="#edit-lembaga-modal<?php echo $r_tampil_lembaga['idlembaga']; ?>">Edit</a> |
                  <a href="#" class="badge badge-danger" data-toggle="modal"
                    data-target="#hapus-data-lembaga<?php echo $r_tampil_lembaga['idlembaga']; ?>">Hapus</a></td>
              </tr>

              <!-- Modal Edit lembaga -->
              <div class="modal fade" id="edit-lembaga-modal<?php echo $r_tampil_lembaga['idlembaga']; ?>" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data lembaga</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="./process/edit-lembaga.php" method="POST">
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="id-lembaga">ID lembaga</label>
                          <input type="text" class="form-control" name="id-lembaga" readonly
                            value="<?php echo $r_tampil_lembaga['idlembaga']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="nama-lembaga">Nama lembaga</label>
                          <input type="text" class="form-control" name="nama-lembaga"
                            value="<?php echo $r_tampil_lembaga['nama']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="jenis-kelamin">Jenis Kelamin</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="jenis-kelamin" class="custom-control-input"
                              value="Laki-laki"
                              <?php if ($r_tampil_lembaga['jeniskelamin'] == 'Laki-laki') echo 'checked'; ?>>
                            <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="jenis-kelamin" class="custom-control-input"
                              value="Perempuan"
                              <?php if ($r_tampil_lembaga['jeniskelamin'] == 'Perempuan') echo 'checked'; ?>>
                            <label class="custom-control-label" for="customRadio2">Perempuan</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alamat-lembaga">Alamat lembaga</label>
                          <input type="text" class="form-control" name="alamat"
                            value="<?php echo $r_tampil_lembaga['alamat']; ?>">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Baris akhir modal Edit Data lembaga -->

              <!-- Modal hapus data lembaga -->
              <div class="modal" id="hapus-data-lembaga<?php echo $r_tampil_lembaga['idlembaga']; ?>" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Akan Menghapus Data
                        <?php echo $r_tampil_lembaga['nama']; ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="./process/hapus-lembaga.php" method="POST">
                      <!-- <div class="modal-body">
                    ...
                  </div> -->
                      <div class="modal-footer">
                        <input type="text" class="form-control" name="id-lembaga" readonly
                          value="<?php echo $r_tampil_lembaga['idlembaga']; ?>">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-danger" name="hapus">Hapus Data</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Baris akhir Modal Hapus data lembaga -->
              <?php } ?>
            </tbody>
          </table>
        </div>

    </div>
  </div>
  </main>
  </div>
</body>

</html>