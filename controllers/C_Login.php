<?php
session_start();
include_once 'C_koneksi.php';

// buat file di folder controller, nama filenya C_Login.php
// 1. di dalam  file tersebut memiliki 2 fungsi atau method
// 2. login
 
// ini adalah kelas login
class C_Login {

    // untuk windows, MCOS, ubuntu
    // ini adalah fungsi atau method untuk memasukan ke dalam tabel users
     function register($nama, $email, $pass, $role){

        // instansiasi object atau membuat object dari class C_koneksi
        $conn = new C_koneksi();


        // ini adalah perintah untuk memasukan data ke dalam tabel user
        $sql = "INSERT INTO user VALUES (null,'$nama','$email','$pass','$role',null)";
        // ini exsekutornya
       $query =  mysqli_query($conn->conn(), $sql);

       if ($query) {
            echo "data tidak gagal ditambahkan";
       }else{
        echo "data gagal ditambahkan";
       
       }

    }


     //  ini fungsi untuk menangani login untuk user
    function login($email=null, $pass=null){
        
        // ini membuat sebuah variabel yang bertipe data objek dari kelas koneksi
        $conn = new C_koneksi();

        // untuk mengecek tombol login sudah di klik/tekan oleh user
        if (isset($_POST['login'])) {

            //perintah untuk memanggil semua data dari tabel user berdasarkan email yang diinputkan oleh user
            $sql = "SELECT * FROM user WHERE email = '$email'";

            //eksekutor perintah diatas
            $query =  mysqli_query($conn->conn(), $sql);

            // assoc = array asosiatif 
            $data = mysqli_fetch_assoc($query);
            
            // array biasa ->key/index nya berupa angka, dimulai dari 0- tak terhingga
            // $data2 = mysqli_fetch_array($query);

            // untuk mengecek apakah ada data dari hasil $query 
            if ($data) {
                // ini menggunakan array asosiatif
                // untuk membndingkan inputan password dari user dengan password dari tabel user
                if (password_verify($pass, $data['password'])) {
                    // untuk mengecek pengguna sebagai admin
                    if ($data['role'] == 'admin') {

                    // membuat varial session yang nantinya akan digunakan pada halaman home admin/login sebagai admin
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data ["role"];


                        // jika login berhasil dan role nya sebagai admin maka akan berpindah ke halaman home

                        header("location: ../views/home.php");
                        exit;

                    //  untuk mengecek pengguna sebagai admin
                    }elseif ($data['role']== 'user') {
                        // membuat varial session yang nantinya akan digunakan pada halaman home admin/login sebagai user
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data ["role"];


                        // jika login berhasil dan role nya sebagai user maka akan berpindah ke halaman home

                        header("Location: ../views/home_user.php");
                        exit;

                    // untuk role pengguna bukan sebagai admin dan user
                    }else {
                        echo "<script>alert ('login gagal !!! silahkan cek email');window.location='../index.php'</script>";
                    }

             // jika kondisi tidak terpenuhi pada baris pengecekan password
            } else {
                // echo "<script>alert ('login gagal !!! password salah');window.location='../index.php'</script>";
            }
        }
    }
        
        function logout(){
            //menghentikan session 
        session_destroy();

        header("Location: ../index.php");
        exit;
    }
}
}


?>