<?php 
/**
 * Xampp Ui Webkit
 * Designed by Reginald S. Gyan @ Gevibe Limited
 *  Date: 09-03-2022
 * Copyright 2022 Gevibe Limited By RSGYAN
 */

define('SERVER_NAME','MAMP Server');
define('SERVER_VERSION','v7.01');
if (isset($_GET['phpinfo'])) {
    echo phpinfo();
}else{
$sideimage = '<svg enable-background="new 0 0 64 64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="m30.2 8.8.5 29.8h22.3l-.3-30.2z" fill="#495057"/><path d="m35.5 13.7h1.2v.6h-1.2z" fill="#007BFF"/><g fill="#fff"><path d="m32.4 13.7h1.2v.6h-1.2z"/><path d="m32.4 15h1.2v.6h-1.2z"/><path d="m32.4 16.3h1.2v.6h-1.2z"/><path d="m32.4 17.5h1.2v.6h-1.2z"/><path d="m32.4 18.8h1.2v.6h-1.2z"/><path d="m32.4 20.1h1.2v.6h-1.2z"/><path d="m32.4 21.4h1.2v.6h-1.2z"/><path d="m32.4 22.7h1.2v.6h-1.2z"/><path d="m32.4 24h1.2v.6h-1.2z"/><path d="m32.4 25.3h1.2v.6h-1.2z"/><path d="m32.4 26.6h1.2v.6h-1.2z"/><path d="m32.4 27.9h1.2v.6h-1.2z"/><path d="m32.4 29.2h1.2v.6h-1.2z"/><path d="m32.4 30.5h1.2v.6h-1.2z"/><path d="m32.4 31.8h1.2v.6h-1.2z"/><path d="m32.4 33.1h1.2v.6h-1.2z"/></g><path d="m37 13.7h1.2v.6h-1.2z" fill="#c2ee1d"/><path d="m45 13.7h1.8v.6h-1.8z" fill="#007BFF"/><path d="m38.6 13.7h6.1v.6h-6.1z" fill="#fff"/><path d="m35.5 15h1.2v.6h-1.2z" fill="#007BFF"/><path d="m39.8 15h6v.6h-6z" fill="#fff"/><path d="m34.8 16.1h1.2v.6h-1.2z" fill="#c2ee1d"/><path d="m35.9 17.3h1.2v.6h-1.2z" fill="#c2ee1d"/><path d="m37.4 17.3h3.7v.6h-3.7z" fill="#fff"/><path d="m41.3 17.3h3.7v.6h-3.7z" fill="#fff"/><path d="m45.3 17.3h1.6v.6h-1.6z" fill="#f4ca60"/><path d="m36.5 18.4h1.2v.6h-1.2z" fill="#c2ee1d"/><path d="m38 18.4h3.3v.6h-3.3z" fill="#007BFF"/><path d="m41.5 18.4h3.3v.6h-3.3z" fill="#fff"/><path d="m36.5 22h2.9v.6h-2.9z" fill="#c2ee1d"/><path d="m39.7 22h2.9v.6h-2.9z" fill="#fff"/><path d="m42.9 22h2.9v.6h-2.9z" fill="#f4ca60"/><path d="m39.2 24.5h3.4v.6h-3.4z" fill="#fff"/><path d="m39.2 25.6h1.2v.6h-1.2z" fill="#c2ee1d"/><path d="m40.7 25.6h4.2v.6h-4.2z" fill="#007BFF"/><path d="m45.1 25.6h.9v.6h-.9z" fill="#f4ca60"/><path d="m42.2 27.1h1.2v.6h-1.2z" fill="#a2cfef"/><path d="m43.4 28.5h1.2v.6h-1.2z" fill="#ee8861"/><path d="m44.9 28.5h1.2v.6h-1.2z" fill="#a2cfef"/><path d="m46.4 28.5h4.1v.6h-4.1z" fill="#fff"/><path d="m43.4 29.9h1.2v.6h-1.2z" fill="#a2cfef"/><path d="m49.5 29.9h2v.6h-2z" fill="#f4ca60"/><path d="m45.6 29.9h3.7v.6h-3.7z" fill="#fff"/><path d="m33 9.7-.5 2.4h.4l.5-2.4" fill="#fff"/><path d="m34.2 9.7-.5 2.4h.4l.5-2.4" fill="#fff"/><path d="m35 10h.5v.5h-.5z" fill="#fff"/><path d="m35 11.4h.5v.5h-.5z" fill="#fff"/><path d="m20.3 22.1.2 16.7 9.4-.2-.3-16.6z" fill="#007BFF"/><path d="m15.5 10.3h13.7v8.9h-13.5z" fill="#c2ee1d"/><path d="m19.3 16.5h-.6v-1.4h-1.2v1.4h-.6v-3.2h.6v1.3h1.2v-1.3h.6z" fill="#414143"/><path d="m22.2 13.8h-.9v2.6h-.6v-2.6h-.9v-.5h2.5v.5z" fill="#414143"/><path d="m23.4 13.3.8 2.3.8-2.3h.8v3.2h-.6v-.9l.1-1.5-.8 2.4h-.4l-.8-2.4.1 1.5v.9h-.6v-3.2z" fill="#414143"/><path d="m27 15.9h1.4v.5h-2v-3.2h.6z" fill="#414143"/><path d="m26.8 42.7h25.2v7.5h-24.9" fill="#ee8861"/><path d="m32.4 41.1c0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.6-.3c-.1-.2-.2-.4-.2-.7v-.1c0-.2 0-.4.1-.5s.2-.3.3-.3c.1-.1.3-.1.4-.1.2 0 .4.1.5.2s.2.3.2.5h-.4c0-.1 0-.2-.1-.3s-.2-.1-.3-.1-.2 0-.3.1-.1.2-.1.5v.1c0 .2 0 .4.1.5s.2.1.3.1.2 0 .3-.1.1-.1.1-.3h.4z" fill="#ced4da"/><path d="m33.7 41.2c0-.1 0-.1-.1-.2s-.1-.1-.3-.1c-.1 0-.2-.1-.3-.1-.2-.1-.3-.3-.3-.5 0-.1 0-.2.1-.3s.1-.1.3-.2.2-.1.4-.1c.1 0 .3 0 .4.1s.2.1.2.2c.1.1.1.2.1.3h-.4c0-.1 0-.2-.1-.2s-.1-.1-.2-.1-.2 0-.2.1c-.1 0-.1.1-.1.2s0 .1.1.2c.1 0 .2.1.3.1.2.1.4.2.5.3s.2.2.2.4-.1.3-.2.4-.3.1-.5.1c-.1 0-.3 0-.4-.1s-.2-.1-.3-.2-.1-.2-.1-.3h.2c0 .2.1.3.4.3.1 0 .2 0 .2-.1.1 0 .1-.1.1-.2z" fill="#ced4da"/><path d="m35.4 41.2c0-.1 0-.1-.1-.2s-.2 0-.3-.1c-.1 0-.2-.1-.3-.1-.2-.1-.3-.3-.3-.5 0-.1 0-.2.1-.3s.1-.1.3-.2.2-.1.4-.1c.1 0 .3 0 .4.1s.2.1.2.2c.1.1.1.2.1.3h-.4c0-.1 0-.2-.1-.2s-.1-.1-.2-.1-.2 0-.2.1c-.1 0-.1.1-.1.2s0 .1.1.2c.1 0 .2.1.3.1.2.1.4.2.5.3s.2.2.2.4-.1.3-.2.4-.3.1-.5.1c-.1 0-.3 0-.4-.1s-.2-.1-.3-.2-.1-.2-.1-.3h.4c0 .2.1.3.4.3.1 0 .2 0 .2-.1-.2 0-.1-.1-.1-.2z" fill="#ced4da"/><path d="m37.9 41.1v.7h-.4v-2h.7c.1 0 .3 0 .4.1s.2.1.3.2.1.2.1.3c0 .2-.1.3-.2.5-.1.1-.3.2-.5.2zm0-.4h.4c.1 0 .2 0 .2-.1.1-.1.1-.1.1-.2s0-.2-.1-.2-.1-.1-.2-.1h-.4z" fill="#ced4da"/><path d="m40.8 41.8h-.4v-.8h-.8v.8h-.4v-2h.4v.8h.8v-.8h.4z" fill="#ced4da"/><path d="m41.5 41.1v.7h-.4v-2h.7c.1 0 .3 0 .4.1s.2.1.3.2.1.2.1.3c0 .2-.1.3-.2.5-.1.1-.3.2-.5.2zm0-.4h.4c.1 0 .2 0 .2-.1.1-.1.1-.1.1-.2s0-.2-.1-.2-.1-.1-.2-.1h-.4z" fill="#ced4da"/><path d="m44.3 39.8h.4v1.4c0 .1 0 .2-.1.3s-.1.2-.2.2c-.1.1-.2.1-.3.1-.2 0-.4-.1-.5-.2s-.2-.3-.2-.4h.4c0 .1 0 .2.1.2 0 0 .1.1.2.1s.1 0 .2-.1c0-.1.1-.1.1-.2v-1.4z" fill="#ced4da"/><path d="m46 41.2c0-.1 0-.1-.1-.2s-.1-.1-.3-.1c-.1 0-.2-.1-.3-.1-.2-.1-.3-.3-.3-.5 0-.1 0-.2.1-.3s.1-.1.3-.2.2-.1.4-.1c.1 0 .3 0 .4.1s.2.1.2.2c.1.1.1.2.1.3h-.5c0-.1 0-.2-.1-.2s-.1-.1-.2-.1-.2 0-.2.1c-.1 0-.1.1-.1.2s0 .1.1.2c.1 0 .2.1.3.1.2.1.4.2.5.3s.2.2.2.4-.1.3-.2.4-.3.1-.5.1c-.1 0-.3 0-.4-.1s-.2-.1-.3-.2-.1-.2-.1-.4h.4c0 .2.1.3.4.3.1 0 .2 0 .2-.1 0 .1 0 0 0-.1z" fill="#ced4da"/><path d="m48.4 24.3-1.6 1.5.4 9.4s4.1.8 7.6-.4l-.7-9.7-3.1-1.2z" fill="#ee8861"/><ellipse cx="51.3" cy="54.4" fill="#383838" opacity=".2" rx="9.7" ry="2.2"/><path d="m50.3 51.5s.2 1.9 0 2c-.2 0-5.6.5-5.6.5s-.4-.1-.4-.4c-.1-.2 3.8-2.1 3.8-2.1z" fill="#f4ca60"/><path d="m44 53.6s0 .5.2.6 6.3-.3 6.3-.3 0-.6 0-.7-6.5.4-6.5.4z" fill="#fff"/><path d="m45.5 52.8s.2.3.5.2.6-.3.6-.4-.3-.3-.4-.3c0 0-.7.3-.7.5z" fill="#fff"/><path d="m46.6 52.3s.2.3.5.2.6-.3.6-.4-.3-.3-.4-.3-.8.3-.7.5z" fill="#fff"/><path d="m53.5 51.6s-.1 1.9.1 2c.2 0 5.6.2 5.6.2s.4-.1.4-.4c0-.2-3.9-1.9-3.9-1.9z" fill="#f4ca60"/><path d="m59.8 53.3s0 .5-.2.6-6.3 0-6.3 0-.1-.6 0-.7c0 0 6.5.1 6.5.1z" fill="#fff"/><path d="m58.3 52.6s-.2.3-.5.3-.7-.3-.6-.3c0-.1.3-.3.4-.3.1-.1.7.1.7.3z" fill="#fff"/><path d="m57.3 52.1s-.2.3-.5.3-.7-.3-.6-.3c0-.1.3-.3.4-.3s.7.2.7.3z" fill="#fff"/><path d="m47.5 34.8s-.3 10.5-.2 11.1.4 5.6.5 5.7 2.5 0 2.6 0-.3-7.2-.3-7.2l.8-6.3 1.6 7.8s.9 5.5 1 5.7 2.9 0 2.9 0l-1.8-17.4z" fill="#007BFF"/><g opacity=".4"><path d="m52.4 35.6s.5 2.1 1.3 2.5c.5.2.5-.2.5-.2l-.2-2.5z" fill="#231f20"/><path d="m52.4 35.6s.5 2.1 1.3 2.5c.5.2.5-.2.5-.2l-.2-2.5z" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width=".5"/><path d="m47.7 35.6v2.4c0 .1.1.1.1 0 .2-.4.7-1.3.7-1.7 0-.5 0-.5 0-.5z" fill="#231f20"/><path d="m47.7 35.6v2.4c0 .1.1.1.1 0 .2-.4.7-1.3.7-1.7 0-.5 0-.5 0-.5z" fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width=".5"/><path d="m50.4 36.6s-.1 1.6.4 1.6h.5v-2.8h-.9z" fill="#231f20"/><g fill="none" stroke="#231f20" stroke-miterlimit="10" stroke-width=".5"><path d="m50.4 36.6s-.1 1.6.4 1.6h.5v-2.8h-.9z"/><path d="m54.3 39 .2 1.3"/><path d="m54.9 43.5.4 2.4.2 2.4" stroke-dasharray="3.2421 3.2425"/><path d="m55.7 49.9.1 1.3"/><path d="m50.4 38.6-.1 1.3"/><path d="m50.1 41.9-.3 2.7.1 4.3" stroke-dasharray="2.0128 2.0131"/><path d="m49.9 49.9.1 1.3"/></g></g><path d="m43 31.2s1.8 2.9 2.6 2.9c.7 0 1.8-1.8 1.8-2.3 0-.4-4.4-.6-4.4-.6z" fill="#f1cab6"/><path d="m48.4 24.3-1.6 1.5.4 9.4s4.1.8 7.6-.4l-.7-9.7-3.1-1.2z" fill="#ee8861"/><path d="m52.4 18.4-.1 1.4s.9 0 .9-1.2-.8-.2-.8-.2z" fill="#f1cab6"/><path d="m48.4 24.3-1.6 1.5.4 9.4s4.1.8 7.6-.4l-.7-9.7-3.1-1.2z" fill="#ee8861"/><path d="m54.8 34.2-.5-7.7-1.4-.5s-.2-.1-.4.7-.1 2.1-.7 2.1-3.8 0-3.6.8c.1.8 3.9 4.8 5.4 4.7.5.1.9 0 1.2-.1z" fill="#ee8861" opacity=".2"/><path d="m41 23.5s1.1 7.9 1.5 8.1c.4.3 4.3 1 4.8.8.5-.3-.6-8.6-1-8.7-.4 0-5.3-.6-5.3-.2z" fill="#222220"/><path d="m41.7 29.2s1.6-.4 1.8-.2-.9.6-.9.6 1.1-.2 1.1 0-1 .5-1 .5 1 .1 1 .2-1 .2-1 .2.7.1.7.2-.6.1-1 .1c-.2 0-.4-.1-.4-.3-.3-.4-.6-1.2-.3-1.3z" fill="#f1cab6"/><path d="m47.3 28.2v.9s-2.3-.1-2.1.1c.1.3 1.1.3 1.1.3s-1.4 0-1.3.1c.1.2 1.4.4 1.4.4s-1.3-.1-1.1.1 1.1.3 1.1.3-.7 0-.7.2 2.4.3 2.5.3 6.3 2 7.2 1.7c.9-.4.4-5 .4-5l-2.6.2.1 1.7h-4.9c-.2-.1-.6-1.3-1.1-1.3z" fill="#f1cab6"/><path d="m52.5 24.7.5 4.1s.1.5 2.9.2c0 0 .1-2.3-.6-3.9-.9-2-4.2-1.7-4.2-1.7z" fill="#ee8861"/><path d="m47.8 16.9v4.1s-.1 3.5.4 4.1 3.8.6 4.3 0 .4-5 .4-5 1.2-1.1.5-3.5c0 0 1.6-.2 1-1.6-.7-1.4-2.4-1.8-2.6 0 0 0-1.4-.4-2.2-.1s-1.8 1-1.8 2z" fill="#2d3b44"/><path d="m48 17.1s1.5.4 3-.1c.6-.2 1.1 0 1 1.2s-.3 3.1-.6 3c-1.6-.8-1.8-.7-2-.7s-.9.3-1.2.5c0 0-.2-2.5-.2-3.9z" fill="#f1cab6"/><path d="m51 19.2c0 .2-.1.4-.2.4s-.2-.2-.2-.4.1-.4.2-.4.2.2.2.4z" fill="#2d3b44"/><path d="m48.8 19.2c0 .2-.1.4-.2.4s-.2-.2-.2-.4.1-.4.2-.4.2.2.2.4z" fill="#2d3b44"/><path d="m49.4 18.7s-.6 1.7-.3 2c.3.4.7-.1 1.1-.1" style="fill:#f1cab6;stroke:#2d3b44;stroke-width:.25;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"/><path d="m50.4 18.2s.6-.1.9.2c0 0 .2-.6-.9-.5z" fill="#2d3b44"/><path d="m49 18.2s-.6-.1-.9.2c0 0-.2-.6.9-.5z" fill="#2d3b44"/><path d="m50.6 21.5c0 .4-.4.6-.8.6s-.8-.3-.8-.6c0-.4.4 0 .8 0s.8-.4.8 0z" fill="#fff"/><path d="m43.9 27.5c-.5 0-.9-.4-.9-.9-.1-.6.3-1.1.8-1.2.2 0 .5 0 .7.2s.3.4.4.7c.1.6-.3 1.1-.8 1.2-.1 0-.1 0-.2 0zm-.1-1.8c-.4.1-.7.5-.6.9s.4.7.8.7c.4-.1.6-.5.5-.9 0-.2-.1-.4-.3-.5-.1-.2-.2-.2-.4-.2z" fill="#fff"/><path d="m51.7 14.9s1.1.3 1.7 1.6c0 .1 0-1.7-1.7-1.6z" fill="#ee8861"/><ellipse cx="22" cy="54.6" fill="#383838" opacity=".2" rx="16.6" ry="2.1"/><path d="m8.1 34.2c-5.5 5.5-3.4 15.4-2.2 17.2.7 1.1 1.9 1.9 3.1 2.5 1.4.8 2.5 1.2 4.1 1.3.9 0 2.2.1 3.1 0 1.2-.1 2.4-.1 3.5-.1 2.2-.1 4.3-.7 6.4-1.3 1.3-.4 2.6-.8 3.5-1.8s1.2-2.4 1.4-3.7c.1-.9.1-1.8-.3-2.5-.5-.9-1.5-1.4-2.4-1.8-1.2-.5-2.4-.8-3.6-1-1.5-.3-3-.4-4.3-1.1-2-1.1-3.1-3.2-4.3-5.1-1.1-1.7-2.4-3.7-4.5-3.8-1.4-.2-2.6.3-3.5 1.2z" fill="#007BFF"/><path d="m30.6 45.7c-.5-.9-1.5-1.4-2.4-1.8-1.2-.5-2.4-.8-3.6-1-1.5-.3-3-.4-4.3-1.1-2-1.1-3.1-3.2-4.3-5.1-1.1-1.7-2.4-3.7-4.5-3.8-.5 0-1 .1-1.4.2-.2.2-.4.4-.4.6-.1.5 0 1 0 1.4 0 .7-.3 1.4-.6 2.1-.9 2.5-1 5.3-.1 7.8.5 1.4 1.6 2.7 3 2.8.7.1 1.4-.2 2 .1.3.1.5.3.8.4 1.8 1.2 4.1 1.3 6 .4.4-.2.8-.4 1.2-.5s.9 0 1.2.3c.2.3.3.6.3.9.2 1.5.4 3 1.1 4.3.1.1.2.3.3.4.4-.1.9-.3 1.3-.4 1.3-.4 2.6-.8 3.5-1.8s1.2-2.4 1.4-3.7c-.2-.8-.1-1.8-.5-2.5z" opacity=".2"/><path d="m19.8 36.7s-2.3-2.7-2.8-2.7-4.7.4-5 .6c-.7.3-1.1 1.1-1.1 1.1s1.8 6.8 2.1 7c.2.2.7 2.7 2.6 1.6s1.8-2 3.4-2.2 3.4-1.3 3.5-1.4c-.1-.1-2.7-4-2.7-4z" fill="#fff"/><path d="m15.6 44.3c1.9-1.1 1.8-2 3.4-2.2s3.4-1.3 3.5-1.4c0-.1-2.6-4-2.6-4s-.7-.8-1.3-1.5c-.1.1-.1.2-.2.3-.1.2-.1.5-.1.7 0 .4-.1.7-.1 1.1 0 .2 0 .5-.1.7-.2.5-.7.8-1.1 1-.6.3-1.3.6-1.9.9-.2.1-.3.1-.5.1-.3 0-.5-.2-.7-.5s-.2-.5-.3-.8c-.2-.8-.2-2.5-1.1-2.9-.6-.3-1 0-1.3.4.4 1.6 1.7 6.3 1.9 6.5.1.1.6 2.7 2.5 1.6z" fill="#2d3b44" opacity=".2"/><path d="m33.6 51.4s.9 1.5 1 1.5c.2-.1 4.4-2.8 4.4-2.8s.2-.3.1-.5-3.9.6-3.9.6z" fill="#2d3b44"/><path d="m39.4 49.5s.3.3.1.6-4.8 3.2-4.8 3.2-.4-.5-.4-.5c0-.1 5.1-3.3 5.1-3.3z" fill="#fff"/><path d="m37.8 49.7s0 .4-.3.5c-.2.1-.6.1-.7.1 0-.1.1-.4.1-.5.2-.1.9-.3.9-.1z" fill="#fff"/><path d="m36.8 49.9s0 .4-.3.5c-.2.1-.6.1-.7.1 0-.1.1-.4.1-.5.2-.1.9-.3.9-.1z" fill="#fff"/><path d="m18.7 41.9c-.9.3 4.4 1.8 4.4 1.8l5.2 1.8 5.5 6.4 2.4-1.9s-5.9-8.5-6.5-8.9c0 .1-7.2-.3-11 .8z" fill="#e7b851"/><path d="m25.1 52.8s-.4 1.7-.2 1.8 5.1 1 5.1 1 .4-.1.4-.3c.1-.2-3.3-2.3-3.3-2.3z" fill="#2d3b44"/><path d="m30.6 55.3s0 .4-.3.5c-.2.1-5.7-.9-5.7-.9s0-.6.1-.6 5.9 1 5.9 1z" fill="#fff"/><path d="m29.3 54.4s-.3.2-.5.2c-.2-.1-.6-.3-.5-.4 0-.1.3-.3.4-.2.1 0 .7.3.6.4z" fill="#fff"/><path d="m28.5 53.9s-.3.2-.5.2c-.2-.1-.6-.3-.5-.4 0-.1.3-.3.4-.2 0-.1.6.2.6.4z" fill="#fff"/><path d="m14.7 44.2s1 1.3 1.8 1.7 7.9-.1 7.9-.1l.4 7.3 2.7.1s1.3-10.5.5-11-11.1 0-11.1 0z" fill="#f4ca60"/><path d="m16.3 41.4.5.7h1.9s10.9-1.4 11-1.6-.1-1.2-.1-1.2l-10.9 1.9z" fill="#495057"/><path d="m17.2 39.7s.5-.7 1.9-.5.9 1.7.9 1.7l-1.3.1z" fill="#e0b4a0"/><path d="m10.8 35.7s-2.8 5.7.1 8.6c3 2.9 7.7-3.2 7.7-3.2s-.6-1.4-1.2-1.6-4.3 2.2-4.3 2.2-.2-9.6-2.3-6z" fill="#fff"/><path d="m29.5 39.9s.1-8.1-.6-8.3c-.7-.1-10.7.5-11 .9-.3.5.8 8.9.8 8.9z" fill="#343a40"/><path d="m24.5 37.8c-.7 0-1.2-.6-1.2-1.3s.6-1.3 1.2-1.3c.7 0 1.2.6 1.2 1.3s-.5 1.3-1.2 1.3zm0-2.2c-.5 0-.9.4-.9.9s.4.9.9.9.9-.4.9-.9-.4-.9-.9-.9z" fill="#fff"/><path d="m12.8 32.6c-.1 0-.1 0-.1.1-.2.2-.6.2-.8 0s-.4-.5-.3-.8c-.3 0-.6-.1-.9-.3-.2-.2-.4-.5-.3-.9-.2 0-.5 0-.7-.2-.1-.1-.1-.2-.1-.4s0-.4 0-.6.2-.4.3-.4c-.1-.4-.3-.9-.2-1.3 0-.5.3-.9.7-1.1.1 0 .1 0 .2-.1v-.1c0-.3 0-.7 0-1 .1-.3.3-.6.6-.7s.6 0 .9.2c.1-.3.3-.5.6-.6s.6.1.7.3c.2-.3.5-.6.9-.6s.7.4.6.8c.3-.2.6-.4 1-.3.3.1.6.5.5.8.3-.1.6-.2 1-.1.3.1.6.3.7.6s-.1.6-.3.9c.4.2.6.5.7.9s0 .8-.2 1.1c0 0-.1.1-.1.1s0 .1.1.1c.1.2.2.5.2.7 0 .3-.2.5-.4.6.1.1.2.2.1.3s-.1.2-.3.2c.2.1.2.4.1.6s-.4.2-.6.2c0 .2.1.5-.1.6-.1 0-.1 0-.2 0-.3 0-.5-.1-.8-.1-.7-.1-1.5-.2-2.2-.1-.2 0-.4.1-.6.2-.1.1-.2.2-.4.2 0 .3-.1.1-.3.2z" fill="#ee8861"/><path d="m13.6 32.4s.1 1.3 0 1.4c-.1 0-1.2.6-1.2.6s3.1 2.7 4.1 2.2c.6-.3.3-2.7.3-2.7s-1-.2-1.1-.3c-.1 0-.2-1.3-.2-1.3z" fill="#e0b4a0"/><path d="m12.5 29.2s.4 3.1.8 3.4 3 .9 3.3.1.3-4.7.1-4.9-3.1-.1-3.1-.1z" fill="#f1cab6"/><path d="m17.5 28.3c0-.2-.1-.5-.2-.7-.2-.3-.6-.4-1-.5-.8-.2-1.6-.3-2.3-.2-.3 0-.6 0-.8.2-.5.2-.7.7-.9 1.2-.2.6-.4 1.2-.1 1.8.1.3.4.5.4.9v.4c0 .1.1.2.3.2.1 0 .2-.2.2-.3s0-.1 0-.2-.1-.1-.1-.1c.2-.2.2-.4.1-.7-.2-.3-.1-.4-.1-.7.1 0 .2.1.3.1s.2-.1.2-.2c.1-.1.1-.3.1-.5.2 0 .4.1.6 0 .1-.1.2-.2.2-.3s0-.3 0-.4c.2-.1.3.1.5.1s.3-.2.3-.3c.2.1.4.2.6.2 0 .2 0 .4.2.5.1.1.4.1.5 0 0 .1.1.3.2.4.2 0 .4.1.6-.1.3-.2.3-.5.2-.8z" fill="#ee8861"/><path d="m14.4 30.3c0 .2-.1.4-.2.4s-.2-.2-.2-.4.1-.4.2-.4.2.2.2.4z" fill="#2d3b44"/><path d="m16.5 30.3c0 .2-.1.4-.2.4s-.2-.2-.2-.4.1-.4.2-.4.2.2.2.4z" fill="#2d3b44"/><path d="m15.9 31.9c0 .3-.3.6-.7.6s-.7-.3-.7-.6.3-.1.7-.1c.3 0 .7-.2.7.1z" fill="#fff"/><path d="m15.2 29.6c0 .3 0 .6.1.8 0 .1.1.1.1.2 0 0 .1.1.1.1.1.1.2.2.1.3 0 .1-.1.1-.2.2-.1 0-.2 0-.3.1" fill="#f1cab6"/><path d="m15.2 29.6c0 .3 0 .7.1 1 .1.1.3.2.3.4s-.2.3-.4.3c-.1 0-.1.1 0 .1.2 0 .3 0 .4-.2.1-.1.1-.3 0-.4s-.1-.1-.2-.2-.1-.2-.1-.3c0-.2 0-.4-.1-.7z" fill="#2d3b44"/><path d="m12.3 29.8s-.5-.4-.7 0c-.1.4.4 1.5.9.9z" fill="#f1cab6"/></svg>';

## Folder
$icon =  "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 64 64\"><style type=\"text/css\"> .folder-top{fill:#414042;} .folder-bottom{fill:#231F20;} </style><polygon class=\"folder-top\" points=\"28.3 22.4 33.1 14.7 64 14.7 64 23.6 28.3 23.6 \"/><rect y=\"22\" class=\"folder-bottom\" width=\"64\" height=\"42\"/></svg>";
//echo $icon;

$dirs = array_filter(glob('*'), 'is_dir');
if($dirs){
    foreach ($dirs as $value) {
        $folders[] = strtolower($value);
        
    }
    sort($folders);
    $pre = '';
    foreach ($folders as $value) {
        $charator = substr($value,0,1);
            
        if($pre != $charator){
            $pre = $charator;
            $tabs[] = $charator;
        } 
        
        $files[] = $value;
    }
}else{
    $tabs = [];
    $files = [];
}

function getfoldersbyId($array,$niddle){
    foreach ($array as $key => $value) {
        $charator = substr($value,0,1);
        if($charator==$niddle){
            $arr[] = $value;
        }
    }
    return $arr;
}

function truncName($text,$length){
    $sb_value   = substr($text,0,$length);
    if(strlen($text) > $length){
        $sb_value   = substr($text,0,$length).'...';
    }
    return $sb_value;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo  SERVER_NAME; ?></title>
    <style> 
        html {
            font-size: 100%;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif !important;
            font-smoothing: antialiased;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            min-height: 100%;
            color: var(--font-color);
        }

        body {
            margin: 0 0 100px;
            /* bottom = footer height */
        }
        /* Light mode */
        @media (prefers-color-scheme: light) {
            :root{
            --white: #DFF0FB;
            --primary: #007BFF;
            --primary-dark: #0450AA;
            --secondary: #C2EE1D;
            --btn-border: #3896F6;
            --font-color: #252A33;
            --radius: 7px;
            --background: rgba(222,226,230,1);
            --border: rgba(222,226,230,1);
        }
            body {
                background-color: white;
                color: var(--font-color);
            }
        }
        /* Dark mode */
        @media (prefers-color-scheme: dark) {
            :root{
                --white: #ffffff;
                --primary: #007BFF;
                --primary-dark: #0450AA;
                --secondary: #C2EE1D;
                --btn-border: #3896F6;
                --font-color: var(--white);
                --radius: 7px;
                --background: rgba(255,255,255,0.05);
                --border:  rgba(255,255,255,0.05);
            }
            body {
                background-color:#23272E;
                color: var(--font-color) !important;
            }
            .folder-group { color: rgba(255,255,255,0.9) !important; border-bottom: 1px solid rgba(255,255,255,0.05) !important;}
            a{ color: rgba(255,255,255,0.9) !important;}
            .folder-head{ color: rgba(255,255,255,0.8) !important; background:rgba(255,255,255,0.05) !important; border: 1px solid rgba(255,255,255,0.05) !important;}
            .tab { color: rgba(255,255,255,0.8) !important; background:rgba(255,255,255,0.05) !important; border: 1px solid rgba(255,255,255,0.05) !important;}
            .tabcontent { border: 1px solid rgba(255,255,255,0.05) !important; background:rgba(255,255,255,0.01) !important;}
            .footer {color: rgba(255,255,255,0.9) !important;}
        }

        @media only screen and (min-width: 600px) {
            #txt {
                font-size: 1em;
            }
            .btn{
                font-size: 0.8em !important;
            }
            .server-info {
                min-height: 4rem !important;
            }
        }
        
        @media only screen and (min-width: 1080px) {
            #txt {
                font-size: 1.05vw !important;
            }
            .btn{
                font-size: 0.9vw !important;
            }
        }
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}

        [class*="col-"] {
            float: left;
            padding: 15px;
        }
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        * {
            box-sizing: border-box;
        }
        a{ font-size:1em; text-decoration:none; color:var(--font-color);}

        .wrap{
            width:95%;
            padding-top: 0.8rem;
            margin: 0 auto;
        }

        .folder-top{fill: var(--secondary) !important;}
        .folder-bottom{fill: var(--primary) !important;}
        .st0{fill: var(--white) !important;}
        .st5{fill: var(--primary) !important;}
        .st15{fill: var(--secondary) !important; opacity: 0.5;}
    
        ul{
            padding:5px;
        }
        li{
            background: transparent;
            line-height: 3.1em;
            font-size: 14px;
            font-size: 0.9vw;
            min-width: 8rem;
            display:inline-block;
            overflow:hidden;
            margin: 0 auto;
            text-align: center;
            text-align: -webkit-center;
        }

        .folder {
            z-index:9999;
            display: block;
            text-align:center;
            margin: 0 auto;
        }
        .folder #btn {
            margin: 0 auto;
            background: transparent;
            color: var(--font-color);
            border: 0;
            min-height: 8rem;
            display: block;
            padding: 16px;
            width: 100%;
           
        }
        .folder #btn:hover{
            border-radius:  var(--radius);
            background: var(--background);
        }
        .folder #icon{
            margin: 0 auto;
            position: relative;
            width: 100%;
            text-align: center;
            text-align: -webkit-center;
        }
        .folder #txt{
            padding-top: 10px;
            width: 100%;
            display: block;
            text-align: center;
            text-align: -webkit-center;
        }
        .folder svg {
            margin: 0 auto;
            width: 50px;
            padding-buttom: 15px;
            text-align:center;
            display:block;
        }
        
        .folder-group {
            border-bottom: 1px solid rgba(222,226,230,1);
            padding-bottom: 5px;
            margin-bottom: 10px;
            padding: 6px 20px 6px 5px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .folder-group span {
            font-size: 1em;
        }
        .btn{
            width: 100%;
            height: 4rem;
            color: var(--font-color);
            font-size: 0.8em;
            text-align:center;
            border-radius: var(--radius);
            cursor: pointer;
            padding:7px 20px;
            background: rgba(222,226,230,.04);
            border: 1px solid var(--border);
        }
        .btn:hover{
            background: var(--primary);
            color: var(--white);
            border: 1px solid var(--btn-border);
        }
        .options{
            display:block;
            padding:100px 0;
        }
        /* Style the tab */
        .tab {
            overflow: hidden;
            color: var(--font-color);
            background: rgba(222,226,230,1);
            border-radius: var(--radius) var(--radius) 0 0;
            padding: 2px;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 12px;
            transition: 0.3s;
            color: var(--font-color);
            font-size: 1em;
            text-transform: uppercase;
            background-color: transparent;
            border-radius: 3px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: var(--primary);
            color: #fff;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: var(--primary);
            color: #fff;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-left: 1px solid var(--border);
            border-right: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            border-top: none;
            border-radius: 0 0 var(--radius) var(--radius);
            min-height: 45vh;
        }

        .folder-head {
            margin-top: 2vh;
            border: 1px solid rgba(222,226,230,1);
            padding-bottom: 5px;
            margin-bottom: 10px;
            background: rgba(222,226,230,.04);
            border-radius: 4px;
            font-weight: 400;
            color: var(--font-color);
            width: 9rem;
            padding: 6px 20px 6px 20px;
        }

        .folder-head span {
            font-size: 1em;
            font-weight: 400;
        }

        .footer {
            clear: both;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: var(--font-color);
            font-size: 12px;
            overflow: hidden;
            position: absolute;
            background: var(--background);
            border-top: 1px solid var(--border);
            padding: 10px 1px 10px 20px;
            text-align: center;
        }

        @media only screen and (max-width: 620px) {   /* small mobile sizes */
            .folder button {
                width:50%;
            }
            li{ 
                width:45%;
                font-size:14px;
            }
            [class*="col-"] {
                width:100% !important;
            }
            .server-info .info li{
                font-size: 3vw !important;
                min-width: 8rem !important;
            }
        }

        .sideimg svg{
            width: 100%;
        }
        .sideinfo{
            font-size: 1.3em;
            display: block;
            text-align: center;
            padding-top: 2.5rem;
        }
        .server-info{
            padding-bottom: 5px;
            margin-bottom: 10px;
            border-radius: var(--radius);
            font-weight: 600;
            width: 100%;
            height: 4rem;
            background: rgba(222,226,230,.04);
            border: 1px solid var(--border);
        }
        .server-info .info{
            margin-top: -2px;
            padding: 0.75rem 1rem;
            vertical-align: center;
        }
        .server-info .info li{
            color: var(--font-color);
            background: transparent;
            line-height: 1.3em;
            font-size: 0.8vw;
            min-width: 10rem;
            display:inline-block;
            overflow:hidden;
            margin: 0 auto;
            font-weight: 300;
            text-align: left;
            text-align: -webkit-left;
            opacity: 0.6;
        }
        .sideinfo small{ font-size: 0.5em; color: var(--secondary);}
        .no-padding{ padding: 0 !important;}
        .no-padding-left{ padding-left: 0 !important;}
        .no-padding-right{ padding-right: 0 !important;}
    </style>
</head>
<body>
    <div class="wrap">
        <div class="row">
            <div class="col-4 sideinfo">
                <h3><?php echo  SERVER_NAME; ?> <small><?php echo  SERVER_VERSION; ?></small></h3>
                <?php echo $sideimage; ?>
            </div>
            
            <div class="col-8 folders">
                <div class="row">
                    <div class="col-12 no-padding">
                        <form action="" method="post">
                            <div class="col-6">
                                <div class="server-info">
                                    <ul class="info">
                                        <li><?php  echo "PHP version: ".phpversion()??'n/a'; ?></li>
                                        <li><?php  echo "Mongo version: ".phpversion('mongodb')??'n/a'; ?></li>
                                        <li><?php  echo "Socket version: ".phpversion('sockets')??'n/a'; ?></li>
                                        <li><?php  echo "FTP version: ".phpversion('ftp')??'n/a'; ?></li>
                                    </ul>
                                    <?php 
                                    // foreach (get_loaded_extensions() as $i => $ext){
                                    //    echo $ext .' => '. phpversion($ext).'<br>';
                                    // }
                                    ?>
                                </div>
                            </div>
                            <div class="col-3">
                                <button class="btn" formaction="/phpmyadmin/" target="_blank">PHP MyAdmin</button>
                            </div>
                            <div class="col-3">
                                <button class="btn" formaction="?phpinfo=-1" target="_blank">PHP Info</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="folder-head"><span>Web Projects</span></div>
                        <!-- Tab links -->
                        <div class="tab">
                        <?php foreach ($tabs as $key => $tab) {?>
                            <button class="tablinks" id="defaultOpen" onclick="openTab(event, '<?php echo $tab;?>')"><?php echo $tab;?></button>
                        <?php } ?>
                        </div>

                        <!-- Tab content -->
                        <?php foreach ($tabs as $key => $tab) {?>
                        <div id="<?php echo $tab;?>" class="tabcontent">
                            <ul>
                                <?php
                                $docs = getfoldersbyId($folders,$tab);
                                foreach ($docs as $key => $val) {
                                ?>
                                <li>
                                    <a class="folder" href= "<?php echo $val; ?>" target = "_blank"> 
                                        <button id="btn">
                                            <span id="icon"><?php echo $icon; ?></span>
                                            <span id="txt" title="<?php echo $val; ?>"> <?php echo truncName($val, 15); ?></span>
                                        </button>
                                    </a>
                                </li> 
                                <?php } ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("defaultOpen").click();
        function openTab(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <footer class="footer">&copy; 2019 All rights reserved. developed by <a href="http://gevibe.com">Gevibe Limited.</a></footer>
</body>
</html>
<?php } ?>