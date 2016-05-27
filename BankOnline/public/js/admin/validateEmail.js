function valTypeUser(value, element, param) {
    if ($('#tipo_usuario_id').val() == 1 && value == 1) {
        return true;
    }
    else {
        return false;
    }
}

$.validator.addMethod("valTypeUser", valTypeUser, "El centro general solo puede ser asignado a un Super Administrador.");

$(document).ready(function () {

if ($('#tipo_usuario_id').val() == 1)
    alert($('#tipo_usuario_id').val());
    /**
    *
    * validacion
    *
    **/
    $("#createForm, #editForm").validate({
        rules: {
                user: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                name: {
                    required: true
                },
                address: {
                    required: true
                },

                email:{
                    email: true,
                },
                phone:{
                    digits: true,
                    minlength: 8,
                    maxlength: 8
                },
                centro_id:{
                    required: true,
                    valTypeUser: true
                },
                tipo_usuario_id: {
                    required: true
                },
            },///Fin de Reglas
        messages: {
                user: {
                    required: "Por favor ingrese el Usuario."
                },
                password: {
                    required: "Por favor ingrese la Contraseña.",
                    minlength: "La contraseña debe contener 8 caracteres como mínimo."
                },
                name: {
                    required: "Por favor ingrese el Nombre."
                },

                address: {
                    required: "Por favor ingrese la Dirección."
                },
                email:
                {
                    email: "Por favor ingrese un correo electrónico valido."
                },
                phone: {
                    digits: "Por favor ingrese solo numeros",
                    minlength: "El teléfono debe contener 8 caracteres.",
                    maxlength: "El teléfono debe contener 8 caracteres."
                },
                centro_id:{
                    required: "Por favor ingrese el Centro al que pertenece"
                },
                tipo_usuario_id:{
                    required: "Por favor ingrese el Tipo de Usuario"
                  }
            },///fin de messages
            submitHandler: function(form){
              $('#msg').css('display', 'none');
              $('#msg2').css('display', 'none');
              /**
              *
                Inicio de Ajax User
              *
              **/
              $.ajax({
                url:  'EmailExists/'+ $('#usuario').val(),
                type:  "get",
                success:function(response){
                  if(response=='si'){
                    $("#msg2").html('El Usuario ya esta en Uso');
                    $('#msg2').css('display', 'inline');
                    $('#msg2').css('color', '#f56954');
                  }else{
                    /**
                    *
                        Ajax Valida Email
                    *
                    **/
                    $.ajax({
                      url: 'UserExists/' + $( "#correo" ).val(),
                      type: "get",
                      data:{
                         email:  $( "#correo" ).val()
                       },
                       success: function(response){
                         if(response=='si'){
                           $("#msg").html('El correo ya esta en Uso');
                           $('#msg').css('display', 'inline');
                           $('#msg').css('color', '#f56954');

                         }//Fin de else Principal
                         else{

                           $('#msg').css('display', 'none');
                            form.submit();
                         }
                       }
                    });

                    /**
                    *
                      Fin de Ajax Email
                    *
                    **/


                  }


                }
              });
              /**
              *
                Fin de Ajax User
              *
              **/


            }///Fin Funcion Submit
          });



});
