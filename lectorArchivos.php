<?php
$archivo = $_GET['archivo'];
$ruta = $_GET['ruta'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sistema SAE</title>
    <style>
      /*estilo para el pdf*/
      .contenedor{
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
      }
      .contenedor object{
        width: 100%;
        height: 750px;
      }

      /*estilo para bloquear la parte de las opciones del pdf*/
      .bloqueo{
        position: relative;
        background-color: #4b4b4b;
        width: 100%;
        height: 40px;
      }
      /*estilo para bloquear todo el contenido del pdf*/
      .bloqueototal{
        position: relative;
        background-color:transparent;
        width: 99%;
        height: 700px;
      }
      @media print {
        body {
          display: none;
        }
        #noimprime {
          display: none;
        }
      }
    </style>
  </head>
  <?php //bloquea click derecho        bloquea las opciones del teclado tales como f12, ctrl + u  ?>
  <body  oncontextmenu="return false" onkeydown="return false">
    <div  class="contenedor">

        <object data="<?php echo $ruta."/".$archivo?>"  type="application/PDF"  align="right">		
        </object>
   
      <!--bloqueo de las opciones del pdf-->
      <div  class="bloqueo"></div>
      <!--bloqueo del contenido del pdf-->
      <div  class="bloqueototal"></div>
    </div>
  </body>
</html>