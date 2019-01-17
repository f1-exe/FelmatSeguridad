function gestionarContacto(a, b) {
  var c;
  if (window.XMLHttpRequest) c = new XMLHttpRequest();
  else c = new ActiveXObject("Microsoft.XMLHTTP");
  c.onreadystatechange = function() {
    if (4 == c.readyState && 200 == c.status) {
      if (c.responseText == 0) {
        Swal({
          position: "top",
          type: "info",
          title: "El estado ahora es gestionado.",
          showConfirmButton: false,
          timer: 1500
        });
      } else if (c.responseText == 1) {
        Swal({
          position: "top",
          type: "info",
          title: "El estado ahora es NO gestionado.",
          showConfirmButton: false,
          timer: 1500
        });
      } else if (c.responseText == 2) {
        Swal({
          position: "top",
          type: "info",
          title: "No se pudo cambiar el estado de la gestion.",
          showConfirmButton: false,
          timer: 1500
        });
      }

      setTimeout(function nada() {
        location.reload();
      }, 1500);
    }
  };
  c.open("GET", "gestionar_contacto.php?id=" + b + "&estado=" + a, true);
  c.send();
}
