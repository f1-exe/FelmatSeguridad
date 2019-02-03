function gestionarContacto(a, b) {
    var c;
    if (window.XMLHttpRequest) c = new XMLHttpRequest(); else c = new ActiveXObject("Microsoft.XMLHTTP");
    c.onreadystatechange = function() {
        if (4 == c.readyState && 200 == c.status) {
            alert(innerHTML = c.responseText);
            location.reload();
        }
    };
    c.open("GET", "gestionar_contacto.php?id=" + b + "&estado=" + a, true);
    c.send();
}