<?php
function generateRandomString($length = 10){
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = "";
    for ($i = 0; $i <= $length; $i++){
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai){
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai;

    public function __construct($nrp, $nama){
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->daftarNilai = [];
    }

    public function addNilai($mapel, $nilai){
        $this->daftarNilai[] = new Nilai($mapel, $nilai);
    }
}

$siswa1 = new Siswa('1234567', 'Siswa 1');
$siswa1->addNilai('inggris', 100);

for ($i = 0; $i < 10; $i++) {
    $nama = generateRandomString(10);
    $mapel = ['Inggris', 'Matematika', 'Sosial'][rand(0, 2)];
    $nilai = rand(0, 100);

    $siswa = new Siswa(strval($i + 100000000), $nama);
    $siswa->addNilai($mapel, $nilai);

    echo "NRP: {$siswa->nrp}<br>";
    echo "Nama: {$siswa->nama}<br>";
    echo "Mapel: {$siswa->daftarNilai[0]->mapel}<br>";
    echo "Nilai: {$siswa->daftarNilai[0]->nilai}<br>";
    echo "<br>";
}