

//Halaman dari fungsi hapus
<?php 
include 'koneksi.php';
$id_siswa = $_GET['id_siswa'];
$hapus = mysqli_query($connection,"DELETE FROM siswa WHERE id_siswa='$id_siswa'");
if($hapus){
    echo "<script>
                alert('Hapus data berhasil!');
                document.location='admin_siswa.php';
                </script>";
}  else{
    echo "<script>
                alert('Hapus data gagal!');
                document.location='admin_siswa.php';
            </script>";

}
?>