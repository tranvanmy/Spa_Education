function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$('#home-course-submit').click((event) => {
    event.preventDefault()

    let params={
        name: $('#home-course-name').val().trim(),
        email: $('#home-course-email').val().trim(),
        content: $('#home-course-content').val().trim(),
        commentable_type: 'courses',
        commentable_id: $('#home-course-id').val().trim(),
    }

    if(!params.name || !params.content || (params.email && !validateEmail(params.email))) {
        !params.name && $('#home-course-name-message').text('The name field is required.')
        !params.content && $('#home-course-content-message').text('The content field is required.')

        return params.email && !validateEmail(params.email)
            && $('#home-course-email-message').text('The email must be a valid email address.')
    }

    $.ajax({
        method: 'post',
        url: '/comments/store',
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
        },
        data: params
    }).done((response) => {
        $('#home-course-name-message').text('')
        $('#home-course-content-message').text('')
        $('#home-course-email-message').text('')

        $('#home-course-name').val('')
        $('#home-course-email').val('')
        $('#home-course-content').val('')

        $('#couse-comment-area').html(response)
    })
})
