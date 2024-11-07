<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smkn 2 buduran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="image/logo cekulah.png" alt=""></a>
            <div class="sekolah">
                <h2>smkn 2 buduran</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?menu=beranda">beranda</a></li>
                    <li><a href="?menu=sejarah">sejarah</a></li>
                    <li><a href="?menu=kegiatan">kegiatan</a></li>
                    <li><a href="?menu=kontak">kontak</a></li>
                </ul>
            </div>    
            </div>
            <div class="content">
                <?php
                if (isset($_GET["menu"])){
                    $menu = $_GET["menu"];
                    echo $menu;
                if ($menu=="beranda"){
                    require_once("pages/beranda.php");
                }    
                if ($menu=="sejarah"){
                    require_once("pages/sejarah.php");
                }    
                if ($menu=="kegiatan"){
                    require_once("pages/kegiatan.php");
                }    
                if ($menu=="kontak"){
                    require_once("pages/kontak.php");
                }    
                }else (
                    require_once("pages/beranda.php")
                )
                ?>
            </div>
            <div class="footer">
                <p>web ini dibuat oleh : Ravi</p>
            </div>
        </div>
    </div>
</body>
</html>