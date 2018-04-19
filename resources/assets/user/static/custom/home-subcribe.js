$(document).ready(function(){
    $('#home-nav-onepage').onePageNav({
        filter: ':not(.purchase-link)'
    });

    $('#home-button-join-us').click(function(event){
        event.preventDefault();
        $(this).hide();
        $('#home-form-join-us').animate({ height: 'toggle' }, 700);
    });

    $('.close').on('click', (event) => {
        event.preventDefault();
        $("p[id^='message']").empty('');
        $('.alert-dismissable').addClass('hidden');
    });

    $('#home-subcribe-submit').click(function(event){
        event.preventDefault();
        $('.alert-dismissable').addClass('hidden');
        let params = {
            email: $('#home-subcribe-email').val(),
            name: $('#home-subcribe-name').val(),
            phone: $('#home-subcribe-phone').val(),
            message: $('#home-subcribe-message').val(),
        }
        $.ajax({
            method: 'post',
            url: '/subcribe',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
            },
            data: params,
            success: response => {
                console.log(response);
                if (response.success == true) {
                    $('.alert-success').removeClass('hidden');
                    $('#message-success').html(response.message);
                } else {
                    $('.alert-danger').removeClass('hidden');
                    $('#message-failure').html(response.message);
                }
            },
            error: data => {
                $('.alert-danger').removeClass('hidden');
                var errors = data.responseJSON.errors;
                $('#message-failure').html();
                $.each(errors, (key, value) => {
                    $.each(value, (innerKey, innerValue) => {
                        $('#message-failure').append(innerValue);
                        $('#message-failure').append("<br>");
                    });
                });
            }
        });
    });
});
