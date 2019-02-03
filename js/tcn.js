jQuery("#enviar").click(function (e) {
    e.preventDefault();
    //var formData = new FormData(this);
    var nombre = document.getElementById("name").value;
    var correo = document.getElementById("email").value;
    var telefono = document.getElementById("number").value;
    var cargo = document.getElementById("course_type").getElementsByTagName("li")[0].innerHTML;
    var mensaje = document.getElementById("texto").value;
    var recaptcha = document.getElementById("g-recaptcha-response1").value;
    var dataForm = new FormData();

    var archivos_formulario = document.getElementById("archivos");
    var files_2 = archivos_formulario.files;

    if (nombre === "") {
        MensajeAlerta("El campo <label style='color:red'><strong>Nombre y Apellido</strong></label> es obligatorio");
        return false;
    }

    if(!isSpace(nombre)){
        MensajeAlerta("Debe ingresar <label style='color:red'><strong>Nombre y Apellido</strong></label> separado por un espacio");
        return false;
    }

    if(correo === ""){
        MensajeAlerta("El campo <label style='color:red'><strong>Correo Electrónico</strong></label> es obligatorio");
        return false;
    }

    if(!isValidEmail(correo)){
        MensajeAlerta("El campo <label style='color:red'><strong>Correo Electrónico</strong></label> no es valido");
        return false;
    }

    if(telefono === ""){
        MensajeAlerta("El campo <label style='color:red'><strong>Número de Teléfono</strong></label> es obligatorio");
        return false;
    }

    if(isNaN(telefono)){
        MensajeAlerta("El campo <label style='color:red'><strong>Número de Teléfono</strong></label> es de tipo numerico");
        return false;
    }

    if(!isNumber(telefono)){
        MensajeAlerta("El campo <label style='color:red'><strong>Número de Teléfono</strong></label> debe contener un largo de 9 digitos");
        return false;
    }

    if(cargo === "Cargo al que Postula"){
        MensajeAlerta("Debe seleccionar un <label style='color:red'><strong>Cargo</strong></label>, este campo es obligatorio");
        return false;
    }

    if(mensaje === ""){
        MensajeAlerta("El campo <label style='color:red'><strong>¿Por qué deberías trabajar con nosotros?</strong></label> es obligatorio");
        return false;
    }

    if (files_2.length == 2) {
        for (i = 0; i < files_2.length; i++) {
            if (/\.(jpg|jpeg|pdf|docx|doc)$/i.test(archivos_formulario.files[i].name)) {
                dataForm.append('archivo' + i, files_2[i]);
            } else {
                MensajeError("Uno o ambos archivos no contiene el formato correcto, los formatos permitidos son : <br> <label style='color:red'><strong>[ .JPG / .JPEG / .PDF / . DOCX / .DOC ]</strong></label>");
                return false;
            }
        }
    } else {
        MensajeError("Debe subir 2 archivos, usted esta subiendo " + files_2.length + " archivos");
        return false;
    }

    dataForm.append('nombre', nombre);
    dataForm.append('correo', correo);
    dataForm.append('telefono', telefono);
    dataForm.append('cargo', cargo);
    dataForm.append('mensaje', mensaje);
    dataForm.append('name1', files_2[0].name);
    dataForm.append('name2', files_2[1].name);
    dataForm.append('recaptcha', recaptcha);

    jQuery.ajax({
        url: 'tcn_action.php',
        type: 'POST',
        data: dataForm,
        success: function (data) {
            if(data === "Se ha completado la postulación correctamente"){
                MensajeFinal(data+", Espere mientras es direccionado a la pagina principal");
                setTimeout(function nada() {
                    window.location.replace("index.php");
                  }, 2500);
            }
            
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

function MensajeFinal(msg) {
    Swal.fire({
        position: "top",
        type: "success",
        html: msg,
        showConfirmButton: false,
        timer: 1500
    });
}

function MensajeError(msg) {
    Swal.fire({
        type: "error",
        title: "Upss...",
        html: msg
    });
}

function MensajeAlerta(msg) {
    Swal.fire({
        title: "Debe corregir lo siguiente",
        type: "info",
        html: msg,
        animation: false,
        customClass: "animated tada"
    })
}

function isValidEmail(correo) {
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(correo);
}

function isSpace(variable){
    return /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/.test(variable);
}

function isNumber(variable){
    return /^\d{9}$/.test(variable);
}