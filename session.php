<?php
session_start();
include 'koneksi.php';
if (isset($_POST['username']) AND isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);   
    $login = mysqli_query($dbc, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            echo "<script>alert('login berhasil');window.location='dashboard.php'</script>";
    }
    else
    {
        echo "<script>alert('login gagal username/password salah!');window.location='index.php'</script>";
    }
}
?>