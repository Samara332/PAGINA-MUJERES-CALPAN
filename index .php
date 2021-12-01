<!DOCTYPE html>
<?php
    $file ='login.json';
    $exists = is_file( $file );
    if ($exists == true) {
        $datos_c= file_get_contents("login.json");
        $json_datos = json_decode($datos_c, true);
        $m=count($json_datos);
        for ($i = 1; $i < $m; $i++) {
          $usuarios[$i-1]=$json_datos[$i][0];
          $contraseña[$i-1]=$json_datos[$i][1];
        }
    } elseif ($exists == false) {
      $dato1=array(array("us", "cont"));
        $json_string = json_encode($dato1);
        $file = 'datos.json';
        file_put_contents($file, $json_string);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($json_datos);?>;
    /* Mostramos los valores del array
    for(var i=0;i<arrayJS.length;i++)
    {
        document.write("<br>"+arrayJS[i]);
    }*/
</script>
    <script src="script2.js"></script>
    <div class="header" >
        <div class="cheadh">
          <h1>Mujeres de Calpan</h1>
        <br>
        <p>Usuario:<input id="usuario" type="text"></p>
        <p id="cambio"></p>
        <p id="cambio2"></p>
        <p id="cambio3"></p>
        <p>Contraseña:<input id="contr" type="password"></p>
        <p>
        <input type="button" value="Ingresar" onclick="ingresar(arrayJS)">
        <p>
        <a href="nuevo.html">Nuevo usuario</a>
        <p></p></div>
      </div>

      
</body>
</html>