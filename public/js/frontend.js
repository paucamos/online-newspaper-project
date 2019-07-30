
$(document).ready(function(){

    // add active-link class when menu item is clicked
    $('.nav-item').click(function(){
        $('.active-link').removeClass('active-link');
        $(this).addClass('active-link');
    });

    // quan es clica un link de paginacio cridar funcio ajax
    $(document).on('click', '.pagination a', function (e) {
        getArticles($(this).attr('href').split('page=')[1]);
        e.preventDefault();
    });

    
});

$(window).on('hashchange', function() {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else {
            getArticles(page);
        }
    }
});

// funcio ajax per carregar la paginacio
function getArticles(page) {
    $.ajax({
        url : '?page=' + page,
        dataType: 'json',
    }).done(function (data) {
        $('.articles').html(data);
        location.hash = page;
    }).fail(function () {
        alert("No s'han pogut carregar les notícies.");
    });
}