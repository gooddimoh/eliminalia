<?php

Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);

//ss

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return redirect('dashboard');
    });

    Route::get('login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
    Route::get('logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'logout']);
    Route::get('register', ['uses' => 'Auth\AuthController@getRegister', 'as' => 'register']);

    Route::get('dashboard/', 'MainController@dashboard')->name('dashboard');
    Route::get('dashboard/usermanagement', 'UserManagement@show')->name('usermanagement');

    Route::get('dashboard/user/create', 'MainController@create')->name('UserCreate');
    Route::get('dashboard/user/edit', 'MainController@edit')->name('useredit');
    Route::get('dashboard/user/store', 'MainController@store')->name('admin.users.store');
    Route::get('dashboard/Map', 'MainController@Map')->name('Map');
    Route::get('dashboard/File Manager', 'MainController@File Manager')->name('File Manager');
    Route::get('dashboard/Timeline', 'MainController@Timeline')->name('Timeline');
    Route::get('dashboard/Calendar', 'MainController@Calendar')->name('calendar');
    Route::get('contacts', 'MainController@index')->name('contacts');
    // change
    Route::get('dashboard/contacts/registration', 'MainController@ContactRegistration')->name('ContactRegistration');
    Route::get('dashboard/contacts/list', 'MainController@ContactList')->name('ContactList');
    Route::get('dashboard/contacts/inquiries', 'MainController@Inquiries')->name('Inquiries');
    Route::get('dashboard/partners/partners list', 'MainController@partners list')->name('partners list');
    Route::get('dashboard/partners/registration', 'MainController@registration')->name('registration');

    Route::get('dashboard/Timeline/MakePost', 'TimeLineController@MakePostToTimeline')->name('MakePostToTimeline');

    Route::get('dashboard/email/inbox', 'EmailController@emailInbox')->name('emailinbox');
    Route::get('dashboard/email/compose', 'EmailController@emailCompose')->name('emailcompose');
    Route::get('dashboard/email/detail', 'EmailController@emailDetail')->name('emaildetail');

    Route::get('dashboard/chart/flot', 'ChartController@chartFlot')->name('chart-flot');
    Route::get('dashboard/chart/js', 'ChartController@chartJs')->name('chart-js');
    Route::get('dashboard/chart/d3', 'ChartController@chartD3')->name('chart-d3');
    Route::get('dashboard/chart/apex', 'ChartController@chartApex')->name('chart-apex');
    Route::get('dashboard/map/vector', 'ChartController@mapVector')->name('map-vector');

    Route::get('dashboard/usermanagement/new', 'UserManagement@create')->name('usermanagementnew');
    Route::get('dashboard/usermanagement/list', 'UserManagement@show')->name('usermanagement');

    Route::get('contact', 'MainController@contact')->name('contact');
    Route::get('/post/{id}', 'MainController@getpostbyid')->name('getpostbyid');


    Route::post('usermanagement/new', 'MainController@UserManagementNewPost')->name('usermanagement_new_post');
    Route::post('contacts', 'MainController@store')->name('contacts');
    Route::post('register', ['uses' => 'Auth\AuthController@postRegister', 'as' => 'login']);
    Route::post('login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'login']);

});

// Look on mermissions in middleware //

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::resource('permissions', 'PermissionsController');
    Route::resource('UserResource', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('users', 'UsersController');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
});
// Notifaction in the end //
