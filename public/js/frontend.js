
$(document).ready(function(){

    // add active-link class when menu item is clicked
    $('.nav-item').click(function(){
        $('.active-link').removeClass('active-link');
        $(this).addClass('active-link');
    });

    
});
