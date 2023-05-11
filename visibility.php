<?php 


class motor {
    private $merk;
    public $nama;

    public function tampilNama(){
        echo $this->merk = "Honda";
        echo '&nbsp;';
        echo $this->nama = "Vario";
    }
}

$motor = new motor;
echo $motor->tampilNama();

?>