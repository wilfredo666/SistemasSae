<?php
/*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sistemassae";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
	echo 'No se pudo conectar a la base de datos : ' . mysqli_connect_error();
}


header("Pragma: public");
header("Expires: 0");
$filename = "ReportesSae.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
</head>

<body>

	<form class="form-inline" method="get">
		<table class="content-tabla">
			<thead>
				<tr>
					<th>ID</th>
					<th>FECHA DEL VUELO</th>
					<th>EXPLOTADOR</th>
					<th>ARRIBÓ POR ÍTINERARIO</th>
					<th>ARRIBÓ REAL</th>
					<th>PUENTE</th>
					<th>DESTINO</th>
					<th>SALIDA POR ITINERARIO</th>
					<th>SALIDA REAL</th>
					<th>SE REALIZÓ</th>
					<th>CONDICIÓN</th>
					<th>DIFERÍDO</th>
					<th>DEFECT DESCRIPTION</th>
					<th>ACTION TAKEN</th>
					<th>LOG BOOK PAGE</th>
					<th>CÓDIGO DE DIFERIDO</th>
					<th>OT EXPLOTADOR</th>
					<th>OT SAE</th>
					<th>NOTA</th>
					<th>ACEITE A LOS MOTORES(ENG#1)</th>
					<th>ACEITE A LOS MOTORES(ENG#2)</th>
					<th>ACEITE A LOS MOTORES(APU)</th>
					<th>HYD(Y)</th>
					<th>HYD(G)</th>
					<th>HYD(B)</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = mysqli_query($con, "SELECT * FROM basescz");

				if (mysqli_num_rows($sql) == 0) {
					echo '<tr><td colspan="25">No hay datos.</td></tr>';
				} else {
					$no = 1;
					while ($row = mysqli_fetch_assoc($sql)) {
						echo '
						<tr>

							<td>' . $row['id_basescz'] . '</td>
							<td>' . $row['fech_vuelo_basescz'] . '</td>
							<td>' . $row['explotador_basescz'] . '</td>
							<td>' . $row['arribo_x_itine_basescz'] . '</td>
							<td>' . $row['arriba_real_basescz'] . '</td>
							<td>' . $row['puente_basescz'] . '</td>
							<td>' . $row['salio_a_basescz'] . '</td>
							<td>' . $row['salida_x_itine_basescz'] . '</td>
							<td>' . $row['salida_real_basescz'] . '</td>
							<td>' . $row['se_realizo_basescz'] . '</td>
							<td>' . $row['condicion_basescz'] . '</td>
							<td>' . $row['diferido_basescz'] . '</td>
							<td>' . $row['defect_description_basescz'] . '</td>
							<td>' . $row['action_taken_basescz'] . '</td>
							<td>' . $row['log_book_page_basescz'] . '</td>
							<td>' . $row['codigo_de_diferi_basescz'] . '</td>
							<td>' . $row['ot_explotador_basescz'] . '</td>
							<td>' . $row['ot_sae_basescz'] . '</td>
							<td>' . $row['nota_basescz'] . '</td>
							<td>' . $row['aceite_a_los_motores_1_basescz'] . '</td>
							<td>' . $row['aceite_a_los_motores_2_basescz'] . '</td>
							<td>' . $row['aceite_a_los_motores_apu_basescz'] . '</td>
							<td>' . $row['hyd_y_basescz'] . '</td>
							<td>' . $row['hyd_g_basescz'] . '</td>
							<td>' . $row['hyd_b_basescz'] . '</td>
              				';
						$no++;
					}
				}
				?>
			</tbody>
		</table>
		</div>
	</form>
</body>

</html>