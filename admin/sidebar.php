<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar" style="width: 250px;">
<div class="sidebar-brand d-flex align-items-center">
  <div class="sidebar-brand-icon">
    <img class="img-profile rounded-circle" src="../img/logo.png" width="50" height="50" />
  </div>
  <div class="sidebar-brand-text mx-3 text-right small">
    <?php
    echo $_SESSION['level'];
    ?>
  </div>
</div>

  <hr class="sidebar-divider my-0" />

  <li class="nav-item active">
    <a class="nav-link" href="?page=dashboard">
      <span>Dashboard</span>
    </a>
  </li>
  <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

  if ($_SESSION['level'] === 'administrator') {
    echo '
    
  
  

  
  
    ';
  }
  ?>
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUser" aria-expanded="true" aria-controls="collapsedataSiswaTwo">
      <i class="fas fa-fw fa-user-tie"></i>
      <span>Data User</span>
    </a>
    <div id="dataUser" class="collapse" aria-labelledby="dataUser" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="?page=user-add">Input Data User</a>
        <a class="collapse-item" href="?page=user-show">Data User</a>
      </div>
    </div>
  </li>
  
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataTicket" aria-expanded="true" aria-controls="dataTicket">
        <i class="fas fa-fw fa-address-card"></i>
        <span> Ticket</span>
      </a>
      <div id="dataTicket" class="collapse" aria-labelledby="dataTicket" data-parent="#accordionSidebar">
        <div class="bg-white py-3 collapse-inner rounded">
        <a class="collapse-item" href="?page=ticket-add">Input Data Ticket</a>
          <a class="collapse-item" href="?page=ticket-show">Data Ticket</a>   
        </div>
      </div>
    </li>
  <li class="nav-item">
      <a class="nav-link" href="../?page=index.php">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
      </a>
    </li>
  <hr class="sidebar-divider d-none d-md-block" />
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
