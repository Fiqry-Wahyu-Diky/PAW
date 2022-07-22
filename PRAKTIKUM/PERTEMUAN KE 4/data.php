<?php

    session_start();
    if (isset($_POST['logout'])) {
        session_start();
        //menandakan session telah berakhir
        session_unset();
        session_destroy();
        header ("location:login.php");
    }

    $datamhs = array(
        array("Fiqry Wahyu Diky w","200411100125","Nganjuk"),
        array("Yoga Tirta Air", "200411100126","Mojokerto"),
        array("Teguh setya", "200411100127","Lamongan")
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            min-height: 100vh;
            margin-top: 20px;
        }
        .container{
            width: 600px;
        }
        table{
            border: 1px solid;
            padding: 5px;
            border-collapse: collapse;
        }

        table,th,td{
            padding: 10px;
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="contaier">
        <h2>Daftar Mahasiswa</h2>
        <table>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Alamat</th> 
                </tr>

                <?php
                foreach($datamhs as $row):
                    ?>
                <tr>
                    <td><?=$row[0]?></td>
                    <td><?=$row[1]?></td>
                    <td><?=$row[2]?></td>
                </tr>
                <?php endforeach; ?>
                
        </table>
        <br>
        <form action="" method="POST">
        <button name="logout">Log out</button>
        </form>
    </div>
    
</body>
</html>