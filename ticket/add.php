<?php
include "connection.php";
if (isset($_POST['submit'])) {

  $nama_pelapor = $_POST['nama_pelapor'];
  $email = $_POST['email'];
  $sektor = $_POST['sektor'];
  $keluhan = $_POST['keluhan'];
  $tanggal_pelaporan = $_POST['tanggal_pelaporan'];
  $keterangan = 'Open'; // Anda dapat menetapkan nilai ini di sini.
  
  $insert = mysqli_query($con, "INSERT INTO ticket(nama_pelapor, email, sektor, keluhan, tanggal_pelaporan, keterangan) VALUES('$nama_pelapor', '$email', '$sektor', '$keluhan', '$tanggal_pelaporan','$keterangan')");

  if ($insert) {
    echo "<script>window.location.href = 'index.php';</script>";
  } else {
    echo 'gagal';
  }
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4"></div>

<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Buat laporan Anda</h6>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="row mb-3">
            <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
            <div class="col-sm-10">
              <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="sektor" class="col-sm-2 col-form-label">Sektor</label>
            <div class="col-sm-10">
              <select name="sektor" id="sektor" class="form-control" required>
                <option value="-" selected disabled>- Pilih -</option>
                <option value="MIA4">MIA4</option>
                <option value="PPA">PPA</option>
                <option value="BUMA MAIN SHOP">BUMA MAIN SHOP</option>
                <option value="PASAR PANAS">PASAR PANAS</option>
                <option value="RISA">RISA</option>
                <option value="TRAINING CENTER">TRAINING CENTER</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="keluhan" class="col-sm-2 col-form-label text-end">Keluhan</label>
            <div class="col-sm-10">
              <textarea name="keluhan" class="form-control" aria-label="With textarea"></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="tanggal_pelaporan" class="col-sm-2 col-form-label">Tanggal Pelaporan</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tanggal_pelaporan" name="tanggal_pelaporan">
            </div>
          </div>

          <!-- <div class="row mb-3">
            <label for="foto_barang" class="col-sm-2 col-form-label text-end">Foto Barang</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="foto_barang" name="foto_barang" value="Upload">
            </div>
          </div> -->

          <hr>

          <div class="mx-auto text-center">
            <button type="submit" class="btn btn-sm btn-primary" name="submit" onclick="return confirm('Apakah Laporan Anda Sudah Benar?')">
              <i class="fas fa-save"></i> Laporkan
            </button>
          </div>

        </form>
        <br>
      </div>
    </div>
  </div>
</div>
