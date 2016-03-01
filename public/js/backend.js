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
     $(document).on('click', ".doTest", function () { backend.onclickdoTest(this)  })
     $(document).on('change', "#tipoExamen", function () { backend.onchangeTipoExamen(this)  })


    },
    onclickdoTest:function(){

        var tipoExamen=$('#tipoExamen').val();
        var vacio=0;
        var mensaje="";


        if(tipoExamen==0){
            vacio=1;
            mensaje='Seleccione un tipo de examen';
        }else if(tipoExamen=='TEMA'){

            if($('#tema').val()==0){

                vacio=1;
                mensaje='Seleccione un tema';


            }


        }else if(tipoExamen=='BLOQUE'){
            if($('#bloque').val()==0){

                vacio=1;
                mensaje='Seleccione un bloque';


            }
        }else if(tipoExamen=='EXAMEN'){
            if($('#ano').val()==0){

                vacio=1;
                mensaje='Seleccione el año del examen';


            }

        }

        if(vacio!=0){
           alert(mensaje);
        }else{
            $('#formTest').submit();
        }




    },
    onchangeTipoExamen:function(id){

        var tipoExamen=$(id).val();

        $('.opcion').addClass('hide');
        if(tipoExamen=='TEMA'){

            $('.tema').removeClass('hide');


        }else if(tipoExamen=='BLOQUE'){
            $('.bloque').removeClass('hide');
        }else if (tipoExamen=='SIMULACRO'){
            $('.simulacro').removeClass('hide');

        }else if(tipoExamen=='EXAMEN'){
            $('.examen').removeClass('hide');

        }
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


