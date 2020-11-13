<?php
Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', 'MainController@dashboard')->name('dashboard');
Route::get('/dashboard/User Management', 'MainController@UserManagement')->name('UserManagement');
Route::get('/dashboard/User/Create', 'UsersController@Create')->name('UserCreate');
Route::get('/dashboard/User/Edit', 'UsersController@Edit')->name('UserEdit');
Route::get('/dashboard/User/Edit', 'UsersController@Store')->name('admin.users.store');
Route::get('/home', function (){ echo "itd's admin home"; })->name('admin.home');


Route::get('/dashboard/Map', 'MainController@Map')->name('Map');
Route::get('/dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
Route::get('/dashboard/Timeline', 'MainController@Timeline')->name('Timeline');
Route::get('/dashboard/Calendar', 'MainController@Calendar')->name('calendar');

Route::get('/dashboard/contacts/registration', 'MainController@ContactRegistration')->name('ContactRegistration');
Route::get('/dashboard/contacts/list', 'MainController@ContactList')->name('ContactList');
Route::get('/dashboard/contacts/inquiries', 'MainController@Inquiries')->name('Inquiries');

Route::get('/dashboard/Timeline/MakePost', 'MainController@MakePostToTimeline')->name('MakePostToTimeline');

Route::get('/email/inbox', 'MainController@emailInbox')->name('email-inbox');
Route::get('/email/compose', 'MainController@emailCompose')->name('email-compose');
Route::get('/email/detail', 'MainController@emailDetail')->name('email-detail');

Route::get('/chart/flot', 'MainController@chartFlot')->name('chart-flot');
Route::get('/chart/js', 'MainController@chartJs')->name('chart-js');
Route::get('/chart/d3', 'MainController@chartD3')->name('chart-d3');
Route::get('/chart/apex', 'MainController@chartApex')->name('chart-apex');

Route::get('/map/vector', 'MainController@mapVector')->name('map-vector');

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
