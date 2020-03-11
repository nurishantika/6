<?php
include 'konektor.php';
$sql = "SELECT 	*  FROM buku_tamu";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title> Buku Tamu </title>
</head>
<body>
<table border="1" width="1000" cellpadding="5" cellspacing="" align="center">
	<tr>
		<th width="100"> ID </th>
		<th width="200"> NAMA </th>
		<th width="400"> EMAIL </th>
		<th width="300"> ISI </th>
	</tr>
	<?php
	while($hasil = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$hasil['ID_BT']."</td>";
		echo "<td>".$hasil['NAMA']."</td>";
		echo "<td>".$hasil['EMAIL']."</td>";
		echo "<td>".$hasil['ISI']."</td>";
		echo "</tr>";
	}
	?>
</table>
</body>
</html>