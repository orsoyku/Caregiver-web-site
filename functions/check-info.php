<?php 
    function checkInfo($info){
        if(empty($info)){
            echo " Bilgi yok. ";
        }
        else{
            echo $info;
        }
    };

    function checkAbout($info){
        if(empty($info)){
            echo "Hakkında pek bilgi vermemişsin. Hemen profili düzenle linkine tıklayarak, kendinden bahsedebilirsin. Unutma ne kadar çok bilgi o kadar iş teklifi demek.";
        }
        else{
            echo $info;
        }
    };

    function checkBirth($info){
        if(empty($info)){
            echo " Bilgi yok. ";
        }
        else{
            echo date("d.m.Y", strtotime($info));
        }
    };

    
    function checkGender($info){
        if(empty($info)){
            echo " Bilgi yok. ";
        }
        else{
            if($info == 'e') echo "Erkek";
            if($info == 'k') echo "Kadın";
        }
    };

    function checkFacebook($info){
        if(empty($info)){
            echo " Bilgi yok. ";
        }
        else{
            echo "<a href='$info' id='facebook_link'>Facebook</a>";
        }
    };

    function checkInstagram($info){
        if(empty($info)){
            echo " Bilgi yok. ";
        }
        else{
            echo "<a href='$info' id='facebook_link'>Instagram</a>";
        }
    };

    function checkPhoto($path,$gender){
        if(empty($path)){
            if(empty($gender)) echo "icons/no-profile.png";
            else{
                if($gender == 'e') echo "icons/male.png";  
                elseif($gender == 'k') echo "icons/female.png";
                else echo "icons/no-profile.png";
            }   
        }
        else{
            echo $path;
        }
    }
    
    function checkGenderIcon($gender){
        if($gender == 'e') echo "fa-mars";
        elseif($gender == 'k') echo "fa-venus";
        else echo "fa-question-circle-o";
    }

    function checkViews($views){
        if($views == 0) echo "Henüz görüntülenme yok.";
        else echo $views." görüntülenme";
    }
?>