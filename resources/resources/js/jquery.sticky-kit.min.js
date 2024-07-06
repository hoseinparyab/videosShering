$(document).ready(function () {
	
    var length = $('#all-output').height() - $('#sidebar-stick').height() + $('#all-output').offset().top;

    $(window).scroll(function () {

        var scroll = $(this).scrollTop();
        var height = $('#sidebar-stick').height() + 'px';

        if (scroll < $('#all-output').offset().top) {

            $('#sidebar-stick').css({
                'position': 'absolute',
                'top': '0'
            });

        } else if (scroll > length) {

            $('#sidebar-stick').css({
                'position': 'absolute',
                'bottom': '0',
                'top': 'auto'
            });

        } else {
            $('#sidebar-stick').css({
                'position': 'fixed',
                'top': '0',
            });
        }
    });
});
