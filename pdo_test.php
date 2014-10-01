<?php

 error_reporting(E_ALL);
 ini_set('display_errors', 1);

try {
	require_once 'includes/pdo_connect.php';
} catch(Exception $e) {
	$error= $e->getMessage();
}


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Connessione al database con PDO</title>
</head>
<body>
	<h1>Connessione con PDO</h1>

	<?php if($db) {
		echo "<p>connessione stabilita</p>";
	} elseif (isset($error)) {
		echo "<p>$error</p>";
	}

?>

</body>

</html>