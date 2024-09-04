<?php
    $judul = "belajar php";
    $judul1 = "siswa rpl";
    $judul2 = "smkn 2 buduran";
    $juduls = ["belajar php","siswa rpl","smkn 2 buduran"];

    // echo $juduls[0];
    for ($i=0; $i < 3; $i++) { 
        echo"<br>";
        echo $i;
        echo $juduls[$i];
        # code...
    }

    foreach ($juduls as $key => $value) {
        echo "<br>";
        echo $key;
        # code...
    }

    // echo $judul1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $judul?></h1>
    <h2><?php echo $judul1?></h2>
    <h3><?php echo $judul2?></h3>
    <h4><?php echo $judul2?></h4>

    <h1><?php $juduls[0]?></h1>
    <h2><?php $juduls[1]?></h2>
    <h3><?php $juduls[2]?></h3>

    <?php
        for ($i=0; $i < 3; $i++) { 
            echo "<h1>";
            echo $juduls[$i];
            echo "</h1>";
            # code...
        }
    ?>
    <h1>menampilkan php</h1>
    <?php
        for ($i=0; $i < 3; $i++) { 
            ?>
            <h1><?= $juduls[$i]?></h1>
            <?php
            # code...
        }
    ?>

    <?php
        foreach ($juduls as $key) {
            echo "<h2>";
            echo $key;
            echo "</h2>";
            echo "<br>";
            # code...
        }
    ?>

    <?php
        foreach ($juduls as $key) {
            ?>
            <h2><?php $key?></h2>
            <?php
            # code...
        }
    ?>
<hr>
    <?php
        for ($i=0; $i < 10; $i++) { 
            echo "<h$i>";
            echo "smkn 2 buduran";
            echo "</h$i>";
            # code...
        }
    ?>
    <?php
        for ($i=6; $i > 0; $i--) { 
            echo "<h$i>"."smkn 2 buduran"."</h$i>";
            # code...
        }
    ?>
</body>
</html>