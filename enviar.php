<?phph
$mail='cosmeticosgybsua@gmail.com';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos' ];
$ciudad = $_POST['cuidad'];
$email = $_POST['email'];
$thank="email.html";
$message = "(este es el encargado de redactar el mensaje que va hacer enviados.)
nombre:".$nombre."
apellidos:".$apellidos."
ciudad:".$ciudad."
email:".$email."
if (mail($mail,·formulario curso",$message))
Header ("Location: $thank );
?>