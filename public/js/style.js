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
    $('body').on('click','#btnImagePost',function(){
        $('#image_post').trigger('click');
    })
    $('body').on('click','#btnVideoPost',function(){
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
                    let checkImage = data.data.image;
                    let checkVideo = data.data.video;
                    // console.log(checkVideo)
                    let imagePost = checkImage == undefined ? '' : '<img src="/image/'+checkImage+'" alt="" class=" m-auto h-96">';
                    let videoPost = checkVideo == undefined ? " " : ' <video controls class="mx-auto w-full" ><source id="review_video_post" src="/image/'+ checkVideo+'" type="video/mp4"><source src="/image/'+ checkVideo+'" type="video/ogg">Your browser does not support the video tag.</video>';
                    Notiflix.Notify.Success('Post successful');
                    $("#btn_off_form_post").trigger('click');
                    $('#contentPosts').val('');
                    $('#image_post').val('');
                    $('#video_post').val('');
                    let post = ' <div class="shadow-md bg-white dark:bg-dark-second dark:text-dark-txt mt-4 rounded-lg"><div class="flex items-center justify-between px-4 py-2"><div class="flex space-x-2 items-center"><div class="relative"><img src="/image/'+ userAvatar +'" class="w-10 h-10 rounded-full" alt=""><span class="bg-green-500 w-3 h-3 rounded-full absolute right-0 top-3/4 border-white border-2"></span></div><div><div class="font-semibold">'+userName +'</div><span class="text-sm text-gray-500">'+ data.data.created_at+'</span>\
                            </div>\
                        </div><div class="w-8 h-8 grid place-items-center text-xl text-gray-500 hover:bg-gray-200 dark:text-dark-txt dark:hover:bg-dark-third rounded-full cursor-pointer">\
                            <i class="bx bx-dots-horizontal-rounded"></i>\
                        </div>\
                    </div>\
                    <div class="text-justify px-4 py-2">\
                       '+ data.data.content+'\
                    </div>\
                    <div class="py-2">\
                        '+imagePost+'\
                        '+videoPost+'\
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
    $('body').on('click','.handelPost',function(){
        $('.dropPost').addClass('hidden')
        $('#handelPost-'+$(this).attr('data-id')).removeClass('hidden');
    })
    $('body').on('click','.btnDelPost',function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        let postID = $(this).attr('data-id');
        $.ajax({
            url :delPost,
            type : 'DELETE',
            data : {
                postID: postID
            },
            success : function(data) {
                if(data.status= 'true')
                {
                    $('#post-'+postID).remove();
                }else
                {
                    Notiflix.Notify.Warning('Error Delete Post');
                }
            }
        });
    });
    $('body').on('click','.btnHidPost',function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        let postID = $(this).attr('data-id');
        $.ajax({
            url :hidPost,
            type : 'GET',
            data : {
                postID: postID
            },
            success : function(data) {
                if(data.status= 'true')
                {
                    $('#post-'+postID).remove();
                }else
                {
                    Notiflix.Notify.Warning('Error Hidden Post');
                }
            }
        });
    });
    // ENDPOST 
    // COMMENT
    $('body').on('click','.btnComment',function(){
        let id = $(this).data('id');
        $('.boxComment').addClass('hidden');
        $('#listComment-'+id).removeClass('hidden')
       
        $.ajax({
            url:showComment,
            method:"GET",
            data : {
                id:id
            },
            
            success:function(data)
            {
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
    //POST STORY
    $('#btnImgStory').click(function(){
        $('#imageStory').trigger('click')
        // $('#review_image_story').removeClass('hidden')
    })
    $('#btnVideoStory').click(function(){
        $('#videoStory').trigger('click')
    })     
    $('#imageStory').change(function(){
        $('#videoStory').val("") 
        $('#review_image_story').removeClass('hidden')
        $('#rvStory').addClass('hidden')
        const storyImage =  $(this)[0].files[0];
        if(storyImage){
            const reader = new FileReader();
            reader.onload = function(){
                const result = reader.result;
                $('#review_image_story').attr('src',result);
            }
            reader.readAsDataURL(storyImage);
        }

    })
    $('#videoStory').change(function(){
        $('#imageStory').val("")
        $('#rvStory').removeClass('hidden')
        $('#review_image_story').addClass('hidden')
        const storyVideo =  $(this)[0].files[0];
        if(storyVideo){
            var $source = $('#review_video_story');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        }
    })
    $('#contentStoty').keyup(function(){
        if( $(this).val() == '')
        {
            $('#rcStory').addClass('hidden')
        }
        else
        {
            $('#rcStory').removeClass('hidden')
            $('#rcStory').text( $(this).val())
        }
    })
    $('#btnPostStory').click(function(){
        let content = $('#contentStoty').val();
        var formData = new FormData();
        formData.append("content", content);
        formData.append("user_id", userID);
        if($('#imageStory')[0].files[0] != undefined)
        {
            formData.append("file[]", $('#imageStory')[0].files[0]);
        }
        if($('#videoStory')[0].files[0] != undefined)
        {
            formData.append("file[]", $('#videoStory')[0].files[0]);
        }
        console.log(formData.getAll('file[]'))
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url : urlStory,
            type : 'POST',
            data : formData,
            processData: false,
            contentType: false,
            success : function(data) {
                if(data.status == 'true')
                {   
                    
                    Notiflix.Notify.Success('Post story successful');
                    $('#contentStoty').val('');
                    $('#videoStory').val('');
                    $('#imageStory').val('');

                }else
                {
                    Notiflix.Notify.Warning('Post story failed');
                }
            //   console.log(content,userID,userName) 
              console.log(data.data) 
            }
        });

    })
    $("#yourStory").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url :yourStory,
            type : 'GET',
            data : {
                userID:userID 
            },
            success : function(data) {
                // console.log(data);
                if(data != '')
                {   
                    $("#listStory").html(data);

                }else
                {
                    Notiflix.Notify.Warning('Error Select Story');
                }
            }
        });
    })
    $('body').on('click','.deleteStory',function(){
        $('.dropStory').addClass('hidden')
        $('#deleteStory-'+$(this).attr('data-id')).removeClass('hidden');
    });
   
    $('body').on('click','.btnDelStory',function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        let storyID = $(this).attr('data-id');
        $.ajax({
            url :delStory,
            type : 'DELETE',
            data : {
                storyID: storyID
            },
            success : function(data) {
                if(data.status= 'true')
                {
                    $('#Story-'+storyID).remove();
                }else
                {
                    Notiflix.Notify.Warning('Error Delete Story');
                }
            }
        });
    });

    // END POST STORY   
    //  VIDEO CALL
    $('#zoom-out').click(function(){
        $('#video-call-div').addClass(' w-1/5 h-1/5 top-3/4 left-4/5');
        $('#video-call-div').removeClass('h-80%');
        $('#local-video').addClass('hidden');
        $('.call-action-div').addClass('hidden');
        $(this).addClass('hidden');
        $('#zoom-in').removeClass('hidden');
    })
    $('#zoom-in').click(function(){
        $('#video-call-div').removeClass(' w-1/5 h-1/5 top-3/4 left-4/5');
        $('#video-call-div').addClass('h-80%');
        $('#local-video').removeClass('hidden');
        $('.call-action-div').removeClass('hidden');
        $(this).removeClass('hidden')
        $('#zoom-out').removeClass('hidden');
    })
    $('body').on('click','.openVideoCall', function(e){
        e.stopPropagation();
        $("#app").addClass('fixed')
        $("#app").removeClass('relative')
        $('#callModal').removeClass('invisible');
        $('#boxVideoCall').removeClass('-translate-y-64');
        $('#boxVideoCall').addClass('translate-y-0');
        $('#boxVideoCall').removeClass('opacity-0');
    });
    $('#testMes').click(function(){
       $(".audio_messenger").trigger('play');
    })
    $('#testCall').click(function(){
       $(".audio_call").trigger('play');
    })
     
    $('body').on('click','#MuteNotifi', function(){
        var $audio = $('.audio_messenger');
        var $call =  $(".audio_call");
        $('#MuteNotifi span').toggleClass("hidden");
        if( $(".audio_messenger").prop('muted') )
        {
            $(".audio_messenger").prop('muted', false);
        }

        else {
        $(".audio_messenger").prop('muted', true);
        }
        // $('.audio_messenger').prop('muted', true);
       
    })
    $('.closeVideoCall').on('click', function(e){
        e.stopPropagation();
        // $(".audio_call").trigger('pause');
        $(".audio_call").get(0).pause();
        $(".audio_call").get(0).currentTime = 0;
        $("#app").addClass('relative')
        $("#app").removeClass('fixed')
        $('#boxVideoCall').removeClass('translate-y-0');
        $('#boxVideoCall').addClass('-translate-y-64');
        $('#boxVideoCall').addClass('opacity-0');
        setTimeout(() => {
            $('#callModal').addClass('invisible');
        }, 100);
    });
    // END VIDEO CALL   
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

