$(document).ready(function(){
    $('#signIn').removeClass('scale-0')
    $('#text_signin').removeClass('scale-0')
    $('#sign_up').removeClass('scale-0')
    $('#text_signup').removeClass('scale-0')
    $('#show_more_menu').on('click',function(){
        $('.menu_hidden').removeClass('hidden')
        $(this).addClass("hidden")
        $("#menu_hidden").removeClass("hidden")
     })
     $('#hidden_more_menu').on('click',function(){
         $('.menu_hidden').addClass('hidden')
         $("#show_more_menu").removeClass("hidden")
         $("#menu_hidden").addClass("hidden")
       
     })
     $('#input_post').on('click', function(){
        $('#overlay').removeClass('hidden')
        $('#form_post').removeClass('hidden')
        
     })
     $("#btn_off_form_post").on('click', function(){
        $("#content_post").val('')
        $('#overlay').addClass('hidden')
        $('#form_post').addClass('hidden')
        
     })
     $('#overlay').on('click', function(){
        $("#content_post").val('')
        $('#form_post').addClass('hidden')
        $(this).addClass('hidden')
     })
});

