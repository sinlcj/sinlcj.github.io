/* funcion para validar los campos  */
function validar_campos(idForm) {
  let data = document.querySelectorAll(`#${idForm} [data-validate]`);
  let validacion = true;
  if (data.length > 0) {
    for (let i = 0; i < data.length; i++) {
      if (
        data[i].getAttribute("type") === "text" &&
        data[i].value.match(/^[0-9]$/)
      ) {
        validacion = false;
        data[i].style.setProperty("border", "1px solid red");
        setTimeout(() => {
          data[i].style.setProperty("border", "");
        }, 2000);
      }
      if (
        data[i].getAttribute("type") === "number" &&
        !data[i].value.match(/^[+]?([0-9]+(?:[\.][0-9]*)?|\.[0-9]+)$/)
      ) {
        data[i].style.setProperty("border", "1px solid red");
        validacion = false;
        setTimeout(() => {
          data[i].style.setProperty("border", "");
        }, 2000);
      }
      if (data[i].value === "" || data[i].value === null) {
        data[i].style.setProperty("border", "1px solid red");
        validacion = false;
        setTimeout(() => {
          data[i].style.setProperty("border", "");
        }, 2000);
      }
    }
  }
  return validacion;
}

const toastPersonalizada = (
  mensaje = "Ocurrio algun error",
  tipoAlerta = "success",
  tiempo = "2000"
) => {
  const Toast = Swal.mixin({
    toast: true,
    position: "bottom-end",
    showConfirmButton: false,
    timer: tiempo,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });

  Toast.fire({
    icon: tipoAlerta,
    title: mensaje,
  });
};

console.log(":)");

const enviarFormRegistro = async (formulario) => {
  event.preventDefault();
  if (!validar_campos("formRegistro")) {
    return toastPersonalizada("complete los campos!", "warning");
  }
  try {
    let data = new FormData(formulario);
    let peticion = await fetch("php/registro.php", {
      method: "post",
      body: data,
    });
    let respuesta = await peticion.text();
    console.log("respuesta :>> ", respuesta);
    if (respuesta[0]) {
      formulario.reset();
      toastPersonalizada("Registro exitoso!", "success");
    } else {
      toastPersonalizada("Fallo registro", "error");
    }
  } catch (error) {
    console.log("error :>> ", error);
  }
};

document.addEventListener("click", (e) => {
  if (event.target.matches(".verContra *")) {
    let ver = document.querySelector("#verContra");
    ver.getAttribute("type") === "password"
      ? ver.setAttribute("type", "text")
      : ver.setAttribute("type", "password");
  }
  if (event.target.matches("#envioLogin")) {
    e.preventDefault();
    const datos = $("#formLogin").serialize(e);
    $.ajax({
      type: "POST",
      url: "php/login.php",
      data: datos,
      success: function (response) {
        if (response === "1") {
          $("#formLogin")[0].reset();
          window.location = "index.php";
        } else if (response === "2") {
          toastPersonalizada("el usuario no existe", "error");
        } else if (response === "3") {
          toastPersonalizada("la contraseña no coincide", "error");
        } else {
          toastPersonalizada("no hay datos", "error");
        }
      },
    });
  }
});

/* funcion para obtener un presupuesto o cotizacion */

const obtenerCotizacion = async (formulario) => {
  event.preventDefault();
  if (!validar_campos("formCotizacion")) {
    return toastPersonalizada("complete los campos!", "warning");
  }
  $('#exampleModal').modal("show");
  try {
    let data = new FormData(formulario);
    let peticion = await fetch("php/cotizacion.php", {
      method: "post",
      body: data,
    });
    let respuesta = await peticion.json();
    let html = '';
    respuesta.forEach(trasnporte => {
      html += `<div class="row">
                <div class="col-5">
                  <img src="archivos/${trasnporte.TRANS_imagen}" alt="">
                </div>
                <div class="col-7">
                  <table>
                    <tr>
                      <td>Transporte:</td>
                      <td>${trasnporte.TRANS_descripcion}</td>
                    </tr>
                    <tr>
                      <td>precio:</td>
                      <td>${trasnporte.TRANS_precio}</td>
                    </tr>
                    <tr>
                      <td>precio Final:</td>
                      <td>${trasnporte.precioFinal}</td>
                    </tr>
                  </table>
                </div>
              </div>`;
              
    });
    document.getElementById('llegaCotizacion').innerHTML = html;
    console.log("respuesta :>> ", respuesta);
    return;
    if (respuesta[0]) {
      formulario.reset();
      toastPersonalizada("Registro exitoso!", "success");
    } else {
      toastPersonalizada("Fallo registro", "error");
    }
  } catch (error) {
    console.log("error :>> ", error);
  }
}
