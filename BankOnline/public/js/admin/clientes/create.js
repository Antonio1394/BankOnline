$("#createForm").validate({
    rules: {
            email:{
                email: true
            },
            telefono:{
                digits: true,
                minlength: 8,
                maxlength: 8
            },
            monto: {
              number: true
            },
            fechaCreacion:{
                date: true
            },
            password: {
              minlength: 8
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
            },
            idTipo:
            {
                required: "Por favor seleccione un tipo de cuenta."
            },
            monto: {
                required: "Por favor ingrese el monto.",
                number: "Por favor ingrese solo numeros."
            },
            fechaCreacion:{
                required: "Por favor ingrese la fecha.",
                date: "Por favor ingrese una fecha valida."
            },
            usuario: {
              required: "Por favor ingrese un nombre de usuario."
            },
            password: {
              required: "Por favor ingrese una contraseña.",
              minlength: "La contraseña debe tener 8 o mas caracteres."
            }
        },///fin de messages
        submitHandler: function(form){
          alert('siiii');
        }///Fin Funcion Submit
      });
