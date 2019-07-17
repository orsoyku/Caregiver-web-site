<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Aday Girişi | TheBakıcı</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="icons/font-awesome_4-7-0_star_32_8_f15b58_none.png">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Nunito|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="vegas/vegas.css">
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.css">
    <meta charset="utf-8">
</head>
<body>
<?php 
     include('includes/header.php');    
	 if(isset($_SESSION['login'])){
		 header('Location: profile.php');
	 }
	 if(isset($_SESSION['message'])){
		 echo "<div class='topBar'>".$_SESSION['message']."</div>";
		 unset($_SESSION['message']);
	 }
 ?>
	
	 <div class="login_welcome">
		 <div class="login_welcome_left">
			 <ul class="login_list">
				 <li><a href="index.php">Anasayfa</a></li>
				 <li class="seperator"><span class="boldtext">Aday Girişi</span></li>
			 </ul>
		 </div>
		</div>
	 <div class="login_middle">
			<div class="both_wrapper">
			 <div class="register_wrapper floatleft">
				 <h3 class="both_title">Üyelik Formu</h3>
				 <div class="register_message" id="register_message">Tek seferde üyeliğini oluştur ve teklif almaya hazır ol.</div>
				 <form name="register_form" id="register_form" action="controls/register.php" method="post">
				 
				 <label class="register_label" for="register_name">Ad Soyad
					   <input type="text" name="register_name" id="register_name" class="register_input" autocomplete="off" spellcheck="false">
				  </label>
				
				 <label class="register_label">E-Posta Adresi
					   <input type="email" name="register_email" id="register_email" class="register_input" autocomplete="off" spellcheck="false">
				   </label>
				   
				 <label class="register_label">Parola  
						<input 
					 type="password" name="register_password" id="register_password" class="register_input" autocomplete="off" spellcheck="false">
					</label>
					
				 <label class="register_label">Parola (Tekrar)
					   <input 
					 type="password" name="register_again" id="register_again" class="register_input" autocomplete="off" spellcheck="false">
				   </label>
				   
				 <label class="register_label">Güvenlik Kodu
					 <input id="register_captcha" name="register_captcha" type="text" autocomplete="off" class="register_input" maxlength="6"  spellcheck="false">
					</label>
 
				<div class="captcha">
					 <img id="captcha" name="captcha" src="securimage/securimage_show.php" alt="Güvenlik Kodu" title="Güvenlik Kodu"/>
					 <a href="#" class="captcha_refresh" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); this.blur(); return false" title="Yenile"></a> 
				 </div>
				 
				 <label class="register_terms_label">
					 <input type="checkbox" name="terms_checkbox" id="terms_checkbox" checked="checked" class="both_checkbox">
					 <a href="terms.php" class="both_checkbox"  title="Kullanım Koşulları">Kullanım Koşullarını</a> kabul ediyorum.
				 </label>
					
				 <input type="submit" class="register_button" id="register_button" name="register_button" value="Üye Ol">
				 
				 </form>
			 </div>
			 <div class="lost_wrapper floatleft">
				 <h3 class="both_title">Şifremi Unuttum</h3>
				 <div class="register_message">Aşağıdaki formu doldurarak şifre hatırlatma talebinde bulunabilirsiniz.</div>
				 <form name="lost_form" id="lost_form" action="controls/lost-control.php" method="post">
					 <label class="register_label">E-Posta Adresi
					 <input name="lost_email" id="lost_email" class="lost_input" type="email" autocomplete = "off" spellcheck="false">
					</label>
				 <input type="submit" class="register_button lost_button" value="Gönder" name="lost_button" id="lost_button">
				 </form>
			 </div>
			 <div class="login_wrapper floatright">
				 <h3 class="both_title">Üye Girişi</h3>
				 <form id="login_form" name="login_form" method="post" action="controls/login-control.php">
				 
					 <label class="register_label">E-Posta Adresi
						 <input class="login_input" type="email" autocomplete = "off" id="login_email" name="login_email" spellcheck="false" value="<?php if(isset($_COOKIE['remember'])) echo $_COOKIE['remember'] ?>">
						</label>
						
						<label class="register_label">Parola
						  <input class="login_input" id="login_password" name="login_password" type="password" autocomplete="off" spellcheck="false" value="">
					 </label>
					 
					 <div class="remember_lost">
					 <label class="login_remember">
						 <input type="checkbox" name="remember" class="both_checkbox">Beni Hatırla
					 </label>
					 <a class="login_lost" title="Şifremi Unuttum">Şifremi Unuttum</a>
					 </div>
					 
					 <input type="submit" class="register_button" id="login_button" name="login_button" value="Giriş Yap">
					 </form>
			 </div>
			 <div class="clearboth"></div>
		 </div>
	 </div>  
	 
	 <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
   <script src="js/main.js"></script>
   <script src="vegas/vegas.min.js"></script>
   <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
   <script src="js/main.js"></script>
 </body>
 </html>