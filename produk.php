<?php 

class Produk {
public $jadul ="judul", 
$penulis = "penulis", 
$penerbit = "penerbit", 
$harga = "0";

public function getLabel() {
	return "$this->penulis, $this->penerbit";
	}



}

// $Produk1 = new Produk();
// $Produk1->judul="Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = "uncharted";
// $Produk2->tambahProperty="hahaha";

// var_dump($Produk2);


$Produk3 = new Produk();
$Produk3->judul = "Naruto";
$Produk3->penulis ="Masashi Kishimoto";
$Produk3->penerbit = "shonen jump";
$Produk3->harga = 30000;

// echo "Komik : $Produk3->penulis, $Produk3->penerbit ";
// echo"<br>";
 // echo$Produk3->getLabel();


 // echo"<hr>";

 $Produk4 = new Produk();
 $Produk4->judul ="uncharted";
 $Produk4->penulis = "Neil Druckmann";
 $Produk4->penerbit ="Sony Computer";
 $Produk4->harga= 250000;

 echo "komik  : " . $Produk3->getLabel();
 echo "<br>";
 echo "Game : " .$Produk4->getLabel();




 ?>