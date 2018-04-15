<!-- Gabriel Sotto Rodrigues -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Cidade</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/interface.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
	</head>
	<body>

		<?php include "cabecalho.php"; ?>

		<div class="main-container">
			<div class="form-container">
				<h1>CADASTRE SUA CIDADE</h1>
				<form action="cadastro_cidade.php" method="post">
					<p>
						<label>Estado:</label>
						<select name="estado">
						<?php
							$semcad = false;
							if(file_exists('xml/estado.xml')){
								$xml = simplexml_load_file('xml/estado.xml');

								foreach($xml as $estd){
									echo "<option value= '". $estd->sigla ."'>". $estd->estado ." (". $estd->sigla .")</option>";
								}
							}else{
								echo"<option selected>Não há estados Cadastrados</option>";
								$semcad = true;
							}
						?>
						</select>
					</p>

					<p>
						<label>nome da Cidade:</label>
						<input type="text" name="cidade" required >
					</p>

					<input type="submit" name="envio" value="Cadastrar" <?php if($semcad){ echo"disabled = 'disabled'";} ?> >
				</form>
			</div>
		</div>
	</body>
</html>