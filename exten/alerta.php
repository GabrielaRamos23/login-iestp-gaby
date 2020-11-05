<?php
$msg = htmlentities($_GET['mensaje']);
$tipo = htmlentities($_GET['tipo']);
$estado = htmlentities($_GET['estado']);

$url ="";
//CONDICION REDIRECCIONAR PAGINAS
if ($estado=="success") {
	# code...
	$url="header.php";
}else{
	$url="../login/salir.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<script>
		Swal.fire({
			icon: '<?php echo $estado; ?>',
			title: '<?php echo $tipo;?>',
			text: '<?php echo $msg;?>',
			footer: '<a href=>ok</a>'
		}).then(function(){
			location.href='<?php echo $url;?>'
		});
	</script>
</body>
</html>