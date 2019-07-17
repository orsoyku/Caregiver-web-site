<?php

    require_once('../database/config.php');
    require_once('../mail/mailer.php');

    $email = $_POST['lost_email'];
    $query = mysqli_query($link,"select * from users where email = '$email' and is_active = 1 ");
    
    if(mysqli_num_rows($query) < 1){
        $_SESSION['message'] = 'Bu e-posta adresiyle kayıtlı bir kullanıcı bulunamadı.';
        header("Location: ../login.php");
    }
    else{
        $fetch = mysqli_fetch_array($query);
        $body = file_get_contents('../mail/lost-template.html');
        $coming_array =  array('username','userid','activationcode');
        $becoming_array = array($fetch['name'],$fetch['id'],$fetch['code']);
        $body = str_replace($coming_array,$becoming_array,$body);
        $mail_status = smtpmailer($email,'turkeysoftwaredevelopment@gmail.com','easmodel.com','Parola Yenileme',$body);
        if($mail_status){
            $_SESSION['message'] = 'Parola yenileme bağlantısı e-posta adresinize gönderildi.';
            header("Location: ../login.php");
        }
        else{
            $_SESSION['message'] = 'Mail gönderilirken bir hata oluştu.';
            header("Location: ../login.php");
        }
    }
?>