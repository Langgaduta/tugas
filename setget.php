<?php 

    class motor{
        private $merk;
        public $nama;
        protected $jenis;


        // setter
        public function setMerk($merk){
            $this->merk = $merk;
        }
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function setJenis($jenis){
            $this->jenis = $jenis;
        }

        //getter
        public function getMerk(){
            return $this->merk;
        }
        public function getNama(){
            return $this->nama;
        }
        public function getJenis(){
            return $this->jenis;
        }

    }

    $motor1 = new motor;
    $motor1->setMerk("Yamaha");
    $motor1->setNama("Mio");
    $motor1->setJenis("Matic");

    $motor2 = new motor;
    $motor2->setMerk("Honda");
    $motor2->setNama("Cbr");
    $motor2->setJenis("Manual");



    echo "Merk : ". $motor1->getMerk();
    echo "<br>";
    echo "Nama : ". $motor1->getNama();
    echo "<br>";
    echo "Jenis : ". $motor1->getJenis();
    echo "<br>";
    echo "<br>";
    echo "Merk : ". $motor2->getMerk();
    echo "<br>";
    echo "Nama : ". $motor2->getNama();
    echo "<br>";
    echo "Jenis : ". $motor2->getJenis();


?>
