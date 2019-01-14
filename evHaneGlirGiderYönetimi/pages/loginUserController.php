<?php
    session_start();
    $kullaniciId = $_SESSION['kullaniciId'];
    if($_POST){
        include 'dbConnect.php';
        try{
                
            $gelirGiderDate = $_POST['harcamaTarihi'];
            $gelirGider = $_POST['tur'];
            $kategori = $_POST['kategori'];
            $tutar = $_POST['tutar'];
            $aciklama = $_POST['aciklama'];
            if($gelirGider == "gelir"){
                $sql = "INSERT INTO kullanicigelirleri (gelirMiktar,gelirkategoriAd,gelirDate,kullanicigelirId,gelirAciklama)
                VALUES ('$tutar','$kategori','$gelirGiderDate','$kullaniciId','$aciklama')";
            }else{
                $sql = "INSERT INTO kullanicigiderleri (giderMiktar,giderkategoriAd,giderDate,kullanicigiderId,giderAciklama)
                VALUES ('$tutar','$kategori','$gelirGiderDate','$kullaniciId','$aciklama')";
            }
            if ($conn->query($sql)) {
                echo "New record created successfully";
                header('Location: loginUser.php'); 
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close(); 
        }
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }
?>