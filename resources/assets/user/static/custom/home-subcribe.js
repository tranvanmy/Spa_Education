$(document).ready(function(){
    $('#home-nav-onepage').onePageNav({
        filter: ':not(.purchase-link)'
    });

    $('#home-button-join-us').click(function(event){
        event.preventDefault();
        $(this).hide();
        $('#home-form-join-us').animate({ height: 'toggle' }, 700);
    });

    $('#home-subcribe-submit').click(function(event){
        event.preventDefault();
        let params = {
            email: $('#home-subcribe-email').val(),
            name: $('#home-subcribe-name').val(),
            phone: $('#home-subcribe-phone').val(),
            message: $('#home-subcribe-message').val(),
        }
        // $.ajax({
        //     method: 'post',
        //     url: '/subcribe',
        //     headers: {
        //         'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
        //     },
        //     data: params
        // }).done(response => {
        //     console.log(response);
        // }).error(xhr => {
        //     let response = xhr.response
        //     console.log(response)
        // })
    });
});
