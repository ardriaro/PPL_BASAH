<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ppl";

$k = new mysqli($server, $username, $password, $database);

if ($k->connect_error) {
    die("Connection failed: " . $k->connect_error);
}

class database{
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $database = "ppl";
    public $koneksi;

    function __construct(){
        $this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->database);

        if ($this->koneksi->connect_error){
            die("Connection failed: " . $this->koneksi->connect_error);
        }
    }

    function tampil_profile(){
        $data = $this->koneksi->query("select * from profile");
        $hasil = array();

        while ($k = $data->fetch_assoc()) {
            $hasil[] = $k;
        }

        return $hasil;
    }
    
    
    public function inputprofile($id, $nama, $username, $email, $tgl_lahir, $jenis_kelamin, $no_ponsel, $no_rekening)
    {
        $query = "INSERT INTO profile (nama, username, email, tgl_lahir, jenis_kelamin, no_ponsel, no_rekening) 
                  VALUES ('$nama', '$username', '$email', '$tgl_lahir', '$jenis_kelamin', '$no_ponsel', '$no_rekening')";
        return $this->koneksi->query($query);
    }
    
}