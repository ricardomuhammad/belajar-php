<?php
class Mahasiswa {
    public string $nama = "";
    public string $nim = "";
 
    public function tampilProfil(): string {
        return $this->nim . " - " . $this->nama;
    }
}
 
$m1 = new Mahasiswa();
$m1->nama = "Ricardo";
$m1->nim = "2025001";
 
$m2 = new Mahasiswa();
$m2->nama = "Asep";
$m2->nim = "2025002";
 
echo $m1->tampilProfil() . "<br>";
echo $m2->tampilProfil();
