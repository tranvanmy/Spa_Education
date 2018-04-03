
// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// try {
//     window.$ = window.jQuery = require('jquery');

//     // require('bootstrap-sass');
// } catch (e) { }

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

axios.defaults.baseURL = '/api/v0/';

window.slug = (title = '') => {
    let slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');

    return slug
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '')            // Trim - from end of text
}

window.configTinyMCE = {
    theme: "modern",
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
        "table contextmenu directionality emoticons paste textcolor"
    ],
    relative_urls: false,

    filemanager_title:"Responsive Filemanager",
    external_filemanager_path:"/bower_components/responsive-filemanager/filemanager/",
    external_plugins: { "filemanager" : "/bower_components/responsive-filemanager/filemanager/plugin.min.js"},

    image_advtab: true,
    toolbar1: `undo redo | bold italic underline | alignleft aligncenter alignright alignjustify
        | bullist numlist outdent indent | styleselect
        | image media | link unlink anchor | print preview | fontsizeselect |
    `,
    // toolbar2: " | image | media | link unlink anchor | print preview | fontsizeselect",

    fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 24pt 36pt',
}

window.configDateTimeLocal = {
    dow: 0, // Sunday is the first day of the week
    hourTip: 'Select Hour', // tip of select hour
    minuteTip: 'Select Minute', // tip of select minute
    secondTip: 'Select Second', // tip of select second
    yearSuffix: '', // suffix of head year
    monthsHead: 'January_February_March_April_May_June_July_August_September_October_November_December'.split('_'),
    months: 'Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec'.split('_'),
    weeks: 'Su_Mo_Tu_We_Th_Fr_Sa'.split('_'),
    cancelTip: 'Cancel',
    submitTip: 'Confirm'
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key',
//     cluster: 'mt1',
//     encrypted: true
// });
