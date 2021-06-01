<?php
include 'koneksi.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$nama_foto = time().$ft;
$target_file =  "foto/".$nama_foto;
$st=0;
if (move_uploaded_file($file, $target_file)) {
    
    $sql=$mysqli->query("insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$nama_foto','$st')");


	if ($sql) 
	{
	  echo '<script type="text/javascript">
	    alert("Data Berhasil disimpan, Terimakasi sudah menulis laporan");
	    window.location="masyarakat.php";
	  </script>';

	}else{
		echo '<script type="text/javascript">
	    alert("Data Gagal disimpan");
	    window.location="masyarakat.php";
	  </script>';
	}
	} else {
echo '<script type="text/javascript">
    alert("Upload Gambar Gagal !");
    window.location="masyarakat.php?url=tulis_pengaduan";
  </script>';
}

  

?>
