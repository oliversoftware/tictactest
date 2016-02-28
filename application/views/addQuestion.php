
<?php

include '../controllers/Maincontroller.php';
$mc=new Maincontroller();

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TICTACTEST | Anadir pregunta</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <?php include 'menu.php'?>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Añadir pregunta tipo test</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo BASE_URL_BACKEND?>index.php">Inicio</a>
                    </li>

                    <li class="active">
                        <strong>Añadir pregunta</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Formulario</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12 b-r">
                                    <form id="formPregunta" name="formPregunta" method="get">
                                        <div class="form-group"><label>Pregunta</label> <input type="text" name="pregunta" id="pregunta" class="form-control"></div>
                                        <div class="form-group"><label>Respuesta 1</label> <input type="text" name="r1" id="r1" class="form-control"></div>
                                        <div class="form-group"><label>Respuesta 2</label> <input type="text" name="r2" id="r2" class="form-control"></div>
                                        <div class="form-group"><label>Respuesta 3</label> <input type="text" name="r3" id="r3" class="form-control"></div>
                                        <div class="form-group"><label>Respuesta 4</label> <input type="text" name="r4" id="r4" class="form-control"></div>
                                        <div class="form-group"><label>Respuesta correcta</label>
                                            <select class="form-control m-b" name="respuestaCorrecta" id="respuestaCorrecta">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label>Explicación</label> <textarea cols="50" rows="20" name="descExplicacion" id="descExplicacion" class="form-control"></textarea></div>

                                        <div class="form-group"><label>Bloque</label>
                                            <select class="form-control m-b" name="bloque" id="tema">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>

                                            </select>
                                        </div>

                                        <div class="form-group"><label>Tema</label>
                                            <select class="form-control m-b" name="tema" id="tema">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>


                                            </select>
                                        </div>
                                        <div class="form-group"><label>Examen</label>
                                            <select class="form-control m-b" name="examen" id="examen">
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label>Año</label>
                                            <select class="form-control m-b" name="ano" id="ano">

                                                <option value="">--</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label>Oposición</label>
                                            <select class="form-control m-b" name="oposicion" id="oposicion">
                                                <option value="TAI">TAI</option>
                                                <option value="GSI">GSI</option>
                                                <option value="CSSTIC">CSSTIC</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label>Tipo oposición</label>
                                            <select class="form-control m-b" name="tipoOposicion" id="tipoOposicion">
                                                <option value="C1">C1</option>
                                                <option value="A2">A2</option>
                                                <option value="A1">A1</option>
                                            </select>
                                        </div>


                                        <div>
                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs enviarPregunta" ><strong>Enviar pregunta</strong></button>

                                       </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>COPY AND PASTE</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                <textarea rows="150" cols="50">

                                </textarea>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       <?php include 'footer.php'?>

    </div>
</div>


<script>var BaseUrl="<?php echo BASE_URL?>";</script>

<!-- Mainly scripts -->
<script src="../../public/js/jquery-2.1.1.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../../public/js/inspinia.js"></script>
<script src="../../public/js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="../../public/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
<!-- AJAX CONF -->
<script src="../../public/js/backend.js"></script>
</body>

</html>
