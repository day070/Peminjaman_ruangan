<?php
require "../session.php";
require "../koneksi.php";
$nama =$_SESSION['username'];

$query = mysqli_query($con, "SELECT * FROM ruangan_lab");
$data = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <style>
/* body{
        background-color: blue;
    } */
    .sidebar{
      width:280px;
      height: 100vh;
      box-shadow:0 2px 6px black;

    }
    .k:hover{
      background:primary;
      box-shadow:0 2px 6px black;
      transition:0.3s;
      color:white;
    }
    .sikon{
        display:flex;
        
    }
    .tengah{
      width:100%;
      height:80vh;
      display: flex;
      justify-content:center;
    }
</style>
<body class="bg-primary">
<div class="sikon">
   <?php require "../sidebar.php"; ?>
   <div class="tengah">
    <div style="width:95%">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $data['NRuangan']; ?></td>
      <td><?php echo $data['k_ruangan'] ?></td>
      <td>Bokingg</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>