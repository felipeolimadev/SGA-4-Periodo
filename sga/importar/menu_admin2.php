<!-- Inicio navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!--<a class="navbar-brand">SGA- UNIPAC </i></a> -->
    
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="index-home.php"> <i class="fas fa-home"></i> Home</a></li>
  <li><a href="#about"> <i class="fas fa-address-card"></i> Listas</a></li>
    <li><a href="#about"> <i class="fas fa-chart-bar"></i> Relátorios</a></li>

<li><a href="file:///C:/xampp/htdocs/sga-academico/manual/arquivo.pdf.pdf"><i class="fas fa-atlas"></i></i> Manual do Usuario</a></li>





<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-book"></i> Secretaria <span class="caret"></span></a>
  <ul class="dropdown-menu">
  
    <li class="dropdown-header"> <i class="fas fa-users"></i> Alunos</li>
    <li><a href="cadastro_aluno.php">Cadastro de alunos</a></li>
    <li><a href="#">Gerenciar Alunos</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header"> <i class="fas fa-file-contract"></i> Turmas</li>
    <li><a href="cadastro_turma.php">Cadastro de turmas</a></li>
    <li><a href="#">Gerenciar Turmas</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header"> <i class="fas fa-graduation-cap"></i> Cursos</li>
    <li><a href="cadastro_curso.php">Cadastro de cursos</a></li>
    <li><a href="#">Gerenciar Cursos</a></li>
  </ul>


</li>


<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cogs"></i> Configurações <span class="caret"></span></a>
  <ul class="dropdown-menu">
  
    <li class="dropdown-header"> <i class="fas fa-user"></i></i> Usuarios</li>
    <li><a href="#">Gerenciar Usuarios</a></li>
   <li role="separator" class="divider"></li>

    <li class="dropdown-header"> <i class="fas fa-address-card"></i> Alunos</li>
    <li><a href="importar/cadastro_aluno.php"> <i class="fas fa-arrow-left"></i> Importar Alunos</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header"> <i class="fas fa-file-contract"></i> Turmas</li>
    <li><a href="cadastrar_novo_curso.php"> <i class="fas fa-arrow-left"></i> Importar Turmas</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header"> <i class="fas fa-graduation-cap"></i> Cursos</li>
    <li><a href="cadastrar_novo_curso.php"> <i class="fas fa-arrow-left"></i> Importar Cursos</a></li>    
  </ul>


</li>
</ul>   



<!--<a class="navbar-brand" href="../sair.php">Logout</a>-->
<a class="navbar-brand">| <i class="fas fa-briefcase"></i> <?php echo$_SESSION['painel']?>

<a class="navbar-brand" href="../index.php?acao=quebra"> <i class="fas fa-sign-out-alt"></i>Sair</a>

</a>


</div><!--/.nav-collapse -->

</div>
</nav>
</div>

<!-- Fim navbar -->
