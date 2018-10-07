$(document).ready( function() {
    startScrollDown();
});

$(window).on('beforeunload', function(){
    goToTop();
});

function startScrollDown() {

    $(".left-side").animate({
        scrollTop: $('.left-side')[0].scrollHeight - $('.left-side')[0].clientHeight
    }, 10000);
}

function goToTop() {
    $(document).scrollTop(0);
    console.log('TOP');
}