<?php
    require_once('../database/config.php');
    require_once('../securimage/securimage.php');
    require_once('../mail/mailer.php');

    $securimage = new Securimage();
    $captcha = $_POST['register_captcha'];
    $name = $_POST['register_name'];
    $email = $_POST['register_email'];
    $query = mysqli_query($link,"select * from users where email = '$email'");
    $result = mysqli_num_rows($query);
    


    if($securimage->check($captcha) == false){
        $_SESSION['message'] = 'Güvenlik kodunu yanlış girdiniz.';
        header("Location: ../login.php");
    }
    elseif($result > 0){
        $_SESSION['message'] = 'Bu e-posta adresiyle daha önce kayıt yapılmış.';
        header("Location: ../login.php");
    }
    else{
        $rand = (rand(0,100000));
        $password = ($_POST['register_password']);
        
       $reqister_query = mysqli_query($link,"insert into users (name,email,code,password,role) values('$name','$email','$rand','$password','$user_role')");
        
        $body = file_get_contents('../mail/register-template.html');
        $coming_array = array('username','activationcode','userid');
        $becoming_array = array($name,$rand,mysqli_insert_id($link));
        $body = str_replace($coming_array, $becoming_array, $body);
        
        
        $mail_status = smtpmailer($email,'oyku_1224@hotmail.com','thebakıcı.com','Üyelik Aktivasyon',"$body");
        if($mail_status){
            $_SESSION['message'] = 'Üyelik aktivasyon bağlantısı e-posta adresinize gönderildi.';
            header("Location: ../login.php");
        }
        else{
            $_SESSION['message'] = 'Mail gönderilirken bir hata oluştu. Tekrar üye olmayı deneyiniz.';
            header("Location: ../login.php");
        }
    }

?>