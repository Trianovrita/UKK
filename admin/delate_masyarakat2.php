<?php
require '../koneksi.php';
$nik=$_GET['nik'];

$sql=$mysqli ->query("delete from masyarakat where nik='$nik' ");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='admin.php?url=lihat_masyarakat';
	</script>
	<?php
	
}
?>