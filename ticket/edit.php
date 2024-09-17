<?php
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM ticket WHERE id=$id");

while ($data = mysqli_fetch_array($result)){
	$nama_pelapor = $data['nama_pelapor'];
	$email = $data['email'];
	$sektor = $data['sektor'];
	$keluhan = $data['keluhan'];
	$tanggal_pelaporan = $data['tanggal_pelaporan'];
	$keterangan = $data['keterangan'];
}

if (isset($_POST['submit'])) {
  $nama_pelapor = $_POST['nama_pelapor'];
	$email = $_POST['email'];
	$sektor = $_POST['sektor'];
	$keluhan = $_POST['keluhan'];
	$tanggal_pelaporan = $_POST['tanggal_pelaporan'];
	$keterangan = $_POST['keterangan'];
	
  $update = mysqli_query($con, "UPDATE ticket SET nama_pelapor='$nama_pelapor',email='$email',sektor='$sektor',keluhan='$keluhan',tanggal_pelaporan='$tanggal_pelaporan',keterangan='$keterangan' WHERE id=$id");


	echo "<script>window.location.href = '?page=ticket-show';</script>";
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Ticket</h6>
      </div>
      <div class="card-body">
        <form method="POST">
          <div class="row mb-3">
            <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
            <div class="col-sm-10">
              <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor" value="<?php echo $nama_pelapor; ?>" required >
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="sektor" class="col-sm-2 col-form-label">Sektor</label>
            <div class="col-sm-10">
              <select name="sektor" id="sektor" class="form-control" name="sektor" required>
                <option value="-" disabled>- Pilih -</option>
                <option value="MIA4" <?php if ($sektor == 'MIA4') echo 'selected'; ?>>MIA4</option>
                <option value="PPA" <?php if ($sektor == 'PPA') echo 'selected'; ?>>PPA</option>
                <option value="BUMA MAIN SHOP" <?php if ($sektor == 'MIA4') echo 'selected'; ?>>MIA4</option>
                <option value="PPA" <?php if ($sektor == 'BUMA MAIN SHOP') echo 'selected'; ?>>BUMA MAIN SHOP</option>
                <option value="PASAR PANAS" <?php if ($sektor == 'PASAR PANAS') echo 'selected'; ?>>PASAR PANAS</option>
                <option value="RISA" <?php if ($sektor == 'RISA') echo 'selected'; ?>>RISA</option>
                <option value="TRAINING CENTER" <?php if ($sektor == 'TRAINING CENTER') echo 'selected'; ?>>TRAINING CENTER</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
    <label for="keluhan" class="col-sm-2 col-form-label text-end">Keluhan</label>
    <div class="col-sm-10">
        <textarea name="keluhan" class="form-control" aria-label="With textarea"><?php echo $keluhan; ?></textarea>
    </div>
</div>
<div class="row mb-3">
            <label for="tanggal_pelaporan" class="col-sm-2 col-form-label">Tanggal Pelaporan</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tanggal_pelaporan" name="tanggal_pelaporan" value="<?php echo $tanggal_pelaporan; ?>" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <select name="keterangan" id="keterangan" class="form-control" name="keterangan" required>
                <option value="-" disabled>- Pilih -</option>
                <option value="Open" <?php if ($keterangan == 'Open') echo 'selected'; ?>>Open</option>
                <option value="Close" <?php if ($keterangan == 'Close') echo 'selected'; ?>>Close</option>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="offset-sm-2">

              <button type="submit" class="btn btn-sm btn-primary" name="submit"><i class="fas fa-save"></i>
                Simpan</button>
              <a href ="?page=ticket-show" class="btn btn-sm btn-danger"><i class="fas fa-chevron-left"></i>Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>