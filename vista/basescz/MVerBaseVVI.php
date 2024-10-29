<?php
require_once "../../controlador/basesczControlador.php";
require_once "../../modelo/basesczModelo.php";

$id = $_GET["id"];

$basescz = ControladorBaseVVI::ctrInfoBaseVVI($id);
$fecha;
$fecha = $basescz['fech_vuelo_basescz'];
$fecha = date("d/m/Y", strtotime($fecha));

?>


<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Base VVI</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>FECHA DEL VUELO</th>
                    <td><?php echo $fecha; ?></td>
                </tr>

                <tr>
                    <th>EXPLOTADOR</th>
                    <td><?php echo $basescz["explotador_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>ARRIBÓ POR ÍTINERARIO</th>
                    <td><?php echo $basescz["arribo_x_itine_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>ARRIBÓ REAL</th>
                    <td><?php echo $basescz["arriba_real_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>PUENTE</th>
                    <td><?php echo $basescz["puente_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>DESTINO</th>
                    <td><?php echo $basescz["salio_a_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>SALIDA POR ITINERARIO</th>
                    <td><?php echo $basescz["salida_x_itine_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>SALIDA REAL</th>
                    <td><?php echo $basescz["salida_real_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>SE REALIZÓ</th>
                    <td><?php echo $basescz["se_realizo_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>CONDICIÓN</th>
                    <td><?php echo $basescz["condicion_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>DIFERÍDO</th>
                    <td><?php echo $basescz["diferido_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>DEFECT DESCRIPTION</th>
                    <td><?php echo $basescz["defect_description_basescz"]; ?></td>
                </tr>

            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">

                <tr>
                    <th>ACTION TAKEN</th>
                    <td><?php echo $basescz["action_taken_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>LOG BOOK PAGE</th>
                    <td><?php echo $basescz["log_book_page_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>CÓDIGO DE DIFERIDO</th>
                    <td><?php echo $basescz["codigo_de_diferi_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>OT EXPLOTADOR</th>
                    <td><?php echo $basescz["ot_explotador_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>OT SAE</th>
                    <td><?php echo $basescz["ot_sae_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>NOTA</th>
                    <td><?php echo $basescz["nota_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(ENG#1)</th>
                    <td><?php echo $basescz["aceite_a_los_motores_1_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(ENG#2)</th>
                    <td><?php echo $basescz["aceite_a_los_motores_2_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(APU)</th>
                    <td><?php echo $basescz["aceite_a_los_motores_apu_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(Y)</th>
                    <td><?php echo $basescz["hyd_y_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(G)</th>
                    <td><?php echo $basescz["hyd_g_basescz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(B)</th>
                    <td><?php echo $basescz["hyd_b_basescz"]; ?></td>
                </tr>

            </table>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>