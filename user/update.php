<?php
	include('../app/config.php');
    include('../templates/header.php');
    include('../templates/menu.php');

    $auth=$_GET['auth'];
    $sql_query=mysqli_query($koneksi,"SELECT `autentikasi`, `nama_user` FROM user WHERE autentikasi='$auth'")or die(mysqli_error($koneksi));
    $dataUser=mysqli_fetch_array($sql_query, MYSQLI_ASSOC);
?>
<div class="container-fluid">
    <h2 class="text-center">User Update</h2>
	<hr>
    <form method="POST" action="simpanUpdate.php".php">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="form-group">
					<label>Autentikasi</label>
					<input type="text" class="form-control" value="<?php echo $dataUser['autentikasi'];?>" name="autentikasi" readonly/>
				</div>
				<div class="form-group">
					<label>Nama User</label>
					<input type="text" class="form-control" value="<?php echo $dataUser['nama_user'];?>" name="nama" autocomplete="off"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control" name="password" autocomplete="off"/>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="index.php" class="btn btn-danger">Cancel</a>
				</div>
			</div>
		</div>
	</form>
</div>
<?php
    include('../templates/footer.php');
?>