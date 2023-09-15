<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BIODATA</h1>

    <div class="desc">
        <?php
             $nama= "Yuldan Nur Addinsyah";
             $umur= "19";
             $alamat="Majenang";
             $instansi="Universitas Siliwangi";
             $npm="227006091"
        ?>
        <p>Nama: 
            <?php
            echo $nama;
            ?>
        </p>
        <p>NPM: 
        <?php
            echo $npm;
            ?>
        </p>
        <p>Umur: 
        <?php
            echo $umur;
            ?>
        </p>

        <p>Alamat: <?php echo $alamat;?></p>
        <p>Universitas: <?php echo $instansi;?></p>

    </div>

</body>
</html>