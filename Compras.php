<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="productos.css">
    </head>

    <body>
        <img class="logo" src="img/logo.png">   
   
    <div class="row"> <!--contenedor principal-->
        <div class="menu_escritorio"> <!--Menu para pantallas grandes-->
            <nav>
                <ul class="menu"> 
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="RanchoFortuna.html">Nosotros</a>
                    </li>
                    <li>
                        <a href="Productos.html">Productos</a>
                    </li>
                    <li>
                        <a href="Instalaciones.html">Instalaciones</a>
                    </li>
                    <li>
                        <a href="Contacto.html">Contáctanos</a>
                    </li>
            
                </ul>
            </nav>
            
        </div> 
        <!--Menu para dispositivos moviles-->
        <div class="menu-celular">
            <div class="menu-open-close">
                <!--Seccion que contiene el boton de menu-->
                <div class="header">
                    <!--Se añade un hipervinculo para que el menu se despliegue al hacer click-->
                    <a href="#" id="buttonOpenCloseMenu">
                        <!--Se añade un gráfico vectorial para que el boton de menu no se pixelee--> 
                        <img src="img/menu-icono.png" alt="" width="24px" >
                    </a>
                </div>
                <div id="menu-mobile-items" class="menu-mobile-closed">
                    <ul >
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>
                            <a href="RanchoFortuna.html">Nosotros</a>
                        </li>
                        <li>
                            <a href="Productos.html">Productos</a>
                        </li>
                        <li>
                            <a href="Instalaciones.html">Instalaciones</a>
                        </li>
                        <li>
                            <a href="Contacto.html">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="contenedor">
            <div class="slider-contenedor">
                <!Producto 1>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>CUFRISIAN</b><br> Edad: <b>4 años y medio</b><br> Color: <b>Negro</b><br> Alzada: <b>1.58 a la cruz</b><br> Precio: <b>$95,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>POTRO FRISIÓN CON CUARTO DE MILLA, LÍNEAS HOLANDESAS,</u> Padre Importado de Holanda, Madre Americana.<br> Buen carácter, mansito cualquier jinete, muy robusto, muy ancho, partido de anca. </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/cuafrisian.png" alt="">
                </section>

                <!Producto 2>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>AZTECA</b><br> Edad: <b>6 años</b><br> Color: <b>Tordillo</b><br> Alzada: <b>1.62 a la cruz</b><br> Precio: <b>$52,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>POTRO ESPAÑOL CON AZTECA (AZTECA 3/4 ESPAÑOL), EXCELENTE LÍNEA.</u> Buen carácter, mansito cualquier jinete, muy robusto, muy ancho. </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/azteca.png" alt="">
                </section>

                <!Producto 3>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>CUARTO DE MILLA</b><br> Edad: <b>5 años</b><br> Color: <b>Alazan</b><br> Alzada: <b>1.50 a la cruz</b><br> Precio: <b>$42,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>SÚPER MANSITO, UNA MÁQUINA DE MÚSCULOS, CALIDAD PREMIUM, NOBLE, CUALQUIER JINETE,</u> ideal para cualquier deporte, equitación o cabalgatas (Castrado). </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/cuartodemilla.png" alt="">
                </section>

                <!Producto 4>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>CUATRO DE MILLA</b><br> Edad: <b>1 año</b><br> Color: <b>Prieto zaino</b><br> Alzada: <b>1.30 a la cruz</b><br> Precio: <b>$26,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>HERMOSO POTRILLO PRIETO Z, EXCELENTE LÍNEA AMERICANA, CALIDAD PREMIUM,</u> muy lucido grande, líneas de conformación, ideal para cualquier deporte, equitación o futura reproducción.</h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/cuartodemilla2.png" alt="">
                </section>

                <!Producto 5>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>BURRITO SICILIANO</b><br> Edad: <b>3 años</b><br> Color: <b>Prieto</b><br> Alzada: <b>0.80 a la cruz</b><br> Precio: <b>$26,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>HERMOSO BURRITO SICILIANO O BURRITO PONY, EXCELENTE LÍNEA, YA NO CRECE, CALIDAD PREMIUM, ENTERTO.</u> </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/burrito.png" alt="">
                </section>

                <!Producto 6>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>ESPAÑOLA</b><br> Edad: <b>1 año 6 meses</b><br> Color: <b>Moro Carbonero</b><br> Alzada: <b>1.50 a la cruz</b><br> Precio: <b>$52,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>HERMOSA POTRANCA ESPAÑOLA, CALIDAD PREMIUM, HIJA DE SEMENTAL IMPORTADO, MANSA, SOLO MANEJO A PIE</u> fuerte, ancha.<br> Ideal para futura reproducción.</h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/espanola.png" alt="">
                </section>

                <!Producto 7>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>TORO AMERICANO CRUZA CON CEBU EUROPEO</b><br> Edad: <b>5 años</b><br> Color: <b>Tordillo moteado</b><br> Alzada: <b>1.60 a la cruz</b><br> Precio: <b>$45,000 MXN</b><br> 
                            <i>Descripción:</i><br> <u>TORO IDEAL PARA JARIPEO, CON BUENOS MOVIMIENTO Y MUY VELOZ, FACIL DE MANEJAR A PIE, ÚNICO EN SU TIPO EN MÉXICO, TORO JUGADO EN ARENAS GRINGAS.</u> </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/toro.png" alt="">
                </section>
                
                <!>
                <section class="contenido-slider">
                    <div>
                        <h2>Raza: <b>CUFRISIAN</b><br> Edad: <b>4 años y medio</b><br> Color: <b>Negro</b><br> Alzada: <b>1.58 a la cruz</b><br> Precio: <b>$95,500 MXN</b><br> 
                            <i>Descripción:</i><br> <u>POTRO FRISIÓN CON CUARTO DE MILLA, LÍNEAS HOLANDESAS,</u> Padre Importado de Holanda, Madre Americana.<br> Buen carácter, mansito cualquier jinete, muy robusto, muy ancho, partido de anca. </h2>
                            <button onclick="test()"> Me interesa </button>
                    </div>    
                        <img src="img/cuafrisian.png" alt="">
                </section>

            </div>
        </div>
        <script src="js/product.js"></script>
        <script src="js/pantalla.js">                   
        </script>
        <script>
        function test(){
        $.ajax({url:"proceso.php", success:function(result){
        $("div").text(result);}
        })
}
</script>
        
    </body>
    <footer>
        <p>©Copyright 2050 by nobody. All rights reversed.</p>
    </footer>
</html>
