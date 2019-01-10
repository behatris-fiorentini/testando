<?php
require_once "model/ContaBanco.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Banco</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$c = new ContaBanco;

	if (isset($_POST['abrir']) ):
		$tipo = $_POST['tipo'];
		$dono = $_POST['dono'];
		$c->abrirConta($tipo, $dono);
	endif;

	if(isset($_POST['fechar'])):
		$c->fecharConta();
	endif;

	if(isset($_POST['depositar'])):
		$valor = $_POST['deposito'];
		$c->depositar($valor);
		print_r($c);
	endif;
	?>

	<h1>Abrir Conta</h1>

	<form action="index.php" method="POST" accept-charset="utf-8">

		<label>Qual tipo de conta deseja abrir?</label>
		<select name="tipo" multiple>
			<option value="cc">Conta Corrente</option>
			<option value="cp">Conta Poupança</option>
		</select>

		<br><br>

		<label>Nome completo do titular:</label>
		<input type="text" name="dono">
		<input name="abrir" type="submit" class="btn btn-success" value="Abrir">
		<br><br>

		

		<br><br>
		<input type="text" name="deposito">
		<input name="depositar" type="submit" class="btn btn-success" value="Depositar">
		<br><br>
		<input name="fechar" type="submit" class="btn btn-success" value="Fechar Conta">
		<input name="saldo" type="submit" class="btn btn-success" value="Consultar Saldo">
		<br><br>
		<?php print_r($c);?>
	</form>



	

</body>
</html>