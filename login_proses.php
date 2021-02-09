<?php  
$username=$_POST['username'];
$pass=$_POST['password'];

include 'koneksi.php';

$user=mysqli_query($koneksi, "select * from users where username='$username' and password='$pass'");
$chek=mysqli_num_rows($user);
if ($chek>0){
	session_start();
	$row = mysqli_fetch_array($user);

	if ($row['rank']=="admin") {
		$_SESSION['name'] = $row['name'];
		$_SESSION['rank'] = $row['rank'];
		header("location:adminpage.php");
?>	
	<script type="text/javascript">alert("Anda Berhasil Login");</script>
<?php  
}
elseif ($row['rank']=="member") {
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['rank'] = $row['rank'];
		header("location:memberpage.php");
?>
	<script type="text/javascript">alert("Selamat Datang :V");</script>
<?php  
}

}


else{
	header("location:login.php?pesan=gagal");
}

?>