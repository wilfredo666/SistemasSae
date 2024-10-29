 <div class="modal-header">
     <h4 class="modal-title">Register Work Order</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegOrdenes" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">WORK ORDER Nº</label>
                     <input type="text" class="form-control" id="ordendetrabajonumeroOrdenes" name="ordendetrabajonumeroOrdenes" placeholder="ORDEN DE TRABAJO Nº">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">REGISTRATION NAME</label>
                     <input type="text" class="form-control" id="nombrematriculaOrdenes" name="nombrematriculaOrdenes" placeholder="NOMBRE MATRICULA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">TH</label>
                     <input type="text" class="form-control" id="thOrdenes" name="thOrdenes" placeholder="TH">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">TC</label>
                     <input type="text" class="form-control" id="tcOrdenes" name="tcOrdenes" placeholder="TC">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">MODEL / MANUFACTURER / PART NUMBER</label>
                     <input type="text" class="form-control" id="modelopnOrdenes" name="modelopnOrdenes" placeholder="MODELO o FABRICANTE o PART NUMBER">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">S/N</label>
                     <input type="text" class="form-control" id="snOrdenes" name="snOrdenes" placeholder="S/N">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">REQUESTED BY</label>
                     <input type="text" class="form-control" id="solicitadaporOrdenes" name="solicitadaporOrdenes" placeholder="SOLICITADA POR">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">AUTHORIZED NAME</label>
                     <input type="text" class="form-control" id="nombreautorizadaorOrdenes" name="nombreautorizadaorOrdenes" placeholder="NOMBRE AUTORIZADA">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">WORK ORDER DATE</label>
                     <input type="date" class="form-control" id="fechaOrdenes" name="fechaOrdenes">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">WORK ORDER CLOSING DATE</label>
                     <input type="date" class="form-control" id="fechafinOrdenes" name="fechafinOrdenes">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">STATES WORK ORDER</label>
                     <select name="estadosOrdenes" id="estadosOrdenes" class="form-control">
                         <option>SELECT STATES</option>
                         <option>IN PROGRESS</option>
                         <option>CANCELED</option>
                         <option>FINISHED</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ATTACHED DOCUMENTS RECEIVED</label>
                     <textarea class="form-control" name="documentosadjuntosrecibidosOrdenes" id="documentosadjuntosrecibidosOrdenes" cols="30" rows="3" placeholder="DOCUMENTOS ADJUNTOS RECIBIDOS"></textarea>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">SCOPE OF WORK DESCRIPTION</label>
                     <textarea class="form-control" name="descripcionalcancetrabajoOrdenes" id="descripcionalcancetrabajoOrdenes" cols="30" rows="3" placeholder="DESCRIPCION DEL ALCANCE DEL TRABAJO SOLICITADO"></textarea>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DESCRIPTION OF WORK PERFORMED</label>
                     <textarea class="form-control" name="descripciontrabajosOrdenes" id="descripciontrabajosOrdenes" cols="30" rows="3" placeholder="DESCRIPCION DE TRABAJOS EFECTUADOS"></textarea>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">RELATED WORK ORDERS</label>
                     <textarea class="form-control" name="ordenesdetrabajosrelacionadasOrdenes" id="ordenesdetrabajosrelacionadasOrdenes" cols="30" rows="3" placeholder="ÓRDENES DE TRABAJO RELACIONADAS"></textarea>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ATTACHED DOCUMENTS DELIVERED</label>
                     <textarea class="form-control" name="documentosadjuntosentregadosOrdenes" id="documentosadjuntosentregadosOrdenes" cols="30" rows="3" placeholder="DOCUMENTOS ADJUNTOS ENTREGADOS"></textarea>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">OBSERVATIONS</label>
                     <textarea class="form-control" name="observacionesOrdenes" id="observacionesOrdenes" cols="30" rows="3" placeholder="OBSERVACIONES"></textarea>
                 </div>
             </div>
         </div>
         <div class="modal-header">
             <h4 class="modal-title">Work Order Cover</h4>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">COVER WORK ORDER TITLE</label>
                     <input type="text" class="form-control" id="caratulaOrdenes" name="caratulaOrdenes" placeholder="CARATULA ORDEN DE TRABAJO">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">FOOTER WORK ORDER COVER</label>
                     <input type="text" class="form-control" id="piepaginaOrdenes" name="piepaginaOrdenes" placeholder="PIE DE PAGINA ORDEN DE TRABAJO CARATULA">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     <button type="button" class="btn btn-primary" onclick="RegOrdenes()">Save</button>
 </div>