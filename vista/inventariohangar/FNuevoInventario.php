 <div class="modal-header">
     <h4 class="modal-title">Registro Inventario Herramientas y Equipos</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegInventario" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desInventario" name="desInventario" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">P/N</label>
                     <input type="text" class="form-control" id="pnInventario" name="pnInventario" placeholder="P/N">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">S/N-COD</label>
                     <input type="text" class="form-control" id="snInventario" name="snInventario" placeholder="S/N-COD">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">QTY</label>
                     <input type="text" class="form-control" id="qtyInventario" name="qtyInventario" placeholder="QTY">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionInventario" name="ubicacionInventario" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">CUSTODIA</label>
                     <input type="text" class="form-control" id="custodiaInventario" name="custodiaInventario" placeholder="Custodia">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA DE INSP.</label>
                     <input type="date" class="form-control" id="fechadeinspInventario" name="fechadeinspInventario">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">PERIODO INSP. MESES</label>
                     <input type="text" class="form-control" id="periodoinspInventario" name="periodoinspInventario" placeholder="Periodo Insp. Meses">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FECHA PROX. INSP.</label>
                     <input type="date" class="form-control" id="fechaproxinspInventario" name="fechaproxinspInventario">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ESTADO</label>
                     <select name="estadoInventario" id="estadoInventario" class="form-control">
                         <option>Seleccione</option>
                         <option>CON TIEMPO</option>
                         <option>POR VENCER</option>
                         <option>VENCIDO</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DIAS DE ALERTA</label>
                     <input type="text" class="form-control" id="diasalertaInventario" name="diasalertaInventario" placeholder="Dias de Alerta">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">OBSERVACIONES</label>
                     <input type="text" class="form-control" id="observacionesInventario" name="observacionesInventario" placeholder="Observaciones">
                 </div>
             </div>
         </div>
         <div class="row">
         <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">TAREAS A REALIZAR</label>
                     <input type="text" class="form-control" id="tareasarealizarInventario" name="tareasarealizarInventario" placeholder="Tareas a Realizar">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegInventario()">Guardar</button>
 </div>