(function($){
    $('#menu_bar .has-sub a b').click(function(e){
        e.preventDefault();
        var sub_menu = $(this).closest('.has-sub').find('.sub-menu');
        if(sub_menu.hasClass('open')){
            sub_menu.removeClass('open');
        }else{
            sub_menu.addClass('open');
        }
    });
    $('#menu_bar .sub-menu .active').closest('.has-sub').addClass('active');
    $('#menu_bar .sub-menu .active').closest('.sub-menu').addClass('open');
})(jQuery);


