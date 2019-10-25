<?php
//cabeçalho
include_once "includes/header.php";
?>
   <section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Acessar o Sistema</h3>
		<form class="col s12" method="post" action="principal.php">
            <div class="input-field col s12">
				<i class="material-icons prefix">email</i>
				<input type="email" name="email" id="email">
				<label for="email">E-mail</label>
			</div>
			<div class="input-field col s12">
				<i class="material-icons prefix">vpn_key</i>
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>
           <button class="btn waves-effect waves-light" type="submit" name="Entrar">Entrar<i class="material-icons right">send</i></button>
		</form>
	</section>
   </section>
	

<?php
include_once "includes/footer.php"
?>
