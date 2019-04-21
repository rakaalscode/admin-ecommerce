<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Category
Route::resource('/category', 'CategoryController');
Route::get('/categoryJson', 'CategoryController@categoryDatatables')->name('category.json');

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('project', function () {
    return view('dashboard.index-project');
});

Route::get('analytics', function () {
    return view('dashboard.index-analytics');
});

Route::get('shop', function () {
    return view('dashboard.index-shop');
});

Route::get('calendar', function () {
    return view('pages.calendar');
});

Route::get('mail',function (){
   return view('pages.mail');
});

Route::get('chat',function (){
    return view('pages.chat');
});

Route::get('to-do',function (){
    return view('pages.to-do');
});

Route::get('change-log',function (){
    return view('pages.change-log');
});


//===================== E-commerce Routes =====================//
Route::get('ecommerce-dashboard', function () {
    return view('ecommerce.dashboard');
});

Route::get('ecommerce-product-list', function () {
    return view('ecommerce.product-list');
});

Route::get('ecommerce-add-new', function () {
    return view('ecommerce.add-new');
});

Route::get('ecommerce-customers', function () {
    return view('ecommerce.customers');
});

Route::get('ecommerce-order-list', function () {
    return view('ecommerce.order-list');
});

Route::get('ecommerce-order-page', function () {
    return view('ecommerce.order-page');
});

Route::get('ecommerce-invoice', function () {
    return view('ecommerce.invoice');
});
//==============================================================//


//=================== UI Elements Routes ======================//

Route::get('ui-buttons',function (){
    return view('ui-elements.ui-buttons');
});

Route::get('ui-cards',function (){
    return view('ui-elements.ui-cards');
});

Route::get('ui-charts',function (){
    return view('ui-elements.ui-charts');
});

Route::get('ui-components',function (){
    return view('ui-elements.ui-components');
});

Route::get('ui-forms',function (){
    return view('ui-elements.ui-forms');
});

Route::get('ui-icons',function (){
    return view('ui-elements.ui-icons');
});

Route::get('ui-pricing-tables',function (){
    return view('ui-elements.ui-pricing-tables');
});

Route::get('ui-profile',function (){
    return view('ui-elements.ui-profile');
});

Route::get('ui-tables',function (){
    return view('ui-elements.ui-tables');
});

Route::get('ui-timeline',function (){
    return view('ui-elements.ui-timeline');
});

Route::get('ui-typography',function (){
    return view('ui-elements.ui-typography');
});
//=============================================================//



//==================== Error pages Routes ====================//
Route::get('403',function (){
    return view('pages.403');
});

Route::get('404',function (){
    return view('pages.404');
});

Route::get('405',function (){
    return view('pages.405');
});

Route::get('500',function (){
    return view('pages.500');
});
//============================================================//


