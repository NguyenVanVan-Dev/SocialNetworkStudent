$("#btn_signin").on('click',function(){
    $("#sign_in").toggleClass("scale-0")
    $("#text_signup").addClass("scale-0 ")
    $("#social_network").removeClass('scale-0')
    $("#sign_in").removeClass("hidden")
    $("#text_signin").removeClass("scale-0 ")
    $("#content_section").addClass("left-0")
    $("#content_section").removeClass("right-0")
    $('#btn_showone').trigger('click');
})
$('#btn_showone').on("click",function(){
    $("#sign_up").addClass("scale-0 hidden")
})
$("#btn__signup").on('click',function(){
    $("#sign_up").toggleClass("scale-0")
    $("#text_signin").addClass("scale-0 ")
    $("#sign_up").removeClass("hidden")
    $("#social_networkone").removeClass('scale-0')
    $("#text_signup").removeClass("scale-0 ")
    $("#content_section").addClass("right-0")
    $("#content_section").removeClass("left-0")
    $('#btn_showtwo').trigger('click');
})
$('#btn_showtwo').on("click",function(){
    $("#sign_in").addClass("scale-0 hidden")
})
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