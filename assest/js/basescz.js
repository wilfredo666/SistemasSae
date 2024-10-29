function MNuevoBaseScz() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/basescz/FNuevoBaseVVI.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegBaseScz() {

  var formData = new FormData($("#FormRegBaseScz")[0])

  $.ajax({
    type: "POST",
    url: "controlador/basesczControlador.php?ctrRegBaseVVI",
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
          title: 'Informe Registrado',
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

function MVerBaseScz(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/basescz/MVerBaseVVI.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarBaseScz(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/basescz/FEditBaseVVI.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditBaseScz() {

  var formData = new FormData($("#FormEditBaseScz")[0])
  $.ajax({
    type: "POST",
    url: "controlador/basesczControlador.php?ctrEditBaseVVI",
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
          title: 'Informe Actualizado',
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

function MEliBaseScz(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este Informe?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/basesczControlador.php?ctrEliBaseVVI",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function RepExcelScz() {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/basescz/RepExcelBaseScz.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function ImpRepExcelScz() {
  var formData = new FormData($("#repExcelLpz")[0])

  // Obtener todos los valores seleccionados de checkboxes con el nombre "opciones[]" e iternamos
  var opcionesSeleccionadas = [];
  var valoresAdicionales = [];
  $("input[name='opciones[]']:checked").each(function () {
    /* opcionesSeleccionadas.push($(this).val()); */
    var valorCheckbox = $(this).val();
    var valorAdicional = $(this).data("encabezado");

    opcionesSeleccionadas.push(valorCheckbox);
    valoresAdicionales.push(valorAdicional);
  });

  $.ajax({
    type: "POST",
    url: "vista/basescz/ImpRepExcelBaseScz.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      //abriendo en una nueva pestana
      window.open("vista/basescz/ImpRepExcelBaseScz.php?opciones=" + opcionesSeleccionadas + "&encabezado=" + valoresAdicionales, "_blank")
    }
  })
}

