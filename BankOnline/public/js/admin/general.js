var urlActive = '/admin';

/*
* Funcion para cargar contenido por medio de ajax
*/

$('.loadModal').on('click', function(e){
    e.preventDefault();

    $("#containerBase").html('<h2 class="text-center">Cargando ....</h2>');
    $(".titleEdit").text($(this).data('title'));

    var url = $(this).data('url');
    window.urlActive = url;
    loadContent(url);
});

/*
* Funcion para cargar contenido
*/
function loadContent(url){
   $('#containerBase').load('/admin/'+url);
}

$(document).ready(function() {

    $("#element").introLoader({
        animation: {
            name: 'simpleLoader',
            options: {
                exitFx:'slideUp',
                ease: "easeInOutCirc",
                style: 'ocean',
                delayBefore: 1000,
                exitTime: 500,
                onAfter: function() {
                    $(".homeloader").css("display", "block"), (new WOW).init();
                    $(".alert").fadeOut(10000);
                }
            }
        },

        spinJs: {
            lines: 13, // The number of lines to draw
            length: 20, // The length of each line
            width: 10, // The line thickness
            radius: 30, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            color: '#fff', // #rgb or #rrggbb or array of colors
        }
    });
});
