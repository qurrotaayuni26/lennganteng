<?php
ob_start();
require_once '../INC/function.php';

$id = mysqli_escape_string($kon,@$_POST['id_setting']);

$logo = @$_FILES['logo']['tmp_name'];
$target = '../images/logo/';
$gambar_logo = @$_FILES['logo']['name'];

echo $id."|".$logo."|".$target."|".$gambar_logo;

if ($id =="" || $logo =="" || $target =="" || $gambar_logo ==''  )
{
?>

<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-warning-sign red"></i>
	<h4>Pastikan form sudah di isi semua!</h4>

</div>
<?php
}
else
{
if (perbarui_logo($_POST) > 0){
	echo"
	<script>
			alert ('Data berhasil di tambahkan!');
			document.location.href = 
			// 'index.php?pages=setting&aksi=tampil';
	</script>
	";
	echo "<br>";
	echo mysqli_error($kon);
}

?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-ok green"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4> Berhasil di tambahkan</h4>
</div>
<meta http-equiv="refresh" content="1;url=index.php?pages=setting&aksi=tampil">
<?php
}
?>