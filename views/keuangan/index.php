<!-- <?php
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
	$sql = "Select * from keuangan";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		echo " Waktu " . " Omset " . " Harga Beli "." Keuntungan "."<br>";
		while($row = $result->fetch_assoc()) {
			echo " " .$row["tanggal"]." ".$row["omzet"]." " .$row["harga_pokok"]." " .$row["laba"]."<br>";
		}
		
	} else {
		echo "0 results";
	}
	
	$conn->close();
?> -->
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keuangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuangan-index">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'omzet',
            'harga_pokok',
            'laba',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
