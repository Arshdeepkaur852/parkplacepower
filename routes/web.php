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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MasterCtrl@home');

Route::get('about-us', 'MasterCtrl@about_us');

Route::get('residential-energy', 'MasterCtrl@residential_energy');

Route::get('commercial-energy', 'MasterCtrl@commercial_energy');

Route::get('contact-us', 'MasterCtrl@contact_us');

Route::post('newsletter_post', 'MasterCtrl@newsletter_post');

Route::post('popup_post', 'MasterCtrl@popup_post');

Route::post('contact', 'MasterCtrl@residential_save');

Route::get('energy-efficiency', 'MasterCtrl@energy_efficiency');

Route::get('suppliers', 'MasterCtrl@suppliers_list');

Route::post('power-audit-api', 'MasterCtrl@power_audit');

Route::get('terms', 'MasterCtrl@terms');

Route::get('privacy', 'MasterCtrl@privacy_policy');

Route::get('disclaimer', 'MasterCtrl@disclaimer');

Route::get('pricing', 'MasterCtrl@pricing');

Route::post('pricing', 'MasterCtrl@p_pricing');