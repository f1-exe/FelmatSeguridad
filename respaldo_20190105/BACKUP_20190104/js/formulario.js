$(document).ready(function() {

    $("#message").keyup(function(){
        $("#count").text("Máximo de carácteres 2500/ " + (0 + $(this).val().length));
        if($(this).val().length>=2500){
            $("#count").css('color', 'red');
        }
    });

    $('#sendMessageButton').click(function(){
        var url ='index_action.php';

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;

        var data ="name="+name+"&email="+email+"&phone="+phone+"&message="+message;

        $.ajax({
            type:"POST",
            url:url ,
            data:data, // Adjuntar los campos del formulario enviado.
                success: function(data)
                {
                    /*$("#resp").html(data); // Mostrar la respuestas del script PHP.
                    setTimeout(function(){
                        $("#resp").hide();
                    },3000);*/
                    //$("#resp").show().html(data).fadeOut(7000);
                    
                    alert(data);
                    if(data == "Su mensaje fue enviado correctamente"){
                        document.getElementById('contactForm').reset();
                    }
                }
            });
        return false;
    });
});
