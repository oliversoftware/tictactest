/**
 * Created by jesus on 21/08/15.
 */
function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env
        }
    };
}





$(document).ready(function(){


    backend.init();

})
var backend=
{

    init:function () {



     $(document).on('click', ".enviarPregunta", function () { backend.onclickEnviarPregunta(this)  })


    },



    onclickEnviarPregunta:function(id){



            var parametros = {
                idFuncion: 1,
                form: $('#formPregunta').serialize(),
            };
           /* $.blockUI({
                css: {
                    border: 'none',
                    'z-index': '2000',
                    padding: '10px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#018'
                },
                message: '<span style="color: #fff;  font-size: 15px">Enviando reclamación...</span>'

            });*/

            $.get(
                BaseUrl + '/application/controllers/functions.php',
                parametros,
                function (data) {
                   location.reload();

                }
            )






    },



}


