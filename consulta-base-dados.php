<?php 
		include 'header.php';
		$aula_atual = 'consulta-base-dados';
	?>

	<body>

		<h1>Prefeitura Municipal</h1>
		<h2>Consulta ao andamento dos processos</h2>
		<hr>
		<small>Estudante de TI Valdemir Faustino</small>
		
		<?php 

			$server = 'localhost';
			$user = 'root';
			$password = '';
			$dbname = 'controle_precesso';
			$port = '3306';

			$db_connect = new mysqli($server, $user, $password, $dbname, $port);

			if ($db_connect->connect_error == true) {
				echo 'Não foi possível conectar à base de dados.';
			} else {
				// echo 'Conectado à base de dados.' . '<br><br>';

				$sql = "SELECT * FROM cadastro";
				$result = $db_connect->query($sql); ?>

			<table>					
				<tr>
					<th>Id</th>
					<th>Tipo</th>
					<th>Nota fiscal</th>
					<th>Status</th>
					<th>Descrição</th>
					<th>Origem</th>

				</tr>				

				<?php	while ($row = $result->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['tipo'];?></td>
						<td><?php echo $row['nota_fiscal'];?></td>
						<td><?php echo $row['statu'];?></td>
						<td><?php echo $row['descricao'];?></td>
						<td><?php echo $row['origem'];?></td>
					</tr>					
					<?php } ?>
			</table>	

	<?php }

?>

		
	</body>

</html>