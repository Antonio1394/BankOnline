function menorNo_abortos(value, element, param) {
    if ($('#no_embarazos').val() == (parseInt(value) + parseInt($('#no_partos').val()) + parseInt($('#no_cesarias').val())) ) {
        return true;
    }
    else {
        return false;
    }
}

function menorHijos_muertos(value, element, param) {
    if ($('#no_embarazos').val() <= ( parseInt(value) + parseInt($('#no_hijos_vivos').val()) ) ) {
        return true;
    }
    else {
        return false;
    }
}

$.validator.addMethod("menorNo_abortos", menorNo_abortos, "La sumatoria de los campos No. Partos, de cesarias y de abortos debe ser igual a No. de embarazos.");

$.validator.addMethod("menorHijos_muertos", menorHijos_muertos, "La sumatoria de los campos No. de hijos vivos y No. de hojos muertos debe ser igual o mayor a No. de embarazos.");

$(document).ready(function () {

    /**
    *
    * Botones de siguiente y anterior
    *
    **/

    // $('.nextButton').click(function () {
    //     var id = $(this).data( "id" );
    //     $(".nav-tabs li").removeClass('active');
    //     $("#" + id).addClass('active');
    // });

    /**
    *
    * Validacion de boleta
    *
    **/

    $("#createBoleta").validate({
        rules: {
          no_registro: {
              required: true
          },
              edad_paciente: {
                    required: true,
                    digits: true
                },
                edad_esposo: {
                    digits: true
                },
				distancia_se_si_cercana: {
					required: true,
                    number: true
				},
                tiempo_para_llegar: {
                    required: true,
                    number: true
                },
                fecha_ultima_regla: {
                    required: true,
                    date: true
                },
                fecha_probable_parto: {
                    required: true,
                    date: true
                },
				no_embarazos: {
					required: true,
                    digits: true
				},
                no_partos: {
                    required: true,
                    digits: true
                },
                no_cesarias: {
                    required: true,
                    digits: true
                },
				no_abortos: {
					required: true,
                    digits: true,
                    menorNo_abortos: true
				},
                no_hijos_vivos: {
                    required: true,
                    digits: true
                },
                no_hijos_muertos: {
                    required: true,
                    digits: true,
                    menorHijos_muertos: true
                },
                dFecha: {
                    required: true,
                    date: true
                },
                municipio:{
                  required:true
                }

            },
            messages: {

              municipio:{
                required:"Por favor seleccione una opción."
              },
                no_registro: {
                    required: "Por favor ingrese el No. de Boleta."
                },
                nombre_paciente: {
                    required: "Por favor ingrese el nombre de la paciente."
                },
                edad_paciente: {
                    required: "Por favor ingrese la edad de la paciente.",
                    digits: "Por favor ingrese solo numeros"
                },
				pueblo_paciente: {
					required: "Por favor ingrese el pueblo de la paciente."
				},
                escolaridad_paciente: {
                    required: "Por favor ingrese la escolaridad de la paciente."
                },
                ocupacion_paciente: {
                    required: "Por favor ingrese la ocupacion de la paciente."
                },
                edad_esposo: {
                    digits: "Por favor ingrese solo numeros"
                },
				distancia_se_si_cercana: {
					required: "Por favor ingrese la distancia en KM al servicio de salud más cercano.",
                    digits: "Por favor ingrese solo numeros"
				},
                tiempo_para_llegar: {
                    required: "Por favor ingrese el tiempo en horas para llegar.",
                    digits: "Por favor ingrese solo numeros"
                },
                nombre_comunidad: {
                    required: "Por favor ingrese el nombre de la comunidad."
                },
				dpi_paciente_com_esp: {
					required: "Por favor ingrese el No. de celular de señora, pareja o comunitario."
				},
                fecha_ultima_regla: {
                    required: "Por favor seleccione la fecha última regla.",
                    date: "Por favor ingrese una fecha valida"
                },
                fecha_probable_parto: {
                    required: "Por favor seleccione la fecha probable de parto.",
                    date: "Por favor ingrese una fecha valida"
                },
				no_embarazos: {
					required: "Por favor ingrese el No. de embarazos.",
                    digits: "Por favor ingrese solo numeros"
				},
                no_partos: {
                    required: "Por favor ingrese el No. de partos.",
                    digits: "Por favor ingrese solo numeros"
                },
                no_cesarias: {
                    required: "Por favor ingrese el No. de cesáreas.",
                    digits: "Por favor ingrese solo numeros"
                },
				no_abortos: {
					required: "Por favor ingrese el No. de abortos.",
                    digits: "Por favor ingrese solo numeros"
				},
                no_hijos_vivos: {
                    required: "Por favor ingrese el No. de hijos vivos.",
                    digits: "Por favor ingrese solo numeros"
                },
                no_hijos_muertos: {
                    required: "Por favor ingrese el No. de hijos muertos.",
                    digits: "Por favor ingrese solo numeros"
                },
                adato1: {
                    required: "Por favor seleccione una opción."
                },
				adato2: {
					required: "Por favor seleccione una opción."
				},
                adato3: {
                    required: "Por favor seleccione una opción."
                },
                adato4: {
                    required: "Por favor seleccione una opción."
                },
				adato5: {
					required: "Por favor seleccione una opción."
				},
                adato6: {
                    required: "Por favor seleccione una opción."
                },
                adato7: {
                    required: "Por favor seleccione una opción."
                },
                bdato1: {
                    required: "Por favor seleccione una opción."
                },
				bdato2: {
					required: "Por favor seleccione una opción."
				},
                bdato3: {
                    required: "Por favor seleccione una opción."
                },
                bdato4: {
                    required: "Por favor seleccione una opción."
                },
				bdato5: {
					required: "Por favor seleccione una opción."
				},
                bdato6: {
                    required: "Por favor seleccione una opción."
                },
                bdato7: {
                    required: "Por favor seleccione una opción."
                },
                bdato8: {
                    required: "Por favor seleccione una opción."
                },
                bdato9: {
                    required: "Por favor seleccione una opción."
                },
				bdato10: {
					required: "Por favor seleccione una opción."
				},
                bdato11: {
                    required: "Por favor seleccione una opción."
                },
                bdato12: {
                    required: "Por favor seleccione una opción."
                },
                cdato1: {
                    required: "Por favor seleccione una opción."
                },
				cdato2: {
					required: "Por favor seleccione una opción."
				},
                cdato3: {
                    required: "Por favor seleccione una opción."
                },
                cdato4: {
                    required: "Por favor seleccione una opción."
                },
				cdato5: {
					required: "Por favor seleccione una opción."
				},
                cdato6: {
                    required: "Por favor seleccione una opción."
                },
                ddato1: {
                    required: "Por favor seleccione una opción."
                },
                dFecha: {
                    required: "Por favor seleccione la fecha.",
                    date: "Por favor ingrese una fecha valida"
                },
                dNombre: {
                    required: "Por favor ingrese el nombre."
                },
            },
			submitHandler: function(form) {
				$("#createBoleta .btn-primary").prop('disabled', true);
				form.submit();
			}
    });

    function finalDate(value, element, param) {
        if ($('#begin_date').val() <= value ) {
            return true;
        }
        else {
            return false;
        }
    }

    $.validator.addMethod("finalDate", finalDate, "La fecha final debe ser mayor o igual que la fecha inicial.");

    $("#weekReport").validate({
      rules: {
          begin_date: {
            required: true,
            date: true
          },
          final_date: {
            required: true,
            date: true,
            finalDate: true
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
            }
        },
        submitHandler: function(form) {
          form.submit();
        }
    });

});
