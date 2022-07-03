<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        body{
            min-height: 95vh;
            background-image: linear-gradient(-100deg,#ff2846 0%, #6944ff 100%);
            background: url(klinik.jpg)no-repeat;
            background-size: cover;
            font-family: quicsand;
        }
        table{
            text-align: center;
        }
        h1{
            color: blue; text-align: center; font-size: 40px; font-style: bold; font-family: georgia;
        }
        table,tr,td {
            border: solid 1.5px blue;
            border-collapse: collapse;
            padding: 5px 15px;
            font-family: georgia;
            font-size: 12px;
        }
        thead {
            background-color: lightsteelblue;
        }
    </style>
</head>
<body>
    <h1 style="color: blue;">KLINIK 24 JAM </h1>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Id</td>
                <td>Username</td>  
                <td>Password</td>
                <td>Nama Lengkap</td>                      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr style="background-color: aliceblue;">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>