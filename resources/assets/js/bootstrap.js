
window._ = require('lodash');
window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

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

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

$(document).ready(function(){
    // COLUMN SELECT
    $('.table-hover-td').each(function(index, value){
        let elemTr = $(value).find('tr')
        elemTr.each(function(index, value){
            $(value).attr('rownum', index);
        });
    })
    $('.table-hover-td tr').each(function(index, value){
        $(this).find('td').each(function(index, value){
            $(value).attr('colnum', index);
            console.log(index);
        })
        
    })

    // COLORES 
    // amarillo rgb(226, 205, 111)
    // rojo rgb(173, 88, 82)
    // verde rgb(104, 190, 122)
    $('.table-hover-td td').mouseover(function(e){
        let currRow = $(this).attr('colnum');
        console.log(currRow);
        if ($(this).parent().attr('rownum') == 1) {
            $(this).parent().css('background', 'rgba(104, 190, 122, 1)')
            $(this).parent().parent().parent().find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0.25)')
           console.log($(this).parent().parent().parent());
        }
        else if ($(this).parent().attr('rownum') == 2) {
            $(this).parent().css('background', 'rgba(226, 205, 111, 1)')
            $(this).parent().parent().find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0.25)')
        }
        else if ($(this).parent().attr('rownum') == 3) {
            $(this).parent().css('background', 'rgba(173, 88, 82, 1)')
            $(this).parent().parent().find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0.25)')
        }
        else {
            $(this).parent().css('background', 'rgba(0,0,0,.1)')
            
            $(this).find('td[colnum="' + currRow + '"]').css('background', 'rgba(0,0,0, 0.1)')
        }
    })

    $('.table-hover-td td').mouseout(function (e) {
        let currRow = $(this).attr('colnum');
        console.log(currRow);
        if ($(this).parent().attr('rownum') == 1) {
            $(this).parent().css('background', 'rgba(104, 190, 122, .4)')
            $(this).parent().parent().parent().find('td[colnum="' + currRow + '"]').css('background', 'rgba(0,0,0, 0)')
            console.log($(this).parent().parent().parent());
        }
        else if ($(this).parent().attr('rownum') == 2) {
            $(this).parent().css('background', 'rgba(226, 205, 111, .4)')
            $(this).parent().parent().find('td[colnum="' + currRow + '"]').css('background', 'rgba(0,0,0, 0)')
        }
        else if ($(this).parent().attr('rownum') == 3) {
            $(this).parent().css('background', 'rgba(173, 88, 82, .4)')
            $(this).parent().parent().find('td[colnum="' + currRow + '"]').css('background', 'rgba(0,0,0, 0)')
        }
        else {
            $(this).parent().css('background', 'rgba(0,0,0, 0)')
            $(this).find('td[colnum="' + currRow + '"]').css('background', 'rgba(0,0,0, 0)')
        }
    })
    $('.table-hover-td td').mouseout(function (e) {
        let currRow = $(this).attr('colnum');
        if ($(this).parent().attr('rownum') == 1) {
            $(this).parent().css('background', 'rgba(104, 190, 122, .4)')
            $(this).find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0)')
        }
        else if ($(this).parent().attr('rownum') == 2) {
            $(this).parent().css('background', 'rgba(226, 205, 111, .4)')
            $(this).find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0)')
        }
        else if ($(this).parent().attr('rownum') == 3) {
            $(this).parent().css('background', 'rgba(173, 88, 82, .4)')
            $(this).find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0)')
        }
        else {
            $(this).parent().css('background', 'rgba(0,0,0, 0)')
            $(this).find('td[colnum="'+currRow+'"]').css('background', 'rgba(0,0,0, 0)')
        }
    })

});