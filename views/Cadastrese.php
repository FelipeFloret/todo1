<!doctype hmtl>
<html lang="pt-br">

<head>
    <?php require_once ("../libraries/head.php");?>
        <title> Sobre Todo's Felipe</title>
        <meta name="description" content="O Todo's Felipe é um trabalho para ProgWeb da UFF">
</head>


<body>
<header>
    <?php require_once ("../libraries/body.php");?>
    <div class="ind-banner">
            <img src="../imagens/Banner-cadastrese.jpg" alt="Banner Cadastro" title="Cadastrar">
</header>


<main>
    <div class="Texto-sobrenos">
    	Cadastre-se para maiores informações<br><br>
    	<form name="FormularioCadastro" id="FormularioCadastro" method="post" action="../controllers/ControllerInsercao.php">
    		<div class="Formulario">
	    	<label for="nome">Nome Completo:  *</label><br>	
	    	<input type="text" id="nome" name="nome" maxlength="30" required>
	    	</div>

	    	<div class="Formulario">
	    	<label for="telefone">Telefone:  *</label><br>	
	    	<input type="tel" id="telefone" name="telefone" maxlength="30" required>
	    	</div>

	    	<div class="Formulario">
	    	<label for="email">Email:  *</label><br>	
	    	<input type="email" id="email" name="email" maxlength="40" required>
	    	</div>

	    	<div class="Formulario">
	    	<label for="senha">Senha:  *</label><br>
	    	<input type="password" id="senha" name="senha" maxlength="15" required>	
	    	</div>

	    	<div class="Formulario">
	    	<label for="ConfSenha">Confirmar Senha:  *</label><br>
	    	<input type="password" id="ConfSenha" name="confSenha" maxlength="15" required>
	    	</div>


	    	<div class="Formulario">	
	    	<input type="submit" id="botao" name="botao" value="Cadastrar" >
	    	</div>
    	</form>
    </div>


</main>
<footer>
    <?php require_once ("../libraries/Rodape.php");?>
</footer>

</body>

</html>