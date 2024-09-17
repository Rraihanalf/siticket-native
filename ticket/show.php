
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Ticketing</h6>
</div>
        <div class="card-body">
        <a href="?page=ticket-add" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="../ticket/print.php" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i>
          Cetak
          FPDF</a>
        <a href="../ticket/print2.php" class="btn btn-sm btn-warning" target="_blank"><i class="fas fa-print"></i>
          Cetak
          window.print</a>
        <hr>
      </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="data">
            <thead>
              <tr>
                <th>Nama Pelapor</th>
                <th>Email</th>
                <th>Sektor</th>
                <th>Keluhan</th>
                <th>Tanggal Pelaporan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
    include '../connection.php';
    $query = mysqli_query($con, 'SELECT * FROM ticket');
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr style="background: <?php echo ($data['keterangan'] == 'Open') ? '#defff1' : '#feeeea'; ?>">
            <td><?php echo $data['nama_pelapor']; ?></td>
            <td class="text-nowrap"><?php echo $data['email']; ?></td>
            <td><?php echo $data['sektor']; ?></td>
            <td><?php echo $data['keluhan']; ?></td>
            <td><?php echo $data['tanggal_pelaporan']; ?></td>
                  <!-- <td><?php echo $data['keterangan']; ?></td> -->
                  <td><?php if ($data['keterangan'] == "Open"){ ?><a  class="btn btn-success btn-xs" href="?page=ticket-edit&id=<?php echo $data['id']; ?> " ><i class="glyphicon glyphicon-save-file"></i>Open</a> <?php }else{ ?> <a  class="btn btn-danger btn-xs" ><i class="glyphicon glyphicon-open-file"></i>Close</a><?php } ?></td> 
                  <td>
                  <a class="btn text-primary" href="?page=ticket-edit&id=<?php echo $data['id']; ?>"><i
                      class="fas fa-edit"></i>
                  </a>
                  <a class="btn text-danger" href="?page=ticket-delete&id=<?php echo $data['id']; ?>"
                    onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fas fa-trash"></i>
                  </a>
                  <a class="btn text-success" href="../ticket/print.php?id=<?php echo $data['id']; ?>"
                    target="_blank"><i class="fas fa-print"></i>
                  </a>
                  </td>
                </tr>

              <?php $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>