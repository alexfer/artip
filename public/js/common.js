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
            $('.container-fluid').addClass('sticky border-bottom box-shadow');
        } else {
            $('.container-fluid').removeClass('sticky border-bottom box-shadow');
        }
    });
});