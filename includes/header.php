<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Alunos</title>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
      window.onload = function(){
        $(document).ready(function(){
        $('select').not('.disabled').formSelect();
        });

        $(document).ready(function(){
          $('.modal').modal();
        });
      }
   
    </script>
  </head>
  <body>
    <header class="row"> 
      <figure class="col s12" style="margin-top: 10px">
        <img class="responsive-img" src="https://www.fiema.org.br/uploads/area/165/thumb_rgPhvHQtU9ghbESSe7nFqRUb0OYjlf-x.png">
      </figure>
    </header>
          
