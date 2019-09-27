<?php 

class Produk {
public $jadul ="judul", 
$penulis = "penulis", 
$penerbit = "penerbit", 
$harga = "0";

public function __construct( $judul, $penulis, $penerbit, $harga) {
$this->judul = $judul;
$this->penulis = $penulis; 
$this->penerbit = $penerbit;
$this->harga = $harga;

}

public function getLabel() {
	return "$this->penulis, $this->penerbit";
	}



}




$Produk1 = new Produk("Naruto","Masashi Kishimoto","shonen jump",30000);
$Produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",250000);
 

 echo "komik  : " . $Produk1->getLabel();
 echo "<br>";
 echo "Game : " .$Produk2->getLabel();
 contoh



 ?>