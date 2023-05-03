	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>
		<h2>Consulda ao andamento dos processos</h2>
		<hr>
		<small>Estudante Valdemir</small>
		<h3>MySQLi</h3>

		<?php

		$server = 'localhost';
		$user = 'root';
		$password = '';
		$nome = 'controle_processo';
		$port = '3306';

		$db_connect = new MySQLi ($server,$user,$password ,$nome,$port);
		if($db_connect->connect_error == true){
			echo 'falha na conexão';
		}else{
			echo ' conexão feita com sucesso' . '<br>';

			$sql= "INSERT INTO cadastro(tipo,email) VALUES ('LOURIVAL', 'pai@gamil.com')";

			if($db_connect->query($sql)== true){
				echo "dados inseridos com sucesso!";
			}else{
				echo "falha no envio dos dados";
			}
		}

		?>
			



		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>