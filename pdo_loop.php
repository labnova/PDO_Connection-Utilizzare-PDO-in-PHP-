<?php

require_once 'includes/pdo_connect.php';


$sql= 'SELECT name, meaning, gender FROM names ORDER BY name';

$result= $db->query($sql);
$numRows= $result->rowCount();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Looping su una query SELECT</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Looping su una query SELECT</h1>

	<?php if (isset($error)) {
		echo "<p>$error</p>";
	}

echo "<p>Totale dei risultati: $numRows.</p>"
?>
<table>
	<tr>
		<th>Colonna</th>
		
	</tr>
	<?php while($col=$result->fetch()) { ?> 
	<tr>
		<td><?php echo $col ?></td>
	</tr>

	<?php } ?>
</table>


</body>

</html>