<?php 

interface infoProduk{
	 public function getInfoProduk () ;
}

Abstract class Produk {
protected  $jadul, 
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

abstract public function getInfo() ;



	}


class komik extends Produk  implements infoProduk{
	public $jmlHalaman;

	public function __construct($judul= "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0 ) {

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;



	}

 public function getInfo() {
$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";


return $str;
	# code...
} 


	public function getInfoProduk() {
		$str = "komik :  " . $this->getInfo(). " - {$this-> jmlHalaman} Halaman. ";
		return $str;

	}

}

class game extends Produk implements infoProduk {
	public $waktuMain;

	public function __construct($judul="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga );
		$this->waktuMain = $waktuMain ;
	}


 public function getInfo() {
$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";


return $str;
	# code...
} 


	public function getInfoProduk() {
		$str = "game : ". $this->getInfo()." - {$this-> waktuMain} jam. ";
		return $str;

	}

}



class CetekInformasiProduk {
	public $daftarProduk = array();

	public function tambahProduk(Produk $Produk){
		$this->daftarProduk[] = $Produk;
	}
	public function cetak () {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p ) {
			$str .= "-{$p ->getInfoProduk()} <br>";
			# code...
		}

		return $str;
	}
}




$Produk1 = new komik("Naruto","Masashi Kishimoto","shonen jump",30000, 100);
$Produk2 = new game("uncharted","Neil Druckmann","Sony Computer",250000,50);
 

$cetakProduk = new CetekInformasiProduk();
$cetakProduk->tambahProduk($Produk1);
$cetakProduk->tambahProduk($Produk2);
echo $cetakProduk->cetak();



 ?>