<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 4</title>
		<script type="text/javascript" src="../assets/form.js"></script>
	</head>
	<body>
		<center>
			<h2>Formulário</h2>
		</center>
		
			<?php
			class View {
			  
			    public function form($validacao = null) {
				
					if(!isset($validacao)){
					?>
					<center>
						<form name="envio" action="index.php?acao=salvar" method ="post">
							<table>
								<tr>
									<td align="right">Nome:</td>
									<td align="left"><input type="text" name="nome" id="nome"></td>
								</tr>
								<tr>
									<td align="right">Sobrenome:</td>
									<td align="left"><input type="text" name="sobrenome" id="sobrenome"></td>
								</tr>
								<tr>
									<td align="right">E-mail:</td>
									<td align="left"><input type="text" name="email" id="email"></td>
								</tr>
								<tr>
									<td align="right">Telefone:</td>
									<td align="left"><input type="text" name="telefone" id="telefone" onkeydown="mascara( this )" onkeyup="mascara( this )"></td>
								</tr>
								<tr>
									<td align="right">Login:</td>
									<td align="left"><input type="text" name="login" id="login"></td>
								</tr>
								<tr>
									<td align="right">Senha:</td>
									<td align="left"><input type="password" name="senha" id="senha"></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<button type="button" onclick="validaForm()">Enviar</button>
									</td>
								</tr>
							</table>
						</form>
					</center>
					<?php
					}else{
						//->imprimindo as mensagens
						if (isset($validacao['SUCCESS'])){
							echo"<br>";
							echo"<center><p>Salvo com sucesso</p><center>";
						}
						if (isset($validacao["ERROR"]['EMAIL'])){
							echo"<br>";
							echo"<center><p>E-mail ja cadastrado</p><center>";
						}
						if (isset($validacao["ERROR"]['LOGIN'])){
							echo"<br>";
							echo"<center><p>Login já cadastrado</p><center>";
						}
						if (isset($validacao["ERROR"]['BANCO'])){
							echo"<br>";
							echo"<center><p>Erro ao salvar no arquivo .txt</p><center>";
						}
						echo"<br>";
						echo"<a href='index.php'>Voltar</a>";
						echo"<br>";
					}
				}
			}
			?>
	</body>
</html>