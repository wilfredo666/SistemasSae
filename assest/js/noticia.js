function MNuevaNoticia(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/noticia/FNuevaNoticia.php",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}
function RegNoticia(){

    var formData = new FormData($("#FormRegnoticia")[0])

    $.ajax({
      type:"POST",
      url:"controlador/noticiaControlador.php?ctrRegNoticia",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data=="ok"){
         Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'Noticia Registrada',
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

function MVerNoticia(id){
  $("#modal-xl").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/noticia/MVerNoticia.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}

function MEditnoticia(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/noticia/FEditnoticia.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function Editnoticia(){
  let pass=document.getElementById("passnoticia").value
  let pass2=document.getElementById("passnoticia2").value

  if(pass==pass2){

    var formData = new FormData($("#FormEditnoticia")[0])


    $.ajax({
      type:"POST",
      url:"controlador/noticiaControlador.php?ctrEditnoticia",
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
            title: 'noticia Actualizado',
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
  }else{
    document.getElementById("error-pass").innerHTML="Los campos de contraseña no coinciden"
  }
}

/*==================
Eliminar noticia
==================*/
function EliNoticia(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este noticia?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/noticiaControlador.php?ctrEliNoticia",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function busNoticia(){
  var txtBusNoticia=document.getElementById("txtBusNoticia").value;

  var obj={
    "txtBusNoticia":txtBusNoticia
  };
  $.ajax(
    {
      url:"controlador/noticiaControlador.php?ctrBusNoticia",
      type:"POST",
      data:obj,
      success:function(data){
        $("#noticias-content").html(data);
      }
    }
  )
}


function BannerNoticia(){
    $("#modal-xl").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/politica_calidad.php",
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}
