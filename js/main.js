$('.search-city span').click(function(){
    $('.search-city ul').toggleClass('display');
    $('.search-city').toggleClass('cross');
});

$('.s-check').change(function(){
    var number = $('.s-check:checked').length;
    var target = $('.search-city span');
    if(number == 0) target.html('Şehir'); 
       else target.html(number + " şehir seçildi.");
});

$(document).ready(function(){
    $(".content").vegas({
    slides: [
        { src: "\wallpapers/12.jpg" },
        { src: "\wallpapers/14.jpg" },
        { src: "\wallpapers/13.jpg" }
    ],
        slide: 0,
        delay: 10000,
        transition: 'fade'
    });
    $('#contact').validate({
    rules: {
        feedback_name: {required: true},
        feedback_email: {required: true, email: true},
        feedback_text: {required: true, minlength: 3}
        },
        submitHandler: function(){
            var form = $('#contact');
            var dataform = form.serialize();
            var inputs = form.find('input, textarea');
            $('.feedback_send').attr('value','Gönderiliyor');
            inputs.prop('disabled',true);
            $.ajax({
                url: "\contact.php",
                type: 'post',
                data: dataform,
                success: function(response){
                    screen = $('.feedback_screen');
                    if(response == 'success')
                    setTimeout(function(){
                        screen.html('Mesajınız başarı ile gönderildi.').addClass('feedback_success');
                    },1000);
                    else{
                     setTimeout(function(){
                        screen.html('Mesaj gönderilirken bir hata oluştu.').addClass('feedback_error');
                    },1000);   
                    }
                    setTimeout(function(){
                        $.fancybox.close();
                    },3000);
                }
                
            });
        }
        
    });
    $('#register_form').validate({
        rules: {
        register_name: {required: true},
        register_email: {required: true, email: true},
        register_password: {required: true},
        register_again: {required: true, equalTo: '#register_password'},
        register_captcha: {required: true, minlength:6, maxlength:6},
        terms_checkbox: {required: true}
        }
    });
    
    $('#login_form').validate({
        rules: {
        login_email: {required: true, email: true},
        login_password: {required: true}
        }
    });
    
    $('#lost_form').validate({
        rules: {
        lost_email: {required: true, email: true}
        }
    });
    
    $('#new_form').validate({
        rules: {
        new_password: {required: true},
        new_password2: {required: true, equalTo: '#new_password'}
        }
    });
    
    $(".login_lost").click(function(){
		$(".register_wrapper").css("display","none");
		$(".lost_wrapper").fadeIn("fast");
    });

    $('.action_left').on('click',function(){
		$('.action_right').removeClass('action_active');
		$(this).addClass('action_active');
		$('.photos').removeClass('display_active');
		$('.about').addClass('display_active');
		$('.edit_photos').removeClass('edit_active');
		$('.edit_infos').addClass('edit_active'); });
    
   $('.action_right').on('click',function(){
		$('.action_left').removeClass('action_active');
		$(this).addClass('action_active');
		$('.about').removeClass('display_active');
		$('.photos').addClass('display_active');
		$('.edit_infos').removeClass('edit_active');
		$('.edit_photos').addClass('edit_active');
		mySlider.reloadSlider(); });

	$( function() {
    	$( "#birth_date" ).datepicker({
		changeMonth: true,
		changeYear: true,
        yearRange: '-100:+0',
        maxDate: new Date(),        
        dateFormat: 'dd.mm.yy'
        }); 
	});
    
	$( function(){
		$("#height").mask("9,99 m.");
		$("#weight").mask("99 kg.");
		$("#phone_number").mask("0(999) 999 99 99");
	});
    
    var mySlider;
    mySlider  = $('.slider').bxSlider({
        slideWidth: '130',
        minSlides: 2,
        maxSlides: 10,
        moveSlides: 1,
        slideMargin: 5,
        infiniteLoop: false,
        speed: 400,
        responsive: true,
        pager: false
    });

    $('.make_profile').click(function(){
        event.preventDefault();
        var form = $(this).closest('form');   
        var photoItem = $(this).closest('.photoItem');
        photoItem.addClass('loading');
        setTimeout(function(){
            form.submit();
        },1000);
    });

    
    $('.delete_photo').click(function(){
        event.preventDefault();
        var form = $(this).closest('form');   
        var photoItem = $(this).closest('.photoItem');
        photoItem.addClass('loading');
        setTimeout(function(){
            form.submit();
        },1000);
    });
    $('.name_circle').click(function(){
        $(this).closest('form').find('input[type="text"],textarea').val('');
        $.fancybox.close();
        formSendValidator.resetForm();
    });
    
    
});








