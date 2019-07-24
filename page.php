/*Se adaptará para utilizarlo luego con el dominio*/

<?php
$name = $_POST[name];
$email = $_POST['email'];
$message = $_POST['message'];

echo $name;

if(mail('adriana.vargas04@hotmail.es', $name, $email, $message))
{
  echo "mail enviado";
}
else{
  echo "no se pudo enviar el email";
}
?>
