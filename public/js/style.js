

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
    // FORM POST
    $('#input_post').on('click', function(){
        $("#app").addClass('fixed')
        $('#app').removeClass('relative')
        $('#overlay').removeClass('hidden')
        $('#form_post').removeClass('hidden')
        
    })
    $("#btn_off_form_post").on('click', function(){
        $('#app').removeClass('fixed')
        $("#app").addClass('relative')
        $("#content_post").val('')
        $('#overlay').addClass('hidden')
        $('#form_post').addClass('hidden')
        
    })
    $('#overlay').on('click', function(){
        $('#app').removeClass('fixed')
        $("#app").addClass('relative')
        $("#content_post").val('')
        $('#form_post').addClass('hidden')
        $(this).addClass('hidden')
    })
    // END FORM POST
    $(".btn_option_setting").on('click',function(){
        $(".box_setting").removeClass('hidden')
    })
    $(".btn_option_setting").blur(function(){
        setTimeout(() => {
            $(".box_setting").addClass('hidden')
        }, 200);
    })
   
//   Tạo phòng họp mặt 
    var width_listfriend = $('#friend_group').width();   
    var startWidth = 0;
    $("#next_friend").on('click',function(){
        startWidth = startWidth + 500;
        $('#provi_friend').removeClass('hidden')
        $('#provi_friend').addClass('grid')
        if(startWidth > width_listfriend ){
            startWidth = 20;
            $('#provi_friend').removeClass('grid')
            $('#provi_friend').addClass('hidden')
            $('#friend_group').css('left',startWidth+'px')
        }else{
            $('#friend_group').css('left','-'+startWidth+'px')
        }
        console.log(startWidth);
        $('#provi_friend').addClass('z-20')
    })
    $('#provi_friend').on('click',function(){
            $('#friend_group').css('left','20px')
            $(this).addClass('hidden')
    })
    // dark mode
    $('#dark_mode').on('click', function(){
        $(document.documentElement).toggleClass('dark')
    })
    $('#dark_mode_mb').on('click', function(){
    
        $(document.documentElement).toggleClass('dark')
    })
    //  FORM EDIT INFO PROFILE
    $('#edit_info_profile').on('click', function(){
        $('#overlay_profile').removeClass('hidden')
        $('#form_profile').removeClass('hidden')
        $("#post_content_profile").addClass('fixed')
        $("#post_content_profile").removeClass('relative')
    })
    $('#overlay_profile').on('click',function(){
        $(this).addClass('hidden')
        $('#form_profile').addClass('hidden')
        $("#post_content_profile").addClass('relative')
        $("#post_content_profile").removeClass('fixed')
    })
    $('#btn_off_profile').on('click',function(){
        $('#form_profile').addClass('hidden')
        $('#overlay_profile').addClass('hidden')
        $("#post_content_profile").addClass('relative')
        $("#post_content_profile").removeClass('fixed')
    })
    //  END FORM EDIT INFO PROFILE
    // POST 
    $('#contentPosts').keyup(function(){
        if($(this).val() != '')
        {
            $('#btnPosts').removeClass('cursor-not-allowed pointer-events-none bg-gray-200 text-gray-500')
            $('#btnPosts').addClass('bg-blue-400 text-white')
        }else
        {
            $('#btnPosts').addClass('cursor-not-allowed pointer-events-none bg-gray-200 text-gray-500')
            $('#btnPosts').removeClass('bg-blue-400 text-white')
        }
    });
    $('#btnPosts').click(function(){
        let content = $('#contentPosts').val();
        var formData = new FormData();
        formData.append("content", content);
        formData.append("user_name", userName);
        formData.append("user_id", userID);
        // for (let index = 0; index < $('#upload')[0].files.length; index++) {
        //     formData.append("file[]", $('#upload')[0].files[index]);
        // }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url : urlPosts,
            type : 'POST',
            data : formData,
            processData: false,
            contentType: false,
            success : function(data) {
                if(data.status == 'true')
                {
                    Notiflix.Notify.Success('Post successful');
                    $("#btn_off_form_post").trigger('click');
                    $('#contentPosts').val(' ');
                    let post = ' <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg"><div class="flex items-center justify-between px-4 py-2"><div class="flex space-x-2 items-center"><div class="relative"><img src="image/'+ userAvatar +'" class="w-10 h-10 rounded-full" alt=""><span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span></div><div><div class="font-semibold">'+userName +'</div><span class="text-sm text-gray-500">'+ data.data.created_at+'</span>\
                            </div>\
                        </div><div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">\
                            <i class="bx bx-dots-horizontal-rounded"></i>\
                        </div>\
                    </div>\
                    <div class="text-justify px-4 py-2">\
                       '+ data.data.content+'\
                    </div>\
                    <div class="py-2 max-h-96">\
                        <img src="image/'+data.data.imageOrVideo+'" alt="" class=" m-auto h-96">\
                    </div>\
                    <div class="px-4 py-2">\
                        <div class=" flex items-center justify-between">\
                            <div class="flex flex-row-reverse items-center">\
                                <span class="ml-2 text-gray-500 dark:text-dark-txt ">999</span>\
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-red-500"> <i class="bx bx-angry"></i></span>\
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-pink-500"><i class="bx bxs-heart"></i></span>\
                                <span class="rounded-full grid place-items-center text-2xl -ml-1 text-yellow-500"><i class="bx bxs-happy-alt"></i></span>\
                            </div>\
                            <div class=" text-gray-500 dark:text-dark-txt">\
                                <span>900 comment</span>\
                                <span>500 share</span>\
                            </div>\
                        </div>\
                    </div>\
                    <div class="px-4 py-2 ">\
                        <div class="flex  items-center space-x-2 border-gray-300 border-t border-b">\
                            <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">\
                                <i class="bx bx-like"></i>\
                                <span class="font-semibold text-sm">Like</span>\
                            </div>\
                            <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">\
                                <i class="bx bx-comment-edit"></i>\
                                <span class="font-semibold text-sm">Comment</span>\
                            </div>\
                            <div class="w-1/3 flex space-x-2 justify-center items-center rounded-lg py-2 text-xl hover:bg-gray-200 dark:hover:bg-dark-third cursor-pointer text-gray-500 dark:text-dark-txt">\
                                <i class="bx bx-share bx-flip-horizontal"></i>\
                                <span class="font-semibold text-sm">Share</span>\
                            </div>\
                        </div>\
                    </div>\
                </div>';
                $('#listPosts').prepend(post); 
                }else
                {
                    Notiflix.Notify.warning('Post failed');
                    $("#btn_off_form_post").trigger('click');
                }
            //   console.log(content,userID,userName) 
              console.log(data.data) 
            }
        });

    });
    // ENDPOST 
    //  LAYOUT PROFILE  
   
    var header_bottom = document.getElementById("info_header_bottom");
    var header_top = document.getElementById("info_header_top");
    if(header_bottom != null ){
        var sticky = header_bottom.offsetTop;
        window.onscroll = function() {myFunction()};
    }   

    function myFunction() {
        if (window.pageYOffset > sticky-20) {
            header_top.classList.add("translate-y-14");
        } else {
            header_top.classList.remove("translate-y-14");
        }
    }    
//  END LAYOUT PROFILE

});

