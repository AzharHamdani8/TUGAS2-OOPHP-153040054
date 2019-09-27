<?php 

class Produk {
public  $jadul, 
		$penulis, 
		$penerbit, 
		$harga,
		$jmlHalaman,
		$waktuMain ;


public function __construct( $judul="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
$this->judul = $judul;
$this->penulis = $penulis; 
$this->penerbit = $penerbit;
$this->harga = $harga;
$this->jmlHalaman = $jmlHalaman;
$this->waktuMain = $waktuMain;


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
	public function getInfoProduk() {
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this-> jmlHalaman} Halaman. ";
		return $str;

	}

}

class game extends Produk {
	public function getInfoProduk() {
		$str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this-> waktuMain} jam. ";
		return $str;

	}

}



class CetekInformasiProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()}  (Rp. {$Produk->harga})";
		return $str;
	}
}




$Produk1 = new komik("Naruto","Masashi Kishimoto","shonen jump",30000, 1000, 0);
$Produk2 = new game("uncharted","Neil Druckmann","Sony Computer",250000,0,50);
 


echo$Produk1->getInfoProduk();
echo"<br>";
echo$Produk2->getInfoProduk();




 ?>