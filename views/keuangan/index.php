<!DOCTYPE html>
<html>
<head>
<style>
table, th, tr, td {
    border: 2px solid black;
	background-color:#00cbff;
	text-align:center;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apotekrpl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	// Perform queries 
	$sql = "Select sum(harga_jual * jumlah_beli), DATE(transaksi.waktu_transaksi), Sum(harga_beli),
	Sum(harga_jual * jumlah_beli) - Sum(harga_beli)	from transaksi, obat group by DATE(transaksi.waktu_transaksi)";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		echo "<padding=100px>";
		echo "<table style='width:70%;' ><tr><th>Waktu</th><th>Omset</th><th>Harga Beli</th><th>Keuntungan</th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" .$row["DATE(transaksi.waktu_transaksi)"]."</td><td>".$row["sum(harga_jual * jumlah_beli)"]."</td><td>" 
			.$row["Sum(harga_beli)"]."</td><td>" .$row["Sum(harga_jual * jumlah_beli) - Sum(harga_beli)"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	
	$conn->close();
?>

</body>
</html>