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
				<h1>CADASTRO DE PESSOA</h1>
				<form action="cadastro_usuario.php" method="post">
					<p>
						<label>Nome:</label>
						<input type="text" name="nome" required>
					</p>
					<p>
						<label>E-mail:</label>
						<input type="email" name="email" required>
					</p>

					<p class = "radio">
						<label>Sexo:</label>
						<span>
							<input type="radio" name="sexo" value="M" checked id="masc"><label id="mascl" for= "masc" class="sublabel">Masculino</label>
							<input type="radio" name="sexo" value="F" id="fem"><label class="sublabel" for="fem" id="feml">Feminino</label>
						</span>
					</p>

					<p>
						<label>Cidade:</label>
						<select name="cidade">
						<?php
							$semcad = false;
							if(file_exists('xml/estado.xml')){
								$xml = simplexml_load_file('xml/cidade.xml');

								foreach($xml as $cid){
									$cidest = $cid->cidade .'/'. $cid->estado;
									echo "<option value= '$cidest'>$cidest</option>";
								}
							}else{
								echo"<option selected>Não há cidades cadastrados</option>";
								$semcad = true;
							}
						?>
						</select>
					</p>

					<input type="submit" name="envio" value="Cadastrar" <?php if($semcad){ echo"disabled = 'disabled'";} ?> >
				</form>
			</div>
		</div>	
	</body>
</html>