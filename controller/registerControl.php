<?php 
include "../modal/db.php";
include "../modal/UserModal.php";
$userModal = new UserModal();

function registerControl(){

    global $userModal;
    if($_POST["kullaniciAdi"]){
    
        $data=array(
            "ad"=>$_POST["kullaniciAdi"],
            "soyad"=>$_POST["kullaniciSoyAdi"],
            "email"=>$_POST["email"],
            "tel"=>$_POST["tel"],
            "password"=>$_POST["password"]
        );

        
        
        $result=$userModal->registerUser($data);
        if ($result) {
            
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
           
                header('Location: ../view/login.php');
                exit();
           
        } else {
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
            
            header("Refresh: 3; url=../view/register.php");
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
    header("Refresh: 3; url=../view/register.php");

    }   
    
    }

// Form gönderilmişse loginControl fonksiyonunu çağır
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    registerControl();
}

?>