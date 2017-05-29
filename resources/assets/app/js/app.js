/**
 * Created by xh on 2017/5/29.
 */

window._ = require('lodash');


try {
  window.$ = window.jQuery = require('jquery');

  require('bootstrap-sass');
} catch (e) {}


/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]').content;

if (token) {
  console.log('token',token);
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}