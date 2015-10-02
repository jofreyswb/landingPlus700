  $(document).ready(function(){

        var $menu = $("#firstMenu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 200 && $menu.hasClass("first_children_menu_top") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("first_children_menu_top")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                   $("#UpButton").removeClass("UpButtonn").addClass("UppBtn").fadeIn('fast');

                });
            } else if($(this).scrollTop() <= 200 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("first_children_menu_top")
                           .fadeIn('fast');
                    $("#UpButton").removeClass("UppBtn").addClass("UpButtonn").fadeIn('fast');
                });
            }
        });//scroll

        $menu.hover(
            function(){
                if( $(this).hasClass('fixed') ){
                    $(this).removeClass('transbg');
                }
            },
            function(){
                if( $(this).hasClass('fixed') ){
                    $(this).addClass('transbg');
                }
            });//hover
    });//jQuery