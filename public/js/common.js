$(function () {
    $('#quick-message').on('submit', function (e) {
        e.preventDefault();
        let self = $(this);
        $.post(self.attr('action'), self.serialize(), function (response) {
            self.find('input, textarea').val('');
            console.log(response);
        });
    });
    $("#toTop").click(function (e) {
        e.preventDefault();
        $("html, body").animate({scrollTop: 0}, 1000);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 30) {
            $('.container-fluid').addClass('sticky border-bottom box-shadow');            
        } else {
            $('.container-fluid').removeClass('sticky border-bottom box-shadow');            
        }
    });
});