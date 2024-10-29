<?php
require_once "../../controlador/baselpzControlador.php";
require_once "../../modelo/baselpzModelo.php";

$id = $_GET["id"];

$baselpz = ControladorBaseLaPaz::ctrInfoBaseLaPaz($id);
$fecha;
$fecha = $baselpz['fech_vuelo_baselpz'];
$fecha = date("d/m/Y", strtotime($fecha));

?>


<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Base La Paz</h4>
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
                    <td><?php echo $baselpz["explotador_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>ARRIBÓ POR ÍTINERARIO</th>
                    <td><?php echo $baselpz["arribo_x_itine_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>ARRIBÓ REAL</th>
                    <td><?php echo $baselpz["arriba_real_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>PUENTE</th>
                    <td><?php echo $baselpz["puente_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>DESTINO</th>
                    <td><?php echo $baselpz["salio_a_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>SALIDA POR ITINERARIO</th>
                    <td><?php echo $baselpz["salida_x_itine_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>SALIDA REAL</th>
                    <td><?php echo $baselpz["salida_real_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>SE REALIZÓ</th>
                    <td><?php echo $baselpz["se_realizo_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>CONDICIÓN</th>
                    <td><?php echo $baselpz["condicion_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>DIFERÍDO</th>
                    <td><?php echo $baselpz["diferido_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>DEFECT DESCRIPTION</th>
                    <td><?php echo $baselpz["defect_description_baselpz"]; ?></td>
                </tr>

            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">

                <tr>
                    <th>ACTION TAKEN</th>
                    <td><?php echo $baselpz["action_taken_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>LOG BOOK PAGE</th>
                    <td><?php echo $baselpz["log_book_page_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>CÓDIGO DE DIFERIDO</th>
                    <td><?php echo $baselpz["codigo_de_diferi_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>OT EXPLOTADOR</th>
                    <td><?php echo $baselpz["ot_explotador_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>OT SAE</th>
                    <td><?php echo $baselpz["ot_sae_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>NOTA</th>
                    <td><?php echo $baselpz["nota_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(ENG#1)</th>
                    <td><?php echo $baselpz["aceite_a_los_motores_1_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(ENG#2)</th>
                    <td><?php echo $baselpz["aceite_a_los_motores_2_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>ACEITE A LOS MOTORES(APU)</th>
                    <td><?php echo $baselpz["aceite_a_los_motores_apu_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(Y)</th>
                    <td><?php echo $baselpz["hyd_y_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(G)</th>
                    <td><?php echo $baselpz["hyd_g_baselpz"]; ?></td>
                </tr>

                <tr>
                    <th>HYD(B)</th>
                    <td><?php echo $baselpz["hyd_b_baselpz"]; ?></td>
                </tr>

            </table>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>