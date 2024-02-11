<?php
include "../modal/db.php";
include "../modal/UserModal.php";

$userModal = new UserModal();
session_start();

function loginControl() {
    global $userModal; // UserModal sınıfına erişim için global değişkeni kullanın

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $result = $userModal->loginUser($_POST['email'], $_POST['password']);

        if ($result) {
            // Dönen sonuç bir dizi olduğu için, bu diziyi istediğiniz şekilde işleyebilirsiniz.
            $_SESSION['user-login-id'] =$result['id'];
            header('Location: ../view/index.php');
                exit();
           
        } 
            else {
                   
                echo '
                <div class=\"modal\" tabindex="-1">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">Modal title</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                <p>Modal body text goes here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
            
                header("Refresh: 3; url=../view/login.php");
        }
        
    }
     else {
                    
        echo '
<div class=\"modal\" tabindex="-1">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Modal title</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Modal body text goes here.</p>
            </div>
        </div>
    </div>
</div>
';
    header("Refresh: 3; url=../view/login.php");

    }   
    
}

// Form gönderilmişse loginControl fonksiyonunu çağır
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    loginControl();
}
?>

