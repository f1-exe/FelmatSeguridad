function modal(mensaje){
    Swal({
        title: 'Mensaje',
        html: mensaje,
        imageUrl: 'img/modal.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
        animation: false
      });
}