<?php
Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

// http://loc.eliminalia.com/customer/list?role=admin&permissions=edit
// http://loc.eliminalia.com/customer/list?role=manager&permissions=create
// http://loc.eliminalia.com/customer/list?role=partner
// http://loc.eliminalia.com/customer/list?role=registrator
// http://loc.eliminalia.com/customer/list?role=sadmin
// http://loc.eliminalia.com/customer/list?role=pendingbilling

Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
Route::get('dashboard/User Management', 'MainController@UserManagement')->name('UserManagement');
Route::get('dashboard/user/create', 'UsersController@create')->name('UserCreate');
Route::get('dashboard/user/edit', 'UsersController@edit')->name('useredit');
Route::get('dashboard/user/store', 'UsersController@store')->name('admin.users.store');

Route::get('dashboard/Map', 'MainController@Map')->name('Map');
Route::get('dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
Route::get('dashboard/Timeline', 'MainController@Timeline')->name('Timeline');
Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');

Route::group(['middleware' => ['web']], function () {
    Route::get('contacts', 'ContactsController@index')->name('contacts');
    Route::post('contacts', 'ContactsController@store')->name('contactsstore');
});

Route::get('dashboard/contacts/registration', 'MainController@ContactRegistration')->name('ContactRegistration');
Route::get('dashboard/contacts/list', 'MainController@ContactList')->name('ContactList');
Route::get('dashboard/contacts/inquiries', 'MainController@Inquiries')->name('Inquiries');

Route::get('dashboard/Timeline/MakePost', 'MainController@MakePostToTimeline')->name('MakePostToTimeline');

Route::get('dashboard/email/inbox', 'MainController@emailInbox')->name('email-inbox');
Route::get('dashboard/email/compose', 'MainController@emailCompose')->name('email-compose');
Route::get('dashboard/email/detail', 'MainController@emailDetail')->name('email-detail');

Route::get('dashboard/chart/flot', 'MainController@chartFlot')->name('chart-flot');
Route::get('dashboard/chart/js', 'MainController@chartJs')->name('chart-js');
Route::get('dashboard/chart/d3', 'MainController@chartD3')->name('chart-d3');
Route::get('dashboard/chart/apex', 'MainController@chartApex')->name('chart-apex');
Route::get('dashboard/map/vector', 'MainController@mapVector')->name('map-vector');

Route::resource('UserResource', 'UsersController');

Route::get('contact/', 'MainController@contact')->name('contact');

Route::get('dashboard/usermanagement/list', 'MainController@UserManagementlist')->name('usermanagementlist');
Route::get('dashboard/usermanagement/new', 'MainController@UserManagementNew')->name('usermanagementnew');

//Route::get('/post/{id}', [ClientController::class . 'getPostById'])->name('');

//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//
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
//});
