<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta name="MobileOptimized" content="width" />
        <link href="../diseño/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../diseño/csscreados/estilo.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>inicio</title>
    </head>
    <body id="contenedorlab">
        <div id="bannerlab">
            <label id="lblbaner"><h4>LABORATORIOS</h4></label>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-7" id="contenido">
                    <div id="bannercontenido">
                        <label id="lbl"><h5>REGISTRADOS</h5></label>
                    </div>

                    <div id="pie">
                        <label id="lbl"><h5>pie</h5></label>
                    </div>
                </div>
                <div class="col-5" id="registro">
                    <label id="lbl"><h5>REGISTRAR LABORATORIO</h5></label>
                    <form method="POST" action="" id="fmregistro" onsubmit="return validarCampos();">
                        <input type="txt" id="txt1" name="laboratorio" class="form-control" placeholder="Ingrese el nombre del laboratorio" /><br>
                        <input type="txt" id="txt2" name="edificio" class="form-control" placeholder="Ingrese el nombre del edificio"  />                  
                        <center><label id="lbl">Activo .</label><input type = "radio" name = "estado" id="rdb" value = "activo" checked="true" /> 
                            <label id="lbl">Inactivo .</label><input type = "radio" name = "estado" id="rdb" value = "inactivo" /></center>

                        <button id=btn class="btn-block">REGISTRAR</button>
                    </form>

                    <br>
                    <div>
                        <img src="../diseño/img/pie.png" alt="" id="logoReg"/> 
                    </div>

                </div>
                </di>
            </div>
    </body>
    <script src="../diseño/csscreados/jscreados/validaciones.js" type="text/javascript"></script>
</html>
