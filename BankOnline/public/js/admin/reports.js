function finalDate(value, element, param) {
    if ($('#begin_date').val() <= value ) {
        return true;
    }
    else {
        return false;
    }
}

$.validator.addMethod("finalDate", finalDate, "La fecha final debe ser mayor o igual que la fecha inicial.");

$("#Reports").validate({
  rules: {
      begin_date: {
        required: true,
        date: true
      },
      final_date: {
        required: true,
        date: true,
        finalDate: true
      },
      condition: {
        required: true
      },
      number: {
        required: true,
        digits: true
      },
      searchCenter: {
        required: true
      }
    },
    messages: {
        begin_date: {
          required: "Por favor seleccione la fecha.",
          date: "Por favor ingrese una fecha valida"
        },
        final_date: {
          required: "Por favor seleccione la fecha.",
          date: "Por favor ingrese una fecha valida"
        },
        condition: {
          required: "Por favor seleccione una condicion."
        },
        number: {
          required: "Por favor ingrese un numero.",
          digits: "Por favor ingrese un numero valido."
        },
        searchCenter: {
          required: "Por favor seleccione un centro."
        }
    },
    submitHandler: function(form) {
      $("#Reports .btn-primary").prop('disabled', true);
      form.submit();
    }
});
