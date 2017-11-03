<?php
session_start() ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>DH - Proyecto</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/fonts.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/faqs.css">
   <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">
   <title>Sale de invierno</title>
   <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>

</head>
  <body>
    <!--................... Header............................ -->
    <?php include('header.php') ?>
        <!-- ................fin Header.................. -->
    <div class="margen-arriba">
    </div>
    <div class="contenedor-faqs">

      <br>
    <h2>PREGUNTAS FRECUENTES</h2>
    <br>

    <input type="checkbox" id="comprar" value="">
    <label for="comprar">  <p class="pregunta" id="arriba">¿Cómo comprar en Hugo Sajama?</p>
    </label>
      <div class="respuesta" id="como-comprar">
        <p>En primer lugar, tenés que registrarte en nuestro sitio.</p>
        <p>Podés encontrar tus productos utilizando la barra de categorías localizada en la parte Izquierda del sitio.</p>
        <p>También podés realizar la búsqueda ingresando la palabra clave o marca en nuestro buscador.</p>
        <p>Hace Click en la foto del producto que te gusta para acceder a los detalles del mismo.</p>
        <p>Elegí tu talle y hacé click en Comprar.</p>
      </div>


    <input type="checkbox" id="preg-crear-cuenta" value="">
    <label for="preg-crear-cuenta"><p class="pregunta">¿Cómo creo una cuenta en Hugo Sajama?</p></label>
    <div class="respuesta" id="crear-cuenta">
      <p >Para registrarte en nuestro sitio seguí los siguientes pasos:</p>
      <p>Crea tu cuenta haciendo click <a href="registro.html">aqui</a></p>
      <p>Hacé click en Ingresá.</p>
      <p>En "Nuevos Clientes" completá el formulario con tus datos personales y creá tu cuenta. Hugo Sajama posee una política de privacidad por la cual ningún dato personal será divulgado a terceros bajo ninguna circunstancia.</p>

    </div>

    <input type="checkbox" id="preg-pago" value="">
    <label for="preg-pago"><p class="pregunta">¿Cuáles son los medios de pago?</p></label>
    <div class="respuesta" id="medios-de-pago">
      <p > Los medios de pago son:</p>
      <p>-Mercado Pago, Tarjetas de Crédito (acuerdos bancarios y tasas de financiación a cargo de Mercado Libre S.A.)</p>
      <p>-Transferencia bancari.</p>
      <p>- Todo Pago: hasta 3 CUOTAS sin interés con cualquier tarjeta de crédito y en 1 CUOTA con tarjeta de débito</p>
    </div>

    <input type="checkbox" id="preg-fact-a" value="">
    <label for="preg-fact-a">  <p class="pregunta">¿ENTREGAN FACTURA “A” </p></label>
    <p class="respuesta" id="fact-a">Por el momento no podemos emitir ese tipo de factura.</p>

    <input type="checkbox" id="preg-envios-desde" value="">
    <label for="preg-envios-desde"><p class="pregunta">¿Puedo hacer envíos desde cualquier parte del país? </p></label>
    <p class="respuesta" id="envios-desde"> Si, realizamos los envíos por medio de la empresa DHL. Los mismos llegan directamente al domicilio que selecciones al momento de realizar la compra.
    </p>

    <input type="checkbox" id="preg-chequear-pedido" value="">
    <label for="preg-chequear-pedido"><p class="pregunta"> ¿Se puede chequear el estado del pedido? </p></label>
    <p class="respuesta" id="chequear-pedido">Al procesar tu compra te enviaremos una confirmación por mail junto con el número de guía para que puedas hacer el seguimiento del mismo ingresando a la web de DHL ( www.dhl.com.ar )y Andreani (http://seguimiento.andreani.com/) respectivamente.</p>

    <input type="checkbox" id="preg-nadie-pedido" value="">
    <label for="preg-nadie-pedido"><p class="pregunta"> ¿QUÉ PASA SI NO HAY NADIE CUANDO TRAEN MI PEDIDO? </p></label>
    <p class="respuesta" id="nadie-pedido">Si no hay nadie en el domicilio que nos indicaste, el correo regresará a las 48 horas. En caso de no encontrar a nadie, deberás dirigirte al centro de distribución asignado a tu pedido dentro de las 72 horas con tu DNI y el código que te enviamos (tracking number).</p>

    <input type="checkbox" id="preg-recibe-otro" value="">
    <label for="preg-recibe-otro"><p class="pregunta"> ¿PUEDE RECIBIR EL PAQUETE OTRA PERSONA? </p></label>
    <p class="respuesta" id="recibe-otro"> Sí, puede recibir un tercero mostrando su DNI.</p>

    <input type="checkbox" id="preg-devoluciones" value="">
    <label for="preg-devoluciones"><p class="pregunta">¿Puedo cambiar o devolver un producto?</p></label>
    <div class="respuesta" id="devoluciones">
      <p > . Coordinando con nuestro Centro de Atención al Cliente para entregarlo en un Sucursal del correo Andreani o que este pase a retirar tu producto por tu domicilio:</p>
      <p>Cuando el pedido llegue a nuestro depósito, generaremos una eCard por el monto que abonaste para que elijas la prenda que mas te guste! La eCard podrá ser utilizada únicamente para realizar otra compra online y el envío será bonificado. Tenes 6 meses de vigencia para poder utilizarla.</p>
      <p>También podemos gestionar el cambio por una nueva prenda o la devolución de tu dinero. *</p>
    </div>

    <input type="checkbox" id="preg-mayorista" value="">
    <label for="preg-mayorista"><p class="pregunta"> ¿HACEN VENTAS MAYORISTAS? </p></label>
    <p class="respuesta" id="mayorista">Si deseás hacer una compra mayorista comunicate con nosotros: 151515155.</p>

    <input type="checkbox" id="preg-contacto" value="">
    <label for="preg-contacto"><p class="pregunta"> Contacto </p></label>
    <div class="respuesta" id="contacto">
      <p > Email: contacto@hugosajama.com</p>
      <p>Teléfono: 15151515155</p>
    </div>

        </div>

        <?php include('footer.php') ?>
  </body>
</html>
