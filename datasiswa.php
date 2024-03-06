

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form data guru</title>
	<style> 
	.container{
		border: 100%;
		border-radius: 100%;
		position: center;
		}
	.form-grup{
		font-size: 20px;
	}	

	.form-grup1 [input ='submit']{
		font-size: 20px;
	}	
	</style>
</head>
<body>
	<div class="container">

	<form action ="login.html" method="post">
	<h1>form data guru</h1>

	<div class="form-grup">
	<label for="nis">nis</label><br>
	<br><input type="text" id="nis" name="nis" required><br>

	<div class="form-grup">
	<br><label for="username">nama</label><br>
	<br><input type="password" id="password"name="passoword" required><br>

    <div class="form-grup">
	<label for="tempat lahir">tempat lahir</label><br>
	<br><input type="text" id="tempatlahir" name="tempatlahir" required><br>

	<div class="form-grup">
	<br><label for="tanggallahir">tanggal lahir</label><br>
	<br><input type="text" id="tanggallahir"name="tanggallahir" required><br>

	<div class="form-grup">
	<label for="jeniskelamin">jenis kelamin</label><br>
	<br><input type="text" id="jeniskelamin" name="jeniskelamin" required><br>

	<div class="form-grup">
	<br><label for="agama">agama</label><br>
	<br><input type="text" id="agama"name="agama" required><br>

	<div class="form-grup">
	<label for="ayah">ayah</label><br>
	<br><input type="text" id="ayah" name="ayah" required><br>

	<div class="form-grup">
	<br><label for="ibu">ibu</label><br>
	<br><input type="text" id="ibu"name="ibu" required><br>

	<div class="form-grup">
	<label for="pekerjaanayah">pekerjaan ayah</label><br>
	<br><input type="text" id="pekerjaanayah" name="pekerjaanayah" required><br>

	<div class="form-grup">
	<br><label for="pekerjaanibu">pekerjaan ibu</label><br>
	<br><input type="text" id="pekerjaanibu"name="pekerjaanibu" required><br>

	<div class="form-grup">
	<label for="alamat">alamat</label><br>
	<br><input type="text" id="alamat" name="alamat" required><br>
	<div class="form-grup">
	


	<div class="form-grup1">
	<br><button onclick="submit" id="submit" >submit</button><br>
	</form>
	<br>
	<table border="1">
		<tr>
		<th>nama</th> 
		<th>tempat lahir</th>
		<th>tanggal lahir</th>
		<th>jenis kelamin</th>
		<th>agama</th>
		<th>ayah</th>
		<th>ibu</th>
		<th>pekerjaan ayah</th>
		<th>pekerjaan ibu</th>
		<th>alamat</th>
		<th>aksi</th>
	</tr>
	</table>

<?php        
     $no = 1;
     $tampil = mysqli_query($connection,"SELECT * FROM siswa ORDER BY id");
     while($data = mysqli_fetch_array($tampil)) :
      ?>
 <?php endwhile; ?>
 
<?php

include "koneksi.php";

if (isset($_POST['bsimpan'])){

    $simpan = mysqli_query($connection,"INSERT INTO siswa(nis, nama, tempat_lahir, tgl_lahir,jenis_kelamin, agama, alamat)
                                        VALUES ('$_POST[nis]',
                                                '$_POST[nama]',
                                                '$_POST[tempat_lahir]',
                                                '$_POST[tgl_lahir]',
                                                '$_POST[jenis_kelamin]',
                                                '$_POST[agama]',
                                                '$_POST[alamat]') ");
    if($simpan){
        echo "<script>
                    alert('Simpan data berhasil!');
                    document.location='admin_siswa.php';
                    </script>";
    }  else{
        echo "<script>
                    alert('Simpan data gagal!');
                    document.location='admin_siswa.php';
                </script>";
    }                                          
}

if (isset($_POST['bedit'])){

    $edit = mysqli_query($connection,"UPDATE siswa SET 
                                                    nis = '$_POST[nis]',
                                                    nama = '$_POST[nama]',
                                                    tempat_lahir = '$_POST[tempat_lahir]',
                                                    tgl_lahir = '$_POST[tgl_lahir]',
                                                    jenis_kelamin = '$_POST[jenis_kelamin]',
                                                    agama = '$_POST[agama]',
                                                    alamat = '$_POST[alamat]'
                                                WHERE id_siswa = '$_POST[id_siswa]'
                                                ");
    if($edit){
        echo "<script>
                    alert('Edit data berhasil!');
                    document.location='admin_siswa.php';
                    </script>";
    }  else{
        echo "<script>
                    alert('Edit data gagal!');
                    document.location='admin_siswa.php';
                </script>";
    }                                          
}

?>
	<button windows.location.href="logout.php">logout</button>

	</div>
</div>
</div>
</div>
</body>

</html>