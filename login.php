<?php
include 'connection.php';
$result = mysqli_query($con, "SELECT * FROM user");
$cek = mysqli_num_rows($result);
if ($cek == 0) {
  $userEmpty = true;
}

?>

<?php

if (isset($_POST['login'])) {
  $username   = $_POST['username'];
  $inputpass  = md5($_POST['password']);

  include 'connection.php';
  $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
  $cek = mysqli_num_rows($result);
  if ($cek > 0) {
    $data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['status'] = 'login';
    $pass = $data['password'];
    if ($pass == $inputpass) {
      header('Location:admin/index.php');
      exit;
    } else {
      $error = true;
    }
  } else {
    $error = true;
  }
}

?>
 <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" /> 
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SITICKET</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <body class="img js-fullheight" style="background-image: url(img/hd.jpg)">
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-9">
        <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                  <img src="img/logo.png" alt="LOGO UT" width="150px" class="mb-4">
                  <h2 class="h4 text-white font-weight-bold mb-4">Login</h2>
                    <hr>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <label class="text-white" for="username">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Masukkan Nama User"
                        required>  
                    </div>
                  
                    <div class=" form-group">
                    <label for="password" class="text-white" >Password</label>
                      <input type="password" class="form-control" name="password"
                        placeholder="Masukan Password" required>
                    </div>
  
                    <div class="form-group">
  <input type="submit" name="login" value="Login" class="form-control btn btn-warning text-dark submit px-3 font-weight-bold btn-lg" style="border-radius: 5px; display: block; margin: 0 auto; width: 200px;">
</div>
                    <hr>
                    <?php if (isset($userEmpty)) : ?>
                    <p><strong>Data user</strong> masih kosong,
                      <strong><a href="admin/index.php?page=user-add" class="fw-bold text-decoration-underline">Klik
                          Disini</a></strong>
                      untuk menambahkan data user baru.
                     
                    </p>
                    <?php endif; ?>

                    <?php if (isset($error)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Login gagal</strong> Periksa kembali Username dan Password
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php endif; ?>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>

  <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 5000);
  </script>

</body>

</html>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>