<?php 
  session_start();
  include("dbConnect.php");

    $kullaniciAd=$_POST['kullaniciAd'];      
    $kullaniciSifre=$_POST['kullaniciSifre']; 
    echo "console.log($kullaniciAd $kullaniciSifre)"; 
   
    $sql="SELECT * FROM kullanicilar WHERE kullaniciAd='$kullaniciAd' and kullaniciSifre='$kullaniciSifre'";
    $query = $conn->prepare($sql);
    $query->execute(array($uye_mail,$uye_parola));
    $row = $query->fetch();
    
    if($query->rowCount() >=1)  
    {  

        $_SESSION['kullaniciId']=$row['kullaniciId'];
        $_SESSION['kullaniciAdSoyad']=$row['ad_soyad'];
       // $_SESSION['login_user']=$uye_mail;
        header('Location: loginUser.php');        
  
    }  
    else  
    {        
      
      echo "<script>alert('E-mail veya Parola Yanlış !')</script>";       
      header('Location: login.php');
    }  

 ?>