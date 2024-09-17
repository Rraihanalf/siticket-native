<?php
if (isset($_SESSION['level']) != '') {
  include('../logincheck.php');
}
session_start();
include '../template/header.php';
?>
<body id="page-top">
  <div id="wrapper">
    <?php include 'sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <?php
          include '../connection.php';
          error_reporting(0);
          switch ($_GET['page']) {
            case 'dashboard':
              $title = 'Dashboard';
              include 'dashboard.php';
              break;

              case 'ticket-show':
                $title = 'Data Ticket';
                include '../ticket/show.php';
                break;
              case 'ticket-add':
                $title = 'Input Data Ticket';
                include '../ticket/add.php';
                break;
             case 'ticket-delete':
                include '../ticket/delete.php';
                break;
             case 'ticket-edit':
                $title = 'Edit Data Ticket';
                include '../ticket/edit.php';
                break;
                case 'ticket-print':
                include '../ticket/print.php';
                break;
                case 'ticket-print2':
                include '../ticket/print2.php';
                break;
                
            case 'karyawan-show':
              $title = 'Data Karyawan';
              include '../karyawan/show.php';
              break;
            case 'karyawan-add':
              $title = 'Input Data Karyawan';
              include '../karyawan/add.php';
              break;
            case 'karyawan-delete':
              include '../karyawan/delete.php';
              break;
            case 'karyawan-edit':
              $title = 'Edit Data Karyawan';
              include '../karyawan/edit.php';
              break;
            case 'karyawan-print':
              include '../karyawan/print.php';
              break;
            case 'karyawan-print2':
              include '../karyawan/print2.php';
              break;
            case 'karyawan-print2':
              include '../karyawan/print3.php';
              break;

              case 'user-show':
                $title = 'Data User';
                include '../user/show.php';
                break;
              case 'user-add':
                $title = 'Input Data User';
                include '../user/add.php';
                break;
              case 'user-edit':
                $title = 'Edit Data User';
                include '../user/edit.php';
                break;
              case 'user-delete':
                include '../user/delete.php';
                break;
              case 'admin-logout':
                include 'logout.php';
                break;
              default:
                $title = 'Dashboard';
                include 'dashboard.php';
                break;
            }
          ?>
        </div>

        <?php include '../template/footer.php'; ?>

</body>

</html>

