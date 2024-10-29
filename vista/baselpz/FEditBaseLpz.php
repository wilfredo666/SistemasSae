<?php
require_once "../../controlador/baselpzControlador.php";
require_once "../../modelo/baselpzModelo.php";

$id = $_GET["id"];

$baselpz = ControladorBaseLaPaz::ctrInfoBaseLaPaz($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Informe Base La Paz</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditBaseLpz" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">FECHA DEL VUELO</label>
                    <input type="date" class="form-control" id="fechvueloBaseLpz" name="fechvueloBaseLpz" value="<?php echo $baselpz["fech_vuelo_baselpz"]; ?>">
                    <input type="hidden" name="idBaseLpz" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">EXPLOTADOR</label>
                    <select name="explotadorBaseLpz" id="explotadorBaseLpz" class="form-control">
                        <option value="LATAM" <?php if ($baselpz["explotador_baselpz"] == "LATAM") : ?>selected<?php endif; ?>>LATAM</option>
                        <option value="AVIANCA" <?php if ($baselpz["explotador_baselpz"] == "AVIANCA") : ?>selected<?php endif; ?>>AVIANCA</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ARRIBÓ POR ÍTINERARIO</label>
                    <input type="text" class="form-control" id="arriboxitineBaseLpz" name="arriboxitineBaseLpz" value="<?php echo $baselpz["arribo_x_itine_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ARRIBÓ REAL</label>
                    <input type="text" class="form-control" id="arriborealBaseLpz" name="arriborealBaseLpz" value="<?php echo $baselpz["arriba_real_baselpz"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">PUENTE</label>
                    <input type="text" class="form-control" id="puenteBaseLpz" name="puenteBaseLpz" value="<?php echo $baselpz["puente_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">DESTINO</label>
                    <input type="text" class="form-control" id="salioaBaseLpz" name="salioaBaseLpz" value="<?php echo $baselpz["salio_a_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">SALIDA POR ITINERARIO</label>
                    <input type="text" class="form-control" id="salidaxitineBaseLpz" name="salidaxitineBaseLpz" value="<?php echo $baselpz["salida_x_itine_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">SALIDA REAL</label>
                    <input type="text" class="form-control" id="salidarealBaseLpz" name="salidarealBaseLpz" value="<?php echo $baselpz["salida_real_baselpz"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">SE REALIZÓ</label>
                    <input type="text" class="form-control" id="serealizoBaseLpz" name="serealizoBaseLpz" value="<?php echo $baselpz["se_realizo_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">CONDICIÓN</label>
                    <input type="text" class="form-control" id="condBaseLpz" name="condBaseLpz" value="<?php echo $baselpz["condicion_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">DIFERÍDO</label>
                    <input type="text" class="form-control" id="diferidoBaseLpz" name="diferidoBaseLpz" value="<?php echo $baselpz["diferido_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">DEFECT DESCRIPTION</label>
                    <input type="text" class="form-control" id="defectdesBaseLpz" name="defectdesBaseLpz" value="<?php echo $baselpz["defect_description_baselpz"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ACTION TAKEN</label>
                    <input type="text" class="form-control" id="actiontakenBaseLpz" name="actiontakenBaseLpz" value="<?php echo $baselpz["action_taken_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">LOG BOOK PAGE</label>
                    <input type="text" class="form-control" id="logbookBaseLpz" name="logbookBaseLpz" value="<?php echo $baselpz["log_book_page_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">CÓDIGO DE DIFERIDO</label>
                    <input type="text" class="form-control" id="coddiferidoBaseLpz" name="coddiferidoBaseLpz" value="<?php echo $baselpz["codigo_de_diferi_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">OT EXPLOTADOR</label>
                    <input type="text" class="form-control" id="otexploBaseLpz" name="otexploBaseLpz" value="<?php echo $baselpz["ot_explotador_baselpz"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">OT SAE</label>
                    <input type="text" class="form-control" id="otsaeBaseLpz" name="otsaeBaseLpz" value="<?php echo $baselpz["ot_sae_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">NOTA</label>
                    <textarea class="form-control" name="notaBaseLpz" id="notaBaseLpz" cols="30" rows="1"><?php echo $baselpz["nota_baselpz"]; ?></textarea>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ACEITE A LOS MOTORES(ENG#1)</label>
                    <input type="text" class="form-control" id="aceitemot1BaseLpz" name="aceitemot1BaseLpz" value="<?php echo $baselpz["aceite_a_los_motores_1_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ACEITE A LOS MOTORES(ENG#2)</label>
                    <input type="text" class="form-control" id="aceitemot2BaseLpz" name="aceitemot2BaseLpz" value="<?php echo $baselpz["aceite_a_los_motores_2_baselpz"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">ACEITE A LOS MOTORES(APU)</label>
                    <input type="text" class="form-control" id="aceitemotapuBaseLpz" name="aceitemotapuBaseLpz" value="<?php echo $baselpz["aceite_a_los_motores_apu_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">HYD(Y)</label>
                    <input type="text" class="form-control" id="hydyBaseLpz" name="hydyBaseLpz" value="<?php echo $baselpz["hyd_y_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">HYD(G)</label>
                    <input type="text" class="form-control" id="hydgBaseLpz" name="hydgBaseLpz" value="<?php echo $baselpz["hyd_g_baselpz"]; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">HYD(B)</label>
                    <input type="text" class="form-control" id="hydbBaseLpz" name="hydbBaseLpz" value="<?php echo $baselpz["hyd_b_baselpz"]; ?>">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditBaseLpz()">Guardar</button>
</div>