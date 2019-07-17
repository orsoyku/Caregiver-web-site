<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Arama Sonuçları | TheBakıcı.com</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="icons/font-awesome_4-7-0_star_32_8_f15b58_none.png">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Nunito|Open+Sans|Roboto|Raleway|Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
</head>
<body style="background-color: #e9ebee;">

<?php 
    include('includes/header.php');
    $all_users_query = mysqli_query($link, "select * from users order by id asc limit 0,8");
?>

<div class="all_middle">

<div class="search-filter-container">
                <div class="filter-city ">
                    <label for="city">şehir</label>
                    <select name="city" class="filter-input" id="city">
                        <option value="izmir">izmir</option>
                        <option value="istanbul">istanbul</option> <!-- get this data from database-->
                    </select>
                </div>
    
                <div class="filter-age ">
                
                   <div class="filter-left">
                        <label for="min-age">min</label>
                        <input type="number" class="filter-input" placeholder="18"> <!-- how to not go below 18  change the css to make it fit better-->
                   </div>
                   <div class="filter-right">
                       <label for="max-age">max</label>
                       <input type="number" class=" filter-input" placeholder="50">
                   </div>
                </div>
    
                <div class="filter-gender filter radio-check">
                    <label for="gender">gender: </label> <br>
                     <input type="radio" name="male" value="1">male<br>
                     <input type="radio" name="female" value="2">female <br>
                     <input type="radio" name="all" value="3">all <br>
                </div>
    
                <div class="filter-position filter radio-check">
                    <label for="position"> bakıcı tipi: </label><br>
                    
                             <input type="checkbox" name="caregiver1" value="babysitter">babysitter <br> 
                            <input type="checkbox" name="caregiver2" value="seniorcare">senior care <br>
                            <input type="checkbox" name="caregiver3" value="patientcare">patient care <br>
                    
                </div>
                <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                      </div>
                <div class="filter-referance filter">
                    <label for="referance">referans</label>
                    <input type="radio" name="true" value="1">var<br>
                    <input type="radio" name="false" value="2">yok<br>
                </div>
            </div>

<div class="user_row_wrapper">
<?php 
    while($all_users_fetch = mysqli_fetch_array($all_users_query)):
?>
    <?php $all_user_id = $all_users_fetch['id']; ?>       
    <div class="user_row" id="<?php echo $all_user_id ?>">

    <?php
        $all_profile_query = mysqli_query($link, "select * from photos where user_id = '$all_user_id' and is_profile = 1 ");
        $all_info_query = mysqli_query($link, "select * from infos where user_id = '$all_user_id'");
        $all_profile_fetch = mysqli_fetch_array($all_profile_query);
        $all_info_fetch = mysqli_fetch_array($all_info_query);
        ?>

        <a href="user.php?user=<?php echo $all_user_id ?>"><div class="all_profile" style="background-image:url(    <?php echo checkPhoto($all_profile_fetch['path'],$all_info_fetch['gender']) ?>)"></div></a>
        <div class="all_name_and_location">
            <a href="user.php?user=<?php echo $all_user_id ?>"><div class="all_name"><?php echo $all_users_fetch['name'] ?></div></a>
            <div class="all_location"><?php echo $all_info_fetch['location'] ?></div>
            <p>iş tecrübesi</p>
            <p>Yetenekler</p>
            <!-- php kodu eklenicek kısımlar geliyor-->
        </div>
        <a href="user.php?user=<?php echo $all_user_id ?>"><div class="all_look">Profili Gör</div></a>
        <a href="#"> <div class="all_look--heart"> <i class="fa fa-heart"></i></div> </a>

        <div class="search-rating">
            <ul id='stars'>
                <li class="star" data-value="1">
                    <i class="fa fa-star"></i>
                </li>
                <li class="star" data-value="2">
                    <i class="fa fa-star"></i>
                </li>
                <li class="star" data-value="3">
                    <i class="fa fa-star"></i>
                </li>
                <li class="star" data-value="4">
                    <i class="fa fa-star"></i>
                </li>
                <li class="star" data-value="5">
                    <i class="fa fa-star"></i>
                </li>

            </ul>
        </div>
    </div>
    
<?php 
    endwhile;
?>

</div>   
    
</div>
                           
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="vegas/vegas.min.js"></script>
    <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript">
       
        var is_loading = false;
        $(window).scroll(function() {        
            if($(window).scrollTop() + $(window).height() + 1 >= $(document).height()) {
                var last_id = $(".user_row:last").attr("id");
                if(is_loading == false) {
                    is_loading = true;
                    loadMoreData(last_id);
                }
            }      
        });

        function loadMoreData(last_id){
            $.ajax(
                {
                    url: 'controls/load-more-data.php?last_id=' + last_id,
                    type: "get"
                })
                .done(function(data)
                {
                    html = $(data);
                    html.appendTo(".user_row_wrapper").hide().fadeIn(1500);
                    is_loading = false;
                })
        }
    </script>
   
</body>
</html>