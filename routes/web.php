<?php

Auth::routes();

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', 'MainController@dashboard')->name('dashboard');
Route::get('/dashboard/User Management', 'MainController@UserManagement')->name('UserManagement');
Route::get('/dashboard/MAP', 'MainController@MAP')->name('MAP');
Route::get('/dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
Route::get('/dashboard/Timeline', 'MainController@Timeline')->name('Timeline');

Route::get('/dashboard/Contact Registration', 'MainController@ContactRegistration')->name('ContactRegistration');
Route::get('/dashboard/Inquiries', 'MainController@Inquiries')->name('Inquiries');
Route::get('/dashboard/Contact List', 'MainController@ContactList')->name('ContactList');
Route::get('/dashboard/MakePostToTimeline', 'MainController@MakePostToTimeline')->name('MakePostToTimeline');

Route::get('/email/inbox', 'MainController@emailInbox')->name('email-inbox');
Route::get('/email/compose', 'MainController@emailCompose')->name('email-compose');
Route::get('/email/detail', 'MainController@emailDetail')->name('email-detail');

Route::get('/chart/flot', 'MainController@chartFlot')->name('chart-flot');
Route::get('/chart/js', 'MainController@chartJs')->name('chart-js');
Route::get('/chart/d3', 'MainController@chartD3')->name('chart-d3');
Route::get('/chart/apex', 'MainController@chartApex')->name('chart-apex');

Route::get('/map/vector', 'MainController@mapVector')->name('map-vector');

Route::get('/login', 'MainController@login')->name('login');
Route::get('/register', 'MainController@register')->name('register');

// Users Controller
//Route::resources([
//    'Permission' => new PermissionResource,
//    'Role' => new RoleResource,
//    'User' => new UserResource,
//]);

Route::resource('UserResource', 'UsersController');

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'HomeController@index')->name('home');
//    // Permissions
//    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
//    Route::resource('permissions', 'PermissionsController');
//
//    // Roles
//    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
//    Route::resource('roles', 'RolesController');
//
//    // Users
//    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
//    Route::resource('users', 'UsersController');
// });
