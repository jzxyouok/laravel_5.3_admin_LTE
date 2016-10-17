<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Dashboard
Route::get('/', function () {
    return view('pages.dashboard.dashboard_v1');
})->name('dashboard');

Route::get('/dashboard_v2', function () {
    return view('pages.dashboard.dashboard_v2');
})->name('dashboard_v2');



//Layout Options

Route::get('/top_navigation', function () {
    return view('pages.layout_option.top_navigation');
})->name('top_navigation');

Route::get('/boxed', function () {
    return view('pages.layout_option.boxed');
})->name('boxed');

Route::get('/fixed', function () {
    return view('pages.layout_option.fixed');
})->name('fixed');

Route::get('/collapsed_sidebar', function () {
    return view('pages.layout_option.collapsed_sidebar');
})->name('collapsed_sidebar');

// Widgets
Route::get('/widgets', function () {
    return view('pages.widgets');
})->name('widgets');



//Charts

Route::get('/chart_js', function () {
    return view('pages.chart.chart_js');
})->name('chart_js');

Route::get('/morris', function () {
    return view('pages.chart.morris');
})->name('morris');

Route::get('/flot', function () {
    return view('pages.chart.flot');
})->name('flot');

Route::get('/inlinechart', function () {
    return view('pages.chart.inlinechart');
})->name('inlinechart');


//UI Element::
Route::get('/general', function () {
    return view('pages.ui_element.general');
})->name('general');

Route::get('/icon', function () {
    return view('pages.ui_element.icon');
})->name('icon');

Route::get('/button', function () {
    return view('pages.ui_element.button');
})->name('button');

Route::get('/sliders', function () {
    return view('pages.ui_element.sliders');
})->name('sliders');

Route::get('/timeline', function () {
    return view('pages.ui_element.timeline');
})->name('timeline');

Route::get('/modals', function () {
    return view('pages.ui_element.modals');
})->name('modals');



//Forms
Route::get('/general_element', function () {
    return view('pages.general_element');
})->name('general_element');

Route::get('/advanced_element', function () {
    return view('pages.advanced_element');
})->name('advanced_element');

Route::get('/editor', function () {
    return view('pages.editor');
})->name('editor');



//Tables
Route::get('/simple_tabe', function () {
    return view('pages.simple_tabe');
})->name('simple_tabe');

Route::get('/data_tablet', function () {
    return view('pages.data_tablet');
})->name('data_tablet');




//Example
Route::get('/invoice', function () {
    return view('pages.invoice');
})->name('invoice');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/lockscreen', function () {
    return view('pages.lockscreen');
})->name('lockscreen');

Route::get('/error', function () {
    return view('pages.error');
})->name('error');

Route::get('/blank', function () {
    return view('pages.blank');
})->name('blank');

Route::get('/pace', function () {
    return view('pages.pace');
})->name('pace');



//Example
Route::get('/invoice', function () {
    return view('pages.invoice');
})->name('invoice');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/lockscreen', function () {
    return view('pages.lockscreen');
})->name('lockscreen');

Route::get('/error', function () {
    return view('pages.error');
})->name('error');

Route::get('/blank', function () {
    return view('pages.blank');
})->name('blank');

Route::get('/pace', function () {
    return view('pages.pace');
})->name('pace');



//Multilevel
Route::get('/multilevel_one', function () {
    return view('pages.multilevel_one');
})->name('multilevel_one');

Route::get('/multilevel_two', function () {
    return view('pages.multilevel_two');
})->name('multilevel_two');