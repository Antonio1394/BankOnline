$("#createForm").validate({
    rules: {
            nombre: {
                required: true
            },
            apellido: {
                required: true
            },
            dpi: {
                required: true
            },
            direccion: {
                required: true
            },

            email:{
                email: true,
            },
            telefono:{
                required: true,
                digits: true,
                minlength: 8,
                maxlength: 8
            },
            beneficiario:{
                required: true
            }
        },///Fin de Reglas
    messages: {
            nombre: {
                required: "Por favor ingrese el Nombre."
            },
            apellido: {
                required: "Por favor ingrese los apellidos."
            },
            dpi: {
                required: "Por favor ingrese el DPI."
            },

            direccion: {
                required: "Por favor ingrese la Dirección."
            },
            email:
            {
                email: "Por favor ingrese un correo electrónico valido."
            },
            telefono: {
                required: "Por favor ingrese el teléfono.",
                digits: "Por favor ingrese solo numeros.",
                minlength: "El teléfono debe contener 8 caracteres.",
                maxlength: "El teléfono debe contener 8 caracteres."
            },
            beneficiario:{
                required: "Por favor ingrese el beneficiario."
            }
        },///fin de messages
        submitHandler: function(form){
          alert('siiii');
        }///Fin Funcion Submit
      });
