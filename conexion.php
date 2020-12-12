<?php
include("datos.php");


try{
	$pdo=new PDO('mysql:host='.$host.';dbname='.$bd,$usuario,$clave);
	
}
catch(PDOException $e){
	echo $e->getMessage();
}



?>

<html lang="en">
<head><meta charset="UTF-8">

	<title>LOGIN</title>
</head>
<body>
	
</body>
</html>