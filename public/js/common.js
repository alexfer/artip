$(function () {
    $('#quick-message').on('submit', function (e) {
        e.preventDefault();
        let self = $(this);
        self.find('.alert').hide();
        $.post(self.attr('action'), self.serialize(), function (response) {
            if (response.errors !== undefined) {
                self.find('.alert-danger').html(response.errors).show();
            } else {
                self.find('.alert-success').html(response.message).show();
            }
        }, 'json');
    });
    $("#toTop").click(function (e) {
        e.preventDefault();
        $("html, body").animate({scrollTop: 0}, 1000);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 30) {
            $('.stycki-bar').addClass('sticky border-bottom box-shadow');
        } else {
            $('.stycki-bar').removeClass('sticky border-bottom box-shadow');
        }
    });
    $('#carousel-indicators').carousel({
        interval: 20000,
        cycle: true
    });
});