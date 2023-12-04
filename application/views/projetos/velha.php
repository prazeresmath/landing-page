<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Jogo da velha</title>
    <link href="styleEmCalculadora.css" rel="stylesheet">
  </head>

<body>
	<div id="main">
		<h1>JOGO DA VELHA</h1>

		<!-- iNSTRUÇÕES -->
		<p id="ins">Jogo começa clicando na caixa
			<br><br>Primeiro jogador começa:
			<b>Jogador X</b><br>E<br>Segundo jogador: <b>Jogador 0</b>
		</p>




		<br><br>
		<!-- 3*3 rede de caixas -->
		<input type="text" id="b1" onclick=
			"myfunc_3(); myfunc();" readonly>

		<input type="text" id="b2" onclick=
			"myfunc_4(); myfunc();" readonly>

		<input type="text" id="b3" onclick=
			"myfunc_5(); myfunc();" readonly>
		<br><br>

		<input type="text" id="b4" onclick=
			"myfunc_6(); myfunc();" readonly>
			
		<input type="text" id="b5" onclick=
			"myfunc_7(); myfunc();" readonly>

		<input type="text" id="b6" onclick=
			"myfunc_8(); myfunc();" readonly>
		<br><br>

		<input type="text" id="b7" onclick=
			"myfunc_9(); myfunc();" readonly>

		<input type="text" id="b8" onclick=
			"myfunc_10();myfunc();" readonly>

		<input type="text" id="b9" onclick=
			"myfunc_11();myfunc();" readonly>

		<!-- Fim -->
		<br><br><br>
		<!-- botão de reset -->
		<button id="but" onclick="myfunc_2()">
			RESET
		</button>

		<br><br>
		<!-- Onde mostra a rodada -->
		<p id="print"></p>



        <a href="<?php echo site_url('projects'); ?>" class="btn btn-redirect">Ir para Projects</a>
	</div>
<script src="<?php echo base_url('scripts/velha.js'); ?>"></script>
</body>

</html>
