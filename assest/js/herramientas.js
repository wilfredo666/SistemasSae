function MNuevoHerramientas() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FNuevoHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegHerramientas() {
  var formData = new FormData($("#FormRegHerramientas")[0])
  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrRegHerramienta",
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
          title: 'Herramientas Registradas',
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

function MVerHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/MVerHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FEditHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditHerramientas() {

  var formData = new FormData($("#FormEditHerramienta")[0])
  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrEditHerramienta",
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
          title: 'Herramienta Actualizado',
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

function MEliHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta Seguro De Eliminar Esta Herramienta Perteneciente A SAE-LAB?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/herramientasControlador.php?ctrEliHerramienta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosHerramientas() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FCargarRegHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}

function CargarRegistrosControlHerra() {
  var formData = new FormData($("#FCargarRegistrosHerramientas")[0])


  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrRegRegistrosHerramientas",
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
          title: 'Registros cargados',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de carga!!!',
          timer: 1500
        })

      }
    }
  })

}

//de VRepPrestamosExternos.php
function MNuevoPrestamoExt(){
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FNuevoPrestamoExt.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

/* ================
Prestamos externos
=================== */

//carrito

var arregloCarritoPE = []
var listaDetallePE = document.getElementById("listaDetallePE")

function agregarCarritoPE(numCarp) {
  var obj = {
    numCarp: numCarp
  }
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrBusHerramienta",
    data: obj,
    dataType: "json",
    success: function (data) {

      let objDetalle = {
        idHerramienta: data["id"],
        descHerramienta: data["descripcion"],
        numCarpeta: data["numcarpeta"],
        origen: data["origen"],
        cantHerramienta: 1
      }
      arregloCarritoPE.push(objDetalle)
      dibujarTablaCarritoPE()
    }
  })
}

function dibujarTablaCarritoPE() {
  listaDetallePE.innerHTML = ""
  arregloCarritoPE.forEach((detalle) => {
    let fila = document.createElement("tr")
    fila.innerHTML = '<td>' + detalle.descHerramienta + '</td>' +
      '<td>' + detalle.numCarpeta + '</td>' +
      '<td><input type="number" class="form-control form-control-sm" id="cantProVH_' + detalle.numCarpeta + '" value="' + detalle.cantHerramienta + '" onkeyup="actCantidadPE(\'' + detalle.numCarpeta + '\')">' + '</td>' 

    let tdEliminar = document.createElement("td")
    let botonEliminar = document.createElement("button")
    botonEliminar.classList.add("btn", "btn-danger", "btn-sm", "borrar")
    let icono = document.createElement("i")
    icono.classList.add("fas", "fa-trash")
    botonEliminar.appendChild(icono)
    botonEliminar.onclick = () => {
      eliminarCarritoPE(detalle.numCarpeta)
    }

    tdEliminar.appendChild(botonEliminar)
    fila.appendChild(tdEliminar)

    listaDetallePE.appendChild(fila)
  })
}

function actCantidadPE(numCarpeta) {
  let cantidad = document.getElementById("cantProVH_" + numCarpeta).value

  arregloCarritoPE.map(function (dato) {
    if (dato.numCarpeta == numCarpeta) {
      dato.cantHerramienta = parseInt(cantidad)
    }
    return dato
  })
}

function eliminarCarritoPE(numCarpeta) {

  arregloCarritoPE = arregloCarritoPE.filter((detalle) => {
    if (numCarpeta != detalle.numCarpeta) {
      return detalle
    }
  })
  dibujarTablaCarritoPE()
}

function emitirPrestamoExterno() {

  var formData = new FormData($("#FormRegPrestamoExt")[0])
  //agregando a formData y convirtiendo a json
  formData.append("arregloCarritoPE", JSON.stringify(arregloCarritoPE))

  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegPrestamoExt",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {

      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Registro de prestamo externo correcto',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'Error de registro',
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  })


}

function MVerPrestamoExt(id){
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/MVerPrestamoExterno.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEliPrestamoExt(id){
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta Seguro De finalizar este prestamo',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/controlherramientasControlador.php?ctrEliPrestamoExt",
        success: function (data) {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}