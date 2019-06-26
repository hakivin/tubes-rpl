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
	$sql = "Select sum((select harga_jual from obat where kode_obat = transaksi.kode_obat) * jumlah_beli), DATE(transaksi.waktu_transaksi), Sum(harga_beli),
	Sum(harga_jual * jumlah_beli) - Sum(harga_beli)	from transaksi, obat group by DATE(transaksi.waktu_transaksi)";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		echo "Waktu" . "Omset" . " Harga Beli "." Keuntungan "."<br>";
		while($row = $result->fetch_assoc()) {
			echo " " .$row["DATE(transaksi.waktu_transaksi)"]." ".$row["sum((select harga_jual from obat where kode_obat = transaksi.kode_obat) * jumlah_beli)"]." " 
			.$row["Sum(harga_beli)"]." " .$row["Sum(harga_jual * jumlah_beli) - Sum(harga_beli)"]."<br>";
		}
		
	} else {
		echo "0 results";
	}
	
	$conn->close();
?>