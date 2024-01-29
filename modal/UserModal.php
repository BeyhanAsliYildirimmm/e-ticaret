<?php 
 include 'db.php';

 class UserModal {
    public function loginUser($email, $password) {
        global $db;

        $data = array(
            "email" => $email,
            "user_password" => $password
        );

        $sorgu = $db->prepare("SELECT * FROM users WHERE email = :email AND user_password = :user_password");
        $sorgu->execute($data);
        $result = $sorgu->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function registerUser($data){
        global $db;
        $sorgu =$db->prepare("SELECT * FROM users WHERE email = :email");
        $sorgu->bindParam(':email', $data['email']);
        $sorgu->execute();
        $result = $sorgu->fetch(PDO::FETCH_ASSOC);
       if($result==null){
        $insertUser=$db->prepare("INSERT INTO users SET ad=?, soyad=?, email=?, tel=?, user_password=?");
        // Eklenen kullanıcı verileri
        $ad = $data['ad'];
        $soyad = $data['soyad'];
        $email = $data['email'];
        $tel = $data['tel'];
        $user_password = $data['password'];
        $data=$insertUser->execute([$ad, $soyad, $email, $tel, $user_password]);
       return($data);
       }
        //echo $result;
    }
}



?>