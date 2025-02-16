<?php
require_once 'user.php';

class Operator extends User {
    public function __construct($username, $password, $nama_lengkap) {
        parent::__construct($username, $password, $nama_lengkap, 'operator');
    }

      public function viewAllSiswa() {
        $sql = "SELECT * FROM users WHERE role = 'siswa'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Nama: " . $row['nama_lengkap'] . " - Username: " . $row['username'] . "<br>";
            }
        } else {
            echo "Tidak ada data siswa.";
        }
    }

    // Fungsi untuk menghapus siswa
    public function deleteSiswa($username) {
        $sql = "DELETE FROM users WHERE username = '$username' AND role = 'siswa'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Data siswa berhasil dihapus.";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    // Fungsi untuk memperbarui data siswa
    public function updateSiswa($username, $newName) {
        $sql = "UPDATE users SET nama_lengkap = '$newName' WHERE username = '$username' AND role = 'siswa'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Data siswa berhasil diperbarui.";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    // Fungsi untuk menambah siswa
    public function addSiswa($username, $password, $nama_lengkap) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, nama_lengkap, role) VALUES ('$username', '$password_hash', '$nama_lengkap', 'siswa')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Siswa berhasil ditambahkan.";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }
}
?>