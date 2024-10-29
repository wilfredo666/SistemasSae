function MNuevoBaseLpz() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/baselpz/FNuevoBaseLpz.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegBaseLpz() {

  var formData = new FormData($("#FormRegBaseLpz")[0])

  $.ajax({
    type: "POST",
    url: "controlador/baselpzControlador.php?ctrRegBaseLaPaz",
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

function MVerBaseLpz(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/baselpz/MVerBaseLpz.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarBaseLpz(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/baselpz/FEditBaseLpz.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditBaseLpz() {

  var formData = new FormData($("#FormEditBaseLpz")[0])
  $.ajax({
    type: "POST",
    url: "controlador/baselpzControlador.php?ctrEditBaseLaPaz",
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

function MEliBaseLpz(id) {
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
        url: "controlador/baselpzControlador.php?ctrEliBaseLaPaz",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function RepExcelLpz(){
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/baselpz/RepExcelBaseLpz.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function ImpRepExcelLpz(){
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
    url: "vista/baselpz/ImpRepExcelBaseLpz.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      //abriendo en una nueva pestana
      window.open("vista/baselpz/ImpRepExcelBaseLpz.php?opciones="+opcionesSeleccionadas+"&encabezado="+valoresAdicionales, "_blank")
    }
  })
}
