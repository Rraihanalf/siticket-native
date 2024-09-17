<style>
* {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  border-collapse: collapse;
  border-color: black;
}
</style>
<img src="../img/logut.png" alt="Logo" style="width: 300px; height: 50px; float: left;">
<br>
<h2 align="center" style="margin-top: 60px;">Laporan Data Ticket</h2>

<div class="table-responsive mt-3">
  <table border="1" width="100%" align="center" cellpadding="8">
    <thead>
      <tr>
        <th width="20%">Nama Pelapor</th>
        <th width="25%">Email</th>
        <th width="5%">Sektor</th>
        <th width="30%">Keluhan</th>
        <th width="20%">Tanggal Pelaporan</th>
        <th width="5%">Keterangan</th>
      </tr>
    </thead>

    <tbody>
      <?php
      include '../connection.php';
      $query = mysqli_query($con, 'SELECT * FROM ticket');
      while ($data = mysqli_fetch_array($query)) { ?>

      <tr>
        <td align="center"><?php echo $data['nama_pelapor']; ?></td>
        <td align="center"><?php echo $data['email']; ?></td>
        <td align="center"><?php echo $data['sektor']; ?></td>
        <td align="center"><?php echo $data['keluhan']; ?></td>
        <td align="center"><?php echo $data['tanggal_pelaporan']; ?></td>
        <td align="center"><?php echo $data['keterangan']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<script>
window.print();
</script>