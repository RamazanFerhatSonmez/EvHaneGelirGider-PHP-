<?php 

include("dbConnect.php");
if($_POST){
    $uye_NameSurname = $_POST['uye_NameSurname'];
    $kullaniciAd = $_POST['uye_userName'];
    $uye_parola = $_POST['uye_parola'];
    $uye_parola2 = $_POST['uye_parola2'];
    
    if($uye_parola != $uye_parola2){
         echo "<script>alert('Girdiğiniz Parola Doğru Eşleşmiyor !')</script>";
         echo "<script>window.open('signUp.php','_self')</script>";
    }else{
         $stmt = $conn->prepare("SELECT * FROM kullanicilar WHERE kullaniciAd = :kullaniciAd"); 
         $stmt->bindParam(':kullaniciAd',$kullaniciAd);    
         $stmt->execute(); 
      
         echo $stmt->rowCount();
        if($stmt->rowCount()>0) {  
            echo "<script>alert('Girdiğiniz kullanıcı adı kullanılmakta ! Lütfen farklı bir farklı bir kullanıcı ile kayıt olmayı deneyin !')</script>";    
            echo"<script>window.open('signUp.php','_self')</script>"; 
            die();
        }  
    //insert the user into the database.  
          $sql = "INSERT into kullanicilar (ad_soyad,kullaniciSifre,kullaniciAd) VALUES ('$uye_NameSurname','$uye_parola','$kullaniciAd')";

          if ($conn->query($sql) !== TRUE) {
            echo "New record created successfully";
            echo "<script>alert('Kayıt Başarılı! Giriş Yapabilirsiniz...')</script>";
            echo "<script>window.open('index.php','_self')</script>";  
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo"<script>window.open('signUp.php','_self')</script>";  
          }
          $conn->close(); 
    }
}else{
    echo"<script>window.open('signUp.php','_self')</script>"; 
}
 ?>