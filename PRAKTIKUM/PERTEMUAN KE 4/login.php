<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['remember'])) {
      if (!empty($username && $password)){
        session_start();
        //inisialisasi variable sesi, varable session di satu halaman dapat diakses dihalaman lainnya
        $_SESSION['username'] = $username ;
        $_SESSION['password'] = $password ;
        header ("location:data.php");
      } else {
        echo "<script> alert('Username atau Password tidak boleh kosong');window.location='login.php'</script>";
      }
    } else {
      echo "<script> alert('Klik remember me untuk masuk!');window.location='login.php'</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .container{
            margin: 250px auto;
            width: 200px;
            padding: 10px;
            border: 1px solid;
            border-radius: 3px;
        }

        form{
            box-sizing : border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;

        }
        button{
            background:	#228B22;
            color: white;
            font-size: 10pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 5px 10px;
        }

        label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="username">Username</label>
            <br>
            <input type="text" id="username" name="username" placeholder='Enter Username'>
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password" placeholder='Enter Password'>
            <BR></BR>
            <button type="submit" name="login" value="login">Login</button>
            <br>
            <input type="checkbox" name="remember">Remember me
        </form>
    </div>
</body>
</html>