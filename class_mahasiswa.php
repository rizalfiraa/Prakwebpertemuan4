<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $angkatan;
    public $prodi;
    public $ipk;

    public function __construct($nim, $nama, $angkatan, $prodi, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->angkatan = $angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function getPredikat() {
        if ($this->ipk >= 3.75) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.00) {
            return "Sangat Memuaskan";
        } elseif ($this->ipk >= 2.50) {
            return "Memuaskan";
        } else {
            return "Cukup";
        }
    }
}
?>