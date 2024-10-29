 <div class="modal-header">
     <h4 class="modal-title">Formulario de Registro Certificado RAB 001</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegRab" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NUMERO DE SEGUIMIENTO DEL FORMULARIO</label>
                     <input type="text" class="form-control" id="numseguiRab" name="numseguiRab" placeholder="NUMERO DE SEGUIMIENTO DEL FORMULARIO">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ORDEN DE TRABAJO/CONTRATO/FACTURA</label>
                     <input type="text" class="form-control" id="ordentrabajoRab" name="ordentrabajoRab" placeholder="ORDEN DE TRABAJO/CONTRATO/FACTURA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ITEM</label>
                     <input type="text" class="form-control" id="itemRab" name="itemRab" placeholder="ITEM">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DESCRIPCIÓN</label>
                     <input type="text" class="form-control" id="desRab" name="desRab" placeholder="DESCRIPCIÓN">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="numparteRab" name="numparteRab" placeholder="NUMERO DE PARTE">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadRab" name="cantidadRab" placeholder="CANTIDAD">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">NÚMERO DE SERIE</label>
                     <input type="text" class="form-control" id="numserieRab" name="numserieRab" placeholder="NÚMERO DE SERIE">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">ESTADO/TRABAJO</label>
                     <input type="text" class="form-control" id="estadotrabajoRab" name="estadotrabajoRab" placeholder="ESTADO/TRABAJO">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-12">
                 <div class="form-group">
                     <label for="">OBSERVACIONES</label>
                     <textarea class="form-control" name="observacionesRab" id="observacionesRab" cols="30" rows="3" placeholder="OBSERVACIONES"></textarea>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">NOMBRE</label>
                     <input type="text" class="form-control" id="nombreRab" name="nombreRab" placeholder="NOMBRE">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">FECHA</label>
                     <input type="date" class="form-control" id="fechaRab" name="fechaRab" placeholder="FECHA">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegRab()">Guardar</button>
 </div>