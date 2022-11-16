$(document).on('scroll', function()
{
    if ($(this).scrollTop() > 500) {
        $('nav').css({
            "background-color": "var(--white-background) !important"
        });
    } else {
        $('nav').css({
            "background-color": "var(--transparent)"
        });
    }
});