<?php
if(isset($_POST['asunto'])&& !empty($_POST['asunto'])&&
isset($_POST['mensaje'])&&!empty($_POST['mensaje']))
{
  $destino = "juanvcr@outlook.com";
  $desde = "from:". "Hostinger";
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  $nombre = $_POST['nombre'];
  mail($destino,$asunto,$mensaje."Enviado por ".$nombre,$desde);
  echo "correo enviado";

}else{
  echo "Problemas al enviar";
}
?>