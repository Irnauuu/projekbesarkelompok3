<?php

//nama kelas harus sama dengan nama file
//class dalam pbo adalah blueprint atau prototipe dari sebuah objek
class C_Koneksi {

    // ini adalah fungsi atau method yang kita beri nama conn yang dimana fungsi ini akan terkoneksi ke database project_penginapan

    public function conn(){
        $conn = mysqli_connect('localhost','root','','db_pegawai');

        if (!$conn) {
           die("koneksi gagal:" . mysqli_connect_error());
         }else {
            return $conn;
            // echo "koneksi berhasil";
         }
    }

}
// instansiasi objek atau membuat objek 
// $conn tipe object
$conn = new C_Koneksi();
//cara memanggil fungsi atau method yang ada di dalam class
$conn->conn();

?>