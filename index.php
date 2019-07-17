<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TheBakıcı.com</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="icons/font-awesome_4-7-0_star_32_8_f15b58_none.png">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Nunito|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="vegas/vegas.css">
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.css">
</head>
<body>
<?php 
include('includes/header.php');
if(isset($_SESSION['message'])){
    echo "session var";
    if(isset($_SESSION['message_type'])){
        $color = $_SESSION['message_type'];
        echo "<div class='topBar $color'>".$_SESSION['message']."</div>";
        unset($_SESSION['message_type']);
    }
   else{
       echo "<div class='topBar'>".$_SESSION['message']."</div>";
   }
    unset($_SESSION['message']);
}

?>
    
<!--    ------3.bölüm burada başlıyor!-------->
    <div class="content">
        <div class="message">
            Aradığın bakıcıyı bulmak artık  çok kolay.
        </div>
        <div class="search">
            <div class="search-inputs">
                <div class="search-text">
                    <input type="text" class="input-text" placeholder="Örnek: Bebek Bakıcı, Hasta Bakıcı..." autofocus >
                </div>
                <div class="search-city">
                    <span>Şehir</span>
                    <ul>
                        <li><label><input type="checkbox" class="s-check">Adana</label></li>
                        <li><label><input type="checkbox" class="s-check">Ankara</label></li>
                        <li><label><input type="checkbox" class="s-check">Antalya</label></li>
                        <li><label><input type="checkbox" class="s-check">Bursa</label></li>
                        <li><label><input type="checkbox" class="s-check">Çanakkale</label></li>
                        <li><label><input type="checkbox" class="s-check">Eskişehir</label></li>
                        <li><label><input type="checkbox" class="s-check">Mersin</label></li>
                        <li><label><input type="checkbox" class="s-check">İstanbul</label></li>
                        <li><label><input type="checkbox" class="s-check">İzmir</label></li>
                        <li><label><input type="checkbox" class="s-check">Kayseri</label></li>
                        <li><label><input type="checkbox" class="s-check">Kocaeli</label></li>
                        <li><label><input type="checkbox" class="s-check">Manisa</label></li>
                        <li><label><input type="checkbox" class="s-check">Muğla</label></li>
                        <li><label><input type="checkbox" class="s-check">Samsun</label></li>
                    </ul>
                </div>
                <div class="search-submit">
                    <input type="button" class="search-button" value="ARA">
                </div>
            </div>
        </div>
        <div class="all">
            <a href="all.php">Tüm Bakıcıları Listele</a>
        </div>
    </div>
    
    <div class="footer">
       <div>
           <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
           <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
           <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
           <a><i class="fa fa-pinterest" aria-hidden="true"></i></a>
           <a><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <a data-fancybox data-src="#feedback_screen" class="feedback">Bize Yazın</a>
    
    <div class="feedback_screen" id="feedback_screen">
    <form id="contact" name="contact" action="#" method="post">
        <div class="give_feedback"><h3>Görüş Bildirin</h3></div>
        <div class="feedback_message">Sitemiz ve tasarımı ile ilgili görüşleriniz bizim için değerlidir.</div>
        <label for="feedback_name" class="feedback_label">Ad Soyad</label>
        <input type="text" id="feedback_name" name="feedback_name" class="txt"  autocomplete="off" /><br />
        <label for="feedback_email" class="feedback_label">E-Posta Adresiniz</label>
        <input type="email" name="feedback_email" id="feedback_email" class="txt" autocomplete="off" />
        <label for="feedback_text" class="feedback_label">Görüşleriniz</label>
        <textarea name="feedback_text" id="feedback_text" cols="45" rows="8" class="txtarea"></textarea>
        <input class="feedback_send" id="feedback_send" type="submit" value="Gönder">
    </form>
</div> 
      
                
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="vegas/vegas.min.js"></script>
  <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> 
  
 
     
    
    
</body>
</html>
















