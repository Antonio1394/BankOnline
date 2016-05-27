{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script("js/jquery.introLoader.pack.min.js")!!}
{!!Html::script("js/wow.min.js")!!}

<script type="text/javascript">
    $(document).ready(function() {
        $("#element").introLoader({
            animation: {
                name: 'lettersLoader',
                options: {
                    ease: "easeInOutCirc",
                    style: 'ocean',
                    delayBefore: 500,
                    exitTime: 400,
                    loaderText: 'Bienvenido!',
                    lettersDelayTime: 0,
                    onAfter: function() {
                        $(".homeloader").css("display", "block"), (new WOW).init();
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
</script>
