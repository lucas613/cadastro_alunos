<?php
//Conexão
include_once 'php_action/db_connect.php';

//cabeçalho
include_once "includes/header.php";

//select
if (isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM alunos WHERE id = '$id'";
	$resultado = mysqli_query($connect,$sql);
	$dados = mysqli_fetch_array($resultado);

endif;
?>
   <section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Alterar dados do Aluno</h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
				<label for="sobrenome">Sobre Nome</label>
			</div>
			<div class="input-field col s12">
				<select name="sexo" id="sexo" value="<?php echo $dados['sexo']; ?>">
					<option value="" disabled selected></option>
					<option value="F">Feminino</option>
					<option value="M">Masculino</option>
					<option value="I">Indefinido</option>
				</select>
				<label>Selecione o Sexo</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">phone</i>
				<input type="tel" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
				<label for="telefone">Telefone</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
				<label for="email">E-mail</label>
			</div>
			<button type="submit" class="btn" name="btn-alterar">Alterar</button>
			<a href="principal.php" class="btn green">Listar alunos</a>
			<a href="index.php" class="btn red">Sair</a>
		</form>
	</section>
   </section>
	

<?php
include_once "includes/footer.php"
?>