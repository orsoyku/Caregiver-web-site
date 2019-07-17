<?php 
    require_once('../database/config.php');

    $password = md5($_POST['new_password']);
    echo $password;
    $rand = md5(rand(0,100000));

    $query = mysqli_query($link,"update users set password = '$password', code = '$rand' ");
    
    if($query){
        $_SESSION['message'] = 'Parolanız başarıyla değiştirildi.';
        header("Location: ../login.php");
    }
    else{
        $_SESSION['message'] = 'Hata oluştu. Tekrar parola oluşturmayı deneyin.';
        header("Location: ../login.php");
    }

?>