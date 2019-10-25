<?php
//Conexão
include_once 'php_action/db_connect.php';


//cabeçalho
include_once "includes/header.php";
?>
   <section class="row">
	<section class="col s12 m6 push-m3">
		<h3 class="ligth">Listar Alunos</h3>
		<table class="stripped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobre Nome</th>
					<th>Sexo</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM alunos";
				$resultado = mysqli_query($connect, $sql);

				if (mysqli_num_rows($resultado) > 0):

					while ($dados = mysqli_fetch_array($resultado)):

				 ?>
				<tr>
					<td><?php  echo $dados['nome'];?></td>
					<td><?php  echo $dados['sobrenome'];?></td>
					<td><?php  echo $dados['sexo'];?></td>
					<td><?php  echo $dados['email'];?></td>
					<td><?php  echo $dados['telefone'];?></td>
					<td><a href="alterar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					
					<!--Botão excluir-->
					<td>
						<a  href="#modal <?php echo $dados['id'];?>"  class="btn-floating waves-effect waves-light modal-trigger red">
							<i class="material-icons">delete</i></a>
						  
						  <!-- Modal Structure -->
						<div id="modal <?php echo $dados['id'];?>" class="modal">
						  <div class="modal-content">
						     <h4>Deseja realmente excluir o aluno?</h4>
						   </div>
						  
						   <div class="modal-footer">

						   	<form action="php_action/delete.php" method="POST">

						   		<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
						 		
						 
						     <button type="submit" name="btn-deletar" class="btn red modal-close waves-effect waves-green btn-flat">Sim</button>

						     <a href="#!"	 class="btn blue modal-close waves-effect waves-green btn-flat">Não</a>
						    </form>


						   </div>
						  </div>
					</td>
					<!--Fim botão excluir-->
				</tr>
				<!--Fim While-->
				<?php endwhile;
						else:
				?>
				<!--Fim if-->
				<?php endif;
				?>
			</tbody>
		</table>
		<br>
		 <a href="cadastrar.php"class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
		 <a href="index.php" class="btn red">Sair</a>
	</section>
   </section>
	
	          

<?php
include_once "includes/footer.php"
?>