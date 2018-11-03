<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta name="MobileOptimized" content="width" />
        <link href="diseño/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="diseño/csscreados/estilo.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>inicio</title>
    </head>
    <body id="principal">
        <div class="container" id="contenedor" >
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4" id="titulo">
                    <center>  
                        <img src="diseño/img/logo.png" alt="" id="logoimg"/>
                    </center>
                    <br>
                    <center>
                        <img src="diseño/img/letrautec.png" alt="" id="logo"/>
                    </center><br>
                    <center>
                        <img src="diseño/img/iteacademi.png" alt=""/>
                    </center>
                    <center>
                        <img src="diseño/img/pie.png" alt="" id="logo"/>
                    </center>
                </div>
                <div class="col-4" id="cuerpo">
                    <br>
                    <label id="lbl"><h5>INICIO DE SESIÓN</h5></label>
                    <form method="POST" action="" name="fmlogin" id="fmlogin" onsubmit="return validarCampos();">
                        <label id="lbl"><h6>Usuario</h6></label>
                        <input type="txt" name="usuario" id="txt1" placeholder="Ingresa tu Carnet" onblur="" class="form-control">
                        <label id="lbl"><h6>Contraseña</h6></label>
                        <input type="password" name="pass" id="txt2" placeholder="Ingresa tu contraseña" onblur="" class="form-control"><br>
                        <button  accesskey="inicio" id="btn"  class="btn-block">INICIAR</button>
                    </form>
                </div>
                <div class="col-2"></div>

            </div>       
        </div>
    </body>
    <script src="diseño/csscreados/jscreados/validaciones.js" type="text/javascript"></script>
</html>
