function MNuevoManual(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/manual/FNuevoManual.php",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function RegManual(){

    var formData = new FormData($("#FormRegManual")[0])

    $.ajax({
      type:"POST",
      url:"controlador/manualControlador.php?ctrRegManual",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data=="ok"){
         Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'Manual Registrada',
            timer: 1000
          })
          setTimeout(function(){
            location.reload()
          },1200)
        }else{
          Swal.fire({
            icon: 'error',
            showConfirmButton: false,
            title: 'Error de Registro!!!',
            timer: 1500
          })
        }
      }
    })    

}

function MEditManual(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/manual/FEditManual.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function EditManual(){


    var formData = new FormData($("#FormEditManual")[0])


    $.ajax({
      type:"POST",
      url:"controlador/manualControlador.php?ctrEditManual",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){
        console.log(data)
        if(data=="ok"){
          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'Manual Actualizado',
            timer: 1000
          })
          setTimeout(function(){
            location.reload()
          },1200)
        }else{
          Swal.fire({
            icon: 'error',
            showConfirmButton: false,
            title: 'Error!!!',
            timer: 1500
          })
        }
      }
    })    
}

/*==================
Eliminar Manual
==================*/
function EliManual(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este Manual?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/manualControlador.php?ctrEliManual",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}
