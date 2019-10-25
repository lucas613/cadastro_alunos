<?php
//Sessão
session_start();

//Conexão

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$sexo = mysqli_escape_string($connect, $_POST['sexo']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$email = mysqli_escape_string($connect, $_POST['email']);

	$sql = "INSERT INTO alunos (nome, sobrenome, sexo, telefone, email) VALUES ('$nome', '$sobrenome', '$sexo', '$telefone', '$email')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php? sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar.";
		header('Location: .../index.php?erro');
	endif;
endif;