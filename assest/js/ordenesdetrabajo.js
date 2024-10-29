function MNuevoOrdenDeTrabajo() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/FNuevoOrdenDeTrabajo.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MNuevoOrdenDeTrabajoIng() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/FNuevoOrdenDeTrabajoIng.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegOrdenes() {

  var formData = new FormData($("#FormRegOrdenes")[0])

  $.ajax({
    type: "POST",
    url: "controlador/ordendetrabajoControlador.php?ctrRegOrdenDeTrabajo",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Orden De Trabajo Registrado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
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

function MVerOrdenDeTrabajo(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/MVerOrdenDeTrabajo.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

//version ingles
function MVerOrdenDeTrabajoIng(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/MVerOrdenDeTrabajoIng.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarOrdenDeTrabajo(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/FEditOrdenDeTrabajo.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

//version ingles
function MEditarOrdenDeTrabajoIng(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/FEditOrdenDeTrabajoIng.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditOrdenTrabajo() {

  var formData = new FormData($("#FormEditOrdenDeTrabajo")[0])
  $.ajax({
    type: "POST",
    url: "controlador/ordendetrabajoControlador.php?ctrEditOrdenDeTrabajo",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Orden de Trabajo Actualizado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
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

function MEliOrdenDeTrabajo(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar esta Orden de Trabajo?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/ordendetrabajoControlador.php?ctrEliOrdenDeTrabajo",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

//version ingles
function MEliOrdenDeTrabajoIng(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Are you sure you want to delete this Work Order?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirm',
    denyButtonText: `Cancel`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/ordendetrabajoControlador.php?ctrEliOrdenDeTrabajo",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Function Cancelled', '', 'info')
    }
  })
}


function MSubirArchivos(numOrden){

  $('#modal-xl').modal('show');
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/ordendetrabajo/MSubirArchivos.php?numOrden="+numOrden,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data);
    }
  })
}

function EliArchivo(archivo,numOrden){

  var obj={
    archivo:archivo,
    numOrden:numOrden
  }
  Swal.fire({
    title: 'Esta seguro de eliminar este archivo?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {

    if (result.isConfirmed) {
      $.ajax(
        {
          type:"POST",
          data:obj,
          url:"controlador/ordendetrabajoControlador.php?ctrEliArchivo",
          success:function(data){

            setTimeout(
              function () {
                location.reload();
              }, 1000);
          }
        }
      )
    } else if (result.isDenied) {

    }
  })

}