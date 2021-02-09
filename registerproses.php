<?php  

if (isset($_POST['register'])) {
	$name=$_POST['name'];
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$pass2=$_POST['password2'];
	$rank="member";

	include_once("koneksi.php");

	if ($pass !== $pass2) {
		echo "<script>
			alert('Konfirmasi password salah');
			</script>";

		return false;
	}

	$result=mysqli_query($koneksi, "INSERT INTO users VALUES('', '$name', '$username', '$pass', '$rank')");



?>

	<script>alert("Anda telah berhasil menjadi member")
		document.location='login.php';
	</script>;
<?php
}
?>