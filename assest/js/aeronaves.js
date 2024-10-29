/*==================
modal nuevo aeronave
==================*/
function MNuevoAeronaves() {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/aeronaves/FNuevoAeronave.php",
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*=======================
funcion registro aeronaves
=======================*/
function RegNuevoAeronaves() {
 
        var obj = new FormData($("#RegNuevoAeronave")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/aeronaveControlador.php?ctrRegAeronave",
                data: obj,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'La aeronave ha sido registrado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

        )

}

/*==================
modal eliminar AERONAVE
==================*/
function MEliAeronaves(id) {
    var obj = {
        id: id
    };

    Swal.fire({
        title: 'Esta seguro de eliminar esta aeronave?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: obj,
                url: "controlador/aeronaveControlador.php?ctrEliAeronave",
                success: function () {
                    location.reload()
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Funcion Cancelada', '', 'info')
        }
    })
}

/*======================
Modal Editar aeronave
=======================*/
function MEditarAeronaves(id){
    $("#modal-default").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/aeronaves/FEditAeronave.php?idAeronave="+id,
            data: obj,
            success: function (data) {
                $("#content-modal-default").html(data);
            }
        }

    )
}

/*=======================
funcion editar cliente
=======================*/
function EditarAeronave(id) {
    
        var formData = new FormData($("#EditAeronave")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/aeronaveControlador.php?ctrEditAeronave",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'La aeronave ha sido actualizado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

       )

}
