//  Dat bien file js tu dau viet thuong ,tu tiep theo chu cai dau ghi hoa 

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
    // $('#input_post').on('click', function(){
    //     $("#app").addClass('fixed')
    //     $('#app').removeClass('relative')
    //     $('#overlay').removeClass('hidden')
    //     $('#form_post').removeClass('hidden')
        
    // })
    // $("#btn_off_form_post").on('click', function(){
    //     $('#app').removeClass('fixed')
    //     $("#app").addClass('relative')
    //     $("#content_post").val('')
    //     $('#overlay').addClass('hidden')
    //     $('#form_post').addClass('hidden')
        
    // })
    // $('#overlay').on('click', function(){
    //     $('#app').removeClass('fixed')
    //     $("#app").addClass('relative')
    //     $("#content_post").val('')
    //     $('#form_post').addClass('hidden')
    //     $(this).addClass('hidden')
    // })
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
    $('body').on('click','.openPost', function(e){
        e.stopPropagation();
        $("#app").addClass('fixed')
        $("#app").removeClass('relative')
        $('#postModal').removeClass('invisible');
        $('#boxPost').removeClass('-translate-y-64');
        $('#boxPost').addClass('translate-y-0');
        $('#boxPost').removeClass('opacity-0');
        // $('#interestModal').attr('data-id',$(this).data('id'));
    });
    $('.closePost').on('click', function(e){
        e.stopPropagation();
        $("#app").addClass('relative')
        $("#app").removeClass('fixed')
        $('#boxPost').removeClass('translate-y-0');
        $('#boxPost').addClass('-translate-y-64');
        $('#boxPost').addClass('opacity-0');
        setTimeout(() => {
            $('#postModal').addClass('invisible');
        }, 100);
    });
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
    $('#btnImagePost').click(function(){
        $('#image_post').trigger('click');
    })
    $('#btnVideoPost').click(function(){
        $('#video_post').trigger('click');
    })
    $('#image_post').on('change',function(){
        $('#overlayPost').css('height','1200px');
        const file =  $('#image_post')[0].files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                $('#review_image_post').attr('src',result);
            }
            reader.readAsDataURL(file);
        }
    })
    $('#video_post').on('change',function(){
        $('#overlayPost').css('height','1200px');
        $('.video-post').removeClass('hidden')
        const file =  $(this)[0].files[0];
        if(file){
            var $source = $('#review_video_post');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        }
    })
    $('#btnPosts').click(function(){
        let content = $('#contentPosts').val();
        var formData = new FormData();
        formData.append("content", content);
        formData.append("user_name", userName);
        formData.append("user_id", userID);
        for (let index = 0; index < $('#image_post')[0].files.length; index++) {
            formData.append("file[]", $('#image_post')[0].files[index]);
        }
        for (let i = 0; i < $('#video_post')[0].files.length; i++) {
            formData.append("file[]", $('#video_post')[0].files[i]);
        }
        console.log(formData.getAll('file[]'))
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
                    $('.closePost').trigger('click')
                    let checkImage = data.data.imageOrvideo;
                    let imagePost = checkImage == '' ? '' : '<img src="image/'+checkImage+'" alt="" class=" m-auto h-96">';
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
                        '+imagePost+'\
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
    // COMMENT
    $('body').on('click','.btnComment',function(){
        let id = $(this).data('id');
        $('#listComment-'+id).removeClass('hidden')
        $.ajax({
            url:showComment,
            method:"GET",
            data : {
                id:id
            },
            
            success:function(data)
            {
                // let comment = ' <div class="flex space-x-2 "><img src="image/{{ Auth::user()->avatar}}" alt="" class="w-9 h-9 rounded-full"><div><div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm"><span class="font-semibold block">{{Auth::user()->name}}</span><span>'+ data.data.content+' </span></div><div class="p-2 text-xs text-gray-500 dark:text-dark-txt "><span class="font-semibold cursor-pointer">Like </span><span>. </span><span class="font-semibold cursor-pointer"> Reply </span><span> . </span>10m</div></div></div>';
               console.log(data);
            //     let result = data.data.map((ele,index)=>{
            //        return '<div class="flex space-x-2 "><img src="#" alt="" class="w-9 h-9 rounded-full"><div><div class="bg-gray-100 dark:bg-dark-third p-2 rounded-2xl text-sm"><span class="font-semibold block">'+ele.user_id+'</span><span>'+ ele.content+' </span></div><div class="p-2 text-xs text-gray-500 dark:text-dark-txt "><span class="font-semibold cursor-pointer">Like </span><span>. </span><span class="font-semibold cursor-pointer"> Reply </span><span> . </span>10m</div></div></div>'
            //    })
               console.log(data.data);
            //    $('#commentPost-'+data.data[0].post_id).prepend(data.data);
               $('#commentPost-'+data.post_id).html(data.data);
               $('.user_comment').val('');
            },
        })
    });
    // END COMMENT
    // SHOW PROFILE FRIEND
    $('.showProfileFriend').click(function(){
        let friendID = $(this).data('id');
        // console.log(friendID)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: showProfileFriend,
            method:"GET",
            data : {
                friendID: friendID,
            },
            
            success:function(data)
            {
                if(data.status == 'true')
                {
                    // console.log(data.data);
                    $('#profile-friend').html(data.data);
                }
            },
        })

    });
    // END SHOW PROFILE FRIEND
    //  LAYOUT PROFILE  
   
   
    window.onscroll = function() {myFunction()};

    function myFunction() {
        var header_bottom = document.getElementById("info_header_bottom");
        // console.log(header_bottom);
        if(header_bottom != null ){
            var sticky = header_bottom.offsetTop;
            var header_top = document.getElementById("info_header_top");
            if (window.pageYOffset > sticky-20) {
                header_top.classList.add("translate-y-14");
            } else {
                header_top.classList.remove("translate-y-14");
            }
        }   
        
    }    
//  END LAYOUT PROFILE

});

