(function($){
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#menu_toggle').click(function(){
        var main_body = $('#main_body');
        if(main_body.hasClass('toggle')){
            main_body.removeClass('toggle');
        }else{
            main_body.addClass('toggle');
        }
    });
    
    $('#menu_bar .has-sub a b').click(function(e){
        e.preventDefault();
        var sub_menu = $(this).closest('.has-sub');
        if(sub_menu.hasClass('open')){
            sub_menu.removeClass('open');
        }else{
            sub_menu.addClass('open');
        }
    });
    $('#menu_bar .sub-menu .active').closest('.has-sub').addClass('active');
    $('#menu_bar .sub-menu .active').closest('.sub-menu').addClass('open');
})(jQuery);


