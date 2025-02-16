<?php
class User {
    protected $conn;
    protected $username;
    protected $password;
    protected $role;
    protected $nama_lengkap;

    public function __construct($username, $password, $nama_lengkap, $role) {
        $this->username = $username;
        $this->password = $password;
        $this->nama_lengkap = $nama_lengkap;
        $this->role = $role;

        // Koneksi ke database
        $this->conn = new mysqli('localhost', 'root', '', 'ppdb');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function register() {
        $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, nama_lengkap, role) VALUES ('$this->username', '$password_hash', '$this->nama_lengkap', '$this->role')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Registrasi berhasil untuk " . $this->role;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function login() {
        $sql = "SELECT * FROM users WHERE username = '$this->username'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($this->password, $row['password'])) {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                $_SESSION['role'] = $row['role'];

                if ($row['role'] == 'operator') {
                    header("Location: operator_dashboard.php");
                } elseif ($row['role'] == 'siswa') {
                    header("Location: siswa_dashboard.php");
                }
                exit();
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Username tidak ditemukan!";
        }
    }
}
?>
