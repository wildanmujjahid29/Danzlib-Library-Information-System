<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Koneksi
$conn = mysqli_connect('127.0.0.1:3307','root','','danzlib');

// Login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$pass'");
    $hitung = mysqli_num_rows($check);

    if($hitung > 0){
        // Jika berhasil login
        $_SESSION['login'] = 'True';
        $_SESSION['username'] = $username;
        header('location:index.php');
    } else {
        // Gagal login
        echo '
        <script>
            alert("Username atau Password salah!");
            window.location.href="login.php";
        </script>
        ';
    }
}

?>
