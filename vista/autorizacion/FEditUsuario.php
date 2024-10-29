<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";

$idUsuario = $_GET["idUsuario"];

$usuario = ControladorUsuario::ctrInfoUsuario($idUsuario);
?>


<form action="" id="EditNuevoUsuario" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Editar Usuario</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nombre Usuario</label>
                     <?php
                    require_once "../../controlador/personalControlador.php";
                    require_once "../../modelo/personalModelo.php";
                    $personales=ControladorPersonal::ctrInfoPersonal();

                    ?>
                    <select class="form-control" name="nomUsuario" id="nomUsuario">
                        <?php foreach($personales as $value){
                        ?>
                        <option value="<?php echo $value["id_personal"];?>" <?php if($value["id_personal"]==["idUsuario"])?>selected<?php ?> readonly><?php echo $value["nombre_personal"]." ".$value["apellido_pat_personal"]." ".$value["apellido_mat_personal"];?></option>
                        <?php
}?>
                    </select>
                    <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idUsuario;?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Login Usuario</label>
                    <input type="text" class="form-control" name="loginUsuario" id="loginUsuario" value="<?php echo $usuario["login_usuario"];?>" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Password Usuario</label>
                    <input type="password" class="form-control" name="passUsuario" id="passUsuario" value="<?php echo $usuario["password"];?>">
                    <input type="hidden" name="passUsuarioActual" id="passUsuarioActual" value="<?php echo $usuario["password"];?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Estado Usuario</label>
                    <select class="form-control" name="estadoUsuario" id="estadoUsuario">
                        <option value="0">Seleccionar</option>
                        <option value="1" <?php if($usuario["estado"]=="1"):?>selected<?php endif;?>>Activo</option>
                        <option value="0" <?php if($usuario["estado"]=="0"):?>selected<?php endif;?>>Inactivo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Perfil Usuario</label>
                    <select name="perfilUsuario" id="perfilUsuario" class="form-control">
                        <option>Seleccionar</option>
                        <option value="Administrador" <?php if($usuario["perfil"]=="Administrador"):?>selected<?php endif;?>>Administrador</option>
                        <option value="Moderador" <?php
                                if($usuario["perfil"]=="Moderador"):?>selected<?php endif;?>>Moderador</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Foto Usuario</label>
                    <input type="file" class="form-control" name="fotoUsuario" id="fotoUsuario">
                    <input type="hidden" name="fotoUsuarioActual" id="fotoUsuarioActual" value="<?php echo $usuario["foto"];?>">
                    <img src="assest/img/usuarios/<?php echo $usuario["foto"];?>" alt="" width="300px">
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="EditarUsuario()">Actualizar</button>
        </div>
        </form>
