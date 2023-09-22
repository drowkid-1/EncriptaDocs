<?php
# Ruta para la API de Telegram
$path = "https://api.telegram.org/bot6686765590:AAGthHvD1Mul1ozEVVFgMVzhxtF6Seotjls";
# Leemos los datos que se envian
$update = json_decode(file_get_contents("php://input"), TRUE);
# identificamos el Chat Id
$chatId = $update["message"]["chat"]["id"];
# Identificamos el mensaje
$message = $update["message"]["text"];
# Si el mensaje es /hola le enviamos una respuesta al Chat
if (strpos($message, "/menu") === 0) {
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=|x| SIN ACCESO |x|");
}
#Si el mensaje es /bien le enviamos Otra Respuesta
else if (strpos($message, "/bien") === 0) {
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Bien igualmente!");
}
# En caso de cualquier otra cosa enviamos Una respuesta diferente
else{
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Bienvenido a PHPZilla Bot by Evilnapsis!");
}
?>
