<?php 
    include('database/config.php');

    $name = $_POST['feedback_name'];
    $email = $_POST['feedback_email'];
    $text = $_POST['feedback_text'];

    $query = mysqli_query($link,"insert into feedback (name,email,text) values('$name','$email','$text')");
    if($query) echo 'success';
    else echo 'error';
?>