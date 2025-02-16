<?php
require_once 'User.php';

class Siswa extends User {
    public function __construct($username, $password, $nama_lengkap) {
        parent::__construct($username, $password, $nama_lengkap, 'siswa');
    }

    // Fungsi khusus untuk siswa (jika diperlukan)
}
?>