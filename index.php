<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login Peminjaman Ruangan</title>
  </head>
  <body>
        <div class="global-container">
            <div class="card login-form" style="box-shadow:0 2px 6px black;">
                    <div class="card-title text-center fw-bold p-4"><h2>L O G I N</h2></div>
                <div class="card-text">
                <form method="POST" action="cek_login.php">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="Check">
                  <label class="form-check-label" for="Check">Check me out</label>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php
                  if (isset($_SESSION['error_message'])) {
                    echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
                  }
                  ?>
              </form>
                </div>
            </div>
        </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>