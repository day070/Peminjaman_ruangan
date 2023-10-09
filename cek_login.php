<!-- <?php
session_start();
include"koneksi.php";

$user =$_POST['username'];
$pw   =$_POST['password'];

$filter = mysqli_query($con, "SELECT * FROM pengguna WHERE username='$user' AND password='$pw'");
$cek	= mysqli_num_rows($filter);
$data	= mysqli_fetch_array($filter);
if ($cek > 0) {
	if ($data['level']=='admin') {

    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = 'admin';
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['login'] = true;
    
    header("location:admin/");
    
    
  }else if($data['level']=='user'){
    
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = 'user';
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['login'] = true;
    
    header("location:user/");

	}
}else {
  // Jika kata sandi salah, arahkan kembali ke halaman login dengan pesan kesalahan.
  $_SESSION['error_message'] = "Username atau kata sandi salah!";
  header("location:index.php");
}


?> -->