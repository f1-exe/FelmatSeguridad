$(document).ready(function() {
    $("#message").keyup(function() {
      $("#count").text(
        "Máximo de carácteres 2500/ " + (0 + $(this).val().length)
      );
      if ($(this).val().length >= 2500) {
        $("#count").css("color", "red");
      }
    });
  
    function insert(data2) {
      var url = "index_action.php";
  
      $.ajax({
        type: "POST",
        url: url,
        data: data2, // Adjuntar los campos del formulario enviado.
        success: function(data2) {
          //alert(data2);
        }
      });
      return false;
    }
  
    $("#sendMessageButton").click(function() {
      var url = "index_action.php";
  
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var message = document.getElementById("message").value;
      var area = document.getElementById("area").value;
      var recaptcha = document.getElementById("g-recaptcha-response1").value;
     
  
      var data =
        "name=" +
        name +
        "&email=" +
        email +
        "&phone=" +
        phone +
        "&message=" +
        message +
        "&tipo=0&area=" +
        area+"&recaptcha="+recaptcha;;

      $.ajax({
        type: "POST",
        url: url,
        data: data, // Adjuntar los campos del formulario enviado.
        success: function(data) {
          //alert("data ajax : "+data);
          var out = "";
         // alert(data);
          switch (data) {
            
            case "0":
              let timerInterval;
  
              Swal({
                title: "Estimado(a) " + name,
                html: "Espere mientras su solicitud es procesada",
                timer: 5000,
                onBeforeOpen: () => {
                  Swal.showLoading();
                  timerInterval = setInterval(() => {
                    var data2 =
                      "name=" +
                      name +
                      "&email=" +
                      email +
                      "&phone=" +
                      phone +
                      "&message=" +
                      message +
                      "&tipo=1&area="  +
                      area+"&recaptcha="+recaptcha;;
                      

                    if (insert(data2) == false) {
                      Swal.stopTimer();
                      clearInterval(timerInterval);
  
                      setTimeout(function nada() {
                        Swal({
                          title: "Exito",
                          text: "Su solicitud ha sido recibida correctamente",
                          type: "success"
                        });
                        document.getElementById("contactForm").reset();
                      }, 5000);
                    }
                  }, 100);
                }
              }).then(result => {
                if (
                  // Read more about handling dismissals
                  result.dismiss === Swal.DismissReason.timer
                ) {
                  console.log("I was closed by the timer");
                }
              });
  
              break;
            case "3":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El mensaje puede contener hasta 2500 carácteres",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "4":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El campo mensaje es obligatorio",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "5":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El teléfono debe tener un largo de 8 dígitos",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "6":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "Debe ingresar un valor numérico como teléfono",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "7":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El campo teléfono es obligatorio",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "8":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "Ingrese un E-Mail Válido",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "9":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El campo E-Mail es obligatorio",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "10":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "Debe ingresar nombre y apellido separado por un espacio",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "11":
              Swal({
                title: "Debe corregir lo siguiente",
                type: "info",
                text: "El campo nombre es obligatorio",
                animation: false,
                customClass: "animated tada"
              });
              break;
            case "12":
            Swal({
              title: "Debe corregir lo siguiente",
              type: "info",
              text: "Ha ocurrido un error en la verificación del captcha, refresque el navegador e intente de nuevo",
              animation: false,
              customClass: "animated tada"
            });
            break;
          }
        }
      });
      return false;
    });
  });
  