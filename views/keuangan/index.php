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
	$sql = "SELECT waktu_transaksi FROM transaksi";
	$sql0 = "SELECT Sum(harga_jual * jumlah_beli) FROM obat, transaksi_obat group by id_transaksi";
	$sql1 = "SELECT Sum(harga_beli) FROM obat";
	$sql2 = "SELECT Sum(harga_jual * jumlah_beli) - Sum(harga_beli) FROM obat, transaksi_obat group by id_transaksi";
	$result = $conn->query($sql);
	$result0 = $conn->query($sql0);
	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	
	if ($result->num_rows > 0) {
		// output data of each row
		echo "Waktu" . " Omset " . " Harga Beli "." Keuntungan "."<br>";
		while($row = $result->fetch_assoc()) {
			echo " " . $row["waktu_transaksi"];
		}
		while($row = $result0->fetch_assoc()) {
			echo " " . $row["Sum(harga_jual * jumlah_beli)"];
		}
		while($row = $result1->fetch_assoc()) {
			echo " " . $row["Sum(harga_beli)"];
		}
		while($row = $result2->fetch_assoc()) {
			echo " " . $row["Sum(harga_jual * jumlah_beli) - Sum(harga_beli)"];
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
?>