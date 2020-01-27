$(function() {
    $('#quick-message').on('submit', function(e) {
        e.preventDefault();
        $.post($(this).attr('action'), $(this).serialize(), function(response) {
            console.log(response);
        });
    });
});