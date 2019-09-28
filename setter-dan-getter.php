<?php 

class Produk {
private  $jadul, 
		$penulis, 
		$penerbit,
		$harga,
		$diskon = 0; 




public function __construct( $judul="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
$this->judul = $judul;
$this->penulis = $penulis; 
$this->penerbit = $penerbit;
$this->harga = $harga;



}

public function setJudul($judul) {
	$this->judul = $judul;
}


public function getJudul(){
	return $this->judul;
}

public function setPenulis($penulis) {
	$this->penulis = $penulis;
}


public function getPenulis(){
	return $this->penulis;
}


public function setPenerbit($penerbit) {
	$this->penerbit = $penerbit;
}


public function getPenerbit(){
	return $this->penerbit;
}

public function setHarga( $harga) {
	$this->harga = $harga;
}

	public function setDiskon($diskon){
	$this->diskon = $diskon;
}

	public function getDiskon(){
		return $this-> diskon;
	}

	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon / 100);
	}


public function getLabel() {
	return "$this->penulis, $this->penerbit";
	}


public function getInfoProduk () {
$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";


return $str;
	# code...
} 
	}


class komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul= "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0 ) {

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;



	}



	public function getInfoProduk() {
		$str = "komik :  " . parent::getInfoProduk() . " - {$this-> jmlHalaman} Halaman. ";
		return $str;

	}

}

class game extends Produk {
	public $waktuMain;

	public function __construct($judul="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga );
		$this->waktuMain = $waktuMain ;
	}





	public function getInfoProduk() {
		$str = "game : ". parent::getInfoProduk()." - {$this-> waktuMain} jam. ";
		return $str;

	}

}



class CetekInformasiProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()}  (Rp. {$Produk->harga})";
		return $str;
	}
}




$Produk1 = new komik("Naruto","Masashi Kishimoto","shonen jump",30000, 100);
$Produk2 = new game("uncharted","Neil Druckmann","Sony Computer",250000,50);
 


echo$Produk1->getInfoProduk();
echo"<br>";
echo$Produk2->getInfoProduk();
echo "<hr>";

$Produk2->setDiskon (50) ;

echo $Produk2->getharga();

echo "<hr>";

$Produk1->setPenulis("Azhar");
echo $Produk1->getPenulis();

 ?>