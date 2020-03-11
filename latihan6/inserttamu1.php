<?php
include "konektor.php";
$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI)
VALUES ('Zabrina Tuzzahra', 'Zabrina@gmail.com', 'Pinjam Majalah')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>