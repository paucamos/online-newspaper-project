
$(document).ready(function(){

    // add active class when menu item is clicked
    $('.nav-item').click(function(){
        $('.active').removeClass('active');
        $(this).addClass('active');
    });
    
});


