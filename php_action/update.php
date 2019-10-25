<?php
//Sessão
session_start();

//Conexão

require_once 'db_connect.php';

if(isset($_POST['btn-alterar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$sexo = mysqli_escape_string($connect, $_POST['sexo']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE alunos SET nome = '$nome', sobrenome = '$sobrenome', sexo = '$sexo', telefone = '$telefone', email = '$email' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado Com Sucesso!";
		header('Location: ../index.php? sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar.";
		header('Location: .../index.php?erro');
	endif;
endif;
?>