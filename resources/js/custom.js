$(document).ready( function() {
    startScrollDown();
});

$(window).on('beforeunload', function(){
    goToTop();
});

    function startScrollDown() {

        let leftSide = $('.left-side');

        leftSide.animate({
            scrollTop: leftSide[0].scrollHeight
        }, 12000000, "linear");
    }

function goToTop() {
    $(document).scrollTop(0);
    console.log('TOP');
}