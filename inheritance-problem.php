<?php 

class Produk {
public  $jadul, 
		$penulis, 
		$penerbit, 
		$harga,
		$jmlHalaman,
		$waktuMain ;


public function __construct( $judul="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
$this->judul = $judul;
$this->penulis = $penulis; 
$this->penerbit = $penerbit;
$this->harga = $harga;
$this->jmlHalaman = $jmlHalaman;
$this->waktuMain = $waktuMain;
$this->tipe = $tipe;

}

public function getLabel() {
	return "$this->penulis, $this->penerbit";
	}


public function getInfoLengkap () {
$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
if ($this->tipe == "komik") {
	$str .= "- {$this->jmlHalaman} Halaman.";
}else if ($this->tipe == "Game") {
	$str .="~ {$this->waktuMain} jam.";
	# code...
}

return $str;
	# code...
} 
	}




class CetekInformasiProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()}  (Rp. {$Produk->harga})";
		return $str;
	}
}




$Produk1 = new Produk("Naruto","Masashi Kishimoto","shonen jump",30000, 1000, 0, "komik");
$Produk2 = new Produk("uncharted","Neil Druckmann","Sony Computer",250000,0,50, "Game");
 

//  echo "komik  : " . $Produk1->getLabel();
//  echo "<br>";
//  echo "Game : " .$Produk2->getLabel();
//  echo"<br>";
 
// $infoProduk1 = new CetekInformasiProduk();
// echo $infoProduk1->cetak($Produk1);
echo$Produk1->getInfoLengkap();
echo"<br>";
echo$Produk2->getInfoLengkap();




 ?>